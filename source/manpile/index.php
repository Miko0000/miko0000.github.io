<!DOCTYPE html>
<?php
	function li($href, $text){
		$status = file_get_contents($href . "/status");
		if(!$status){
			$status = "unfinished";
		}
	
		echo "<li class=\"" . $status . "\"><a href=\"" . $href . "\">" . $text . "</a></li>";
	}
?>
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
	<body class="__mod-scroller scroll-hint-definition" ontouchstart="">
		<?php include "local/body.php" ?>
		<?php $top_back = true; ?>
		<div class="banner banner-1">
			<div class="background"></div>
			<!--<img class="background" 
				src="shared/res/1.jpg"
			></img>-->
			<div class="content">
				<div class="title">ManPile</div>
				<div class="description">Tumpukan Panduan</div>
			</div>
			<div class="scroll-hint scroll-hint-down scroll-hint-definitive">V</div>
		</div>
		<div class="scrollwatch" data-for=".banner-1 .background"></div>
		<div class="content">
			<div class="border-top"></div>
			<div class="twopan twopan-minor twopan-sticky menu">
				<div class="border-right"></div>
				<div class="portrait">
					<div class="burger">
						<!--<span class="material-symbols-outlined">menu</span>-->
					</div>
				</div>

				<a href="#etc">
					<span class="material-symbols-outlined">deployed_code</span>
					Lain - Lain
				</a>
			</div>

			<div class="twopan twopan-major content">
				<div class="section">
					<h1><span class="material-symbols-outlined">deployed_code</span>Lain - Lain</h1>
					<a id="etc" href="#etc" class="ctcopy">#</a>
				</div>
				<ul><?php
					/*
					<li><a href="menginstall-termux">Menginstall Termux</a></li>
					<li><a href="konfigurasi-termux">Mengonfigurasi Termux</a></li>
					<li><a href="menggunakan-termux">Menggunakan Termux</a></li>
					<li><a href="menginstall-tampilan-desktop">Menginstall Tampilan Desktop Termux</a></li>
					<br>
					<li><a href="menginstall-linux-di-termux">Menginstall Linux di Termux</a></li>
					<li><a href="menginstall-tampilan-desktop-linux">Menginstall Tampilan Desktop Linux di Termux</a></li>
					<br>
					<li><a href="apa-itu-nodejs">Apa itu NodeJs</a></li>
					<li><a href="menginstall-nodejs">Menginstall NodeJs</a></li>
					<li><a href="menggunakan-nodejs">Menggunakan NodeJs</a></li>
					<br>
					<li><a href="membuat-bot-nodejs-whatsapp"></a>Membuat bot Whatsapp menggunakan NodeJs</li>
					<li><a href="membuat-bot-nodejs-telegram"></a>Membuat bot Telegram menggunakan NodeJs</li>
					<li><a href="membuat-bot-nodejs-discord"></a>Membuat bot Discord menggunakan NodeJs</li>
					*/
					li("installasi-termux", "Menginstall dan Mengonfigurasi Termux");
					li("installasi-tampilan-desktop", "Menginstall dan Mengonfigurasi tampilan desktop pada Termux");
					li("installasi-linux-termux", "Menginstall dan Mengonfigurasi Linux pada Termux");
					
				?></ul>
				
				<div class="ctcopy-popup">
					Copied to clipboard
				</div>
			</div>
		</div>
	</body>
</html>
