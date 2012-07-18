<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'config.php'; ?>
		<meta charset="utf-8" />
		<title><?php print $simpliName; ?></title>
		<link rel="stylesheet" href="reset.css" />
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="favicon.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.form.js"></script>
		<script src="js/modernizr-2.5.3.js"></script>
		<script>
			$(function(){
				$('#contact').validate({
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							url: 'process.php',
							success: function() {
								$('#contact').hide();
								$('#thankyou').show();
							}
						});
					}
				});
			});
		</script>
	</head>
	
	<body>
		<header>
			<img src="http://www.gravatar.com/avatar/<?php print md5(trim(strtolower($simpliEmail))); ?>?s=100">
			<h1><?php print $simpliName; ?></h1>
			<h3><?php print $simpliTitle; ?></h3>
		</header>
		<section id="contact-form">
			<div id="contacttext"><img src="img/contactme.png" alt="contact me" /></div>
			<form id="contact" method="post" action="">
				<fieldset>
					<legend>Contact Me</legend><br />
					<label for="name">Name:</label><br />
					<input type="text" name="name" placeholder="Full Name" required="required" class="textbox"><br />
 
					<label for="email">E-mail:</label><br />
					<input type="email" name="email" placeholder="name@domain.com" required="required" class="textbox"><br />
          
					<label for="website">Message:</label><br />
					<textarea form="contact" name="message" placeholder="What would you like to talk about?" required="required"></textarea><br />
          
					<input type="submit" name="submit" id="submit" value="Send Message" /><br />&nbsp;<br />
				</fieldset>
			</form>
			<div id="thankyou"><p>Thank you for contacting me! <br /> I'll be in touch shortly.</p></div>
		</section>
		
		<article id="mainbody">
			<nav id="socialbar">
				<a href="<?php print $simpliSocial1URL; ?>" class="linkblink socialone"><span><?php print $simpliSocial1Name; ?></span></a>
				<a href="<?php print $simpliSocial2URL; ?>" class="linkblink socialtwo"><span><?php print $simpliSocial2Name; ?></span></a>
				<a href="<?php print $simpliSocial3URL; ?>" class="linkblink socialthree"><span><?php print $simpliSocial3Name; ?></span></a>
				<a href="<?php print $simpliSocial4URL; ?>" class="linkblink socialfour"><span><?php print $simpliSocial4Name; ?></span></a>
				<a href="<?php print $simpliSocial5URL; ?>" class="linkblink socialfive"><span><?php print $simpliSocial5Name; ?></span></a>
				<a href="http://h2vx.com/vcf/<?php print parse_url($simpliURL, PHP_URL_HOST);?>" type="text/directory" class="linkblink socialsix"><span>vCard</span></a>
			</nav>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quam sem, egestas at fringilla nec, porttitor quis libero. Mauris 
				feugiat tristique magna vitae venenatis. Quisque lobortis ullamcorper viverra. Phasellus quis accumsan odio. Cras ipsum tellus, 
				sagittis non posuere ac, iaculis eu ipsum. Mauris adipiscing scelerisque dolor in tincidunt. Duis turpis nibh, gravida vitae ultrices 
				eget, pulvinar ut sapien. Donec mattis iaculis scelerisque. Sed tincidunt cursus dui nec semper. Morbi eleifend, dui non ullamcorper 
				pellentesque, tellus libero eleifend mi, eu vestibulum nibh nibh eget massa. Praesent mollis vehicula fermentum. Phasellus accumsan 
				venenatis odio, id tincidunt libero consectetur ut. Sed egestas tincidunt nisi, vitae porttitor massa placerat et. Cras malesuada 
				auctor porta. Etiam vel lobortis nulla. In hac habitasse platea dictumst.
			</p>
      
			<p>
				Nunc quis lacus sed quam lacinia eleifend tempus iaculis velit. Morbi nec quam nulla. Vestibulum in dolor ligula. Mauris eget elit 
				ullamcorper dui tincidunt molestie. Donec congue, metus egestas auctor tristique, augue mauris pretium ante, ac dictum orci mauris 
				ultrices urna. Morbi ornare leo et nisl tincidunt id luctus mauris aliquet. Nulla porta magna et eros porttitor tincidunt. Integer 
				vitae eros nunc, accumsan fringilla risus. Quisque suscipit consequat lectus et aliquet. Vivamus tellus neque, semper nec adipiscing 
				consectetur, adipiscing id mi. Aliquam eu volutpat enim. Pellentesque non mauris vitae massa hendrerit consequat.
			</p>

			<p>
				Maecenas condimentum facilisis nulla ac fermentum. Ut imperdiet sapien non urna viverra non tempor ante sodales. Quisque id est ipsum, 
				in aliquet velit. Aenean condimentum venenatis quam. Vestibulum mattis accumsan consectetur. Nam sollicitudin viverra nisi eu dapibus. 
				Sed tristique facilisis mattis. Integer id massa libero, nec aliquet velit. Praesent quis felis quis neque adipiscing pulvinar. Cras 
				nec justo a ligula hendrerit congue. Pellentesque magna quam, dignissim sit amet eleifend ultrices, luctus id lectus. Vestibulum mattis, 
				turpis eu mattis rutrum, dolor elit vulputate elit, semper consequat est purus quis ligula. In nisi nunc, ullamcorper a vulputate vel, 
				egestas sit amet nunc. Integer venenatis ante in orci porttitor auctor. Praesent eget quam non odio iaculis suscipit ac sit amet est.
			</p>
		</article>
    
		<footer>
			Content Copyright &copy; 2012 by <a href="<?php print $simpliURL; ?>"><?php print $simpliName; ?></a>. Fork this project over at <a href="https://github.com/peoii/SimpliPage">GitHub</a>.
		</footer>
		
		<address class="vcard">
			<img style="float:left; margin-right:4px" src="http://www.gravatar.com/avatar/<?php print md5(trim(strtolower($simpliEmail))); ?>" alt="photo of <?php print $simpliName; ?>" class="photo"/>
			<a class="url fn n" href="<?php print $simpliURL; ?>"><span class="given-name"><?php print $simpliFirstName; ?></span> <span class="additional-name"><?php print $simpliMiddleName; ?></span> <span class="family-name"><?php print $simpliLastName; ?></span></a>
			<a class="email" href="mailto:<?php print $simpliEmail; ?>"><?php print $simpliEmail; ?></a>
			<span class="adr">
				<span class="locality"><?php print $simpliCity; ?></span>, <span class="region"><?php print $simpliState; ?></span>, <span class="postal-code"><?php print $simpliZip; ?></span> <span class="country-name"><?php print $simpliCountry; ?></span>
			</span>
			<div class="tel"><?php print $simpliPhone; ?></div>
		</address>
		
		<script>
			if (!Modernizr.input.placeholder){
				$('input[placeholder], textarea[placeholder]').placeholder();
			}
		</script>
	</body>
</html>
