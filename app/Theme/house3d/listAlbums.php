<?php include"header.php" ?>

<section class="image_container" >
	<div class="text-center secone_title">
		<h1>Ảnh</h1>
		<div class="line_title"></div>
	</div>
	<div class="h3d-container">
		<div class="row image-sub-container">
        <?php if(!empty($listAlbums)){
            foreach ($listAlbums as $key => $value) {
        ?>
			<div class="col-md-4 ">
				<div class="image-sub">
					<div class="image-sub-img">
						<a href="<?php echo getUrlAlbum($value['Album']['id']); ?>"><img src="<?php echo hashUrl($value['Album']['img']['0']['src']); ?>" class="img-fluid" alt="img"></a>
					</div>
					<div class="image-sub-title">
						<a href="<?php echo getUrlAlbum($value['Album']['id']); ?>"><?php echo $value['Album']['title']; ?></a>
					</div>
				</div>
			</div>
        <?php }
        }?>
		</div>
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
        <?php if (!empty($listAlbums)) { ?>
        <div class="container">
            <ul class="pagination justify-content-center my-5">
                <li class="page-item <?php if($page==1) echo 'disabled';?>"><a class="page-link" href="<?php echo $urlPage . $back ?>"><span aria-hidden="true">&laquo;</span></a></li>
                <?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
                    <li class="page-item <?php
                    if ($i == $page) {
                        echo 'active';
                    }
                    ?>"><a class="page-link" href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li>
                <?php }
                ?>
                <li class="page-item"><a class="page-link" href="<?php echo $urlPage . $next ?>"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
		</div>
            <?php
        } else {
            echo '<h4 class="text-center"This category has no images !</h4>';
        }
        ?>
        </article>
</div>
</section>

<?php include"footer.php" ?>