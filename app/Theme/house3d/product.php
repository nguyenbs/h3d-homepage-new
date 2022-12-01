<?php
include('header.php');
global $productSetting;
?>

<div class="banner_cat"  style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl(@$productSetting['Option']['value']['AnhBanner']);?>');">
	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1><?php echo @$productSetting['Option']['value']['BannerMota1'];?></h1>
		</div>
		
		<div class="banner_cat_in_des text-center">
			<p><?php echo @$productSetting['Option']['value']['BannerMota2'];?></p>
		</div>
	</div>
</div>

<section class="secone_services">
	<div class="container-fluid">
		<div class="text-center secone_title">
			<h1><?php echo @$productSetting['Option']['value']['SanPhamDichVuNDDong1'];?> <br> <?php echo @$productSetting['Option']['value']['SanPhamDichVuNDDong2'];?></h1>
			<div class="line_title"></div>
		</div>
		<div class="h3d-container">
			<div class="row">
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="/design-tools">
						<div class="sectwosub sectwosub1">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi1Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi1TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi1NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="/3d-vr-cloud-media">
						<div class="sectwosub sectwosub2">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi2Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi2TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi2NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="/3d-vrar-marketing">
						<div class="sectwosub sectwosub3">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi3Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi3TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi3NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="furniture-ecommerce">
						<div class="sectwosub sectwosub4">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi4Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi4TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi4NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="/3d-trading-platform">
						<div class="sectwosub sectwosub5">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi5Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi5TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi5NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<a class="link_jump" href="/3d-service-platform">
						<div class="sectwosub sectwosub6">
							<div class="sectwosub_img">
								<img src="<?php echo hashUrl(@$productSetting['Option']['value']['SPKhoi6Icon']);?>" class="img-fluid">
							</div>
							<div class="sectwo_tit text-center">
								<h1><?php echo @$productSetting['Option']['value']['SPKhoi6TieuDe'];?></h1>
							</div>
							<div class="sectwo_des text-center">
								<p><?php echo @$productSetting['Option']['value']['SPKhoi6NoiDung'];?></p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sectwo_services">
	<div class="container-fluid">
		<div class="h3d-container">
			<div class="row">
                <div class="container text-center">
					<div class="sectwo_services_title">
						<h1><?php echo @$productSetting['Option']['value']['DoitacTieuDe'];?></h1>
						<!-- <div class="line_title_services"></div> -->
					</div>
					<div class="sectwo_services_des">
						<p><?php echo @$productSetting['Option']['value']['DoitacNoiDung'];?></p>
					</div>
					<div>
						<!-- <a href="/contact" class="btn btn-success btn_contact">LIÊN HỆ</a> -->
						<!-- button -->
						<div class="oc_bh15_svg_4">
							<a class=" btn  oc_bh15_btn_svg  " href="/contact" >
                                <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"> CONTACT US</span>
								<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" >
									<g class="oc_bh15_btn_svg_border_left ">
										<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
									</g>
									<g class="oc_bh15_btn_svg_border_right">
										<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
									</g>
								</svg>
							</a>
						</div><div class="clearfix">  </div>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="container text-center">
                    <div class="row sectwo_sv_subimg_container">
                        <?php
                        global $modelAlbum;
                        if(!empty($productSetting['Option']['value']['AlbumDoiTac'])){
                            $listImg = $modelAlbum->getAlbum($productSetting['Option']['value']['AlbumDoiTac']);
                            if(!empty($listImg['Album']['img'])){
                                foreach ($listImg['Album']['img'] as $img ){
                                    ?>
                                    <div class="col-6 col-lg-4 ">
                                        <div class="sectwo_sv_subimg sectwo_sv_subimg_mg">
                                            <img src="<?php echo hashUrl($img['src']);?>" class="img-fluid">
                                        </div>
                                    </div>
                                <?php }
                            }
                        }?>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section class="secthree_platform">
		<div class="container-fluid">
			<div class="  h3d-container">
				<div class="row">
					<div class="col-md-6 col-lg-6 text-center">
						<div class="secthree_platform_tit">
							<h1><?php echo @$productSetting['Option']['value']['ThamGiaCungChungToiTieuDe'];?></h1>
						</div>
						<div class="secthree_platform_des">
							<p><?php echo @$productSetting['Option']['value']['ThamGiaCungChungToiNoiDung'];?></p>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 text-center secthree_platform_button">
						<div class="">
							<!-- button -->
							<div class="oc_bh15_svg_4">
								<a class=" btn  oc_bh15_btn_svg  " style="background: #fff; border-color:rgba(61,147,99,1);" href="<?php echo @$productSetting['Option']['value']['LinkDanKyNgay'];?>" >
									<span class="oc_bh15_btn_svg_label" style="font-weight: bold;font-size: 12px;color: rgba(61,147,99,1);"><i class="fas fa-user-plus index_fontawe" style="color:rgba(61,147,99,1); "></i>Register now</span>
									<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" >
										<g class="oc_bh15_btn_svg_border_left ">
											<path fill="none" stroke="rgba(61,147,99,1)" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
										</g>
										<g class="oc_bh15_btn_svg_border_right">
											<path fill="none" stroke="rgba(61,147,99,1)" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
										</g>
									</svg>
								</a>
							</div><div class="clearfix">  </div>
						</div><div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="secfour_services" style="display: none;">
		<div class="container-fluid">
			<div class="text-center secone_title">
				<h1><?php echo @$productSetting['Option']['value']['KhachHangNoiGiTieuDe'];?></h1>
				<div class="line_title"></div>
			</div>
			<div class="h3d-container">
				<div class="row">
					<?php
                //khách hàng nói gì về chúng tôi
					$listFeedBack = getListFeedback(3);
					if(!empty($listFeedBack)){
						foreach ($listFeedBack as $item){
							?>
							<div class="col-lg-4 secfour_services_sub_des_contai">
								<div class="secfour_services_sub secfour_services_sub1">
									<div class="secfour_services_sub_des" >
										<p>" <?php echo @$item['Feedback']['content'];?> "</p>
									</div>

									<div class="secfour_services_sub_bot">
										<div class="row">
											<div class="col-6 col-sm-4">
												<div class="secfour_services_sub_bot_img">
													<img src="<?php echo hashUrl(@$item['Feedback']['avatar']);?>" class="img-fluid rounded-circle">
												</div>
											</div>
											<div class="col-6 col-sm-8 pdl">
												<div class="secfour_services_sub_bot_info">	
													<div class="secfour_services_sub_bot_tit">
														<h1><?php echo @$item['Feedback']['fullName'];?></h1>
													</div>
													<div class="secfour_services_sub_bot_des">
														<p><?php echo @$item['Feedback']['positions'];?></p>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<?php }
						}?>
					</div>
				</div>
			</div>
		</section>
<script type="text/javascript">
	 if($(window).innerWidth()>= 768){
        var a= $('.sectwosub_contai').innerHeight();
        $('.sectwosub').css('height', a);
    }
    if($(window).innerWidth()>= 992){
        // var d= $('.secfour_services_sub_des_contai').innerHeight();
        var d = 218;
        $('.secfour_services_sub_des').css('max-height', d);
    }
</script>
		<?php include('footer.php'); ?>

		<script >
      // GENERAL SETTING
      window.sr = ScrollReveal({ reset: false });

// Custom Settings
sr.reveal('.sectwosub', { 
	duration: 2000,
	opacity:0
}, 50);

// **
sr.reveal('.secfour_services_sub', { 
	duration: 2000,
	opacity:0
}, 50);

// **

sr.reveal('.sectwo_sv_subimg_container', { 
	opacity:0,
	scale:0.1,
	delay: 100,
	duration: 1500
});
// **
sr.reveal('.secone_info', { 
	opacity:0,
	scale:0.1,
	delay: 100,
	duration: 1000
});
</script>
</body>
</html>
