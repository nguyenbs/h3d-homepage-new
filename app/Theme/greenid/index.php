<?php getHeader();?>

<!-- <div class="scroll_div pt0"> -->
	<section class="sectionBanner sectionBanner1" data-speed="30" >
		<div class="index-slide-images a1">
			<div id="owl-demo" class="owl-carousel owl-theme slide">
				<?php   
				global  $imagechangeslide ;
				if(!empty($imagechangeslide)){
					foreach ($imagechangeslide['Option']['value']['Data'] as $key => $value) {
						?>
						<div class="item">
							<div class="index-slide">
								<img class="img-fluid" src="<?php echo $value['image'];  ?>">
							</div>
						</div>
						<?php 
					}
				}
				?>
			</div>
		</div>	
	</section>
	
	<section id="index-icon-focus1" class="sectionBanner1" data-speed="30">
		<div class="a1" style="background: white; z-index: 555; padding: 50px 0px 60px;">
			<div class="container">
				<div class="row">
					<?php
                    global $modelNotice;
                    global $themeData;
					$static = $modelNotice->getAllPage();

					if(!empty($static)){
						foreach ($static as $key => $value) {
							if(!empty($themeData['Option']['value']['tab1']) && $value['Notice']['id'] == $themeData['Option']['value']['tab1']){
								?>
								<div class="col-sm-3">
									<div class="item_ct">
										<div class="item_ct_img img_effect_zoom">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image'];  ?>" class="img-fluid" alt=""></a>
										</div>
										<div class="item_ct_text">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
											<p><?php echo @$value['Notice']['introductory']; ?> </p>
										</div>
									</div>
								</div>
								<?php 
							}
						}
					}
					?>

					<?php 
					if(!empty($static)){
						foreach ($static as $key => $value) {
							if(!empty($themeData['Option']['value']['tab2']) && $value['Notice']['id'] == $themeData['Option']['value']['tab2']){
								?>
								<div class="col-sm-3">
									<div class="item_ct">
										<div class="item_ct_img img_effect_zoom">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image'];  ?>" class="img-fluid" alt=""></a>
										</div>
										<div class="item_ct_text">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
											<p><?php echo @$value['Notice']['introductory']; ?></p>
										</div>
									</div>
								</div>
								<?php 
							}
						}
					}
					?>

					<?php 
					if(!empty($static)){
						foreach ($static as $key => $value) {
							if(!empty($themeData['Option']['value']['tab3']) && $value['Notice']['id'] == $themeData['Option']['value']['tab3']){
								?>

								<div class="col-sm-3">
									<div class="item_ct">
										<div class="item_ct_img img_effect_zoom">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image'];  ?>" class="img-fluid" alt=""></a>
										</div>
										<div class="item_ct_text">
											<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
											<p><?php echo @$value['Notice']['introductory']; ?></p>
										</div>
									</div>
								</div>

								<?php 
							}
						}
					}
					?>
					<?php 
					if(!empty($static)){
						foreach ($static as $key => $value) {
							if(!empty($themeData['Option']['value']['tab4']) && $value['Notice']['id'] == $themeData['Option']['value']['tab4']){
								?>
								<div class="col-sm-3">
									<div class="item_ct">
										<div class="item_ct_img img_effect_zoom">
											<a href="https://vseavn.wixsite.com/vsea-vie<?php //echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image'];  ?>" class="img-fluid" alt=""></a>
										</div>
										<div class="item_ct_text">
											<a href="https://vseavn.wixsite.com/vsea-vie<?php //echo getUrlNotice(@$value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
											<p><?php echo @$value['Notice']['introductory']; ?></p>
										</div>
									</div>
								</div>

								<?php 
							}
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- slide banner -->
<script type="text/javascript">
	$("#slided").slider({
		parallax: false,
			// autoplay: 4000,
			direction:'vertical',
			loop:true,
			autoplay:4000
			
		});

	$(window).scroll(function(){

		$('.sectionBanner1').each(function(){
			if ($(this).offset().top < $(window).scrollTop()) {
				var difference = $(window).scrollTop() - $(this).offset().top;
				var half = (difference / 2) + 'px',
				transform = 'translate3d( 0, ' + half + ',0)';

				$(this).find('.a1').css('transform', transform);
			} else {
				$(this).find('.a1').css('transform', 'translate3d(0,0,0)');
			}
		});
	});

</script>


<div class="scroll_div">
	<section id="index-tin-tuc">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title_section">
						<img src="<?php echo $urlThemeActive; ?>img/etintuc.png" class="img-fluid img_title" alt=""> <span> <span style="color:#4CAF50;">GreenID </span> News   </span>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php 
				global $modelNotice;
				$tin = $modelNotice->getNewNotice($limit = 3);
				if(!empty($tin)){
					foreach ($tin as $key => $value) {
						?>
						<div class="col-sm-4">
							<div class="index-tt">
								<div class="index-tt-images1 img_effect_zoom">
									<a href="<?php echo @getUrlNotice($value['Notice']['id']); ?>"><img class="img-fluid" src="<?php echo @$value['Notice']['image']; ?>"></a>
								</div>	
								<div class="index-tt-title">
									<a href="<?php echo @getUrlNotice($value['Notice']['id']); ?>"><strong><?php echo $value['Notice']['title']; ?></strong></a>
								</div>
								<div class="index-tt-content">
									<?php echo @$value['Notice']['introductory']; ?>
								</div>
							</div>
						</div>
						<?php 
					}
				}


				?>

			</div>
		</div>
	</section>
</div>

<div class="scroll_div">
	<section id="index-event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title_section">
						<img src="<?php echo $urlThemeActive; ?>img/esukien.png" class="img-fluid img_title" alt=""> <span> <span style="color:#4CAF50;"> GreenID </span> Events</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="bhoechie-tab-container">
				<div class="row">
					<div class="col-sm-8 col-md-9 bhoechie-tab">
						<?php 
						global $themeData;
						// pr($themeData['Option']['value']['sukien']);
						if(!empty($themeData['Option']['value']['sukien'])){
							$listNotice=$modelNotice->getOtherNotice(array($themeData['Option']['value']['sukien']),$limit=3,$conditions=array()); 
							// pr($listNotice);
							$dem = -1;
							if(!empty($listNotice)){
								foreach ($listNotice as $key => $value) {
									$dem++;
									if($dem == 0){
										$active = 'active';
									}
									else{
										$active = '';
									}
									?>
									<div class="bhoechie-tab-content <?php echo $active; ?>">
										<div class="index-event-right">
											<div class="index-event-right-img img_effect_zoom">
												<img src="<?php echo @$value['Notice']['image'];?>" class="img-fluid" alt="">
											</div>
											<div class="index-event-right-text">
												<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><strong><?php echo @$value['Notice']['title'];?></strong></a>
												<p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('d/m/Y',@$value['Notice']['time']);?></p>
											</div>
										</div>
									</div>
									<?php 
								}
							}
						}
						?>
					</div>
					<div class="col-sm-4 col-md-3 bhoechie-tab-menu index-event-left">
						<div class="list-group">
							<?php 
							if(!empty($themeData['Option']['value']['sukien'])){
								global $modelNotice;
								$listNotice=$modelNotice->getOtherNotice(array($themeData['Option']['value']['sukien']),$limit=3,$conditions=array()); 
								$dem = -1;
								if(!empty($listNotice)){
									foreach ($listNotice as $key => $value) {
										// pr($value);
										$dem++;
										if($dem == 0){
											$active = 'active';
										}
										else{
											$active = '';
										}
										?>
										<a href="javascript:void(0);" class="list-group-item <?php echo $active; ?>">
											<div class="row">
												<div class="col-sm-6 col">
													<div class="index-e-images1">
														<img class="img-fluid" src="<?php echo @$value['Notice']['image'];?>">
													</div>
												</div>
												<div class="col-sm-6 col">
													<div class="index-e-title">
														<p class=""><i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo date('d/m/Y',@$value['Notice']['time']);?></p>
														<p><strong><?php echo @$value['Notice']['title'];?></strong></p>
													</div>
												</div>
											</div>
										</a>
										<?php 
									}
								}
							}
							?>

						</div>
					</div>
				</div>
			</div>
			<div class="view-all text-center"><a style="color: #fff;" href="<?php echo getUrlNoticeCategory($themeData['Option']['value']['sukien']); ?>">See more</a></div>
		</div>
	</section>
</div>

<div class="scroll_div">
	<section id="index-du-an">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="index-da-title title_section">
						<img src="<?php echo $urlThemeActive; ?>img/eduan.png" class="img-fluid img_title" alt=""> <span> <span style="color:#4CAF50;"> GreenID </span> Outstanding Project </span>
					</div>
				</div>
			</div>
			<div class="index-duan">
				<div class="row">
					<?php 
					if(function_exists('getListTimeLine')){
						$data=getListTimeLine(10);
						if(!empty($data)){
							foreach ($data as $key => $value) {
								if(!empty($themeData['Option']['value']['duan1']) && ($value['TimeLine']['id']== $themeData['Option']['value']['duan1']) ){
									?>
									<div class="col col-sm-4">
										<div class="du_an_1">
											<a href="<?php echo getUrlProject($value['TimeLine']['id']);?>">
												<div class="du_an_1_img">
													<img class="img-fluid" src="<?php echo @$value['TimeLine']['image']; ?>">
												</div>
											</a>
											<div class="du_an_1_text">
												<a href="<?php echo getUrlProject($value['TimeLine']['id']);?>"><?php echo @$value['TimeLine']['name']; ?></a>
											</div>
										</div>
									</div>

									<?php 
								}
							}
						}
					}
					?>
					<?php 
					if(!empty($data)){
						foreach ($data as $key => $value) {
							if(!empty($themeData['Option']['value']['duan2']) && ($value['TimeLine']['id']== $themeData['Option']['value']['duan2']) ){
								?>
								<div class="col col-sm-4">
									<div class="du_an_1">
										<a href="<?php echo getUrlProject($value['TimeLine']['id']);?>">
											<div class="du_an_1_img">
												<img class="img-fluid" src="<?php echo @$value['TimeLine']['image']; ?>">
											</div>
										</a>
										<div class="du_an_1_text">
											<a href="<?php echo getUrlProject($value['TimeLine']['id']);?>"><?php echo @$value['TimeLine']['name']; ?></a>
										</div>
									</div>
								</div>
								<?php 
							}
						}
					}
					?>
				</div>
			</div>

		</div>
	</section>
</div>

<div class="scroll_div pt1">
	<section id="index-tai-tro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title_section">
						<img src="<?php echo $urlThemeActive; ?>img/etaitro.png" class="img-fluid img_title" alt=""> <span><span style="color:#4CAF50;">GreenID</span> Donor </span>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="owl-demoo " class="owl-carousel owl-theme slide2">
						<?php 
						global $imagechangeLogoDonor;  
						global $imagechangeLogoPartner;  
						global $modelOption;
						$partner = $modelOption->getOption('partnerSetting');
						$donor = $modelOption->getOption('donorSetting');
						if(!empty($themeData['Option']['value']['donghanh']) && ($themeData['Option']['value']['donghanh'] == $partner['Option']['value']['tData'] )  ){
							if(!empty($imagechangeLogoPartner['Option']['value']['Data'])){
								foreach ($imagechangeLogoPartner['Option']['value']['Data'] as $key => $value) {
									?>
									<div class="items">
										<a href="<?php echo $urlHomes; ?>partner">
											<img class="img-fluid" src="<?php echo $value['image']; ?>">
										</a>
									</div>
									<?php 
								}
							}
						}

						if(!empty($themeData['Option']['value']['donghanh']) && ($themeData['Option']['value']['donghanh'] == $donor['Option']['value']['tData'] )  ){
							if(!empty($imagechangeLogoDonor['Option']['value']['Data'])){
								foreach ($imagechangeLogoDonor['Option']['value']['Data'] as $key => $value) {
									?>
									<div class="items">
										<a href="<?php echo $urlHomes; ?>donor">
											<img class="img-fluid" src="<?php echo $value['image']; ?>">
										</a>
									</div>
									<?php 
								}
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
	$(document).ready(function() {
		var owl = $('.slide1');
        if(!owl || owl.owlCarousel === undefined) return;
		owl.owlCarousel({
			autoplay: true,
			margin: 10,
			navText: [ '', '' ],
			nav: true,
			dots: true,
			loop: true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		});

		var owl = $('.slide2');
		owl.owlCarousel({
			autoplay: true,
			margin: 10,
			navText: [ '', '' ],
			nav: true,
			dots: true,
			loop: true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		});

		var owl = $('.slide');
		owl.owlCarousel({
			autoplay:true,
			margin: 10,
			navText: [ '', '' ],
			nav: true,
			dots: true,
			loop: true,
			items:1
		});

		$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
			e.preventDefault();
			$(this).siblings('a.active').removeClass("active");
			$(this).addClass("active");
			var index = $(this).index();
			$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
			$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
		});

		var w=  $(window).innerWidth();
		if(w>=768){
			var x = $('.index-event-left .list-group').innerHeight();
			$('.index-event-right').css({'height': x});
		}


		var h=$(window).innerHeight();
		var index_event = $('#index-event').offset().top;
		$(window).scroll(function(){
			if(index_event <h){
				console.log('a');
			}
		});

		var ti_le = w/h;
		if(ti_le <1.6){
			$('.scroll_div').removeClass('scroll_div');
		}


		var header1=$('#header1').innerHeight();
		var h_banner = h-header1;
		// document.write(h_banner);
		if(w >=992){
			$('.index-slide-images, .index-slide-images .owl-item, .index-slide-images .owl-item .index-slide').css({'height': h_banner});
		}
		



	// var head = $('header').innerHeight();
	// var index_banner = h-head;
	// if(w >=992){
	// 	$('#index-slide-images, .index-slide, .sectionBanner, .sectionBanner .owl-item').css({'height': index_banner});
	// }
	

})
</script>



<script>
	$(function() {
		$.scrollify({
			// section : ".scroll_div",
                sectionName : false, //bỏ qua
               // interstitialSection : "test2", //cũng bỏ qua
               easing: "easeOutExpo",
               scrollSpeed: 600,
               setHeights: false,

           });

	});
</script>


<?php getFooter() ;?>