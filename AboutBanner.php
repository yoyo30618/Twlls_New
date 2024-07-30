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
            background-color: #418765;
            padding: 50px 80px 10px 40px;
            border-top-left-radius: 40px;
            width: 40%;
            height: 90%;
            bottom:-10%;
            position: absolute;
            left: 5%;
            z-index: 1;
        }
        .slide-image {
            width: 40%;
            height: 80%;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 10%;
            right: 20%;
            z-index: 99;
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
        .AboutBanner {
            margin-top:120px;
            background-image: url('images/found-banner.png');
            background-size: cover; /* 自動縮放到指定高度 */
            background-position: center; /* 圖片居中 */
            height: 500px; /* 指定的高度 */
            position: relative;
            background-repeat: no-repeat; /* 不重複背景 */
            }
</style>
<div class="AboutBanner">
        <div class=" slider-container">
            <div class="slide active">
                <div class="slide-content">
                    <div class="slide-text">
                        <img src="images/icon-LOGO2.png" style=""/>
                        <h2 style="color:#F7FBCF">台灣語文學會的成立</h2><br>
                        <p style="color:white;">「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。1991年，委由董忠司教授草擬學會章程草案。之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。</p>
                    </div>
                    <div class="slide-image" style="background-image: url('images/found.jpg');object-fit:fill;"></div>
                </div>
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