
<div class="AboutBanner">
        <div class="AboutMe-slider-container">
            <div class="AboutMe-slide active">
                <div class="AboutMe-slide-content">
                    <div class="AboutMe-slide-text">
                        <img src="images/icon-LOGO2.png" style=""/>
                        <h2 style="color:#F7FBCF">台灣語文學會的成立</h2><br>
                        <p style="color:white;">「台灣語文學會」最早於1990年開始，由張裕宏教授、董忠司教授與洪惟仁教授展開籌備。1991年，委由董忠司教授草擬學會章程草案。之後陸續邀集周純一教授、陳恒嘉教授等討論草案內容，並積極聯絡各大學、研究單位的語文及相關科目的學者，募集發起人。</p>
                    </div>
                    <div class="AboutMe-slide-image" style="background-image: url('images/found.jpg');object-fit:fill;"></div>
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