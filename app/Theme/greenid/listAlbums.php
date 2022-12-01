<?php getHeader(); ?></div>
<div class="title_page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="con_title">
                   Picture Album
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php if(!empty($listAlbums)){
            foreach ($listAlbums as $key => $value) {
   
               ?>
               <div class="col-lg-4 col-md-6">
                <div class="c-List">
                    <div class="c-imglist">
                    <a href="<?php echo getUrlAlbum($value['Album']['id']); ?>"><img src="<?php echo $value['Album']['img']['0']['src']; ?>" class="img-fluid"></a>
                    </div>
                    <div class="c-title">
                        <a href="<?php echo getUrlAlbum($value['Album']['id']); ?>">
                            <?php echo $value['Album']['title']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php 

        }

    }
    ?>
</div>
<div class="row">   

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
<?php if (!empty($listAlbums)) { ?> 
<div class="c-page col-sm-12">
    <ul class="c-pag pagination ">
        <li class="page-item <?php if($page==1) echo 'disabled';?>"><a class="page-link" href="<?php echo $urlPage . $back ?>">Prev Page</a></li>
        <?php for ($i = $startPage; $i <= $endPage; $i++) { ?> 
        <li class="page-item <?php 
        if ($i == $page) { 
            echo 'active'; 
        } 
        ?>"><a class="page-link" href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li> 
        <?php } 
        ?> 
        <li class="page-item"><a class="page-link" href="<?php echo $urlPage . $next ?>">Next Page</a></li>
    </ul>
</div> 
<?php 
} else { 
    echo '<h4 class="text-center"This category has no images !</h4>'; 
} 
?> 
</div>
</div>
<?php getFooter(); ?>