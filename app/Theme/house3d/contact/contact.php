<?php getHeader();?>
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/Linearicons.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/contact1.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/contact2.css'); ?>">
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
<div class="banner_cat"  style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl($urlThemeActive.'img/secthree_platform1.jpg'); ?>');">
	<div class="banner_cat_in" >
		<div class="banner_cat_in_tit text-center">
			<h1>CONTACT</h1>
		</div>

		<div class="banner_cat_in_des text-center">
			<p>Stay Connected With Us Today!</p>
		</div>
	</div>
</div><div class="clearfix"></div>

<div class="container-contact100">
	<div class="wrap-contact100">

		<form class="contact100-form validate-form" action="" method="POST">
            <div class="contact100-form-title">Contact immediately via
                <a class="contact-messenger-link" href="https://m.me/house3d"><i class="fab fa-facebook-messenger contact-messenger-icon"></i>&nbsp;Messenger support 24/7</a>
            </div>
			<span class="contact100-form-title">
				Or fill in your information here and send it to us
			</span>
            <?php echo @$tmpVariable['returnSend']['mess'];?>
			<label class="label-input100" for="first-name">First and last name *</label>
			<div class="wrap-input100  validate-input" data-validate="Type your name">
				<input id="first-name" class="input100" type="text" name="fullName" placeholder="" required>
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="email">Email *</label>
			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input id="email" class="input100" type="text" name="email" placeholder="" required>
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="phone">Phone number</label>
			<div class="wrap-input100">
				<input id="phone" class="input100" type="text" name="fone" placeholder="">
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="message">Leave message *</label>
			<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<textarea id="message" class="input100" name="content" placeholder="" required></textarea>
				<span class="focus-input100"></span>
			</div>
            <?php
                $captchaData = $modelOption->getOption("captchaData");
                if (!array_key_exists("Option", $captchaData)) {
                    $siteKey = "##DEFINE_NOW##";
                } else {
                    $siteKey = $captchaData['Option']['value']['siteKey'];
                }
            ?>
            <div style="margin: 10px auto; padding-top: 20px " id="captcha" class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"></div>
			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
					Contact Us
				</button>
			</div>
		</form>

		<div class="contact100-more flex-col-c-m" style="background-image: url('<?php echo hashUrl($urlThemeActive.'img/bg-01.jpg');  ?>');">
			<div class="flex-w size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-map-marker"></span>
				</div>

				<div class="flex-col size2">
					<span class="txt1 p-b-20">
						Headquarters
					</span>

					<span class="txt3">
						<?php echo @$contactSite['Option']['value']['address']; ?>
					</span>
				</div>
			</div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="fab fa-facebook-messenger"></span>
                </div>

                <div class="flex-col size2">
					<span class="txt1 p-b-20">
						Online support 24/7
					</span>

                    <span class="txt3 contact-messenger-link2">
						<a href="http://m.me/house3d">http://m.me/house3d</a>
					</span>
                </div>
            </div>

			<div class="dis-flex size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-envelope"></span>
				</div>

				<div class="flex-col size2">
					<span class="txt1 p-b-20">
						Contact email
					</span>

					<span class="txt3">
						<?php echo @$contactSite['Option']['value']['email']; ?>
					</span>
				</div>
			</div>

			<div class="dis-flex size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-envelope"></span>
				</div>

				<div class="flex-col size2">
					<span class="txt1 p-b-20">
						Email support
					</span>

					<span class="txt3">
						support@house3d.com
					</span>
				</div>
			</div>


		</div>
	</div>

</div>
<div class="container-fluid">
	<div class="gg_map" >
		<legend style="font-weight: bold;">  </legend>
		<?php
		$contact = $modelOption->getOption('contactSettings');
		if(!empty($contact['Option']['value']['map'])){
			echo @$contact['Option']['value']['map'];
		}
		?>
	</div>
</div>

<?php getFooter(); ?>
