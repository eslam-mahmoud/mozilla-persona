<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mozilla persona demo website</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"> 
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="PHP, Mozilla, Mozilla persona, Eslam Mahmoud">
		<meta name="author" content="Eslam Mahmoud">
		<meta charset="UTF-8">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		
		<script src="https://login.persona.org/include.js"></script>
		<script type="text/javascript">
			<?php if(isset($_SESSION['email'])): ?>
			var currentUser = '<?php echo $_SESSION['email']; ?>';
			<?php else: ?>
			var currentUser = null;
			<?php endif; ?>
		</script>
		<script src="./all.js"></script>

		<style type="text/css">
			.header {
			    margin-bottom: 15px;
			    padding-bottom: 15px;
			    border-bottom: 1px solid #E5E5E5;
			}
			.footer{
			    margin-top: 15px;
			    padding-top: 15px;
			    border-top: 1px solid #E5E5E5;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<!-- <li><a href="http://eslam.me"  target="_blank">The Developer</a></li> -->
					<?php if(isset($_SESSION['email'])): ?>
						<li><a href="#" id="signout">Sign out</a></li>
					<?php endif; ?>
				</ul>
				<h3 class="text-muted">Mozilla Persona demo</h3>
			</div>

			<div class="jumbotron">
				<h1>Mozilla Persona is awesome</h1>
				<p class="lead">
					This is a demo website to try Mozilla persona "A sign-in system for the Web", This was part from my session about Mozilla persona in #MozillaPower13 event, you can know more about it though <a href="http://mozilla.org/persona" target="_blank">http://mozilla.org/persona</a>
				</p>
				<p style="text-align: center;">
					<?php if(isset($_SESSION['email'])): ?>
						<label class="btn btn-lg btn-success">Welcome <?php echo $_SESSION['email']; ?></label>
					<?php else: ?>
						<a id="signin" href="#" role="button"><img src="https://developer.mozilla.org/files/3961/persona_sign_in_black.png"></a>
					<?php endif; ?>
				</p>
			</div>

			<div class="row">
				<div class="col-md-6">
					<h3>About persona.</h3>
					<h4>What?</h4>
					<p>
						At Mozilla, we believe that your online life is your business. With that in mind, we created Persona to make it easier to sign in to websites.
						<br><br>
						Persona allows you to sign in to sites using any of your existing email addresses; and if you use Yahoo! or Gmail for email, you will be able to sign in without having to create a new password.
					</p>

					<h4>Why for users?</h4>
					<p>
						<ul>
							<li>Does not track your behavior on the web.</li>
							<li>Does not share data about you.</li>
							<li>Because passwords are hard to remeber.</li>
							<li>Because passwords are hard to secure.</li>
							<li>All sites get hacked.</li>
							<li>Will not post on your FB wall.</li>
						</ul>											
					</p>

					<h4>Why for developers?</h4>
					<p>
						<ul>
							<li>Build good relation wth users.</li>
							<li>Easy signup so you will not lose customers.</li>
							<li>Easy to implement.</li>
							<li>Secure.</li>
						</ul>
					</p>
				</div>

				<div class="col-lg-6">
					<h3>About <a href="http://mozilla-eg.org/power13" target="_blank">#MozillaPower13</a>.</h3>
					<h4>What?</h4>
					<p>MozillaPower13 is a conference that would gather the people who can share the mission of mozilla promoting openness, innovation and opportunity on the Web, On the 20&21 of Dec 2013 in British University in Cairo, Egypt. Find more on <a href="http://mozilla-eg.org/power13" target="_blank">http://mozilla-eg.org/power13</a></p>

					<h4>Download?</h4>
					<p>Download this website <a href="https://github.com/eslam-mahmoud/mozilla-persona">source code</a></p>

					<h3>About the developer.</h3>
					<h4>Who?</h4>
					<p>
						Eslam Mahmoud, Software engineer web developer started in 2005, open source lover, BS. Information Technology, started my journey in the world of Entrepreneurship as co-founder <a href="http://HuntEvents.net">HuntEvents.net</a>.
						<br>
						Find me on: <a href="http://eslam.me" target="_blank">Website</a>, <a href="https://www.linkedin.com/in/eslammahmoud" target="_blank">Linked in</a>, <a href="http://facebook.com/eslammahmoud1" target="_blank">Facebook</a>
					</p>
				</div>
			</div>

			<div class="footer">
				<p>By: <a href="http://eslam.me">Eslam Mahmoud</a></p>
			</div>

		</div>
	</body>
</html>
