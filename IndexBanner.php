
<div class="AL-slider-container" style="background-image: url('images/IndexBanner.png'); background-size: cover; background-position: top;">
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