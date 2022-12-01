<?php
include('header.php');
global $platformSetting;
?>
<style type="text/css">
.secone_part2_sub_img{
	transition: all 0.4s;
	-webkit-transition:all 0.4s;
	-moz-transition: all 0.4s;
}
.secone_part2_sub:hover .secone_part2_sub_img{
	-webkit-transform:translateY(-15px);
	-moz-transform: translateY(-15px);
	transform: translateY(-15px);
	-webkit-transition:all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;
}
</style>
<div class="banner_cat"  style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo  hashUrl(@$platformSetting['Option']['value']['AnhBanner']);?>');">
	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1><?php echo @$platformSetting['Option']['value']['BannerMota1'];?></h1>
		</div>

		<div class="banner_cat_in_des text-center">
			<p> <?php echo @$platformSetting['Option']['value']['BannerMota2'];?></p>
		</div>
	</div>
</div>

<section class="secone_platform" style="background: rgb(240,240,240);">
	<div class="container-fluid">
		<div class="secone_part1_pf">
			<div class="text-center secone_title">
				<h1><?php echo @$platformSetting['Option']['value']['BanLaAiTieuDe'];?></h1>
				<div class="line_title"></div>
			</div>
			
			<div class="h3d-container">
				<div class="row b_none">
					<div class="col-md-6 col-lg-3 secone_part2_sub_2_contai">
						<div class="secone_part2_sub_2 secone_part2_sub21 block_4_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
							<div class="secone_part2_sub_2_img">
								<img src="<?php echo hashUrl($platformSetting['Option']['value']['BanLaAiKhoi1Icon']);?>" class="img-fluid">
							</div>
							<div class="secone_part2_sub_2_in">
								<p><?php echo @$platformSetting['Option']['value']['BanLaAiKhoi1TieuDe'];?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 secone_part2_sub_2_contai">
						<div class="secone_part2_sub_2 secone_part2_sub22 block_4_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
							<div class="secone_part2_sub_2_img">
								<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['BanLaAiKhoi2Icon']);?>" class="img-fluid">
							</div>
							<div class="secone_part2_sub_2_in">
								<p><?php echo @$platformSetting['Option']['value']['BanLaAiKhoi2TieuDe'];?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 secone_part2_sub_2_contai">
						<div class="secone_part2_sub_2 secone_part2_sub23 block_4_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
							<div class="secone_part2_sub_2_img">
								<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['BanLaAiKhoi3Icon']);?>" class="img-fluid">
							</div>
							<div class="secone_part2_sub_2_in">
								<p><?php echo @$platformSetting['Option']['value']['BanLaAiKhoi3TieuDe'];?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 secone_part2_sub_2_contai">
						<div class="secone_part2_sub_2 secone_part2_sub24 block_4_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
							<div class="secone_part2_sub_2_img">
								<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['BanLaAiKhoi4Icon']);?>" class="img-fluid">
							</div>
							<div class="secone_part2_sub_2_in">
								<p><?php echo @$platformSetting['Option']['value']['BanLaAiKhoi4TieuDe'];?> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="secone_platform">
	<div class="secone_part2_pf">
		<div class="container-fluid">
			<div class="text-center secone_title">
				<h1><?php echo @$platformSetting['Option']['value']['HayThamGiaTieuDe'];?></h1>
				<div class="line_title"></div>
			</div>
			<div class="h3d-container">
				<div class="row">
					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/design-tools" >
							<div class="secone_part2_sub secone_part2_sub1 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi1Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi1TieuDe'];?> </p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/3d-vr-cloud-media" >
							<div class="secone_part2_sub secone_part2_sub2 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi2Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi2TieuDe'];?></p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/3d-vrar-marketing" >
							<div class="secone_part2_sub secone_part2_sub3 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi3Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi3TieuDe'];?></p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/furniture-ecommerce" >
							<div class="secone_part2_sub secone_part2_sub4 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi4Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi4TieuDe'];?></p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/3d-trading-platform" >
							<div class="secone_part2_sub secone_part2_sub5 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi5Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi5TieuDe'];?></p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6 col-lg-4 secone_part2_sub_contai">
						<a href="/3d-service-platform" >
							<div class="secone_part2_sub secone_part2_sub6 block_6_platform"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
								<div class="secone_part2_sub_img">
									<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['HayThamGiaKhoi6Icon']);?>" class="img-fluid">
								</div>
								<div class="secone_part2_sub_in">
									<p><?php echo @$platformSetting['Option']['value']['HayThamGiaKhoi6TieuDe'];?></p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sectwo_platform">
	<div class="container-fluid">
		<div class="text-center secone_title">
			<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemTieuDe1'];?> <br> <?php echo @$platformSetting['Option']['value']['DeTraiNghiemTieuDe2'];?></h1>
			<div class="line_title"></div>
		</div>
		<div class="h3d-container">
			<div class="row">
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub1">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi1Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi1TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi1NoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub2">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi2Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi2TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi2NoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub3">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi3Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi3TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi3NoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub4">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi4Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi4TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi4NoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub5">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi5Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi5TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi5NoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub6">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$platformSetting['Option']['value']['DeTraiNghiemKhoi6Icon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi6TieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$platformSetting['Option']['value']['DeTraiNghiemKhoi6NoiDung'];?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="secthree_platform" style="background: linear-gradient(0deg,rgba(61,147,99,0.8), rgba(61,147,99,0.9)) ,url('<?php echo hashUrl(@$platformSetting['Option']['value']['ThamGiaCungChungToiNen']);?>');">
	<div class="container-fluid">
		<div class="  h3d-container">
			<div class="row">
				<div class="col-md-6 col-lg-6 text-center">
					<div class="secthree_platform_tit">
						<h1><?php echo @$platformSetting['Option']['value']['ThamGiaCungChungToiTieuDe'];?></h1>
					</div>
					<div class="secthree_platform_des">
						<p><?php echo @$platformSetting['Option']['value']['ThamGiaCungChungToiNoiDung'];?></p>
					</div>
				</div>

				<div class="col-md-6 col-lg-6 text-center secthree_platform_button">
					<div class="">
						<!-- button -->
						<div class="oc_bh15_svg_4">
							<a  class=" btn  oc_bh15_btn_svg  " style="background: #fff; border-color:rgba(61,147,99,1);" href="<?php echo @$platformSetting['Option']['value']['LinkDanKyNgay'];?>" >
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


<?php include('footer.php'); ?>




<script type="text/javascript">
	 if($(window).innerWidth()>= 768){
        var a= $('.sectwosub_contai').innerHeight();
        $('.sectwosub').css('height', a);
    }
     if($(window).innerWidth()>= 768){
        var c= $('.secone_part2_sub_2_contai').innerHeight();
        $('.secone_part2_sub_2').css('height', c);
    }
</script>


<script >
      // GENERAL SETTING
      window.sr = ScrollReveal({ reset: false });

// Custom Settings
sr.reveal('.sectwosub', { 
	duration: 2000,
	opacity:0
}, 50);

// ****
sr.reveal('.secone_part2_sub', { 
	duration: 2000,
	opacity:0
}, 50);


// ****
sr.reveal('.secone_part2_sub_2', { 
	duration: 2000,
	opacity:0
}, 50);
</script>

</body>
</html>
