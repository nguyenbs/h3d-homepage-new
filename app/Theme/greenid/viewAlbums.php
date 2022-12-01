<?php getHeader(); ?></div>
<div class="title_page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="con_title">
                    <?php echo $infoAlbum['Album']['title'];?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="baguetteBoxOne gallery">
        <div class="row">
            <?php 
            if(!empty($infoAlbum['Album']['img'])){
                foreach ($infoAlbum['Album']['img'] as $key => $value) {
                 ?>
                 <div class="col-sm-3">
                     <a href="<?php echo $value['src']; ?>" data-caption="<?php echo $infoAlbum['Album']['title']; ?>"><img src="<?php echo $value['src']; ?>"></a>
                 </div>
                 <?php 

             }
         }
         ?>

     </div>
 </div>
 <div class="row">
    <div class="module-header col-sm-12">
        <h4 class="module-title">
            <a href="" class="c-newest">
                <span >Related albums</span>
            </a>
        </h4>
    </div>
    <?php 
    global $modelAlbum;
    $video=$modelAlbum->getNewAlbum($limit=6,$dk=array());
    if(!empty($video)){
        foreach ($video as $key => $value) {
            if($value['Album']['id']!=$infoAlbum['Album']['id']){
                ?>
                <div class="col-lg-3">
                    <div class="c-List">
                        <div class="c-imglist">
                            <a href="<?php echo getUrlAlbum($value['Album']['id']);?>"><img src="<?php echo $value['Album']['img'][0]['src'];?>" class="img-fluid"></a>
                        </div>
                        <div class="c-title">
                            <a href="<?php echo getUrlAlbum($value['Album']['id']);?>">
                                <?php echo $value['Album']['title'];?>
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
<?php getFooter(); ?>