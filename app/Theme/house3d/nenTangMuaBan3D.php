<?php
include('header.php');
global $nenTangMuaBan3DSetting
?>
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/h3dplatform_menu.css'); ?>">

<section class="sectwo_designtools">

     <div class="sectwo_designtools_out secone_designtools_out_bg1 " style="background: rgba(60,151,100,1);" >
      <div class="sectwo_designtools_in">
         <div class="text-center sectwo_designtools_text">
            <h1><?php echo @$nenTangMuaBan3DSetting['Option']['value']['BannerMota1'];?><br> <?php echo @$nenTangMuaBan3DSetting['Option']['value']['BannerMota2'];?></h1>
        </div>

        <div class="sectwo_designtools_bot">
            <p>
                <?php echo @$nenTangMuaBan3DSetting['Option']['value']['BannerMota3'];?><br>
                <?php echo @$nenTangMuaBan3DSetting['Option']['value']['BannerMota4'];?>
            </p>
        </div>
        <!-- button -->
		<!-- 	<div class="oc_bh15_svg_4">
				<a class=" btn  oc_bh15_btn_svg  " href="#" data-toggle="modal" data-target="#myModal">
					<span class="oc_bh15_btn_svg_label">ĐĂNG KÝ NGAY</span>
					<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
						<g class="oc_bh15_btn_svg_border_left ">
							<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
						</g>
						<g class="oc_bh15_btn_svg_border_right">
							<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
						</g>
					</svg>
				</a>
			</div><div class="clearfix">  </div> -->

		</div>
	</div>
</section>

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

<section class="section_one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second" >
                <div class="secone_info ">
                    <div class="secone_info_stt">
                        <p>01</p>
                    </div>
                    <div class="secone_info_tit">
                        <p><?php echo @$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND1TieuDe'];?></p>
                    </div>
                    <div class="secone_info_des">
                        <p>
                            <?php echo @$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND1NoiDung'];?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 od_first">
                <div class="secone_img flex_end tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
                    <img src="<?php echo hashUrl(@$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND1Video']);?>" class="img-fluid " title="Hỗ trợ tạo thiết kế nhanh bằng cách lựa chọn từ thư viện hoặc import từ file CAD.">
                </div>
            </div>
        </div>

        <div class="row secone_info_margin75_0">
            <div class="col-lg-6 col-md-6 od_first">
                <div class="secone_img tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
                    <img src="<?php echo hashUrl(@$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND2Video']);?>" class="img-fluid" title="Triển khai ý tưởng thiết kế cho ngôi nhà bằng thao tác kéo thả trực quan.">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 od_second" >
                <div class="secone_info ">
                    <div class="secone_info_stt">
                        <p>02</p>
                    </div>
                    <div class="secone_info_tit">
                        <p><?php echo @$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND2TieuDe'];?></p>
                    </div>
                    <div class="secone_info_des">
                        <p><?php echo @$nenTangMuaBan3DSetting['Option']['value']['CongCuTkND2NoiDung'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
      // GENERAL SETTING
      window.sr = ScrollReveal({ reset: false });
      
// **
sr.reveal('.secone_info', { 
  opacity:0,
  scale:0.1,
  delay: 100,
  duration: 1000
});
</script>




<?php include('footer.php'); ?>