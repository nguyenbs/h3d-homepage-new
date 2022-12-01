<?php getHeader(); ?></div>

<div class="title_page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="con_title">
                Search Results
             </div>
         </div>
     </div>
 </div>
</div>

<section id="c-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <?php 
                    if(!empty($listNotices)){
                        foreach ($listNotices as $key => $value) {
                           ?>
                           <div class="col-md-4">
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
            echo '<h4  class="text-center">No results were found !</h4>'; 
        } 
        ?> 
    </div>

</div>
</div>

</div>
</section>
<?php getFooter(); ?>