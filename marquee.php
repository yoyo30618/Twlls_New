<style>
	.MarqueeButton{
		background-color: transparent;
		border: 1px solid white;
		border-radius: 10px;
		color: white;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 14px;
		cursor: pointer;
	}
</style>
<div class="marquee">
	<?php
		$sql = "SELECT * FROM `news` WHERE `ShowOnMarquee`=1 AND `IsShow`=1 ORDER BY OrderIndex DESC";
		$result = $conn_1->query($sql);
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_array($result)) {
				if($row["url"]!=""){
					echo "<div class='marquee1'>";
					echo "<img src='images/icons/leaf.png' style='height:15px;'/>";
					if($row["Mode"]=="File"){
						echo "    <a class='breaking' href='Attachment/News/".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."　</a>";
						echo "<a class='MarqueeButton' href='Attachment/News/".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>詳細資訊</a>";
					}
					else if($row["Mode"]=="Page"){
						echo "    <a class='breaking' href='NewsMasterPage.php?_ID=".$row['_ID']."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."　</a>";
						echo "<a class='MarqueeButton' href='NewsMasterPage.php?_ID=".$row['_ID']."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>詳細資訊</a>";
					}
					else if($row["Mode"]=="Link"){
						echo "    <a class='breaking' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>".$row["Title"]."　</a>";
						echo "<a class='MarqueeButton' href='".$row["url"]."' target='".($row["OpenAnotherWindow"]==1?"_blank":"_self")."'>詳細資訊</a>";
					}
                   	echo "　　　";
					echo "</div>";
                }
				else{
					echo "<div class='marquee1'>";
                    echo "    <a class='breaking'>".$row["Title"]."　　　</a>";
                    echo "</div>";
                }
			}
		}	
	?>		
	<div class="clearfix"></div>
</div>
<script type="text/javascript" src="js/jquery.marquee.js"></script>
<script>
	$('.marquee').marquee({ pauseOnHover: true });
</script>