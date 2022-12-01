<?php
global $footerSetting;
?>
<footer >
    <div class="container-fluid">
        <div class="footer_top">
            <div class="h3d-container">
                <div class="row" >
                    <div class="col-sm-1 col-md-1 d-lg-none"></div>
                    <div class="col-sm-5 col-md-5  col-lg-4   margin_bottom30">
                        <div class="footer_one">
                            <div class="footer_logo">
                                <img src="<?php echo hashUrl(@$footerSetting['Option']['value']['logo']); ?>" class="img-fluid">
                            </div>
                            <ul class="footer_one_listinfo">
                                <li><i class="fab fa-fw fa-facebook-f h3d-footer-icon"></i>
                                    <a target="_blank" href="<?php echo @$footerSetting['Option']['value']['facebook']; ?>"><?php echo @$footerSetting['Option']['value']['facebook']; ?></a>
                                </li>
                                <li><i class="fab fa-fw fa-facebook-messenger h3d-footer-icon"></i><a target="_blank" href="https://m.me/house3d">https://m.me/house3d</a></li>
                                <li>House3D Hanoi</li>
                                <li><i class="fa fa-fw fa-envelope h3d-footer-icon"></i><?php echo @$contactSite['Option']['value']['fone']; ?></li>
                                <li><i class="fa fa-fw fa-map-marker h3d-footer-icon"></i><?php echo @$contactSite['Option']['value']['address']; ?></li>
                                <li>House3D Saigon</li>
                                <li><i class="fa fa-fw fa-envelope h3d-footer-icon"></i>+84932677773</li>
                                <li><i class="fa fa-fw fa-map-marker h3d-footer-icon"></i>No 27A Hoang Viet street, Tan Binh district</li>
								<li>House3D Malaysia</li>
                                <li><i class="fa fa-fw fa-envelope h3d-footer-icon"></i>+60162179845</li>
								<li><i class="fa fa-fw fa-envelope h3d-footer-icon"></i>wymun@house3d.net</li>
                                <li><i class="fa fa-fw fa-map-marker h3d-footer-icon"></i>22-3 jalan C180/1, Dataran C180, 43200 Cheras, Selangorl, Malaysia</li>
                            </ul>

                            <ul class="footer_one_listsocial list-inline">
                                <li class="list-inline-item"><a href="<?php echo @$footerSetting['Option']['value']['facebook']; ?>" title="kết nối facebook" ><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo @$footerSetting['Option']['value']['instagram']; ?>" title="kết nối instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo @$footerSetting['Option']['value']['linkedin']; ?>" title="kết nối linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo @$footerSetting['Option']['value']['youtube']; ?>" title="kết nối youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 d-lg-none"></div>
                    <div class="col-sm-5 col-md-5 col-lg-3  margin_bottom30">
                        <div class="footer_link">

                            <div class="footer_link_tit">
                                <h1><?php echo @$footerSetting['Option']['value']['TieuDeKhoi1']; ?></h1>
                            </div>

                            <ul class="footer_link_list">
                                <?php
                                $listLinkWeb = getListLinkWeb((int) $footerSetting['Option']['value']['sanPhamId']);
                                if (!empty($listLinkWeb)) {
                                    foreach ($listLinkWeb as $link) {
                                        echo "<li ><a href='" . $link['link'] . "'>" . $link['name'] . "</a></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 d-lg-none d-none d-sm-block"></div>
                    <div class="col-6 col-sm-5 col-md-5 col-lg-3  ">
                        <div class="footer_link">
                            <div class="footer_link_tit">
                                <h1><?php echo @$footerSetting['Option']['value']['TieuDeKhoi2']; ?></h1>
                            </div>
                            <ul class="footer_link_list">
                                <?php
                                $listLinkWeb = getListLinkWeb((int) $footerSetting['Option']['value']['BanCanTroGiupId']);
                                if (!empty($listLinkWeb)) {
                                    foreach ($listLinkWeb as $link) {
                                        echo "<li ><a href='" . $link['link'] . "'>" . $link['name'] . "</a></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 d-lg-none d-none d-sm-block"></div>
                    <div class="col-6 col-sm-5 col-md-5 col-lg-2  ">
                        <div class="footer_link">
                            <div class="footer_link_tit">
                                <h1><?php echo @$footerSetting['Option']['value']['TieuDeKhoi3']; ?></h1>
                            </div>
                            <ul class="footer_link_list">
                                <?php
                                $listLinkWeb = getListLinkWeb((int) $footerSetting['Option']['value']['ThongTinThemId']);
                                if (!empty($listLinkWeb)) {
                                    foreach ($listLinkWeb as $link) {
                                        echo "<li ><a href='" . $link['link'] . "'>" . $link['name'] . "</a></li>";
                                    }
                                }
                                ?>
                            </ul>
                            <!--							<hr style="background-color: rgba(159,159,159,1);">-->
                            <br>
                            <br>
                            <ul class="footer_one_listinfo">
                                <a class="" href="https://vi.house3d.com/" style="padding:12px 12px; border: 1px solid rgba(61,147,99,1);border-radius: 10px;"><img class="img-responsive" src="<?php echo $urlThemeActive; ?>img/flag_vn.png" style="margin-right: 5px;">Tiếng Việt</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bot text-center">
        <p>Copyright @ House3D 2017- <?php echo date("Y");?>. All rights reserved.</p>
    </div>
</footer>

<!-- uptop -->
<div id="uptop"  >
    <i class="fas fa-chevron-up"></i>
</div>

<!-- uptop -->
<script>
    // uptop
    $('#uptop').click(function (event) {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    $(window).scroll(function () {
        var a = 500;
        var pos = $(window).scrollTop();
        if (pos > a) {
            $("#uptop").css({
                'opacity': 1,
                'transition': 'all 0.5s '

            });
        } else
            $("#uptop").css({
                'opacity': 0
            });

    });

    // height same div
    if($(window).innerWidth()>= 768){
        var a= $('.sectwosub_contai').innerHeight();
        $('.sectwosub').css('height', a);
    }
    if($(window).innerWidth()>= 768){
        var b= $('.secone_part2_sub_contai').innerHeight();
        $('.secone_part2_sub').css('height', b);
    }
    if($(window).innerWidth()>= 768){
        var c= $('.secone_part2_sub_2_contai').innerHeight();
        $('.secone_part2_sub_2').css('height', c);
    }
    if($(window).innerWidth()>= 992){
        // var d= $('.secfour_services_sub_des_contai').innerHeight();
        var d = 218;
        $('.secfour_services_sub_des').css('max-height', d);
    }

    if ($(window).innerWidth() >= 768) {
        $stick = $('.menu_l');
        $foot = $('footer');
        var margin = 0;
        if($stick.offset() && $foot.offset())
        {
            var offtop = $stick.offset().top - margin;
            var offbtm = $foot.offset().top - (margin * 2 + $stick.height());

            $(window).scroll(function () {
                scrtop = $(window).scrollTop();
                if (scrtop > offtop && $stick.hasClass('natural')) {
                    $stick.removeClass('natural').addClass('fixed').css('top', margin);
                }
                if (offtop > scrtop && $stick.hasClass('fixed')) {
                    $stick.removeClass('fixed').addClass('natural').css('top', 'auto');
                }
                if (scrtop > offbtm && $stick.hasClass('fixed')) {
                    $stick.removeClass('fixed').addClass('bottom').css('top', offbtm + margin);
                }
                if (offbtm > scrtop && $stick.hasClass('bottom')) {
                    $stick.removeClass('bottom').addClass('fixed').css('top', margin);
                }
            });
        }
    }


</script>
<!-- slide index-->
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel.slide_main');
        if(!owl || owl.owlCarousel === undefined) return;
        owl.owlCarousel({
            // animateOut: 'slideOutUp',
            // animateIn: 'flipInX',
            animateOut: 'zoomOut',
            animateIn: 'fadeIn',
            // stagePadding:30,
            navText: [ '', '' ],
            smartSpeed: 450,
            margin: 10,
            autoplay: false,
            nav: true,
            loop: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    })
</script>
<script>
    $(document).ready(function () {
        var a = $(".main_gallary .row .col-lg-4:nth-child(1)").innerWidth();
        var x = 2 * a / 3;
        $('.feature_item').css("height", (x - 15));
        $('.feature_item.long').css("height", 2 * (x - 15));
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.has_sub').hover(function () {
            $(this).find('.ul_sub').slideDown('fast');
        }, function () {
            $(this).find('.ul_sub').hide();
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('.togglesub').click(function (event) {
            $(this).next('.ul_sub_hidden').slideToggle('fast');
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.buttonhidden').click(function (event) {
            $('.menuhiddentop_ct').toggle('slide');
        });
    });
</script>


<!-- loadcontent -->
<script src="<?php echo hashUrl($urlThemeActive.'js/main.js'); ?>"></script>
<script src="<?php echo hashUrl($urlThemeActive.'js/modernizr-2.6.2.min.js'); ?>"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85629760-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-85629760-3');
</script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="195248311057812"
     theme_color="#67b868"
     logged_in_greeting="Welcome to House3D! Let me help you to discover our products and services..."
     logged_out_greeting="Welcome to House3D! Hopefully you have got all necessary information.">
</div>
</body>
</html>
