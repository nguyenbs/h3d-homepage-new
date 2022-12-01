<?php getHeader(); ?></div>

<div class="title_page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="con_title">
					<?php echo $infoNotice['Notice']['title']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="c-nothing">
				<a href=" " class="high-title">

				</a>
				<span class="something"> 
					<time><?php echo date('j/m/Y',$infoNotice['Notice']['time']);?></time> &nbsp; | &nbsp; Author : <?php echo @$infoNotice['Notice']['author']; ?>

				</span>
				<p class="pl"><?php echo @$infoNotice['Notice']['introductory']; ?></p>
				<p class="pl"><?php echo @$infoNotice['Notice']['content']; ?></p>


			</div>

		</div>
		<div class="col-md-3">
			<div class="allexamps">
				<div class="module-header">
					<h4 class="module-title">
						<a href="" class="c-newest">
							<span >Article Directory</span>
						</a>
					</h4>
				</div>
				<ul class="c-interes list-unstyled">
					<?php 
					global $modelOption;
					$danhmuccate = $modelOption->getOption('categoryNotice');
					$tin = getListNoticeCategory();
					if(!empty($tin)){
						foreach ($tin as $key => $value) {
							if(isset($value['sub']) ){
								foreach ($value['sub'] as $key => $value1) {
										?>
										<li>
											<a href="<?php echo $urlHomes.$value1['slug'].'.html';?>">
												<i class="fa fa-caret-right" aria-hidden="true"></i> <?php  echo $value1['name'];?>
											</a>
										</li>
										<?php
								}
							}
							else {
									?>
									<li>
										<a href="<?php echo $urlHomes.$value['slug'].'.html';?>">
											<i class="fa fa-caret-right" aria-hidden="true"></i> <?php  echo $value['name'];?>
										</a>
									</li>
									<?php 
							} 
						} 
					}
					?>
				</ul>
			</div>

			<div class="module-header">
				<h4 class="module-title">
					<a href="" class="c-newest">
						<span>Featured News</span>
					</a>
				</h4>
			</div>
			<?php 
			global $modelNotice;
			$tinnoibat = $modelNotice->getTopViewNotice();
			if(!empty($tinnoibat)){
				foreach ($tinnoibat as $key => $value) {
					if($value['Notice']['id']!=$infoNotice['Notice']['id']){

						?>
						<div class="allitem">
							<div class="item-pro">
								<div class="c-img-side">
									<a href="<?php echo getUrlNotice($value['Notice']['id']);?>"><img src="<?php echo @$value['Notice']['image']; ?>" class="img-fluid"></a>
								</div>
							</div>
							<div class="examp-title">
								<a href="<?php echo getUrlNotice($value['Notice']['id']);?>" class="c-height">
									<?php echo $value['Notice']['title']; ?>
								</a>
								<div class="c-date2"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; <time><?php echo date('j/m/Y',$value['Notice']['time']);?></time></div>              
							</div>
							<div class="" style="clear: both"></div>
						</div>
						<?php 
					}
				}
			}
			?>

		</div>
		<div class="col-sm-12">
			<div class="module-header">
				<h4 class="module-title">
					<a href="" class="c-newest">
						<span>Related News</span>
					</a>
				</h4>
			</div>
			<div class="row">
				<?php 
				if(!empty($otherNotices )){
					foreach ($otherNotices  as $key => $value) {
						if($value['Notice']['id']!=$infoNotice['Notice']['id']){
							?>
							<div class="col-lg-3 col-md-3">
								<div class="c-urb">
									<div class="item-pro2 c-pro3">
										<a href="<?php echo getUrlNotice($value['Notice']['id']);?>"><img src="<?php echo @$value['Notice']['image'];?>" alt="pepsi" class="img-fluid"></a>
										<div class="item-overlay top"></div>
									</div>
									<div class="title-examp">
										<a href="<?php echo getUrlNotice($value['Notice']['id']);?>" class="c-a">
											<?php echo $value['Notice']['title'];?>
										</a>
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
</div>
<?php getFooter(); ?>