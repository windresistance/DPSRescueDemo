<?php
	$galleryDogs = array(
		"Pebbles" => "Great with with kids and enjoys playing hide-and-seek.",
		"Snowball" => "Loves fine wine and long walks on the beach.",
		"Betty" => "Just wants to go shopping at Pet Food Express.",
		"DiNozzo" => "Loves peanut butter and playing keep-the-sock-away.",
		"Bolt" => "Auditioning to be a ballerina.",
		"Hawk" => "Still learning how to properly use the newspaper.",
	);
?>
<!doctype>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DPS Rescue</title>
	<script src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
	<!-- <div> -->
		<div id="home">
			<div id="banner">
				<div class="container">
					<a href="#"><div id="logo" class="in_blk">
						<!-- <span>DPS<br>Rescue</span><br> -->
						<img src="images/logo_header.jpg"><br>
						<span id="phone">000-000-0000</span>
					</div></a>
					<ul id="nav_bar" class="in_blk">
						<li><a href="#">HOME</a></li>
						<li><a href="#">ADOPT</a></li>
						<li><a href="#">FOSTER</a></li>
						<li><a href="#">VOLUNTEER</a></li>
						<li><a href="#">DONATE</a></li>
					</ul>
				</div>
			</div>
			<h1>DOGGIE PROTECTIVE SERVICES</h1>
			<div id="btn_container">
				<a class="button in_blk" href="adopt.php">
					<div>ADOPT</div>
				</a>
				<a class="button in_blk" href="foster.php">
					<div>FOSTER</div>
				</a>
				<a class="button in_blk" href="donate.php">
					<div>DONATE</div>
				</a>
			</div>
		</div>
		
		<div id="intro" class="block full-width">
			<div class="container">
				<div class="introBlk col-xs-4">
					<h4 class="introBlkTitle"><a href="about.php">ABOUT US</a></h4>
					<p>We are a 501(c)(3) non-profit, volunteer-driven, animal rescue organization. All of our animals live in a network of foster homes from Southern California to Las Vegas to Northern California.</p>
				</div>
				<div class="introBlk col-xs-4">
					<h4 class="introBlkTitle"><a href="help.php">HOW TO HELP</a></h4>
					<p>There are lots of ways to help! We are always looking for foster parents and volunteers to help at events</p>
					<p>Please see our <a href="help.php">help page</a> to find out more.</p>
				</div>
				<div class="introBlk col-xs-4">
					<h4 class="introBlkTitle"><a href="contact.php">CONTACT US</a></h4>
					<p>Come see us at our <a href="#">next event</a>!</p>
					<p>Call us: 000-000-0000</br>
					email: <a href="#">info@dpsrescue.org</a></p>
				</div>
			</div>
		</div>
		
		<div id="featured" class="block full-width">
			<div class="container">
				<h2 class="col-xs-12"><a href="adopt.php?id=1111">FEATURED DOG</a></h2>
				<div class="col-lg-6 col-xs-12"><a href="adopt.php?id=1111">
					<img src="images/featured/levi.jpg">
				</a></div>
				<div class="col-lg-6 col-xs-12">
					<p>This dog will be at the Palo Alto Pet Food Express on Sat. Jan. 31st-Feb. 1st from 11-4pm or until adopted. if interested, please fill out an application.</p>
					<p>Levi and Strauss were surrendered to our rescue by a wonderful woman whose husband recently passed away and she subsequently lost her home. She had these beautiful boys since they were born and they are now 8 years old. They are loving and affectionate once they know you. As you can imagine they are completely confused and have no idea what has happened to ...</p>
					<p><a href="adopt.php?id=1111">Read more...</a></p>
				</div>
			</div>
		</div>
		
		<div id="gallery" class="block full-width">
			<div class="container">
				<h2 class="col-xs-12"><a href="adopt.php">OUR DOGS</a></h2>
				<?php foreach ($galleryDogs as $dog => $desc) { ?>
					<div class="galleryDog col-lg-4 col-xs-12">
						<a href="adopt.php?id=1111"><div class="img" style="background-image: url('images/gallery/<?= $dog; ?>.jpg')"></div></a>
						<a href="adopt.php?id=1111"><h3><?= $dog ;?></h3></a>
						<p><?= $desc; ?></p>
						<p>Say a little something about this doggie to entice your visitors to want to <a href="#">read more...</a></p>
					</div>
				<?php } ?>
				<h4 class="col-xs-12"><a href="adopt.php">See more animals...</a></h4>
			</div>
		</div>
		
		<div id="partners" class="block full-width">
			<div class="container">
				<h2 class="col-xs-12"><a href="thanks.php">PARTNERS AND THANKS</a></h2>
				<div class="col-lg-4 col-xs-12">
					<a href="http://petfoodexpress.com/">
						<div class="img" style="background-image: url('images/partners/PetFoodExpress.jpg')"></div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-12">
					<a href="http://www.uprinting.com/">
						<div class="img" style="background-image: url('images/partners/UPrinting.jpg')"></div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-12">
					<a href="http://www.healthypawspetinsurance.com/#utm_campaign=eqghbadgepm">
						<div class="img" style="background-image: url('images/partners/HealthyPaws.jpg')"></div>
					</a>
				</div>
				<div class="col-xs-12">
					<p>Many thanks to everyone who supports DPS Rescue, including but not limited to:</p>
					<p><a href="http://aimeebruckner.com/"><b>Aimee Bruckner</b></a> for the logo design.</p>
					<p><b>Jocelyn Lin</b> Lin for the site design.</p>
				</div>
			</div>
		</div>
		
		<div id="footer" class="block full-width">
			<div class="container">
				<!-- <h2 class="col-xs-12">FOLLOW US</h2> -->
				<div class="col-xs-12">
					<ul id="socialMedia" class="in_blk">
						<li><a href="https://www.facebook.com/DPSRescue" target="_blank" title="Follow us on Facebook"><img src="css/icons/facebook.png" alt="facebook_icon"></a></li>
						<li><a href="https://twitter.com/DPSRescue" target="_blank" title="Follow us on Twitter"><img src="css/icons/twitter.png" alt="twitter_icon"></a></li>
					</ul>
					<ul id="otherLinks" class="in_blk">
						<li><a href="#">HOME</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">ADOPT</a></li>
						<li><a href="#">FOSTER</a></li>
						<li><a href="#">VOLUNTEER</a></li>
						<li><a href="#">DONATE</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
					<ul id="copyright">
						<li>Copyright © 2009-2015 DPSRescue.com</li>
						<li>PO Box 1508 Romoland, CA 92585</li>
					</ul>
				</div>
			</div>
		</div>
		
	<!-- </div> -->
</body>
</html>