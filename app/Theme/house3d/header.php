<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo hashUrl($urlThemeActive.'/img/favicon.ico'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- css -->
    <!-- preloading screen -->
    <link rel="stylesheet" href="<?php echo hashUrl($urlThemeActive.'css/main.css'); ?>">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo hashUrl($urlThemeActive.'css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo hashUrl($urlThemeActive.'css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo hashUrl($urlThemeActive.'css/animate.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/button.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/normal.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/new_menu.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/responsive.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/style_t.css'); ?>">
    <!-- js -->

    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/scrollreveal.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/popper.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/owl.carousel.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/script.js'); ?>"></script>

    <?php
    mantan_header();
    if(function_exists('showSeoHome')) showSeoHome();
    ?>
</head>
<body >
<?php
global  $productSetting;
global  $nenTangMuaBan3DSetting ;
global  $nenTangMuaBanNoiThatSetting ;
global  $nenTangDichVu3DSetting ;
global  $marketingSetting ;
global  $cloudMediaSetting ;
global  $designToolSetting ;
global  $settingInstroduce ;
global  $settingIndex ;
?>
<div class="container-fluid container_header" style="background: white;">
    <!-- ẩn khi màn hình nhỏ hơn 1024 -->
    <div class="row row_mainmenu" >
        <div class="col-lg-2 col-2 mainmenu_left" >
            <a href="/" class="mainmenu_left_img " >
                <img src="<?php echo hashUrl($urlThemeActive.'img/logo.png'); ?>" class="img-fluid"  >
            </a>
        </div>
        <div class="col-lg-7 col-7 mainmenu_mid" >
            <nav class="mainmenu" >
                <ul class="list-inline ul_mainmenu" >
                    <?php
                    global $urlNow;
                    $s1=ltrim($urlNow,'http://');
                    $s2=ltrim($s1,$infoSite['Option']['value']['domain']);
                    $menu_top=getMenusDefault();
                    if(!empty($menu_top)){
                        foreach ($menu_top as $key => $value) {
                            if(!empty($value['sub'])){ ?>
                                <li class='has_sub list-inline-item
								<?php if($s2==$value['url']) echo 'active';
                                else  foreach ($value['sub'] as $key => $value1){if($s2==$value1['url']) echo 'active'; }
                                ?>
								'>
                                    <a href='<?php echo $value['url']; ?>'><?php echo $value['name']; ?> <i class="fas fa-angle-down"></i></a>
                                    <ul class="ul_sub">
                                        <?php
                                        foreach ($value['sub'] as $key => $value1) {
                                            ?>
                                            <li ><a href='<?php echo $value1['url'] ?>'><?php echo $value1['name'] ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                            }
                            else { ?>
                                <li class='list-inline-item  <?php if($s2==$value['url']) echo'active';?> '><a   href='<?php echo $value['url']; ?>'><?php echo $value['name']; ?></a></li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-3 mainmenu_right">
            <nav class="mainmenu" >
                <ul class="list-inline ul_mainmenu" >
                    <li class="list-inline-item" style="float: left;">
                        <a class="" href="https://vi.house3d.com/" style="float: right;text-transform: none !important;"><img class="img-responsive" src="<?php echo $urlThemeActive; ?>img/flag_vn.png" style="margin-right: 5px;">Tiếng Việt</a>
                    </li>
                </ul>
            </nav>
            <div class="text-center" style="width: 150px">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <!-- button -->
                        <div class="oc_bh15_svg_4">
                            <a  class=" btn  oc_bh15_btn_svg  " href="https://id.house3d.com/signup" style="margin:0;height: 35px;width: 130px;" >
                                <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"><i class="fas fa-user-plus index_fontawe" ></i> REGISTER</span>
                                <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="120" >
                                    <g class="oc_bh15_btn_svg_border_left ">
                                        <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                    </g>
                                    <g class="oc_bh15_btn_svg_border_right">
                                        <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                    </g>
                                </svg>
                            </a>
                        </div><div class="clearfix">  </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Hiện với màn nhỏ hơn 1024 -->
    <div class="row row_menuhidden " >
        <div class="col-5 menuhidden_left" >
            <a href="/" class="menuhidden_left_img" >
                <img src="<?php echo hashUrl($urlThemeActive.'img/logo.png'); ?>" class="img-fluid"  >
            </a>
        </div>

        <div class="col-5 menuhidden_mid" >
            <div class="text-center" >
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <!-- button -->
                        <div class="oc_bh15_svg_4">
                            <a  class=" btn  oc_bh15_btn_svg  " href="https://id.house3d.com/signup" style="margin:0;height: 35px;width: 130px;" >
                                <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"><i class="fas fa-user-plus index_fontawe" ></i> REGISTER</span>
                                <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="120" >
                                    <g class="oc_bh15_btn_svg_border_left ">
                                        <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                    </g>
                                    <g class="oc_bh15_btn_svg_border_right">
                                        <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                    </g>
                                </svg>
                            </a>
                        </div><div class="clearfix">  </div>
                    </li>

            </div>
        </div>
        <div class="col-2 menuhidden_right" >
            <button class="buttonhidden btn  "><i class="fa fa-bars" aria-hidden="true" ></i></button>
            <div class="menuhiddentop_ct">
                <ul class="menuhiddentop_ul" >
                    <?php
                    global $urlNow;
                    $s1=ltrim($urlNow,'http://');
                    $s2=ltrim($s1,$infoSite['Option']['value']['domain']);
                    $menu_top=getMenusDefault();
                    if(!empty($menu_top)){
                        foreach ($menu_top as $key => $value) {
                            if(!empty($value['sub'])){ ?>
                                <li class='has_sub_hidden  '>
                                    <a href='<?php echo $value['url']; ?>'><?php echo $value['name']; ?> </a><i class="fas fa-plus togglesub" aria-hidden="true" ></i>
                                    <ul class="ul_sub_hidden">
                                        <?php
                                        foreach ($value['sub'] as $key => $value1) {
                                            ?>
                                            <li ><a href='<?php echo $value1['url'] ?>'><?php echo $value1['name'] ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                            }
                            else { ?>
                                <li class=' <?php if($s2==$value['url']) echo'active';?>'><a   href='<?php echo $value['url']; ?>'><?php echo $value['name']; ?></a></li>
                                <?php
                            }
                        }
                    }
                    ?>
                    <li>
                        <a class="" href="https://vi.house3d.com/" style="color:white; float: right; padding:12px 12px; border: 1px solid rgba(61,147,99,1);border-radius: 10px;"><img class="img-responsive" src="<?php echo $urlThemeActive; ?>img/flag_vn.png" style="margin-right: 5px;">Tiếng Việt</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
