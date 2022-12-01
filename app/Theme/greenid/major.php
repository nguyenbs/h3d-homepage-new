<?php getHeader();?></div>
<?php 
global $modelNotice;
global $themeData; 
$static = $modelNotice->getAllPage();
?>
<section >
	<div class="major">
		<img class="img-responsive" src="<?php echo $urlThemeActive; ?>img/b.png">
	</div>
	<?php 
	if(!empty($static)){
		foreach ($static as $key => $value) {
			if(!empty($themeData['Option']['value']['tab1']) && $value['Notice']['id'] == $themeData['Option']['value']['tab1']){
				?>
				<div class="container">
					<div class="row">
						<div class="maj-title">
							<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><?php echo @$value['Notice']['title']; ?></a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="maj-content">
								<?php echo @$value['Notice']['introductory']; ?> 
							</div>
						</div>
					</div>
				</div>
				<?php 
			}
		}
	}
	?>
</section>
<section id="major2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="module-header">
					<h4 class="module-title">
						<a href="" class="c-newest">
							<span>Programs</span>
						</a>
					</h4>
				</div>

			</div>
		</div>
		<div class="row">
			<?php
			if(!empty($static)){
				foreach ($static as $key => $value) {
					if(!empty($themeData['Option']['value']['tab2']) && $value['Notice']['id'] == $themeData['Option']['value']['tab2']){
						?>
						<div class="col-sm-4">
							<div class="item_ct">
								<div class="item_ct_img img_effect_zoom">
									<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image']; ?>" class="img-fluid" alt=""></a>
								</div>
								<div class="item_ct_text">
									<a href=""><?php echo @$value['Notice']['title']; ?> </a>
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
					if(!empty($themeData['Option']['value']['tab3']) && $value['Notice']['id'] == $themeData['Option']['value']['tab3']){
						?>
						<div class="col-sm-4">
							<div class="item_ct">
								<div class="item_ct_img img_effect_zoom">
									<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image']; ?>" class="img-fluid" alt=""></a>
								</div>
								<div class="item_ct_text">
									<a href=""><?php echo @$value['Notice']['title']; ?> </a>
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
					if(!empty($themeData['Option']['value']['tab4']) && $value['Notice']['id'] == $themeData['Option']['value']['tab4']){
						?>
						<div class="col-sm-4">
							<div class="item_ct">
								<div class="item_ct_img img_effect_zoom">
									<a href="<?php echo getUrlNotice(@$value['Notice']['id']); ?>"><img src="<?php echo @$value['Notice']['image']; ?>" class="img-fluid" alt=""></a>
								</div>
								<div class="item_ct_text">
									<a href=""><?php echo @$value['Notice']['title']; ?> </a>
									<p><?php echo @$value['Notice']['introductory']; ?> </p>
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

</section>
<?php getFooter() ;?>