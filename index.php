<?php
	$galleryDogs = array(
		"Pebbles" => "Great with kids and enjoys playing hide & seek.",
		"Snowball" => "Loves fine wine and long walks on the beach.",
		"Betty" => "Just wants to go shopping at Pet Food Express.",
		"DiNozzo" => "Loves peanut butter and playing keep-away sock.",
		"Bolt" => "Auditioning to be a ballerina.",
		"Hawk" => "Still learning how to properly use the newspaper.",
	);
	
	$events = array(
		array( "date" => "Saturday, February 28th",
			   "time" => "11:00am - 4:00pm",
			   "loca" => "Palo Alto Pet Food Express" ),
		array( "date" => "Sunday, March 1st",
			   "time" => "11:00am - 4:00pm",
			   "loca" => "Palo Alto Pet Food Express" ),
		array( "date" => "Saturday, March 7th",
			   "time" => "11:00am - 4:00pm",
			   "loca" => "Palo Alto Pet Food Express" ),
		array( "date" => "Sunday, March 8th",
			   "time" => "11:00am - 4:00pm",
			   "loca" => "Palo Alto Pet Food Express" ),
	);
?>
<!doctype>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DPS Rescue</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<div id="banner" class="container">
		<a href="javascript:void(0);">
			<div id="logo" class="in_blk">
				<img src="images/logo_header.jpg"><br>
				<span id="phone">888-888-8888</span>
			</div>
		</a>
		<ul id="nav_bar" class="in_blk">
			<li><a href="javascript:void(0);">HOME</a></li>
			<li><a href="javascript:void(0);">ADOPT</a></li>
			<li><a href="javascript:void(0);">FOSTER</a></li>
			<li><a href="javascript:void(0);">VOLUNTEER</a></li>
			<li><a href="javascript:void(0);">DONATE</a></li>
			<li><a href="javascript:void(0);">TRAINING</a></li>
		</ul>
	</div>
	
	<div id="hero"></div>
	
	<div id="overlay">
		<h1>DOGGIE PROTECTIVE SERVICES</h1>
		<div id="btn_container">
			<a class="button in_blk" href="javascript:void(0);">ADOPT</a>
			<a class="button in_blk" href="javascript:void(0);">FOSTER</a>
			<a class="button in_blk" href="javascript:void(0);">DONATE</a>
		</div>
	</div>
	
	<div id="intro" class="">
		<div class="container">
			<div class="introBlk col-xs-4">
				<h3 class="introBlkTitle"><a href="javascript:void(0);">ABOUT US</a></h3>
				<p>We are a 501(c)(3) non-profit, volunteer-driven, animal rescue organization. All of our animals live in a network of foster homes from Southern California to Las Vegas to Northern California.</p>
			</div>
			<div class="introBlk col-xs-4">
				<h3 class="introBlkTitle"><a href="javascript:void(0);">HOW TO HELP</a></h3>
				<p>There are lots of ways to help! We are always looking for foster parents and volunteers to help at events</p>
				<p>Please see our <a href="javascript:void(0);">help page</a> to find out more.</p>
			</div>
			<div class="introBlk col-xs-4">
				<h3 class="introBlkTitle"><a href="javascript:void(0);">CONTACT US</a></h3>
				<p>Come see us at our <a href="javascript:void(0);">next event</a>!</p>
				<p>Call us: 000-000-0000</br>
				email: <a href="javascript:void(0);">info@dpsrescue.org</a></p>
			</div>
		</div>
	</div>
	
	<div id="featured" class="">
		<div class="container">
			<h2 class="col-xs-12"><a href="javascript:void(0);">FEATURED DOG</a></h2>
			<div class="col-lg-6 col-xs-12"><a href="javascript:void(0);">
				<img src="images/featured/Levi.jpg">
			</a></div>
			<div class="col-lg-6 col-xs-12">
				<p>This dog will be at the Palo Alto Pet Food Express on Sat. Jan. 31st-Feb. 1st from 11-4pm or until adopted. if interested, please fill out an application.</p>
				<p>Levi and Strauss were surrendered to our rescue by a wonderful woman whose husband recently passed away and she subsequently lost her home. She had these beautiful boys since they were born and they are now 8 years old. They are loving and affectionate once they know you. As you can imagine they are completely confused and have no idea what has happened to ...</p>
				<p><a href="javascript:void(0);">Read more...</a></p>
			</div>
		</div>
	</div>
	
	<div id="gallery" class="">
		<div class="container">
			<h2 class="col-xs-12"><a href="javascript:void(0);">OUR DOGS</a></h2>
			<?php foreach ($galleryDogs as $dog => $desc) { ?>
				<div class="galleryDog col-lg-4 col-md-6 col-xs-12">
					<a href="javascript:void(0);"><div class="img" style="background-image: url('images/gallery/<?= $dog; ?>.jpg')"></div></a>
					<a href="javascript:void(0);"><h3><?= $dog ;?></h3></a>
					<p><?= $desc; ?></p>
					<p>Say a little something about this doggie to entice your visitors to want to <a href="javascript:void(0);">read more...</a></p>
				</div>
			<?php } ?>
			<h3 class="col-xs-12"><a href="javascript:void(0);">See more...</a></h3>
		</div>
	</div>
	
	<div id="events" class="">
		<div class="container">
			<h2 class="col-xs-12"><a href="javascript:void(0);">UPCOMING EVENTS</a></h2>
			<?php foreach ($events as $event) { ?>
				<!-- <div class="event"> -->
				<div class="col-md-6 col-xs-12">
					<div class="event">
						<p>
							When:
							<span class="event-date"><?= $event['date'];?></span>
							at
							<span class="event-time"><?= $event['time'];?></span>
						</p>
						<p>
							Where:<span class="event-loca"><?= $event['loca'];?></span>
							<a href="https://maps.google.com/maps?daddr=3910+Middlefield+Road,Palo+Alto+,CA,94303&output=classic&dg=oo">(address & directions)</a>
						</p>
					</div>
				</div>
			<?php } ?>
			<div class="events-text col-xs-12">
				<p><b>NOTE:</b> Please check each dogs's bio for the location of his or her adoption event.</p>
				<p>Applicants who have already gone through our application and approval process will be given first priority.
						&nbsp&nbsp&nbsp<span class="btn btn-lg btn-success">Apply now</span></p>
			</div>
		</div>
	</div>
	
	<div id="footer" class="">
		<div class="container">
			<!-- <h2 class="col-xs-12">FOLLOW US</h2> -->
			<div class="col-xs-12">
				<ul id="socialMedia" class="in_blk">
					<li><a href="https://www.facebook.com/DPSRescue" target="_blank" title="Follow us on Facebook"><img src="css/icons/facebook.png" alt="facebook_icon"></a></li>
					<li><a href="https://twitter.com/DPSRescue" target="_blank" title="Follow us on Twitter"><img src="css/icons/twitter.png" alt="twitter_icon"></a></li>
				</ul>
				<ul id="footerLinks" class="in_blk pull-right">
					<li><a href="javascript:void(0);">ABOUT</a></li>
					<li><a href="javascript:void(0);">ADOPT</a></li>
					<li><a href="javascript:void(0);">FOSTER</a></li>
					<li><a href="javascript:void(0);">VOLUNTEER</a></li>
					<li><a href="javascript:void(0);">DONATE</a></li>
					<li><a href="javascript:void(0);">TRAINING</a></li>
					<li><a href="javascript:void(0);">FAQ</a></li>
					<li><a href="javascript:void(0);">CONTACT</a></li>
				</ul>
				<ul id="copyright">
					<li>Copyright © 2009-2015 DPSRescue.com</li>
					<li>PO Box 1508 Romoland, CA 92585</li>
				</ul>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			// change background image
			(function(){
				var n = 0,
					selector = '#hero',  // enter the target selector
					root = 'images/main/';
				
				// set initial bg img
				$(selector).css('background-image', 'url('+root+'0.jpg)');
				
				function changeBackgroundImage() {
					n++;
					n = n % 5;	// (0 - 4)
					
					// fade bg imgs in and out
					$(selector).fadeTo('slow', 0, function() {
						$(this).css('background-image', 'url('+root+n+'.jpg)');
					}).fadeTo('slow', 0.9);
				}
				
				setInterval(changeBackgroundImage, 4000);
			})();
		});
	</script>
</body>
</html>