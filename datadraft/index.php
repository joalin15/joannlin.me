<!DOCTYPE html>

<html lang="en">
	<head>
			<!-- Title -->
		<title>Joann Lin</title>

			<!-- Icon -->
		<link rel="apple-touch-icon" sizes="57x57" href="../img/icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../img/icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../img/icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../img/icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../img/icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../img/icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../img/icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../img/icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../img/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../img/icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../img/icon/favicon-16x16.png">
		<link rel="manifest" href="../img/icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

			<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Teko:400,600' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Khand:500|Ropa+Sans" rel="stylesheet">

			<!-- External Stylesheets -->
		<link rel="stylesheet" href="./node_modules/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Internal Stylesheets -->
		<!-- <link href="./stylesheets/nav.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/main.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/home.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/about-me.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/projects.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/experience.css" rel="stylesheet" type="text/css">
		<link href="./stylesheets/connect.css" rel="stylesheet" type="text/css"> -->

			<!-- jQuery Related -->
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
		<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body data-spy="scroll"
				data-target="#page-nav">
				<?php
				    // load up your config file
				    require_once("/path/to/resources/config.php");

				    require_once(TEMPLATES_PATH . "/header.php");
				?>
				<div id="container">
				    <div id="content">
				        <!-- content -->
				    </div>
				    <?php
				        require_once(TEMPLATES_PATH . "/rightPanel.php");
				    ?>
				</div>
				<?php
				    require_once(TEMPLATES_PATH . "/footer.php");
				?>
		<!-- <nav id="page-nav" role="navigation">
			<ul class="nav nav-tabs">
				<li class="nav-li"><a class="nav-a" href="#home-landing">HOME</a></li>
				<li class="nav-li"><a class="nav-a" href="#about-me-landing">WHO WE ARE</a></li>
				<li class="nav-li"><a class="nav-a" href="#projects-landing">GET IN TOUCH</a></li>
			</ul>
		</nav> -->
		<div id="content">
			Hello world
			<!-- <div id="home-landing" class="transition"></div>
			<section id="home"></section>
			<div id="about-me-landing" class="transition"></div>
			<section id="about-me" class="info-section-container"></section>
			<div id="projects-landing" class="transition"></div>
			<section id="projects" class="info-section-container"></section>
			<div id="experience-landing" class="transition"></div>
			<section id="experience" class="info-section-container"></section>
			<div id="connect-landing" class="transition"></div>
			<section id="connect" class="info-section-container"></section> -->
		</div>
		<!-- <script type="text/javascript" src="../js/index.js"></script> -->
	</body>
</html>
