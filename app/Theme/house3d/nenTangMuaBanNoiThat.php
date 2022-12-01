<?php
include('header.php');
global$nenTangMuaBanNoiThatSetting;
?>
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/h3dplatform_menu.css'); ?>">

<!-- block 1 -->
<section class="sectwo_designtools" >

		<div class="sectwo_designtools_out secone_designtools_out_bg1" style="background: rgba(60,151,100,1);">
			<div class="sectwo_designtools_in">
				<div class="text-center sectwo_designtools_text">
					<h1><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['BannerMota1'];?></h1>
				</div>

				<div class="sectwo_designtools_bot">
					<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['BannerMota2'];?> <br> <?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['BannerMota3'];?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- menu con -->
<section>
    <ul class="snip1226">
        <?php
        global $modelOption;
        global $urlNow;
        $s1=ltrim($urlNow,'http://');
        $s2=ltrim($s1,$infoSite['Option']['value']['domain']);
        $menu_top=getMenusDefault();
        if(!empty($designToolSetting['Option']['value']['Menu'])){
            $menus = $modelOption->getOptionById($designToolSetting['Option']['value']['Menu']);
            if(!empty($menus['Option']['value']['category'])){
                foreach ($menus['Option']['value']['category'] as $menu){    ?>
                    <li class=" <?php if($s2 == $menu['url']) echo 'current'; ?>" ><a href="<?php echo $menu['url']; ?>" data-hover="<?php echo $menu['name']; ?>"><?php echo $menu['name']; ?></a></li>
                    <?php
                }
            }
        }
    ?>
    </ul>
</section>

<!-- block more 1 -->
<section class="section_one">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>01</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['NguoiTieuDungTieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['NguoiTieuDungNoiDung'];?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 od_first">
				<div class="secone_img flex_end tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['NguoiTieuDungVideo']);?>" class="img-fluid " title="Hỗ trợ tạo thiết kế nhanh bằng cách lựa chọn từ thư viện hoặc import từ file CAD.">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sectwo_introduc ">
	<div class="container-fluid">
		<div class="h3d-container">
			<div class="row">
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub1">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['TraiNghiemTTAIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1 ><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['TraiNghiemTTATieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['TraiNghiemTTANoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub2">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['DanhGiaSanPhamIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['DanhGiaSanPhamTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['DanhGiaSanPhamNoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub3">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['SanPhamDaDangIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['SanPhamDaDangTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['SanPhamDaDangNoiDung'];?></p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>

<!-- block more 2  -->
<section class="section_one">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-6 col-md-6 od_first">
				<div class="secone_img tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['NhaCungCapVideo']);?>" class="img-fluid" title="Triển khai ý tưởng thiết kế cho ngôi nhà bằng thao tác kéo thả trực quan.">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>02</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['NhaCungCapTieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['NhaCungCapNoiDung'];?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="sectwo_introduc ">
	<div class="container-fluid">
		<div class="h3d-container">
			<div class="row">
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub1 sectwosub1m">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['MarketingIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1 ><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['MarketingTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['MarketingNoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub2 sectwosub1m">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['KenhBanHangIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['KenhBanHangTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['KenhBanHangNoiDung'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sectwosub_contai">
					<div class="sectwosub sectwosub3 sectwosub1m">
						<div class="sectwosub_img">
							<img src="<?php echo hashUrl(@$nenTangMuaBanNoiThatSetting['Option']['value']['KhachHangTiemNangIcon']);?>" class="img-fluid">
						</div>
						<div class="sectwo_tit text-center">
							<h1><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['KhachHangTiemNangTieuDe'];?></h1>
						</div>
						<div class="sectwo_des text-center">
							<p><?php echo @$nenTangMuaBanNoiThatSetting['Option']['value']['KhachHangTiemNangNoiDung'];?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>




<script type="text/javascript">
	if($(window).innerWidth()>=768){
		var a= $('.sectwosub_contai').innerHeight();
		$('.sectwosub').css('height', a);
	}
</script>




<script type="text/javascript">
      // GENERAL SETTING
      window.sr = ScrollReveal({ reset: false });
      sr.reveal('.sectwosub', {
      	duration: 2000,
      }, 50);

      sr.reveal('.sectwosub1m', {
      	duration: 2000,
      }, 50);
// **
sr.reveal('.secone_info', {
	opacity:0,
	scale:0.1,
	delay: 100,
	duration: 1000
});
</script>

<script>
	$(document).ready(function() {
		var owl = $('.owl-carousel.slide_main');
        if(!owl || owl.owlCarousel === undefined) return;
		owl.owlCarousel({
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
					items:1
				},
				1000: {
					items: 1
				}
			}
		})
	})
</script>


<?php include('footer.php'); ?>