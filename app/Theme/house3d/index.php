<!DOCTYPE html>
<html lang='en' >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo hashUrl($urlThemeActive.'/img/favicon.ico'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- css -->
    <!-- preloading screen -->
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/main.css'); ?>">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive.'css/animate.css'); ?>">

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
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/jump_number.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo hashUrl($urlThemeActive.'js/script.js'); ?>"></script>
    <?php
    mantan_header();
    if(function_exists('showSeoHome')) showSeoHome();
    ?>
</head>
<body>
<?php
global  $downloadSetting;
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


<!-- pre lding screen -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>


<!-- video banner -->
<div class="container-fluid container_header" style="background: white;">
    <!-- ẩn khi màn hình nhỏ hơn 1024 -->
    <div class="row row_mainmenu" >
        <div class="col-lg-2 col-2 mainmenu_left" >
            <a href="/" class="mainmenu_left_img " >
                <img src="<?php echo hashUrl($urlThemeActive.'img/logo.png'); ?>" class="img-fluid">
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
                                <li class='list-inline-item <?php if($s2==$value['url']) echo'active';?>'><a   href='<?php echo $value['url']; ?>'><?php echo $value['name']; ?></a></li>
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
                <ul class="list-inline ul_mainmenu">
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
                            <a  class=" btn  oc_bh15_btn_svg  " href="http://id.house3d.com/signup" style="margin:0;height: 35px;width: 130px;" >
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

                    <!-- <li class="list-inline-item"><a href="" class="btn  btn_header_topright btn_hover" >ĐĂNG KÝ</a></li> -->
                    <!-- <li class="list-inline-item"><a href="" > <img src="<?php echo $urlThemeActive; ?>img/flag_vn.png"></a> <a href=""> <img src="<?php echo $urlThemeActive; ?>img/flag_en.png"></a></li> -->
                </ul>
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

<section class="container_video"  >
    <video id="videobanner" playsinline autoplay muted loop poster="<?php echo hashUrl($settingIndex['Option']['value']['poster0']);?>">
        <source src="<?php echo hashUrl($urlThemeActive.'video/intro.mp4'); ?>" type="video/mp4" />
    </video>
    <div class="header_intro"  >
        <div class="header_intro_inside" >
            <div class="header_intro_text">
                <h1><?php echo $settingIndex['Option']['value']['moTadong1Banner'];?> <br> <?php echo $settingIndex['Option']['value']['moTadong2Banner'];?>
                </h1>
            </div>
            <br>
            <div>
                <ul>
                    <li class="list-inline-item" >
                        <!-- button -->
                        <div class="oc_bh15_svg_4">
                            <a class=" btn  oc_bh15_btn_svg  " style="background: transparent;" href="<?php echo $settingIndex['Option']['value']['linkDangKyNgay'];?>" >
                                <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"><i class="fas fa-user-plus index_fontawe" ></i> REGISTER NOW</span>
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
                    </li>
                    <li class="list-inline-item" >
                        <!-- button -->
                        <div class="oc_bh15_svg_4">
                            <a  class=" btn  oc_bh15_btn_svg  " href="<?php echo $settingIndex['Option']['value']['linkTaiUngDung'];?>" style="width: 190px;">
                                <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"><i class="fas fa-download index_fontawe" ></i> DOWNLOAD HOUSE3D</span>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<div class="headerbot" >
    <div class="row h-100" style="margin:0;">
        <div class="col-lg-7 mr-auto my-auto mx-auto ">
            <div class="row ">
                <div class="col-6 text-center justify-content-center align-self-center">
                    <div class="headerbot_text pdr">
                        <span class="timer count-title count-number" data-to="<?php echo $settingIndex['Option']['value']['thongKeModel'];?>" data-speed="3000"></span>  <span>+</span>
                        <p >3D MODELS</p>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <div class="headerbot_text pdl">
                        <span class="timer count-title count-number" data-to="<?php echo $settingIndex['Option']['value']['thongKeMauThietKe'];?>" data-speed="3000"></span> <span>+</span>
                        <p >DESIGN TEMPLATES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<script>
    $(document).ready(function() {
        var w=$(window).innerHeight();
        var width=$(window).innerWidth();
        // var a = $('#videobanner').innerHeight();
        var cao_video = width/1.77779;
        if(width>1023){
            var x=60;
            var z = 90;
            var y = w - x-z;
            $('.container_header').css("height", x, '!important');
            $('.headerbot').css("height", z, '!important');
            $('.container_video').css("height", y, '!important' );
        } else{
            var x=60;
            var z = 69;
            var y = w - x-z;
            $('.container_header').css("height", x, '!important');
            $('.headerbot').css("height", z, '!important');
            $('.container_video').css("height", cao_video, '!important' );
        }
    });
</script>

<!-- jump num -->
<script src="<?php echo hashUrl($urlThemeActive.'js/jump_number.js'); ?>"></script>



<section class="section_one" >
    <div class="container-fluid">
        <div class="text-center secone_title">
            <h1><?php echo $settingIndex['Option']['value']['tieuDeCongCuThietKeDong1'];?> <br> <?php echo $settingIndex['Option']['value']['tieuDeCongCuThietKeDong2'];?></h1>
            <div class="line_title"></div>
        </div>
        <div class="row">
            <div class=" col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second" >
                <div class="secone_info ">
                    <div class="secone_info_stt">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeHeadingND1'];?></p>
                    </div>
                    <div class="secone_info_tit">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeTieuDeND1'];?></p>
                    </div>
                    <div class="secone_info_des">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietMoTaND1'];?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 od_first">
                <div class="secone_video flex_end">
                    <video width="100%" height="100%" playsinline autoplay muted loop poster="<?php echo hashUrl($settingIndex['Option']['value']['poster1']);?>">
                        <source src="<?php echo hashUrl($settingIndex['Option']['value']['CongCuThietKeVideoND1']);?>" type="video/mp4" />
                    </video>
                </div>

            </div>
        </div>

        <div class="row secone_info_margin75_0">
            <div class="col-lg-6 col-md-6 od_first">
                <div class="secone_video flex_start">
                    <video width="100%" height="100%" playsinline autoplay muted loop poster="<?php echo hashUrl($settingIndex['Option']['value']['poster2']);?>">
                        <source src="<?php echo hashUrl($settingIndex['Option']['value']['CongCuThietKeVideoND2']);?>" type="video/mp4" />
                    </video>
                </div>

            </div>
            <div class="col-lg-5 col-md-5 od_second">
                <div class="secone_info ">
                    <div class="secone_info_stt">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeHeadingND2'];?></p>
                    </div>
                    <div class="secone_info_tit">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeTieuDeND2'];?></p>
                    </div>
                    <div class="secone_info_des">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietMoTaND2'];?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second">
                <div class="secone_info ">
                    <div class="secone_info_stt">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeHeadingND3'];?></p>
                    </div>
                    <div class="secone_info_tit">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietKeTieuDeND3'];?></p>
                    </div>
                    <div class="secone_info_des">
                        <p><?php echo $settingIndex['Option']['value']['CongCuThietMoTaND3'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 od_first">
                <div class="secone_video flex_end">
                    <video width="100%" height="100%" playsinline autoplay muted loop poster="<?php echo hashUrl($settingIndex['Option']['value']['poster3']);?>">
                        <source src="<?php echo hashUrl($settingIndex['Option']['value']['CongCuThietKeVideoND3']);?>" type="video/mp4" />
                    </video>
                </div>

            </div>
        </div>
        <?php
        $a = $settingIndex['Option']['value']['otherResources'];
        if($a['blockIndex'] != 0) {
            $blocks = $a['blocks'];
            if ($blocks) {
                $blocks = array_merge($blocks);
                for ($i = 0; $i < count($blocks); $i++) {
                    if ($i % 2 == 0) {
                        ?>
                        <div class="row secone_info_margin75_0">
                            <div class="col-lg-6 col-md-6 od_first">
                                <div class="secone_video flex_start">
                                    <video width="100%" height="100%" playsinline autoplay muted loop
                                           poster="<?php echo hashUrl($blocks[$i]['Video']); ?>">
                                        <source src="<?php echo hashUrl($blocks[$i]['Video']); ?>"
                                                type="video/mp4"/>
                                    </video>
                                </div>

                            </div>
                            <div class="col-lg-5 col-md-5 od_second">
                                <div class="secone_info ">
                                    <div class="secone_info_stt">
                                        <p><?php echo $blocks[$i]['Head']; ?></p>
                                    </div>
                                    <div class="secone_info_des">
                                        <p><?php echo $blocks[$i]['Content']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php
                    } else {

                        ?>
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 od_second">
                                <div class="secone_info ">
                                    <div class="secone_info_stt">
                                        <p><?php echo $blocks[$i]['Head']; ?></p>
                                    </div>
                                    <div class="secone_info_des">
                                        <p><?php echo $blocks[$i]['Content']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 od_first">
                                <div class="secone_video flex_end">
                                    <video width="100%" height="100%" playsinline autoplay muted loop
                                           poster="<?php echo hashUrl($blocks[$i]['Video']); ?>">
                                        <source src="<?php echo hashUrl($blocks[$i]['Video']); ?>"
                                                type="video/mp4"/>
                                    </video>
                                </div>

                            </div>
                        </div>

                        <?php
                    }
                }
            }
        }
        ?>
    </div>
</section>


<section class="section_two">
    <div class="container-fluid">
        <div class="text-center secone_title">
            <h1><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeDong1'];?> <br> <?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeDong2'];?></h1>
            <div class="line_title"></div>
        </div>
        <div class="h3d-container" >
            <div class="row">
                <div class="col-lg-6 sectwosub_contai">
                    <div class="sectwosub sectwosub1 ">
                        <div class="sectwosub_img">
                            <img src="<?php echo hashUrl($settingIndex['Option']['value']['NangCaoHieuQuaIconKhoi1']);?>" class="img-fluid">
                        </div>
                        <div class="sectwo_tit text-center">
                            <h1><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeKhoi1'];?></h1>
                        </div>
                        <div class="sectwo_des text-center">
                            <p><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaMoTaKhoi1'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sectwosub_contai">
                    <div class="sectwosub sectwosub2">
                        <div class="sectwosub_img">
                            <img src="<?php echo hashUrl($settingIndex['Option']['value']['NangCaoHieuQuaIconKhoi2']);?>" class="img-fluid">
                        </div>
                        <div class="sectwo_tit text-center">
                            <h1><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeKhoi2'];?></h1>
                        </div>
                        <div class="sectwo_des text-center">
                            <p><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaMoTaKhoi2'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sectwosub_contai">
                    <div class="sectwosub sectwosub2">
                        <div class="sectwosub_img">
                            <img src="<?php echo hashUrl($settingIndex['Option']['value']['NangCaoHieuQuaIconKhoi3']);?>" class="img-fluid">
                        </div>
                        <div class="sectwo_tit text-center">
                            <h1><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeKhoi3'];?></h1>
                        </div>
                        <div class="sectwo_des text-center">
                            <p><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaMoTaKhoi3'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sectwosub_contai">
                    <div class="sectwosub sectwosub2">
                        <div class="sectwosub_img">
                            <img src="<?php echo hashUrl($settingIndex['Option']['value']['NangCaoHieuQuaIconKhoi4']);?>" class="img-fluid">
                        </div>
                        <div class="sectwo_tit text-center">
                            <h1><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaTieuDeKhoi4'];?></h1>
                        </div>
                        <div class="sectwo_des text-center">
                            <p><?php echo $settingIndex['Option']['value']['NangCaoHieuQuaMoTaKhoi4'];?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="secone_platform" >
    <div class="container-fluid">
        <div class="secone_part1_pf">
            <div class="text-center secone_title">
                <h1><?php echo $settingIndex['Option']['value']['ThietKeAnTuongTieuDe'];?></h1>
                <div class="line_title"></div>
            </div>
        </div>
    </div>
    <div class="main_gallary">
        <div class="col-lg-10 my-auto mx-auto">
            <div class="row row_gallery">
                <?php
                global $modelAlbum;
                if(!empty($settingIndex['Option']['value']['ThietKeAnTuongAlbum'])){
                    $album = $modelAlbum->getAlbum($settingIndex['Option']['value']['ThietKeAnTuongAlbum']);
                    ?>
                    <div class="col-lg-4 col_gallery">
                        <?php if(isset($album['Album']['img'][0]['src'])){?>
                            <div class="feature_item">
                                <a target="_blank" href="<?php echo @$album['Album']['img'][0]['link']; ?>">
                                    <figure class="item_img">
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][0]['src']); ?>" width="100%">
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
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][4]['src']); ?>" width="100%">
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
                                        <img src="<?php echo hashUrl(@$album['Album']['img'][5]['src']);?>" width="100%">
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
        <div class="col-lg-10 my-auto mx-auto 	">
            <div class="text-center">
                <div class="">
                    <a  class="btn see_more" href="/gallery"  >
                        <span class="oc_bh15_btn_svg_label" style="font-size: 12px;">SEE MORE</span>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</section>

<section class="appdownload">
    <div class="container-fluid">
        <div class="h3d-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="appdownload_left">
                        <div class="appdownload_title">
                            <h1><?php echo $settingIndex['Option']['value']['UngDungThietKe3DTieuDe'];?></h1>
                        </div>
                        <div class="appdownload_list">
                            <?php echo $settingIndex['Option']['value']['UngDungThietKe3DNoiDung'];?>
                        </div>

                        <div class="row">
                            <div class="col-6 col-sm-4 col-md-6 col-xl-4 ">
                                <!-- button -->
                                <div class="oc_bh15_svg_4">
                                    <a class=" btn  oc_bh15_btn_svg  " href="<?php echo $settingIndex['Option']['value']['linkTaiUngDung'];?>" style="margin:0; width: 190px;" >
                                        <span class="oc_bh15_btn_svg_label" style="font-size: 12px;"><i class="fas fa-download index_fontawe" ></i> DOWNLOAD HOUSE3D</span>
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
                            <div class="col-6 col-sm-6 col-md-6 col-xl-6  appdownload_hd_contai">
                                <div class="appdownload_hd">
                                    <a href="<?php echo $settingIndex['Option']['value']['UngDungThietKe3DLinkHDSD'];?>">Support & Learning</a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <a href="<?php echo @$settingIndex['Option']['value']['linkTaiUngDung'];?>">
                            <img src="<?php echo hashUrl(@$settingIndex['Option']['value']['UngDungThietKe3DAnh']);?>"
                                 alt="Ứng dụng Thiết kế 3D chạy trên cả Windows và OSX" title="Ứng dụng Thiết kế 3D chạy trên cả Windows và OSX" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<script>
    $(document).ready(function () {
        a = $(".main_gallary .row_gallery .col_gallery:nth-child(1)").innerWidth();
        x = 2 * a / 3;
        $('.feature_item').css("height", (x - 15));
        $('.feature_item.long').css("height", 2 * (x - 15));
    });
</script>


<script type="text/javascript">
    if($(window).innerWidth()>= 768){
        var a= $('.sectwosub_contai').innerHeight();
        $('.sectwosub').css('height', a);
    }
</script>

<script type="text/javascript">
    // GENERAL SETTING
    window.sr = ScrollReveal({ reset: false });
    // Custom Settings
    window.sr = ScrollReveal();
    sr.reveal('.sectwosub', {
        duration: 2000,
        opacity:0
    }, 50);
    sr.reveal('.secone_info', {
        opacity:0,
        scale:0.1,
        delay: 100,
        duration: 1000
    });
    sr.reveal('.secone_img', {
        opacity:0,
        scale:0.1,
        delay: 100,
        duration: 1500
    });
    sr.reveal('.appdownload_left', {
        duration: 2000,
        opacity:0
    }, 50);
    userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/android/i.test(userAgent)) {
        $('#videobanner').css('z-index','10');
        $('video').prop("controls",true);
    }
</script>
<?php include('footer.php'); ?>