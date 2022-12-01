<?php
include('header.php');
global $settingInstroduce;
?>
<div class="banner_cat" style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl(@$settingInstroduce['Option']['value']['anhBanner']);?>');">

	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1><?php echo @$settingInstroduce['Option']['value']['BannerMotaDong1'];?></h1>
		</div>

		<div class="banner_cat_in_des text-center">
			<p> <?php echo @$settingInstroduce['Option']['value']['BannerMotaDong2'];?></p>
		</div>
	</div>
</div>

<section class="secone_introduc ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 offset-md-1 col-lg-5 offset-lg-1  od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>01</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$settingInstroduce['Option']['value']['VeChungToiTieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p><?php echo @$settingInstroduce['Option']['value']['VeChungToiNoiDung'];?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 od_first">
				<div class="secone_img flex_end tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$settingInstroduce['Option']['value']['VeChungToiAnhNoiDung']);?>" class="img-fluid " title="Hỗ trợ tạo thiết kế nhanh bằng cách lựa chọn từ thư viện hoặc import từ file CAD.">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sectwo_introduc ">
	<div class="container-fluid">
		<div class="h3d-container" >
			<div class="row">
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub1 ">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$settingInstroduce['Option']['value']['TamNhinIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$settingInstroduce['Option']['value']['TamNhinTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p>
								<?php echo @$settingInstroduce['Option']['value']['TamNhinNoiDung'];?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub2 ">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$settingInstroduce['Option']['value']['SuMenhIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$settingInstroduce['Option']['value']['SuMenhTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$settingInstroduce['Option']['value']['SuMenhNoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub2 ">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$settingInstroduce['Option']['value']['TrietLyPTIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$settingInstroduce['Option']['value']['TrietLyPTTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$settingInstroduce['Option']['value']['TrietLyPTNoiDung'];?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="secthree_introduc"); ">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-6 col-lg-6 od_first">
				<div class="secone_img tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$settingInstroduce['Option']['value']['GiaTriCLAnhNoiDung']);?>" class="img-fluid" title="Triển khai ý tưởng thiết kế cho ngôi nhà bằng thao tác kéo thả trực quan.">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>02</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$settingInstroduce['Option']['value']['GiaTriCLTieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p>
							<?php echo @$settingInstroduce['Option']['value']['GiaTriCLNoiDung'];?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<section class="secfour_introduc " >
	<div class="container-fluid">
		<div class="h3d-container">
			<div class="secfour_introduc_top">
				<div class="text-center secfour_introduc_title">
					<h1><?php echo @$settingInstroduce['Option']['value']['OurTeamTieuDe'];?></h1>
				</div> 
				<div class="line_title"></div>
				<div  class="text-center secfour_introduc_des">	
					<p><?php echo @$settingInstroduce['Option']['value']['OurTeamNoiDung'];?></p>
				</div>
			</div>
			<div class="row">
				<?php
				if(function_exists('getOurTeam')){
					$listOurTeam = getOurTeam(60);
					if(!empty($listOurTeam)){
						foreach ($listOurTeam as $ourTeam){
							?>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="secfour_introduc_sub">
									<div class="secfour_introduc_sub_img effect_img">
										<img src="<?php echo hashUrl(@$ourTeam['ourTeam']['avatar']);?>" class="img-fluid rounded-circle">
									</div>
									<br>
									<div class="secfour_introduc_sub_name text-center">
										<h1><?php echo @$ourTeam['ourTeam']['name'];?></h1>
									</div>
									<div class="secfour_introduc_sub_level text-center">
										<p><?php echo @$ourTeam['ourTeam']['position'];?></p>
									</div>
								</div>
							</div>
							<?php  }
						}
					}?>
				</div>
			</div>
		</div>
	</section>

	<section class="secthree_platform" style="background: linear-gradient(0deg,rgba(61,147,99,0.8), rgba(61,147,99,0.9)) ,url('<?php global $platformSetting; echo hashUrl(@$platformSetting['Option']['value']['ThamGiaCungChungToiNen']);?>');">
		<div class="container-fluid">
			<div class="  h3d-container">
				<div class="row">
					<div class=" col-md-6 col-lg-6 text-center secthree_platform_info">
						<div class="secthree_platform_tit">
							<h1><?php echo @$settingInstroduce['Option']['value']['ThamGiaCCTTieuDe'];?></h1>
						</div>
						<div class="secthree_platform_des">
							<p><?php echo @$settingInstroduce['Option']['value']['ThamGiaCCTMoTaKhoi'];?></p>
						</div>
					</div>

					<div class=" col-md-6 col-lg-6 text-center secthree_platform_button">
						<div >
							<!-- button -->
							<div class="oc_bh15_svg_4">
								<a  class=" btn  oc_bh15_btn_svg  " style="background: #fff; border-color:rgba(61,147,99,1);" href="https://id.house3d.com/signup" >
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

	<section class="secfive_introduc " style="display: none;">
		<div class="h3d-container">
			<div class="text-center secfive_introduc_tit">
				<h1 ><?php echo @$settingInstroduce['Option']['value']['WhatClientSayTieuDe'];?></h1>
			</div> 
			<div class="secthree_slide">
				<div class="owl-carousel owl-theme slide_intro">
					<?php
                    //khách hàng nói gì về chúng tôi
					$listFeedBack = getListFeedback(3);
					if(!empty($listFeedBack)){
						foreach ($listFeedBack as $item){
							?>
							<div class="item ">
								<div class="secfive_introduc_sub">
									<div class="secfive_introduc_sub_text text-center">
										<i class="fa fa-quote-left fa-1x"></i>
										<p>
											<?php echo @$item['Feedback']['content'];?>
										</p>
									</div>
									<div class="secfive_introduc_sub_img effect_img">
										<img src="<?php echo hashUrl(@$item['Feedback']['avatar']);?>" class="img-fluid rounded-circle">
									</div>
									<br>
									<div class="secfive_introduc_sub_name text-center">
										<h1><?php echo @$item['Feedback']['fullName'];?></h1>
									</div>
									<div class="secfive_introduc_sub_level text-center">
										<p><?php echo @$item['Feedback']['positions'];?></p>
									</div>
								</div>
							</div>
							<?php }}?>
						</div>
					</div>
				</div>
			</section>
<script type="text/javascript">
	  if($(window).innerWidth()>= 768){
        var a= $('.sectwosub_contai').innerHeight();
        $('.sectwosub').css('height', a);
    }
</script>
			<?php include('footer.php'); ?>

			<script type="text/javascript">
      // GENERAL SETTING
      window.sr = ScrollReveal({ reset: false });
      sr.reveal('.sectwosub', { 
      	duration: 2000,
      	opacity:0
      }, 50);

// **
sr.reveal('.secone_info', { 
	opacity:0,
	scale:0.1,
	delay: 100,
	duration: 1000
});

// slide intro

$(document).ready(function() {
	var owl = $('.owl-carousel.slide_intro');
    if(!owl || owl.owlCarousel === undefined) return;
	owl.owlCarousel({
		// animateOut: 'slideOutUp',
		// animateIn: 'flipInX',
				// stagePadding:30,
				smartSpeed:450,
				margin: 10,
				autoplay:true,
				nav: false,
				loop: true,
				dots:false,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items:2
					},
					1000: {
						items: 3
					}
				}
			})
})

</script>




