<?php
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/h3dplatform_menu.css'); ?>">


<section class="secone_designtools">
		<div class="secone_designtools_out secone_designtools_out_bg1" style="background: rgba(60,151,100,1);">
			<div class="secone_designtools_in">
				<div class="text-center secone_designtools_text">
					<h1><?php echo @$cloudMediaSetting['Option']['value']['BannerMota1'];?></h1>
				</div>

				<div class="secone_designtools_text_des">
					<p><?php echo @$cloudMediaSetting['Option']['value']['BannerMota2'];?></p>
				</div>
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
						<p><?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND1TieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p><?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND1NoiDung'];?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 od_first">
				<div class="secone_img flex_end tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$cloudMediaSetting['Option']['value']['CongCuTkND1Video']);?>" class="img-fluid " title="Hỗ trợ tạo thiết kế nhanh bằng cách lựa chọn từ thư viện hoặc import từ file CAD.">
				</div>
			</div>
		</div>

		<div class="row secone_info_margin75_0">
			<div class="col-lg-6 col-md-6 od_first">
				<div class="secone_img tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$cloudMediaSetting['Option']['value']['CongCuTkND2Video']);?>" class="img-fluid" title="Triển khai ý tưởng thiết kế cho ngôi nhà bằng thao tác kéo thả trực quan.">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>02</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND2TieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p>
							<?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND2NoiDung'];?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second" >
				<div class="secone_info ">
					<div class="secone_info_stt">
						<p>03</p>
					</div>
					<div class="secone_info_tit">
						<p><?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND3TieuDe'];?></p>
					</div>
					<div class="secone_info_des">
						<p>
							<?php echo @$cloudMediaSetting['Option']['value']['CongCuTkND3NoiDung'];?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 od_first">
				<div class="secone_img flex_end tilt"  data-tilt data-tilt-glare="true" data-tilt-scale="1">
					<img src="<?php echo hashUrl(@$cloudMediaSetting['Option']['value']['CongCuTkND3Video']);?>" class="img-fluid" title="Trải nghiệm ngay không gian của bạn với công nghệ Render sâu tốc.">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="secone_platform" >
    <div class="container-fluid">
        <div class="secone_part1_pf">
            <div class="text-center secone_title">
                <h1><?php echo @$cloudMediaSetting['Option']['value']['AlbumThietKeTieuDe'];?></h1>
                <div class="line_title"></div>
            </div>
        </div>
    </div>

    <div class="main_gallary">
        <div class="col-lg-10 my-auto mx-auto">
            <div class="row row_gallery">
                <?php
                global $modelAlbum;
                if(!empty($cloudMediaSetting['Option']['value']['ThietKeAlbum'])){
                    $album = $modelAlbum->getAlbum($cloudMediaSetting['Option']['value']['ThietKeAlbum']);
                    ?>
                    <div class="col-lg-4 col_gallery">
                        <?php if(isset($album['Album']['img'][0]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][0]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl($album['Album']['img'][0]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][1]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][1]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][1]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][2]['src'])){?>
                            <div class="feature_item long">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][2]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][2]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                    <div class="col-lg-4 col_gallery">
                        <?php if(isset($album['Album']['img'][3]['src'])){?>
                            <div class="feature_item long">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][3]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][3]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][4]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][4]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl($album['Album']['img'][4]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][5]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][5]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl($album['Album']['img'][5]['src']);?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                    </div>

                    <div class="col-lg-4 col_gallery">
                        <?php if(isset($album['Album']['img'][6]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][6]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][6]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][7]['src'])){?>
                            <div class="feature_item long">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][7]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][7]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                        <?php if(isset($album['Album']['img'][8]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][8]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][8]['src']); ?>" width="100%">
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
</section>

<script>
    $(document).ready(function () {
        var a = $(".main_gallary .row_gallery .col_gallery:nth-child(1)").innerWidth();
        var x = 2 * a / 3;
        $('.feature_item').css("height", (x - 15));
        $('.feature_item.long').css("height", 2 * (x - 15));
    });
</script>

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