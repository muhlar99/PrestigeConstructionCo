<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Prestige Construction Colorado</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Prestige Construction</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Portfolio</a></li>
					<li><a href="quote.html">Get a Quote</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/house">
				<div class="inner">
					<h1><img src="images/logo.png" alt="" width="40%" height="100%"/></h1>
					<p>We provide expert skills, experience and a level of <br />service and commitment you won't find anywhere else.
					</p>
					
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Request a Quote</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input name="name" id="vname" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input name="email" id="vemail" type="email" placeholder="Email">
									</div>
									<div class="field half">
										<label for="email">Subject</label>
										<input name="email" id="sub" type="email" placeholder="Subject">
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="msg" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input name="submit" value="Send Message" class="button special" type="submit"></li>
									</ul>
									<h3><?php include "secure_email_code.php"?></h3>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; Prestige Construction: Designed and Developed by <a href="https://github.com/muhlar99">Matthew Uhlar
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>