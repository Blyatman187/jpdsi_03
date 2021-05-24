<!DOCTYPE HTML>
<html>
	<head>
		<title>Credit Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript>
			<link rel="stylesheet" href="assets/css/noscript.css"/>
		</noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Credit Calculator</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<!-- <a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul> -->
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>credit calculator</h2>
							<p>basic view for credit calculator</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">
									<label for="id_x">Kwota </label><br>
									<input id="id_x" type="text" name="kwota" value="<?php out($kwota); ?>" /><br />
									<label for="id_y">Lata </label><br>
									<input id="id_y" type="text" name="lata" value="<?php out($lata); ?>" /><br />
									<label for="id_z">Oprocentowanie </label><br>
									<input id="id_z" type="text" name="oprocentowanie" value="<?php out($oprocentowanie); ?>" /><br />
									<button type="submit">Oblicz</button>
								</form>

								<div class="messages">
									<?php
										if (isset($messages)) {
											if (count ( $messages ) > 0) {
											echo '<ul style="margin: 20px; list-style: none; position: absolute; top: 60%; left: 48%; transform: translateX(-50%); padding: 10px 10px 10px 30px; border-radius: 5px;  background-color: transparent; color: red; width:250px;">';
											foreach ( $messages as $key => $msg ) {
												echo '<ul>'.$msg.'</ul>';
											}
											echo '</ul>';
										}
									}
									?>

									<?php
										if (isset($infos)) {
											if (count ($infos) > 0) {
											echo '<h4>Informacje: </h4>';
											echo '<ol class="inf">';
											foreach ( $infos as $key => $msg) {
												echo '<li>'.$msg.'</li>';
											}
											echo '</ol>';
										}
									}
									?>

									<?php if (isset($result)){ ?>
										<div style="position: absolute; top: 60%; left: 48%; transform: translateX(-50%); margin: 						20px; padding: 10px; border-radius: 5px; background-color: transparent; color: #2e3842; width:250px;">
											<?php echo '<ul list-style:none>'."Miesięczna 						rata to ".$result."zł".'</ul>'; ?>
										</div>
									<?php } ?>
								</div>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>