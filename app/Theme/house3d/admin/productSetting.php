
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house-admin-productSetting.php',
    'sub' => array('name' => 'Cài đặt trang sản phẩm')
);
addBreadcrumbAdmin($breadcrumb);
?>
<!-- Lưu -->
<script type="text/javascript">

    function save()
    {
        document.listForm.submit();
    }
</script>
<style>
    .bold-center{
        text-align: center;
        font-weight: bold;
        color: red;
    }
    .p-center{
        font-weight: bold;
    }
    .table-list tr{
        border: 1px solid #006f31;
    }
</style>
<div class="thanhcongcu">
    <div class="congcu" onclick="save();">
        <input type="hidden" id="idChange" value="" />
        <span id="save">
      <input type="image" src="<?php echo $webRoot; ?>images/save.png" />
    </span>
        <br/>
        Lưu
    </div>
</div>
<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'></div>
<form action="" method="post" name="listForm">
    <p><?php echo @$mess;?></p>
    <table class="table table-hover table-border table-list">
        <tr>
            <td >
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">CÀI ĐẶT LINK</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link đăng ký ngay</label>
                        <input type="text" class="form-control" placeholder="" name="LinkDanKyNgay" value="<?php echo @$themeData['Option']['value']['LinkDanKyNgay'];?>">
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td >
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI BANNER</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="p-center" >Ảnh banner</p>
                            <?php showUploadFile('AnhBanner','AnhBanner',@$themeData['Option']['value']['AnhBanner'],1); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối banner</p>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 1</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMota1" value="<?php echo @$themeData['Option']['value']['BannerMota1'];?>">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 2</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMota2" value="<?php echo @$themeData['Option']['value']['BannerMota2'];?>">
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI SẢN PHẨM VÀ DỊCH VỤ / CỦA CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="Nội dung dong 1 " name="SanPhamDichVuNDDong1" value="<?php echo @$themeData['Option']['value']['SanPhamDichVuNDDong1'];?>">
                        <br>
                        <input type="text" class="form-control" placeholder="Nội dung dong 2" name="SanPhamDichVuNDDong2" value="<?php echo @$themeData['Option']['value']['SanPhamDichVuNDDong2'];?>">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 1</p>
                        <?php showUploadFile('SPKhoi1Icon','SPKhoi1Icon',@$themeData['Option']['value']['SPKhoi1Icon'],2); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi1TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi1TieuDe'];?>">
                        <label >Nội dung khối 1</label>
                        <textarea class="form-control" rows="2" name="SPKhoi1NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi1NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 2</p>
                        <?php showUploadFile('SPKhoi2Icon','SPKhoi2Icon',@$themeData['Option']['value']['SPKhoi2Icon'],3); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi2TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi2TieuDe'];?>">
                        <label >Nội dung khối 2</label>
                        <textarea class="form-control" rows="2" name="SPKhoi2NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi2NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 3</p>
                        <?php showUploadFile('SPKhoi3Icon','SPKhoi3Icon',@$themeData['Option']['value']['SPKhoi3Icon'],4); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi3TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi3TieuDe'];?>">
                        <label >Nội dung khối 3</label>
                        <textarea class="form-control" rows="2" name="SPKhoi3NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi3NoiDung'];?></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 4</p>
                        <?php showUploadFile('SPKhoi4Icon','SPKhoi4Icon',@$themeData['Option']['value']['SPKhoi4Icon'],5); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi4TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi4TieuDe'];?>">
                        <label >Nội dung khối 4</label>
                        <textarea class="form-control" rows="2" name="SPKhoi4NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi4NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 5</p>
                        <?php showUploadFile('SPKhoi5Icon','SPKhoi5Icon',@$themeData['Option']['value']['SPKhoi5Icon'],11); ?>
                        <label >Tiêu đề khối 5</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi5TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi5TieuDe'];?>">
                        <label >Nội dung khối 5</label>
                        <textarea class="form-control" rows="2" name="SPKhoi5NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi5NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 6</p>
                        <?php showUploadFile('SPKhoi6Icon','SPKhoi6Icon',@$themeData['Option']['value']['SPKhoi6Icon'],6); ?>
                        <label >Tiêu đề khối 6</label>
                        <input type="text" class="form-control" placeholder="" name="SPKhoi6TieuDe" value="<?php echo @$themeData['Option']['value']['SPKhoi6TieuDe'];?>">
                        <label >Nội dung khối 6</label>
                        <textarea class="form-control" rows="2" name="SPKhoi6NoiDung"><?php echo @$themeData['Option']['value']['SPKhoi6NoiDung'];?></textarea>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI ĐỐI TÁC CỦA CHÚNG TÔI</p>
                    </div>

                    <div class="col-md-6">
                        <label >Tiêu đề</label>
                        <input type="text" class="form-control" placeholder="" name="DoitacTieuDe" value="<?php echo @$themeData['Option']['value']['DoitacTieuDe'];?>"><br>
                        <p>Nội dung</p>
                        <textarea class="form-control" rows="2" name="DoitacNoiDung"><?php echo @$themeData['Option']['value']['DoitacNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label >Album đối tác</label>
                        <select name="AlbumDoiTac" class="form-control">
                            <option value="">Lựa chọn Album ảnh</option>
                            <?php
                            if(!empty($listAlbum)){
                                foreach ($listAlbum as $album){
                                    if(isset($themeData['Option']['value']['AlbumDoiTac']) && $themeData['Option']['value']['AlbumDoiTac'] == $album['Album']['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$album['Album']['id'].'">'.$album['Album']['title'].'</option>';
                                }
                            }?>
                        </select>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI THAM GIA CÙNG CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p >Nền khối</p>
                        <?php showUploadFile('ThamGiaCungChungToiNen','ThamGiaCungChungToiNen',@$themeData['Option']['value']['ThamGiaCungChungToiNen'],0); ?>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label >Tiêu đề</label>
                        <input type="text" class="form-control" placeholder="" name="ThamGiaCungChungToiTieuDe" value="<?php echo @$themeData['Option']['value']['ThamGiaCungChungToiTieuDe'];?>" ><br>
                        <p>Nội dung</p>
                        <input type="text" class="form-control" placeholder="" name="ThamGiaCungChungToiNoiDung" value="<?php echo @$themeData['Option']['value']['ThamGiaCungChungToiNoiDung'];?>"><br>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="KhachHangNoiGiTieuDe" value="<?php echo @$themeData['Option']['value']['KhachHangNoiGiTieuDe'];?>">
                        <p><a class="text-center p-center" href="/plugins/admin/feedback-listFeedback.php" target="_blank">>>> Click để thêm phản hồi khách hàng</a></p>

                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>


    </table>

</form>