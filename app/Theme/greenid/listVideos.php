<?php getHeader(); ?></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBe23YIH_bS2jxaFHMnvalNLEbD93cUkUs"></script>

<section id="contact">
	<div class="title_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="con_title">
						Videos
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container margin_t_b_30">
		<div class="sub_content">
			<div class="videos_detail">
				<div class="row row-full-video">
					<?php if(!empty($listVideos )){
						foreach ($listVideos  as $key => $value) {
							
							?>
							<div class="col-md-6 col-lg-4 video-one-video">
								<iframe width="100%" height="260" src="http://youtube.com/embed/<?php echo $value['Video']['code']; ?>" frameborder="0" allowfullscreen></iframe>
								<div class="name_ca">
									<a href="https://www.youtube.com/watch?v=<?php echo $value['Video']['code']; ?>"><?php echo $value['Video']['name']; ?></a>
								</div>
							</div>
							<?php 
						}
					}
					?>
				</div>
				<div class="row text-center p_navigation justify-content-sm-center" style="margin-top: 20px;">
					<!-- phân trang -->
					<?php 
					if ($page > 5) { 
						$startPage = $page - 5; 
					} else { 
						$startPage = 1; 
					} 


					if ($totalPage > $page + 5) { 
						$endPage = $page + 5; 
					} else { 
						$endPage = $totalPage; 
					} 
					?> 
					<?php if (!empty($listVideos  )) { ?> 
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item <?php if($page==1) echo 'disabled';?>"><a class="page-link" href="<?php $urlPage . $back ?>">Prev Page</a></li>
							<?php for ($i = $startPage; $i <= $endPage; $i++) { ?> 
							<li class="page-item <?php 
							if ($i == $page) { 
								echo 'active'; 
							} 
							?>"><a class="page-link" href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li> 
							<?php } 
							?> 
							<li class="page-item"><a class="page-link" href="<?php $urlPage . $next ?>">Next Page</a></li>
						</ul>
					</nav>
					<?php 
				} else { 
					echo '<h4 class="text-center">This category has no Video !</h4>'; 
				} 
				?> 
			</div>

		</div>
	</div>
</div>


</section>

<?php getFooter(); ?>