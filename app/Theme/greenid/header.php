<!DOCTYPE html>
<html>
<head>
 <?php mantan_header();?>
 <title>Green Innovation and Development Centre</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
 <script src="<?php echo $urlThemeActive; ?>js/owl.carousel.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style2.css">
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

 <!-- slide  -->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
 <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
 <script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/jquery.oozou.slider.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/oozou.slider.css" />

 <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/owl.carousel.min.css">
 <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/owl.theme.default.min.css">
 <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/baguetteBox.css">

 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.theme.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.carousel.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.carousel.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style_t.css"> 
 <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> -->

 <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/menu.css">
 <script src="<?php echo $urlThemeActive; ?>js/menu.js"></script>
 <script src="<?php echo $urlThemeActive; ?>js/jquery.scrollify.js"></script>



 <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
 <!-- <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/overcast/jquery-ui.css" /> -->
 <!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script> -->


</head>
<body>
  <div class="wrapper">
    <div class="scroll_div pt01">
      <header id="header1">
        <div class="head-xanh " >
        </div>
        <div class="container ">
          <div class="row margin_tb_9 " >
            <div class="col col-md-3 col-lg-2">
              <div class="main-logo">
                <a href="/"><img class="img-responsive" src="<?php echo $urlThemeActive; ?>img/logo.png"></a>
              </div>
            </div>
            <div class="col col-md-3 col-lg-4 d-flex">
              <div class="in_head_text justify-content-center align-self-center">
                Green Innovation and Development Centre
              </div>
            </div>
            <div class="col-md-6 col-lg-6 d-flex pull-right">
              <div class="he_search justify-content-center align-self-center">
                <div class="search-container">
                  <form action="<?php echo $urlHomes; ?>notices/search">
                    <ul class="list-inline lang_icon">
                      <li class="list-inline-item">
                        <input type="text" placeholder="" name="key">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </li>
                      <li class="list-inline-item"><a href=""><img src="<?php echo $urlThemeActive; ?>img/en.png" class="img-fluid" alt=""></a></li>
                      <li class="list-inline-item"><a href=""><img src="<?php echo $urlThemeActive; ?>img/vi.png" class="img-fluid" alt=""></a></li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav id="nav_menu" >
          <div class="container">
                  <!--   <div class="row">
                    <div class="col-sm-12"> -->
                      <div id='cssmenu'>
                        <ul>
                         <?php 
                         $menu_top=getMenusDefault();
                         if(!empty($menu_top)){
                          global $urlNow;
                          $s1=ltrim($urlNow,'http://');
                          $s2=ltrim($s1,$infoSite['Option']['value']['domain']);
                          foreach ($menu_top as $key => $value) {
                            if(!empty($value['sub'])){
                              ?>
                              <li class="has-sub <?php foreach ($value['sub'] as $key => $value1) {
                                if($value1['url']==$s2)
                                {
                                  echo 'active';
                                }
                              } ?> ">
                              <span class="submenu-button1"><a href='javascript:void(0)'></span><?php echo $value['name'];?></a>
                              <ul >
                                <?php
                                foreach ($value['sub'] as $key => $value1) {
                                  ?>

                                  <li class="<?php if($s2==$value1['url']) echo'active';?>"><a    href="<?php  echo $value1['url'] ?>" ><?php echo $value1['name']; ?></a></li>
                                  <?
                                }
                                ?>
                              </ul>
                            </li>
                            <?php 

                          }
                          else{
                            ?>
                            <li class="<?php //if($s2==$value['url']) echo'active';?>"><span class="submenu-button1"><a href='<?php echo $value['url'];?>'></span><?php echo $value['name'];?></a></li>
                            <?php 
                          }
                        }
                      }
                      ?>
                    </ul>
                  </div>

                  <ul class="list-inline in_icon_lk">
                    <li class="list-inline-item abc1" id="buy_contact1">
                      <a href="javascript:void(0);"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> Donate</a>
                    </li>
                    <?php global $themeData;?>
                    <li class="list-inline-item abc">
                      <a href="<?php echo @$themeData['Option']['value']['fb']; ?>"><i class="fa fa-facebook fb" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item abc">
                      <a href="<?php echo @$themeData['Option']['value']['youtube']; ?>"><i class="fa fa-youtube-play youtube" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item abc">
                      <a href="<?php echo @$themeData['Option']['value']['twitter']; ?>"><i class="fa fa-twitter twitter" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                 <!--  </div>
                 </div> -->
               </div>

             </nav>
           </header>
           <div id="buy_contact">
            <!-- <a href="javascript:void(0);"><i class="fa fa-angle-left" aria-hidden="true"></i> Liên hệ đặt mua</a> -->
            <div id="subscribe-form" style="">
              <form id="paid_form" action="" method="POST">
                <h2 class="title">CONTACT</h2>

                <p class="paid-message"><small>* Please enter your information</small></p>

                <p><input type="text" name="paid_name" placeholder="Full name *" required=""></p>

                <p><input type="text" name="paid_phone" placeholder="Phone *" required=""></p>

                <p><input type="text" name="paid_email" placeholder="Email *" required=""></p>

                <textarea name="paid_note" rows="5" placeholder="Message *" required=""></textarea>

                <p class="">
                  <input type="hidden" name="action" value="frontend__paid_submit">
                  <input type="hidden" name="nonce" value="d09a01b346">
                  <input type="submit" name="paid_submit" id="paid_submit" class="submit-btn" value="Send">
                </p>
              </form>                    

              <div class="close-btn"></div>
            </div>
          </div>





          <script type="text/javascript">
            (function ($) {
              $(document).ready(function () {

                $('#buy_contact1 a').on('click', function () {
                  $('#subscribe-form').css({
                    'transform': 'translateX(0)',
                    '-webkit-transform': 'translateX(0)',
                    '-moz-transform': 'translateX(0)',
                    '-ms-transform': 'translateX(0)',
                    '-o-transform': 'translateX(0)'
                  });
                });
                $('.close-btn').on('click', function () {
                  $('#subscribe-form').css({
                    'transform': 'translateX(260px)',
                    '-webkit-transform': 'translateX(260px)',
                    '-moz-transform': 'translateX(260px)',
                    '-ms-transform': 'translateX(260px)',
                    '-o-transform': 'translateX(260px)'
                  });
                });
              });
            })(jQuery);
          </script>





          <script>
            $(document).ready(function() {
              var x = $(window).innerWidth();
              var y = $(window).innerHeight();
              if(x <= 768){
                $('#nav_menu #cssmenu > ul').css({'overflow-y': 'scroll', 'height': y});
              }
            });
          </script>



