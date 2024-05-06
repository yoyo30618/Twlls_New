<style>
        .slider-container {
            width: 70%;
            height: 400px;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
        }
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .slide.active {
            opacity: 1;
        }
        .slide-content {
            position: relative;
            width: 100%;
            height: 100%;
        }
        .slide-text {
            background-color: white;
            padding: 20px;
            border-top-left-radius: 30px;
            width: 25%;
            height: 60%;
            position: absolute;
            bottom: 10%;
            left: 20%;
            z-index: 1;
        }
        .slide-image {
            width: 45%;
            height: 90%;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 5%;
            right: 20%;
        }
        .prev-btn, .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            cursor: pointer;
        }
        .prev-btn {
            left: 10px;
        }
        .next-btn {
            right: 10px;
        }
        .nav-buttons {
            position: absolute;
            right: 18%;
            bottom: 10%;
            background-color: rgba(128, 128, 128, 0.5);
            padding: 10px;
            display: flex;
            align-items: center;
            color:#fff;
        }
        .nav-buttons button {
            font-size: 20px;
            padding: 5px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            color:#fff;
        }
        .AL-slider-container {
            width: 100%;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            background-repeat: no-repeat;
        }
</style>
    <div class="AL-slider-container" style="background-image: url('images/IndexBanner.png'); background-size: cover; background-position: center;">

        <div class="slider-container">
            <div class="slide active">
                <div class="slide-content">
                    <div class="slide-text">
                        <h2>訊息 1</h2>
                        <p>這是第一個訊息的說明</p>
                    </div>
                    <div class="slide-image" style="background-image: url('images/1.jpg')"></div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text">
                        <h2>訊息 2</h2>
                        <p>這是第二個訊息的說明</p>
                    </div>
                    <div class="slide-image" style="background-image: url('image2.jpg')"></div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text">
                        <h2>訊息 3</h2>
                        <p>這是第三個訊息的說明</p>
                    </div>
                    <div class="slide-image" style="background-image: url('image3.jpg')"></div>
                </div>
            </div>
            <div class="nav-buttons">
                <button class="prev-btn-small">&lt;</button>&nbsp;&nbsp;&nbsp;
                <button class="next-btn-small">&gt;</button>
            </div>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        const prevBtnSmall = document.querySelector('.prev-btn-small');
        const nextBtnSmall = document.querySelector('.next-btn-small');
        const sliderContainer = document.querySelector('.slider-container');
        let currentIndex = 0;
        let intervalId;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }
        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }
        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }
        function startAutoSlide() {
            intervalId = setInterval(nextSlide, 5000);
        }
        function stopAutoSlide() {
            clearInterval(intervalId);
        }
        prevBtnSmall.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
        nextBtnSmall.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        sliderContainer.addEventListener('mouseenter', () => {
            stopAutoSlide();
        });

        sliderContainer.addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        showSlide(currentIndex);
        startAutoSlide();
    </script>