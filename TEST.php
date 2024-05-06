<!DOCTYPE html>
<html>
<head>
    <title>幻燈片效果</title>
    <style>
        .slider-container {
            width: 80%;
            height: 400px;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            background-color: #000;
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
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        .slide-text {
            background-color: white;
            padding: 20px;
            border-top-left-radius: 10px;
            width: 30%;
            height: 40%;
            position: absolute;
            bottom: 10%;
            left: 8%;
        }
        .slide-image {
            width: 60%;
            height: 80%;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 10%;
            right: 8%;
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
        
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slide active">
            <div class="slide-content">
                <div class="slide-image" style="background-image: url('images/1.jpg')"></div>
                <div class="slide-text">
                    <h2>訊息 1</h2>
                    <p>這是第一個訊息的說明</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-content">
                <div class="slide-image" style="background-image: url('image2.jpg')"></div>
                <div class="slide-text">
                    <h2>訊息 2</h2>
                    <p>這是第二個訊息的說明</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-content">
                <div class="slide-image" style="background-image: url('image3.jpg')"></div>
                <div class="slide-text">
                    <h2>訊息 3</h2>
                    <p>這是第三個訊息的說明</p>
                </div>
            </div>
        </div>
        <button class="prev-btn">&lt;</button>
        <button class="next-btn">&gt;</button>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
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
        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
        showSlide(currentIndex);
        startAutoSlide();
    </script>
</body>
</html>
