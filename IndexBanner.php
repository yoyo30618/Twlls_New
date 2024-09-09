
<div class="AL-slider-container" style="background-image: url('images/IndexBanner.png'); background-size: cover; background-position: top;">
        <div class="slider-container">
            <?php
				$sql = "SELECT * FROM `relatedlinks` WHERE 1 AND `Function`='首頁橫幅' AND `IsUsed`=1 ORDER BY OrderIndex DESC LIMIT 3";
				$result = $conn_1->query($sql);
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='slide'>";
                        echo "    <div class='slide-content'>";
                        echo "        <div class='slide-text'>";
                        echo "            <h2>".$row['Title']."</h2>";
                        echo "            <p>".$row['TitleEng']."</p>";
                        if($row['Link']!=""){
                            echo "<button style='background-color:#418765;color:#fff;border-radius:10px;border:none;' onclick='window.location.href=\"".$row['Link']."\";'>查看更多</button>";
                        }
                        echo "        </div>";
                        if($row['Item']=="Video"){
                            echo "        <div class='slide-image'>";
                            echo "            <video controls  autoplay muted style='width:100%;height:100%'>";
                            echo "                <source src='Attachment/IndexBanner/".$row['Photo']."' type='video/mp4'>";
                            echo "                你的瀏覽器不支援影片標籤。";
                            echo "            </video>";
                            echo "        </div>";
                        }
                        else if($row['Item']=="Image"){
                            echo "        <div class='slide-image' style='background-image: url(\"Attachment/IndexBanner/".$row['Photo']."\")'>";
                            echo "        </div>";
                        }
                        echo "    </div>";
                        echo "</div>";
                    }
                }
            ?>

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
            intervalId = setInterval(nextSlide, 500000);
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