<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(TEMPLATES_PATH . "/head-tag-contents.php");?>
</head>
<body>

	<?php include(TEMPLATES_PATH . "/navigation.php");?>

	<div id="main-content">
		<div id="team-banner">
			<div class="container">
				<div class="text">Who We Are</div>
			</div>
		</div>
		<div id="team-content" class="container">
			<div class="person-section-container">
				<div class="person-section">
					<div class="photo">
						<img src="<?php echo($config['paths']['images']) ?>/sean.jpg"/>
					</div>
					<div class="name">
						Sean Lo
					</div>
					<div class="title">
						CEO
					</div>
				</div>
				<div class="person-section">
					<div class="photo">
						<img src="<?php echo($config['paths']['images']) ?>/joann.jpg"/>
					</div>
					<div class="name">
						Joann Lin
					</div>
					<div class="title">
						CTO
					</div>
				</div>
				<div class="person-section">
					<div class="photo">
						<img src="<?php echo($config['paths']['images']) ?>/alec.jpg"/>
					</div>
					<div class="name">
						Alec Malcolm
					</div>
					<div class="title">
						COO
					</div>
				</div>
				<div class="person-section">
					<div class="photo">
						<img src="<?php echo($config['paths']['images']) ?>/bryan.jpg"/>
					</div>
					<div class="name">
						Bryan Yiu
					</div>
					<div class="title">
						Intern
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
