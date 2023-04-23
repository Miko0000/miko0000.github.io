<!DOCTYPE html>
<html>
	<head>
		<?php
			include "local/head.php";
		?>

		<?php
			include "shared/php/pbar.php";
		?>

		<title>Miko0000 Github Page</title>
	</head>
	<!--
		https://stackoverflow.com/questions/16180892/css3-hover-tap-doesnt-work-in-mobile-browsers
	-->
	<body class="__mod-scroller scroll-hint-definition" ontouchstart="">
		<?php include "local/body.php" ?>
		<?php $top_back = true; ?>
		<div class="banner">
			<div>
				<div class="title">Miko0000</div>
				<div class="description">Fullstack Web Developer</div>
			</div>
			<div class="scroll-hint scroll-hint-down scroll-hint-definitive">V</div>
		</div>
		<div class="content">
			<div class="border-top"></div>
			<div class="twopan twopan-minor twopan-sticky menu">
				<div class="border-right"></div>
				<div class="portrait">
					<div class="burger">
						<span class="material-symbols-outlined">menu</span>
					</div>
				</div>

				<a href="#about-me">About Me</a>
				<a href="#skills">Skills</a>
				<a href="#hire-me">Hire Me</a>
				<a href="#contact">Contact</a>
			</div>

			<div class="twopan twopan-major content">
				<div class="section">
					<h1>About Me</h1>
					<a id="about-me" href="#about-me" class="ctcopy">#</a>
				</div>
				<p>
						Hello! My name is Miko. I'm a Fullstack Web Developer and
					this is where I put my works!
				</p>
				<p>
						I'm an Open Source enthusiast! I'm looking forward into
					contributing to the open source community whether it be by
					helping an open source project or creating one!
				</p>
				<p>
						I also do some writing in my spare time. Check out
					<a href="library">library</a>.
				</p>
				<p>
						The list of my open source projects can be found here in
					<a href="projects">projects</a>
				</p>
				<div class="section">
					<h1>Skills</h1>
					<a id="skills" href="#skills" class="ctcopy">#</a>
				</div>
				<h3>Web Frontend</h3>

				<?php
					echo pbar("HTML", 90, "blue")
						, pbar("CSS", 70, "green")
						, pbar("PHP", 70, "green")
						, pbar("Javascript", 90, "blue")
						, pbar("javascript + React", 70, "green")
						, pbar("javascript + JQuery", 80, "green")
					;
				?>
				<h3>Web Backend</h3>
				<?php
					echo pbar("NodeJS", 90, "blue")
						, pbar("NodeJS + Express", 80, "green")
						, pbar("NodeJS + MySQL/PostgreSQL", 50, "yellow")
						, pbar("Apache", 70, "green")
						, pbar("Apache + PHP", 70, "green")
						, pbar("Apache + PHP + PostgreSQL", 50, "yellow")
					;
				?>
				<br /><br />
				<?php
					echo pbar("Python", 80, "green")
						, pbar("Python + tkinter", 75, "green")
						, pbar("Python + PySimpleGUI", 75, "green");
				?>

				<div class="section">
					<h1>Hire Me</h1>
					<a id="hire-me" href="#hire-me" class="ctcopy">#</a>
				</div>
				<p>I'm currently not open for hire, sorry.</p>
				<div class="section">
					<h1>Contact</h1>
					<a id="contact" href="#contact" class="ctcopy">#</a>
				</div>
				<p>
					Email: <a class="ctcopy" href="mailto:business.tarmikodeveloper@gmail.com">
						business.tarmikodeveloper@gmail.com
					</a>
					<br>
					Discord: <span class="ctcopy" class="ctcopy">Miko0000#0040</span>
				</p>
				<div class="ctcopy-popup">
					Copied to clipboard
				</div>
			</div>
		</div>
	</body>
</html>