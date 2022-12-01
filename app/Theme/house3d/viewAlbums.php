<?php include"header.php" ?>
<!-- ảnh -->
<link rel="stylesheet" href="<?php echo hashUrl($urlThemeActive.'css/baguetteBox.css'); ?>">
<section class="image_container" >
	<div class="text-center secone_title">
		<h1>Ảnh</h1>
		<div class="line_title"></div>
	</div>
	<div class="h3d-container">
		<div class="baguetteBoxOne gallery">
			<div class="row image-sub-container detaiimage-sub">
                <?php
                if(!empty($infoAlbum['Album']['img'])){
                foreach ($infoAlbum['Album']['img'] as $key => $value) {
                ?>
				<div class="col-md-4">
					<div class="image-sub-img detaiimage-sub-img">
						<a href="<?php echo $value['src']; ?>" data-caption=" thông tin"><img src="<?php echo $value['src']; ?>" class="img-fluid" alt="<?php echo @['Album']['title']; ?>"></a>
					</div>
				</div>
                <?php }
                }?>
			</div>
		</div>	
	</div>
</section>


<!-- baroque box -->
<script src="<?php echo hashUrl($urlThemeActive.'js/baguetteBox.js'); ?>" ></script>
<script src="<?php echo hashUrl($urlThemeActive.'js/plugins.js'); ?>" ></script>
<?php include"footer.php" ?>