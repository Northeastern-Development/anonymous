<?php include("_config/config.php"); ?>

<?php include("_includes/pagestart.php"); ?>

 <!-- <?php phpinfo(); ?> -->

</head>
<!-- <p class="testp" style="position:fixed;background:#000;color:#fff;top:0;left:0;font-weight:bold;z-index:99999999;"></p> -->

<?php
	$dir = "img/";
	$images = scandir($dir);
	$i = rand(2, sizeof($images)-1);




	// Get image file name.
	$image_name_full = $images[$i];
	// Define display types.
	$image_display_types = array("_small.jpg", "_medium.jpg", "_big.jpg");
	// Remove image display type from image name.
	$image_name = str_replace($image_display_types, "", $image_name_full);
?>

<?php

	session_start();
	$token = md5(uniqid(rand(), TRUE));
	$_SESSION['token'] = $token;
	$_SESSION['token_time'] = time();

?>

<body>

	<div class="bodybg">

			<img sizes="100vw" srcset="img/<?php echo $image_name; ?>_small.jpg 400w, img/<?php echo $image_name; ?>_medium.jpg 1000w, img/<?php echo $image_name; ?>_big.jpg 2000w" src="img/<?php echo $image_name; ?>_big.jpg" alt="<?php echo $image_name; ?>">




		<div class="mc__wrapper">
			<div id="form-messages">


			</div>
			<section>
				<h1>Northeastern University Marketing Department</h1>
				<h2>suggestion box</h2>
			</section>
			<section>
				<p>This is a platform built for team members of the Northeastern University marekting department to share ideas with leadership regarding maketing department intiatives, procedures, and culture.</p>
				<p>If you are a member of the marketing team and have an idea for something new, a suggestion for something that isn’t working, or comments on something we are doing well, please share below. </p>
				<p>Your suggestions will always remain anonymous.</p>
			</section>
			<section>
				<p>What should our department <span class="mc__red">start,</span> <span class="mc__red"> stop</span> or <span class="mc__red">continue</span> doing?</p>
				<button class="js-form mc__form">Suggest an idea > </button>

				<form  id="neu__ajax" method="POST" action="_scripts/php/mailer.php">
					<div>

					  <input type="hidden" name="token" value="<?php echo $token; ?>" />

					  <p class="antispam">Leave this empty:
					  <br /><input name="url" /></p>

					  <label class="mc__dropdown">
					    <select id="subject" name="subject" required >
						    <option disabled="" selected="" value="">Please Choose One</option>
						    <option value="Start">Start</option>
						    <option value="Stop">Stop</option>
								<option value="Continue">Continue</option>
					    </select>
						</label>

					  <textarea required id="message" name="message" rows="10" cols="60" lines="20"></textarea>

						<button type="submit" name="send" value="Send">Submit your idea > </button>

				  </div>

				</form>

			</section>

		</div><!--end mc__wrapper-->

	</div><!--end bodybg-->

<?php include("_includes/pageend.php"); ?>
