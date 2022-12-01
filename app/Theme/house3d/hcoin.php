<?php getHeader();?>

<div class="banner_cat" style="background: rgba(60,151,100,1);">
	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1>Hcoin Pricing Details</h1>
		</div>
        <div class="hcoin-sub-title">
            Stated below is the unit price of the HCoin, for details about House3D Products, Services and Pricing model, Please <a href="/pricing">click here</a>
        </div>
	</div>
</div>

<div id="hcoin" class="pd_40">
	<div class="container-fluid">
		<div class="h3d-container hcoin-container">
			<div class="row">
				<div class="col-lg-8">
					<?php include("pricing-hcoin.php")?>
				</div>
				<div class="col-lg-4 d-none d-lg-block">
					<aside class="sticky-top">
						<div class="consultant_ct" >
							<div class="consultant">
								<div class="consultant_img">
									<img src="<?php echo hashUrl($urlThemeActive.'img/danhsachtuvan.jpg'); ?>" class="img-fluid" alt="img">
								</div>
								<div>
									<div class="consultant_info">
										<ul class="consultant_list">
											<li> Support: <a class="messenger-link" href="https://m.me/house3d"><i class="fab fa-facebook-messenger messenger-icon"></i>&nbsp;Messenger 24/7</a></li>
											<li> Email : <?php echo @$contactSite['Option']['value']['email'];?></li>
											<li> <?php echo @$contactSite['Option']['value']['address'];?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
            <div class="hcoin-footer-msg">
                Stated above is the unit price of the HCoin, for details about House3D Products, Services and Pricing model, Please <a href="/pricing">click here</a>
            </div>
		</div>

	</div>

</div>

<?php getFooter(); ?>