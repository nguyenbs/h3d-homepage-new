<?php getHeader(); ?></div>

<div class="title_page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="con_title">
                 <?php echo $category['name']; ?>
             </div>
         </div>
     </div>
 </div>
</div>

<section id="c-one">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">

                    <?php 
                    if(!empty($listNotices)){
                        foreach ($listNotices as $key => $value) {
                           ?>
                           <div class="col-md-6">
                            <div class="c-urb">
                                <div class="item-pro2">
                                    <a href="<?php echo getUrlNotice($value['Notice']['id']);?>"><img src="<?php echo @$value['Notice']['image']; ?>" alt="pepsi" class="img-fluid"></a>
                                    <div class="item-overlay top"></div>
                                    <div class="c-date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; <time><?php echo date('j/m/Y',$value['Notice']['time']);?></time>
                                    </div>
                                </div>
                                <div class="title-examp">
                                    <a href="<?php echo getUrlNotice($value['Notice']['id']);?>" class="c-a">
                                        <?php echo @$value['Notice']['title']; ?>
                                    </a>
                                    <div class="blog-item-summary">
                                        <p class="text3line"> 
                                          <?php echo @$value['Notice']['introductory']; ?>
                                      </p>
                                  </div>
                                  <div class="c-n">
                                    <div class="c-an"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp; Views : <?php echo $value['Notice']['view']; ?></div>
                                    <div class="c-hmore">
                                        <a href="<?php echo getUrlNotice($value['Notice']['id']); ?>">See more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
            }
            ?>
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
            <?php if (!empty($listNotices)) { ?> 
            <div class="c-page col-sm-12">
                <ul class="c-pag pagination ">
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
            </div> 
            <?php 
        } else { 
            echo '<h4 class="text-center">Forum Contains No Posts</h4>'; 
        } 
        ?> 
    </div>

    <?php 



    ?>

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
                    if($value1['id']!= $category['id']){
                        ?>
                        <li>
                            <a href="<?php echo $urlHomes.$value1['slug'].'.html';?>">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> <?php  echo $value1['name'];?>
                            </a>
                        </li>
                        <?php
                    }
                }
            }
            else {
               if($value['id']!= $category['id']){
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
?>

</div>
</div>

</div>
</section>
<?php getFooter(); ?>