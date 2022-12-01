<?php include"header.php" ?>

<section class="listvideos_container" >
	<div class="text-center secone_title">
		<h1>VIDEO</h1>
		<div class="line_title"></div>
	</div>
	<div class="h3d-container">
		<div class="row">
			<article class="col-md-12 col-sm-6">
				<div class="row">
                    <?php if(!empty($listVideos )){
                        foreach ($listVideos  as $key => $value) {
                    ?>
					<div class="col-md-4">
						<div class="video-sub">
							<div class="video-sub-video">
								<iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php echo $value['Video']['code']; ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="video-sub-link">
								<a href="https://www.youtube.com/watch?v=<?php echo $value['Video']['code']; ?>"><?php echo $value['Video']['name']; ?></a>
							</div>
						</div>
					</div>
                    <?php }
                    }?>

				</div><div class="clearfix"></div>
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
                <div class="container">
                    <ul class="pagination justify-content-center my-5">
                        <li class="page-item <?php if($page==1) echo 'disabled';?>"><a class="page-link" href="<?php $urlPage . $back ?>"><span aria-hidden="true">&laquo;</span></a></li>
                        <?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
                            <li class="page-item <?php
                            if ($i == $page) {
                                echo 'active';
                            }
                            ?>"><a class="page-link" href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li>
                        <?php }
                        ?>
                        <li class="page-item"><a class="page-link" href="<?php $urlPage . $next ?>"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
				</div>
                    <?php
                } else {
                    echo '<h4 class="text-center">This category has no Video !</h4>';
                }
                ?>
            </article>
		</div>
	</div>
	
</section>

<?php include"footer.php" ?>