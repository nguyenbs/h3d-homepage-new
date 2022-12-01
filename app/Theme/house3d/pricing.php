<?php include('header.php'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo hashUrl($urlThemeActive . 'css/banggia.css'); ?>">

    <script type="text/javascript">
        $(document).ready(function () {
            $('.has_sub').hover(function () {
                $(this).find('.ul_sub').slideDown('fast');
            }, function () {
                $(this).find('.ul_sub').hide();
            });
        });
    </script>

    <div class="banner_cat"
         style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl($urlThemeActive . 'img/secthree_platform1.jpg'); ?>');">
        <div class="banner_cat_in">
            <div class="banner_cat_in_tit text-center">
                <h1>PRICING MODEL</h1>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section id="pricing" class="pd_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 my-auto mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 my-auto mx-auto">
                    <div class="tabs">

                        <nav role='navigation' class="transformer-tabs" style="margin-bottom:10px !important;">
                            <ul>
                                <li><a href="#tab-1" class="tab_banggia active">Subscribtions Plans</a></li>
                                <li><a href="#tab-2" class="tab_banggia">Service Pricing</a></li>
                            </ul>
                        </nav>

                        <div id="tab-1" class="active">
                            <div class="text-center secone_title1 ">
                                <h1>Detailed price list by feature</h1>
                                <div class="line_title"></div>
                            </div>
                            <article>
                                <div class="link_ex">
                                    <p>Price: USD / Account / Month</p>
                                    <p>Plan: Subscribtion</p>
                                </div>
                                <div style="height:600px; overflow-y: scroll; border-bottom: 1px solid #ddd">
                                    <table class="table_tab2_pricing">
                                        <thead>
                                            <tr>
                                                <th class="bg-purple">Features</th>
                                                <th class="bg-purple">Plan</th>
                                                <th class="bg-purple">Price</th>
                                                <th class="bg-purple">Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="4" class="sep" >3D Application Design</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Basic design application</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="sep" colspan="4">Advanced Design Modules</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Wall and Floor Paving (Paving)</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">6</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Drop Ceiling & Wall Transformation  (Ceiling &Wall)</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">6</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Wooden Door</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">-</td>
                                            <td class="stylepricing2 default">Close Beta</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Shower Room Design</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">-</td>
                                            <td class="stylepricing2 default">Close Beta</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Wardrobe</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">10</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Kitchen cabinet</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">10</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Custom cabinet</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">10</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">CNC</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">-</td>
                                            <td class="stylepricing2 default">Close Beta</td>
                                        </tr>

<!--                                        <tr>-->
<!--                                            <td class="sep" colspan="4">VR Showroom</td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td class="stylepricing1">Design and Render Showroom</td>-->
<!--                                            <td class="stylepricing2">Subscribtion</td>-->
<!--                                            <td class="stylepricing2">1.000.000</td>-->
<!--                                            <td class="stylepricing2 default">For Business Accounts Only</td>-->
<!--                                        </tr>-->
                                        <tr>
                                            <td class="sep" colspan="4">3D Design Template Library</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Basic design templates</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Basic 3D Model Library</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
<!--                                        <tr>-->
<!--                                            <td class="stylepricing1">Advanced 3D Model Library</td>-->
<!--                                            <td class="stylepricing2">Subscribtion</td>-->
<!--                                            <td class="stylepricing2">300.000</td>-->
<!--                                            <td class="stylepricing2 default"></td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td class="stylepricing1">All designs on the House3D library</td>-->
<!--                                            <td class="stylepricing2">Subscribtion</td>-->
<!--                                            <td class="stylepricing2">300.000</td>-->
<!--                                            <td class="stylepricing2 default"></td>-->
<!--                                        </tr>-->
                                        <tr>
                                            <td class="stylepricing1">Personal library</td>
                                            <td class="stylepricing2">Subscribtion</td>
                                            <td class="stylepricing2">8</td>
                                            <td class="stylepricing2 default"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <a target="_blank" href="https://pay.house3d.com/?currency=USD&locale=en_US" class="btn-lg" style="background-color: #3D875D; color: white; font-size: 12pt; margin:0 auto; width: 300px; text-align: center">
                                        Buy now
                                        <i class="fa fa-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <div id="tab-2">
                            <div class="link_ex">
								Unit Price: <a href="/hcoin">HCoin</a>. <span style="font-style: italic;">Want to learn about HCoin? Click <a
                                            href="/hcoin">here</a></span>
                            </div>
                            <div style="height:641px; overflow-y: scroll; border-bottom: 1px solid #ddd">
                                <div class="table100">
                                    <div class="text-center secone_title1">
                                        <h1>Cloud Rendering</h1>
                                        <div class="line_title"></div>
                                    </div>
                                    <table class="table_tab3">
                                        <thead>
                                        <tr class="table100-head tab3_firstline">
                                            <th class="column1">Resolution</th>
                                            <th class="stylepricing2 column2">Unit</th>
                                            <th class="stylepricing2 column3">Unit Price</th>
                                            <th class="stylepricing2 column4 border_right">Note</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3" style="padding-left: 0 !important;text-align: center !important;">2D Rendering</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">SD (800 x 600)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">HD (1280 x 960)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">8</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Full HD (1920 x 1440)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">24</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">4K Ultra HD (4000 x 3000)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">64</td>
                                            <td class="stylepricing2 border_right">Not supported with GiftCoins</td>
                                        </tr>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3" style="padding-left: 0 !important;text-align: center !important;">Bird's Eye Rendering</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">SD (800 x 600)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">HD (1280 x 960)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">8</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Full HD (1920 x 1440)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">24</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3" style="padding-left: 0 !important;text-align: center !important;">Panoramic 720 Rendering</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Standard 720 Pano VR (3060 x 1530)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">43</td>
                                            <td class="stylepricing2 border_right">Not supported with GiftCoins
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">HD 720 Pano VR (4710 x 2355)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">80</td>
                                            <td class="stylepricing2 border_right">
                                                Not supported with GiftCoins
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Super HD 720 Pano VR</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">-</td>
                                            <td class="stylepricing2 border_right">
                                                Not supported with GiftCoins
                                            </td>
                                        </tr>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3" style="padding-left: 0 !important;text-align: center !important;">VR Showroom Rendering</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Standard 720 Pano Showroom VR (3060 x 1530)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">100 * No.of variants * Discount rate</td>
                                            <td class="stylepricing2 border_right">Not supported with GiftCoins
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">HD 720 Pano Showroom VR (4710 x 2355)</td>
                                            <td class="stylepricing2">Image</td>
                                            <td class="stylepricing2">150 * No.of variants * Discount rate</td>
                                            <td class="stylepricing2 border_right">Resolution of 4K <br>Not supported with GiftCoins</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <br><br>

                                <div class="text-center secone_title1">
                                    <h1>Hosting services</h1>
                                    <div class="line_title"></div>
                                </div>
                                <div class="link_ex">
                                    Unit of Payment : VNĐ
                                </div>
                                <div class="table100">
                                    <table class="table_tab3">
                                        <thead>
                                        <tr class="table100-head tab3_firstline">
                                            <th class="column1">Storage</th>
                                            <th class="stylepricing2 column2">Capacity</th>
                                            <th class="stylepricing2 column3">Price</th>
                                            <th class="stylepricing2 column4 border_right">Ghi chú</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="stylepricing1">Personal Account</td>
                                            <td class="stylepricing2">0.2GB</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Business Account</td>
                                            <td class="stylepricing2">5GB</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right">For Business Accounts Only</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Additional Storage</td>
                                            <td class="stylepricing2">GB/Month</td>
                                            <td class="stylepricing2">40.000</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <br><br>

                                <div class="text-center secone_title1">
                                    <h1>Traning services</h1>
                                    <div class="line_title"></div>
                                </div>
                                <div class="link_ex">
                                    Unit of Payment : VNĐ
                                </div>
                                <div class="table100">
                                    <table class="table_tab3">
                                        <thead>
                                        <tr class="table100-head tab3_firstline">
                                            <th class="column1">Traning</th>
                                            <th class="stylepricing2 column2">Unit</th>
                                            <th class="stylepricing2 column3">Price per Unit</th>
                                            <th class="stylepricing2 column4 border_right">Note</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="stylepricing1">Online</td>
                                            <td class="stylepricing2"></td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Basics at House3D Premises</td>
                                            <td class="stylepricing2">Per Person / Session</td>
                                            <td class="stylepricing2">300.000</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Traning at Client's Premises</td>
                                            <td class="stylepricing2">Per Course</td>
                                            <td class="stylepricing2">3.000.000</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <br><br>

                                <div class="text-center secone_title1">
                                    <h1>Technical support</h1>
                                    <div class="line_title"></div>
                                </div>
                                <div class="link_ex">
                                    Unit of Payment : VNĐ
                                </div>
                                <div class="table100">
                                    <table class="table_tab3">
                                        <thead>
                                        <tr class="table100-head tab3_firstline">
                                            <th class="column1">Support type</th>
                                            <th class="stylepricing2 column3">Price</a></th>
                                            <th class="stylepricing2 column4 border_right">Note</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3"
                                                style="padding-left: 0 !important;text-align: center !important;">Personal Account</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Online feedback within 24 hours</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right"></td>
                                        </tr>
                                        <tr class="tr_bg">
                                            <td colspan="4" class="title_tab3"
                                                style="padding-left: 0 !important;text-align: center !important;">Business Account</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">24 hours Online support</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right">For Business Accounts Only</td>
                                        </tr>
                                        <tr>
                                            <td class="stylepricing1">Phone support</td>
                                            <td class="stylepricing2">Free</td>
                                            <td class="stylepricing2 border_right">For Business Accounts Only</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <a target="_blank" href="https://pay.house3d.com/?currency=USD&locale=en_US" class="btn-lg" style="background-color: #3D875D; color: white; font-size: 12pt; margin:0 auto; width: 300px; text-align: center">
                                    Buy now
                                    <i class="fa fa-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>

<!--                        <nav role='navigation' class="transformer-tabs" style="margin-top: 40px;margin-bottom: 0;">-->
<!--                            <ul>-->
<!--								<li><a href="#tab-1" class="tab_banggia active">Subscribtions Plans</a></li>-->
<!--								<li><a href="#tab-2" class="tab_banggia">Service Pricing</a></li>-->
<!--                            </ul>-->
<!--                        </nav>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        var Tabs = {

            init: function () {
                this.bindUIfunctions();
                this.pageLoadCorrectTab();
            },

            bindUIfunctions: function () {

                // Delegation
                $(document)
                    .on("click", ".transformer-tabs a[href^='#']:not('.active'), .internal-tab-link", function (event) {
                        Tabs.changeTab(this.hash);
                        event.preventDefault();
                    })
                    .on("click", ".transformer-tabs a.active", function (event) {
                        Tabs.toggleMobileMenu(event, this);
                        event.preventDefault();
                    });

            },

            changeTab: function (hash) {
                if (!hash) return;
                var anchor = $("[href=" + hash + "]");

                var div = $(hash);

                // activate correct anchor (visually)
                anchor.addClass("active").parent().siblings().find("a").removeClass("active");

                // activate correct div (visually)
                div.addClass("active").siblings().removeClass("active");

                // update URL, no history addition
                // You'd have this active in a real situation, but it causes issues in an <iframe> (like here on CodePen) in Firefox. So commenting out.
                // window.history.replaceState("", "", hash);

                // Close menu, in case mobile
                anchor.closest("ul").removeClass("open");

            },

            // If the page has a hash on load, go to that tab
            pageLoadCorrectTab: function () {
                this.changeTab(document.location.hash);
            },

            toggleMobileMenu: function (event, el) {
                $(el).closest("ul").toggleClass("open");
            }

        }

        Tabs.init();

    </script>
    <script>

        $(".ul_tab2_pricing").on("click", "li", function () {
            var pos = $(this).index() + 2;
            $("tr").find('td:not(:eq(0))').hide();
            $('td:nth-child(' + pos + ')').css('display', 'table-cell');
            $("tr").find('th:not(:eq(0))').hide();
            $('.li_tab2_pricing').removeClass('active');
            $(this).addClass('active');
        });

        // Initialize the media query
        var mediaQuery = window.matchMedia('(min-width: 640px)');

        // Add a listen event
        mediaQuery.addListener(doSomething);

        // Function to do something with the media query
        function doSomething(mediaQuery) {
            if (mediaQuery.matches) {
                $('.sep').attr('colspan', 4);
                $('.sep1').attr('colspan', 4);
                $('.sep2').attr('colspan', 3);
            } else {
                $('.sep').attr('colspan', 2);
                $('.sep1').attr('colspan', 2);
                $('.sep2').attr('colspan', 1);
            }
        }

        // On load
        doSomething(mediaQuery);
        //# sourceURL=pen.js
    </script>
    <script>
        $(document).ready(function () {
            if ($(window).innerWidth() >= 767) {
                var a = $('.3col_pricing').innerHeight();
                $('.course_item').css('height', a);
            }
        });

    </script>


<?php include('footer.php'); ?>
