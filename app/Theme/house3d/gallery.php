<?php
getHeader();
global $gallerySetting;
global $urlPage;
$listData = getThietKeAnTuong();
?>
<div class="banner_cat" style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl(@$gallerySetting['Option']['value']['AnhBanner']); ?>');">
    <div class="banner_cat_in">
        <div class="banner_cat_in_tit text-center">
            <h1><?php echo @$gallerySetting['Option']['value']['BannerMota1']; ?></h1>
        </div>

        <div class="banner_cat_in_des text-center">
            <p> <?php echo @$gallerySetting['Option']['value']['BannerMota2']; ?></p>
        </div>
    </div>
</div>
<section class="secone_platform" >
    <div class="container-fluid">
        <div class="secone_part1_pf">
            <div class="text-center secone_title">
                <h1><?php echo @$listData['title']; ?></h1>
                <div class="line_title"></div>
            </div>
        </div>
    </div>
    <div class="main_gallary">
        <div class="col-lg-10 my-auto mx-auto">
            <div class="row row_gallery">
                <div class="col-lg-4 col_gallery">
                    <?php if (isset($listData['data'][0])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][0]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][0]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][1])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][1]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][1]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][2])) { ?>
                        <div class="feature_item long">
                            <a target="_blank" href="<?php echo $listData['data'][2]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][2]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-lg-4 col_gallery">
                    <?php if (isset($listData['data'][3])) { ?>
                        <div class="feature_item long">
                            <a target="_blank" href="<?php echo $listData['data'][3]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][3]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][4])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][4]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][4]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][5])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][5]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][5]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-lg-4 col_gallery">
                    <?php if (isset($listData['data'][6])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][6]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][6]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][7])) { ?>
                        <div class="feature_item long">
                            <a target="_blank" href="<?php echo $listData['data'][7]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][7]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (isset($listData['data'][8])) { ?>
                        <div class="feature_item">
                            <a target="_blank" href="<?php echo $listData['data'][8]['link']; ?>">
                                <figure class="item_img">
                                    <img src="<?php echo hashUrl($listData['data'][8]['src']); ?>" width="100%">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $page = $listData['page'];
    $totalPage = $listData['total_page'];
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
    $urlPage = '/gallery?page=';
    $back = $page - 1;
    $next = $page + 1;
    ?>
    <?php if (!empty($listData['data'])) { ?>
        <ul class="pagination justify-content-center my-5">
            <li class="page-item <?php if ($page == 1) echo 'disabled'; ?>"><a class="page-link" href="<?php echo $urlPage . $back ?>"><span aria-hidden="true">&laquo;</span></a></li>
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
    <?php } ?>
</section>




<script>
    $(document).ready(function () {
        var a = $(".main_gallary .row_gallery .col_gallery:nth-child(1)").innerWidth();
        var x = 2 * a / 3;
        $('.feature_item').css("height", (x - 15));
        $('.feature_item.long').css("height", 2 * (x - 15));
    });
</script>



<?php getFooter() ?>>