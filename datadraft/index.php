<?php include("includes/config.php");?>
<?php include("includes/data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(TEMPLATES_PATH . "/head-tag-contents.php");?>
</head>
<body>

	<?php include(TEMPLATES_PATH . "/navigation.php");?>
	<div id="main-content">
		<div id="home-banner">
			<div class="container">
				<div class="text">The Ultimate Fantasy Insider:</div>
				<div class="text">Where Data Science and Fantasy Sports Intersect</div>
			</div>
		</div>
		<div id="home-content" class="container">
			<div id="blog-container">
				<?php
					for ($i = 0; $i < sizeof($blogArr); $i++) {
							echo "<div class=\"blog\">";
							echo "<div class=\"blog-title\">" . $blogArr[$i]['title'] . "</div>";
							echo "<div class=\"blog-date\">" . $blogArr[$i]['date'] . "</div>";
							echo "<div class=\"blog-text\">" . $blogArr[$i]['text'] . "</div>";
							echo "</div>";
					}
				?>
			</div>
			<div id="side-bar-container">
				<div class="about">
					<div class="about-title">Data Draft</div>
					<div class="about-description">We provide fantasy teams with better insight and informed decision making through the combination of data science and our fantasy expertise</div>
				</div>
				<div class="premium">
					<div class="premium-button"><a href="" onclick="return false;">Data Draft Premium</a></div>
				</div>
				<div class="rankings">
					<div class="rankings-title">Player Rankings:</div>
					<?php
						for ($i = 0; $i < sizeof($playerArr); $i++) {
						    echo "<div class=\"ranking\">" . ($i + 1) . ". " . $playerArr[$i] . "</div>";
						}
					?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
