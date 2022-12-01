<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/slide_render.css">
<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/h3dplatform_menu.css">
<section class="secone_designtools">	
	<div class="secone_designtools_out secone_designtools_out_bg1" style="background: linear-gradient(180deg,rgba(255, 224, 102,0.1), rgba(255, 224, 102,1)) ,url('<?php echo hashUrl($urlThemeActive.'/img/section_three2.jpg'); ?>');">
		<div class="secone_designtools_in">
			<div class="text-center secone_designtools_text">
				<h1>Công cụ thiết kế cao cấp trên 3D/VR</h1>
			</div>
			<br>
			<ul class="list-inline">
				<li class="list-inline-item" ><a href="<?php echo @$designToolSetting['Option']['value']['bannerWindowOs'];?>"  class="btn btn-success btn-ra btn-color">WINDOW OS</a></li>
				<li class="list-inline-item" ><a href="<?php echo @$designToolSetting['Option']['value']['bannerMacOs'];?>"  class="btn btn-success btn-ra btn-color">MAC OS</a></li>
			</ul>
		</div>
	</div>
</section>


<section class="section_one">
	<div class="container-fluid">
		<div class="text-center secone_title">
			<h1><?php echo $category['name']; ?></h1>
			<div class="line_title"></div>
		</div>
        <?php
            if(!empty($listNotices)){
            foreach ($listNotices as $key => $value) {
                if ($key == 0 || $key % 2 == 0) {
                    ?>
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="secone_info ">
                                <div class="secone_info_stt">
                                    <p>0<?php echo $key + 1; ?></p>
                                </div>
                                <div class="secone_info_tit">
                                    <a href="<?php echo getUrlNotice($value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
                                </div>
                                <div class="secone_info_des">
                                    <p>
                                        <?php echo @$value['Notice']['introductory']; ?>
                                    </p>
                                </div>
                                <br>
                                <!-- button -->
                                <div class="oc_bh15_svg_4">
                                    <a class=" btn  oc_bh15_btn_svg  "
                                       href="<?php echo getUrlNotice($value['Notice']['id']); ?>">
                                        <span class="oc_bh15_btn_svg_label">CHI TIẾT</span>
                                        <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none"
                                             viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4"
                                             width="140" style="">
                                            <g class="oc_bh15_btn_svg_border_left ">
                                                <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1"
                                                      d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                            </g>
                                            <g class="oc_bh15_btn_svg_border_right">
                                                <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1"
                                                      d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="secone_img flex_end tilt" data-tilt data-tilt-glare="true" data-tilt-scale="1">
                                <a href="<?php echo getUrlNotice($value['Notice']['id']); ?>">
                                    <img src="<?php echo hashUrl(@$value['Notice']['image']); ?>" class="img-fluid "
                                         title="<?php echo @$value['Notice']['title']; ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    ?>
                    <div class="row secone_info_margin75_0">
                        <div class="col-lg-6">
                            <div class="secone_img tilt" data-tilt data-tilt-glare="true" data-tilt-scale="1">
                                <a href="<?php echo getUrlNotice($value['Notice']['id']); ?>"><img
                                            src="<?php echo hashUrl(@$value['Notice']['image']); ?>" class="img-fluid"
                                            title="<?php echo @$value['Notice']['title']; ?>"></a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="secone_info ">
                                <div class="secone_info_stt">
                                    <p>0<?php echo $key + 1; ?></p>
                                </div>
                                <div class="secone_info_tit">
                                    <a href="<?php echo getUrlNotice($value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
                                </div>
                                <div class="secone_info_des">
                                    <p>
                                        <?php echo @$value['Notice']['introductory']; ?>
                                    </p>
                                </div>
                                <br>
                                <!-- button -->
                                <div class="oc_bh15_svg_4">
                                    <a class=" btn  oc_bh15_btn_svg  "
                                       href="<?php echo getUrlNotice($value['Notice']['id']); ?>">
                                        <span class="oc_bh15_btn_svg_label">CHI TIẾT</span>
                                        <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none"
                                             viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4"
                                             width="140" style="">
                                            <g class="oc_bh15_btn_svg_border_left ">
                                                <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1"
                                                      d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                            </g>
                                            <g class="oc_bh15_btn_svg_border_right">
                                                <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1"
                                                      d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                <?php }
            }}?>

        <?php
        if ($page > 5) {
            $startPage = $page - 5;
        } else {
            $startPage = 1;
        }


        if ($totalPage > $page + 5) {
            $endPage = $page + 5;
        } else {
            $endPage = $totalPage;
        }
        ?>
        <?php if (!empty($listNotices)) { ?>

    <div class="container">
        <ul class="pagination justify-content-center my-5">
            <li class="page-item <?php if($page==1) echo 'disabled';?>"><a class="page-link" href="<?php $urlPage . $back ?>"><span aria-hidden="true">&laquo;</span></a></li>
            <?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
                <li class="page-item <?php
                if ($i == $page) {
                    echo 'active';
                }
                ?>"><a class="page-link" href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li>
            <?php }
            ?>
            <li class="page-item"><a class="page-link" href="<?php $urlPage . $next ?>"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
    </div>
</div>
    <?php }else {
          echo '<h4 class="text-center">Forum Contains No Posts</h4>';
        } ?>

	</div>
</section>



<section class="contact_bot" >
	<div class="h3d-container">
		<div class="row">
			<div class="col-lg-4" >
				<div class="contact_bot_sub " >
					<div class="row" >
						<div class="col-lg-4">
							<img src="<?php echo hashUrl($urlThemeActive.'img/sp.jpg'); ?>" class="img-fluid ">
						</div>
						<div class="col-lg-8">
							<div class="contact_bot_sub_text">
								<p><strong>Email</strong></p>
								<a href="#"><?php echo @$contactSite['Option']['value']['email'];?></a>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="col-lg-4">
				<div class="contact_bot_sub"  >
					<div class="row" >
						<div class="col-lg-4">
							<img src="<?php echo hashUrl($urlThemeActive.'img/sale.jpg'); ?>" class="img-fluid ">
						</div>
						<div class="col-lg-8">
							<div class="contact_bot_sub_text">
								<p><strong>Sales</strong></p>
								<a href="#"><?php echo @$contactSite['Option']['value']['fone'];?></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="contact_bot_sub" >
					<div class="row" >
						<div class="col-lg-4">
							<img src="<?php echo hashUrl($urlThemeActive.'img/email.jpg'); ?>" class="img-fluid ">
						</div>
						<div class="col-lg-8">
							<div class="contact_bot_sub_text">
								<p><strong>Support</strong></p>
								<a href="#"><?php echo @$contactSite['Option']['value']['fax'];?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>