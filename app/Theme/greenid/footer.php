<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="cot1">
					<div class="cot1">
						<p class="pd"><strong>Green Innovation and Development Centre</strong></p>
						<p><?php echo $contactSite['Option']['value']['address']; ?></p>
						<p>Phone: <?php echo $contactSite['Option']['value']['fone']; ?> - Fax: <?php echo $contactSite['Option']['value']['fax']; ?></p>
						<p>Website:<a href=" <?php echo $infoSite['Option']['value']['domain']; ?>"> <?php echo $infoSite['Option']['value']['domain']; ?></a></p>
						<p>Email:<a href=" info@greenidvietnam.org.vn"> <?php echo $contactSite['Option']['value']['email']; ?></a></p>
						<p><a href="http://mantanservices.com/" style="font-weight: bold;">Design by Mantan Group</a> </p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="f_left">
					<strong class="pd">Static</strong>
					<div class="thong-ke">
						<?php if( function_exists('showStatic') ) showStatic();?>
					</div>
				</div>


			</div>
			<div class="col-sm-4">
          <!--   <div class="f_right ">
                <strong class="pd">Kênh thông tin khác</strong>
            </div> -->
            <br>
            <div id="fb-root" class=" fb_reset lu">
            	<?php if(function_exists("showLikeFanpage")) showLikeFanpage(); ?>
            </div>

        </div>
    </div>
</div>
</footer>
</div>
<script src="<?php echo $urlThemeActive; ?>js/baguetteBox.js"></script>
<script src="<?php echo $urlThemeActive; ?>js/pluginslightbox.js"></script>
<script>
	window.onload = function() {
		if(typeof oldIE === 'undefined' && Object.keys)
			hljs.initHighlighting();

		baguetteBox.run('.baguetteBoxOne');
		baguetteBox.run('.baguetteBoxTwo');
		baguetteBox.run('.baguetteBoxThree', {
			animation: 'fadeIn'
		});
		baguetteBox.run('.baguetteBoxFour', {
			buttons: false
		});
		baguetteBox.run('.baguetteBoxFive', {
			captions: function(element) {
				return element.getElementsByTagName('img')[0].alt;
			}
		});
	};
</script>
<!--<script>
    $(document).ready(function () {
        var owl3 = $('.owl-carousel3');
        owl3.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    })
</script>-->
<div id="fb-root"></div>
<script>(function (d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id))
		return;
	js = d.createElement(s);
	js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script>
    // $(document).ready(function() {
        // fix menu
        var x = $('#nav_menu').offset().top;
        // document.write(x);
        $(window).scroll(function(){
        	if ( $(window).scrollTop() >= 76 ){
        		$('#nav_menu').addClass('h_fix');
        		$('.sectionBanner').addClass('s_fix');
        		
        	} else{
        		$('#nav_menu').removeClass('h_fix');
        		$('.sectionBanner').removeClass('s_fix');
        	}
        });


        
        $(window).scroll(function(){
            // if ( distance == h ){
            //     console.log('a');
            //     $('body, html').animate({scrollTop:elementOffset}, '500');
            // }

            // if(distance =h){
            //     console.log('a');
            //     $('body, html').animate({scrollTop:elementOffset}, '500');
            // } else{
            //     console.log('b');
            // }

            
            // var h = $(window).innerHeight();
            // var a = $('#index-icon-focus1').innerHeight();
            // var b = h-a;
            // var scrollTop = $(window).scrollTop();
            // var c = $('#index-tin-tuc').offset().top;
            // if(c=b-1){
            //     console.log('a');
            //     $('body, html').animate({scrollTop:$('#index-tai-tro').offset().top});
            // }
            

        });




    // });
</script>

</body>
</html>