
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house-admin-flatformSetting.php',
    'sub' => array('name' => 'Cài đặt Platform')
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
                        <p class="bold-center" style="color:red">KHỐI BẠN LÀ AI?</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối " name="BanLaAiTieuDe" value="<?php echo @$themeData['Option']['value']['BanLaAiTieuDe'];?>">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Khối 1</p>
                        <?php showUploadFile('BanLaAiKhoi1Icon','BanLaAiKhoi1Icon',@$themeData['Option']['value']['BanLaAiKhoi1Icon'],2); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="BanLaAiKhoi1TieuDe" value="<?php echo @$themeData['Option']['value']['BanLaAiKhoi1TieuDe'];?>">
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Khối 2</p>
                        <?php showUploadFile('BanLaAiKhoi2Icon','BanLaAiKhoi2Icon',@$themeData['Option']['value']['BanLaAiKhoi2Icon'],3); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="BanLaAiKhoi2TieuDe" value="<?php echo @$themeData['Option']['value']['BanLaAiKhoi2TieuDe'];?>">
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Khối 3</p>
                        <?php showUploadFile('BanLaAiKhoi3Icon','BanLaAiKhoi3Icon',@$themeData['Option']['value']['BanLaAiKhoi3Icon'],4); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="BanLaAiKhoi3TieuDe" value="<?php echo @$themeData['Option']['value']['BanLaAiKhoi3TieuDe'];?>">
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Khối 4</p>
                        <?php showUploadFile('BanLaAiKhoi4Icon','BanLaAiKhoi4Icon',@$themeData['Option']['value']['BanLaAiKhoi4Icon'],5); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="BanLaAiKhoi4TieuDe" value="<?php echo @$themeData['Option']['value']['BanLaAiKhoi4TieuDe'];?>">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI HÃY THAM GIA</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối " name="HayThamGiaTieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaTieuDe'];?>">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 1</p>
                        <?php showUploadFile('HayThamGiaKhoi1Icon','HayThamGiaKhoi1Icon',@$themeData['Option']['value']['HayThamGiaKhoi1Icon'],6); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi1TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi1TieuDe'];?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 2</p>
                        <?php showUploadFile('HayThamGiaKhoi2Icon','HayThamGiaKhoi2Icon',@$themeData['Option']['value']['HayThamGiaKhoi2Icon'],7); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi2TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi2TieuDe'];?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 3</p>
                        <?php showUploadFile('HayThamGiaKhoi3Icon','HayThamGiaKhoi3Icon',@$themeData['Option']['value']['HayThamGiaKhoi3Icon'],8); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi3TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi3TieuDe'];?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 4</p>
                        <?php showUploadFile('HayThamGiaKhoi4Icon','HayThamGiaKhoi4Icon',@$themeData['Option']['value']['HayThamGiaKhoi4Icon'],9); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi4TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi4TieuDe'];?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 5</p>
                        <?php showUploadFile('HayThamGiaKhoi5Icon','HayThamGiaKhoi5Icon',@$themeData['Option']['value']['HayThamGiaKhoi5Icon'],19); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi5TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi5TieuDe'];?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 6</p>
                        <?php showUploadFile('HayThamGiaKhoi6Icon','HayThamGiaKhoi6Icon',@$themeData['Option']['value']['HayThamGiaKhoi6Icon'],20); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="" name="HayThamGiaKhoi6TieuDe" value="<?php echo @$themeData['Option']['value']['HayThamGiaKhoi6TieuDe'];?>">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI ĐỂ TRẢI NGHIỆM VÀ / NHẬN ĐƯỢC LỢI ÍCH</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="Dòng 1 " name="DeTraiNghiemTieuDe1" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemTieuDe1'];?>">
                        <input type="text" class="form-control" placeholder="Dòng 2 " name="DeTraiNghiemTieuDe2" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemTieuDe2'];?>">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 1</p>
                        <?php showUploadFile('DeTraiNghiemKhoi1Icon','DeTraiNghiemKhoi1Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi1Icon'],10); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 1" name="DeTraiNghiemKhoi1TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi1TieuDe'];?>">
                        <p>Nội dung khối 1</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi1NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi1NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 2</p>
                        <?php showUploadFile('DeTraiNghiemKhoi2Icon','DeTraiNghiemKhoi2Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi2Icon'],11); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 2" name="DeTraiNghiemKhoi2TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi2TieuDe'];?>">
                        <p>Nội dung khối 2</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi2NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi2NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 3</p>
                        <?php showUploadFile('DeTraiNghiemKhoi3Icon','DeTraiNghiemKhoi3Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi3Icon'],34); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 3" name="DeTraiNghiemKhoi3TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi3TieuDe'];?>">
                        <p>Nội dung khối 3</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi3NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi3NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 4</p>
                        <?php showUploadFile('DeTraiNghiemKhoi4Icon','DeTraiNghiemKhoi4Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi4Icon'],13); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 1" name="DeTraiNghiemKhoi4TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi4TieuDe'];?>">
                        <p>Nội dung khối 4</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi4NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi4NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 5</p>
                        <?php showUploadFile('DeTraiNghiemKhoi5Icon','DeTraiNghiemKhoi5Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi5Icon'],14); ?>
                        <label >Tiêu đề khối 5</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 5" name="DeTraiNghiemKhoi5TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi5TieuDe'];?>">
                        <p>Nội dung khối 5</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi5NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi5NoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối 6</p>
                        <?php showUploadFile('DeTraiNghiemKhoi6Icon','DeTraiNghiemKhoi6Icon',@$themeData['Option']['value']['DeTraiNghiemKhoi6Icon'],33); ?>
                        <label >Tiêu đề khối 6</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 6" name="DeTraiNghiemKhoi6TieuDe" value="<?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi6TieuDe'];?>">
                        <p>Nội dung khối 6</p>
                        <textarea class="form-control" name="DeTraiNghiemKhoi6NoiDung" rows="2"><?php echo @$themeData['Option']['value']['DeTraiNghiemKhoi6NoiDung'];?></textarea>
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


    </table>

</form>