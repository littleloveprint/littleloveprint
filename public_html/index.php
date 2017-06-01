<!DOCTYPE html>
<html>
	<head>

		<!-- A PERSONAL WEBSITE -->
		<!-- @author LEA MCDUFFIE lea@littleloveprint.io-->
		<!-- @version 3.0 -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>littleloveprint</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- GOOGLE FONT -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- STYLES -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
		<![endif]-->

		<!-- javascript -->
		<script type="text/javascript" src="rellax.js"></script>
		<script>var rellax = new Rellax('.rellax', {
			});
		</script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

	<body>
		<div class="grid">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-2">
						<div class="grid-line"></div>
					</div>
					<div class="col-md-2">
						<div class="grid-line"></div>
					</div>
					<div class="col-md-2">
						<div class="grid-line"></div>
					</div>
					<div class="col-md-2">
						<div class="grid-line"></div>
					</div>
					<div class="col-md-2">
						<div class="grid-line" style="margin-right:-30px;border-right:1px solid #ccc"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="fixed-top rellax" data-rellax-speed="-2"
			  style="transform: rotate(45deg);"
		>
		</div>

		<main class="main">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-11">
							<a href="https://littleloveprint.io">
								<h1>LITTLELOVEPRINT SOFTWARE, GRAPHICS + BRANDING<span>➔</span></h1>
							</a>
							<div class="white-block"></div>
						</div>
					</div>
					<div class="title">
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<h2>411<br><span>ALL THE INFO</span></h2>
								<p>WORDS AND STUFF</P>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-6">
							<h2>PORTFOLIO</h2>
							<p>IMAGES WILL GO HERE</p>
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
										</div>
									<div class="col-md-3">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
									<div class="col-md-3">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
									<div class="col-md-3">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
								</div>
						</div>
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
									<div class="col-md-4">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
									<div class="col-md-4">
										<img class="img-responsive" src="img/placeholder0.png" alt="image">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-5 col-md-6">
							<h2>CONTACT</h2>

							<!-- CONTACT FORM -->
							<form id="contact-form" method="POST" action="php/mailer.php">
								<div class="form-group">
									<label for="name">NAME</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">EMAIL</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
										<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">SUBJECT</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">MESSAGE</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment"></i>
										</div>
										<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
									</div>
								</div>

								<!-- GOOGLE RECAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6LcnzSMUAAAAAH6mEC_q2lamxZoZPTXz3KqYu1oN"></div>

								<button class="btn btn-default" type="reset">RESET</button>
								<button class="btn btn-info" type="submit">SEND</button>
							</form>
							<!-- /CONTACT FORM-->

							<!-- -->
							<div class="row">
								<div class="col-md-6">
									<div id="output-area"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section class="section san-francisco">
				<div class="absolute">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-1 col-md-11">
								<h2 class="rellax" data-rellax-speed="-3">WORD<br>WORD</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="absolute above">
					<div class="container">
						<div class="row">

							<div class="col-md-offset-1 col-md-2">
								<div class="lg-green rellax"
									  data-rellax-speed="2"
									  style="transform: rotate(45deg);">
								</div>
								<div class="sm-green rellax"
									  data-rellax-speed="5"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-offset-2 col-md-1">
								<div class="sm-purple rellax"
									  data-rellax-speed="2"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-offset-3 col-md-1">
								<div class="xs-green rellax"
									  data-rellax-speed="5"
									  style="transform: rotate(45deg);">
								</div>
								<div class="md-green rellax"
									  data-rellax-speed="1"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-1">
								<div class="lg-purple rellax"
									  data-rellax-speed="3"
									  style="transform: rotate(45deg);">
								</div>
							</div>

						</div>
					</div>
				</div>


				<div class="container">

					<div class="row">
						<div class="col-md-offset-1 col-md-5">
							<div class="date">
								WHAT TO SAY—<br>
								SAY<br><br>
								SAY
							</div>
						</div>
						<div class="col-md-offset-1 col-md-4">
							<div class="temp">
								HOT
							</div>
						</div>
					</div>
				</div>


			</section>


			<section class="section">

			</section>


			<section class="section">
				<div style="margin-top: 200px">
					<div class="container">

						<div class="row">
							<div class="col-md-12 text-center">
								<h4>PUT SOMETHING HERE???</h4>
							</div>
						</div>

						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="text-editor">
									<code>
										<span class="purple">LEA</span>MCDUFFIE<span class="green">CODES</span> <span class="white">DESIGNS</span>BRANDS
									</code>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12 text-center" style="margin-top:80px">
								<h4>MORE STUFF THAT HAPPENS SOMETIMES</h4>
							</div>
						</div>

						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="text-editor">
									<code>
										&lt;FOUND<span class="purple">THIS</span>="<span class="green">AND I LIKE IT</span>&gt;<br>
										<span class="white">I'M SLOW AND SMOOTH</span><br>
										STUFF
									</code>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12 text-center" style="margin-top:40px">
								<h4>THERE'S SOME STUFF HERE</h4>
							</div>
						</div>

						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="text-editor">
									<code>
										NO<span class="purple">NOPE</span>NADA<span class="green">WHAT?</span>ZIP<span class="purple">LEA, LOOK HERE!</span>HUH?<span class="green">WORD</span>LEAVE ME ALONE<br>
										<span class="white">OKAY, YOU GOT IT!</span><br>
										STOP IT!
									</code>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>



			<section class="section">

				<div class="absolute above" style="pointer-events: none;">
					<div class="container">
						<div class="row">

							<div class="col-md-offset-1 col-md-2">
								<div class="bt-green rellax"
									  data-rellax-speed="5"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-offset-0 col-md-1">
								<div class="md-dixonandmoe rellax"
									  data-rellax-speed="2"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-offset-5 col-md-1">
								<div class="md-twitter rellax"
									  data-rellax-speed="1"
									  style="transform: rotate(45deg);">
								</div>
							</div>

							<div class="col-md-1">
								<div class="md-facebook rellax"
									  data-rellax-speed="3"
									  data-rellax-percentage="0.5"
									  style="transform: rotate(45deg);">
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="copy" style="margin-top: 200px;margin-bottom: 500px">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-1 col-md-6">
								<h4>ONE</h4>
								<p>SPEAK THE WORDS<a href="mailto:lea@littleloveprint.io">lea@littleloveprint.io</a></p>
							</div>
						</div>

						<div class="row" style="margin-top: 140px">
							<div class="col-md-offset-5 col-md-6">
								<h4>NOOOOOOO!</h4>
								<p>BUT ALSO, MAYBE YES.</p>
							</div>
						</div>
					</div>
			</section>

			<section class="share">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-3">
							<a class="dam" href="http://dixonandmoe.com/">OH I THINK THEY LIKE ME</a>
						</div>
						<div class="col-md-offset-3 col-md-2">
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://dixonandmoe.com/rellax/">BUT THEY DON'T REALLY <span>➔</span></a>
						</div>
						<div class="col-md-offset-0 col-md-2">
							<a href="https://twitter.com/share?url=http://dixonandmoe.com/rellax/">I'LL PRETEND<span>➔</span></a>
						</div>
					</div>
			</section>

		</main>

	</body>
</html>
