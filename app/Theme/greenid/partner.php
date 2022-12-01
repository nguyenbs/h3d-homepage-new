<?php getHeader(); ?></div>
<section id="">
	<div class="title_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="con_title">
						Partner
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="parter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="module-header p_module_header">
					<h4 class="module-title">
						<a href="" class="c-newest">
							<span>Partner</span>
						</a>
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php global $imagechangeLogoPartner;  
			if(!empty($imagechangeLogoPartner['Option']['value']['Data'])){
				foreach ($imagechangeLogoPartner['Option']['value']['Data'] as $key => $value) {
					?>
					<div class="col-sm-6 col-md-3">
						<div class="par_item">
							<a href="<?php echo $value['url']; ?>"><img src="<?php echo $value['image']; ?>" class="img-fluid" alt=""></a>
						</div>
					</div>
					<?php 
				}
			}
			?>
		</div>

		
	</div>


</section>


<?php getFooter(); ?>