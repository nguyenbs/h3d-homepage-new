<?php include('header.php'); ?>
<section class="viewnews_container" >
	<div class="h3d-container">
		<div class="row">
			<div class="col-lg-8">
				<div class="viewnews">
					<div class="viewNew_title">
						<h1><?php echo $infoNotice['Notice']['title']; ?></h1>

						<span ><i class="fas fa-user"></i> <?php echo $infoNotice['Notice']['author']; ?> </span>
						<span style="margin-left: 30px;"><i class="fas fa-eye" ></i> <?php echo $infoNotice['Notice']['view']; ?> views</span>
						<span style="margin-left: 30px;"><i class="fas fa-clock"></i> <?php echo date('d/m/Y',$infoNotice['Notice']['time']);?>  </span>
						<div class="clearfix"></div>
					</div>

					<div style="margin: 30px 0;">
                        <?php
                            global $modelNotice;
                            $listNewNotice = $modelNotice->getNewNotice(5);
                            if(!empty($listNewNotice)){
                                foreach ($listNewNotice as $newNotice){
                        ?>
						<div class="tintucsub">
							<a href="<?php echo getUrlNotice($newNotice['Notice']['id']); ?>"><?php echo $newNotice['Notice']['title']; ?> </a>
						</div>
                        <?php }
                            }?>
					</div>
					<br>
					<div class="viewnew_content">
						<div class="viewnew_des">
							<p><strong><?php echo @$infoNotice['Notice']['introductory']; ?></strong></p>
						</div>
						<div >
                            <?php echo @$infoNotice['Notice']['content']; ?>
						</div>
					</div>
					<br>
					<!-- like share -->
<!--					<div class="social" >-->
<!--						<iframe style="display: inline-block;float: left;margin-right: 5px;padding-bottom: 5px;" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=140&layout=button&action=like&size=large&show_faces=true&share=true&height=65&appId" width="140" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>	-->
<!--						<g:plusone size="large"  ></g:plusone>-->
<!--					</div>-->
					<!-- fb comment -->
					<div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
					<div class="clearfix"></div>
					<!-- other -->
					<div class="viewnew_other">
						<h1>See more</h1>
					</div>
					<div class="lineb"></div>
					<div style="margin: 30px 0;">
                        <?php
                            if(!empty($otherNotices )){
                            foreach ($otherNotices  as $key => $value) {
                            if($value['Notice']['id']!=$infoNotice['Notice']['id']){
                        ?>
						<div class="tintucsub">
							<a href="<?php echo getUrlNotice($value['Notice']['id']);?>"><?php echo $value['Notice']['title'];?> </a>
						</div>
                        <?php }}
                            }?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<aside class="sticky-top">
					<div class="consultant_ct" >
						<div class="consultant">
							<div class="consultant_img">
								<img src="<?php echo hashUrl($urlThemeActive.'img/danhsachtuvan.jpg'); ?>" class="img-fluid" alt="img">
							</div>
							<div>
								<div class="consultant_info">
									<ul class="consultant_list">
										<li> Support : <a href=""><strong> <?php echo @$contactSite['Option']['value']['fone'];?></strong></a></li>
										<li> Email : <?php echo @$contactSite['Option']['value']['email'];?></li>
										<li> <?php echo @$contactSite['Option']['value']['address'];?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
		
	</div>
	
</section>

<?php include('footer.php'); ?>

<!-- fb -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>