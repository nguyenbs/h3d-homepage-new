
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/greenid-admin-setting.php',
    'sub' => array('name' => 'Cài đặt trang giới thiệu')
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
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link đăng ký ngay</label>
                        <input type="text" class="form-control" placeholder="" name="LinkDangKyNgay" value="<?php echo @$themeData['Option']['value']['LinkDangKyNgay'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link tải ứng dụng</label>
                        <input type="text" class="form-control" placeholder="" name="LinkTaiUngDung" value="<?php echo @$themeData['Option']['value']['LinkTaiUngDung'];?>">
                    </div>
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
                            <?php showUploadFile('anhBanner','anhBanner',@$themeData['Option']['value']['anhBanner'],0); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối banner</p>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 1</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMotaDong1" value="<?php echo @$themeData['Option']['value']['BannerMotaDong1'];?>">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 2</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMotaDong2" value="<?php echo @$themeData['Option']['value']['BannerMotaDong2'];?>">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI VỀ CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung</label>
                        <input type="text" class="form-control" placeholder="" name="VeChungToiTieuDe" value="<?php echo @$themeData['Option']['value']['VeChungToiTieuDe'];?>"><br>
                        <p>Nội dung</p>
                        <?php showEditorInput('VeChungToiNoiDung','VeChungToiNoiDung',@$themeData['Option']['value']['VeChungToiNoiDung']);?>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung</p>
                        <?php showUploadFile('VeChungToiAnhNoiDung','VeChungToiAnhNoiDung',@$themeData['Option']['value']['VeChungToiAnhNoiDung'],1); ?>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI TẦM NHÌN / SỨ MỆNH / TRIẾT LÝ PHÁT TRIỂN </p>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối tầm nhìn</p>
                        <p>Icon tầm nhìn</p>
                        <?php showUploadFile('TamNhinIcon','TamNhinIcon',@$themeData['Option']['value']['TamNhinIcon'],10); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="TamNhinTieuDe" value="<?php echo @$themeData['Option']['value']['TamNhinTieuDe'];?>">
                        <label >Nội dung khối 1</label>
                        <textarea class="form-control" rows="2" name="TamNhinNoiDung"><?php echo @$themeData['Option']['value']['TamNhinNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối sứ mệnh</p>
                        <p>Icon sứ mệnh</p>
                        <?php showUploadFile('SuMenhIcon','SuMenhIcon',@$themeData['Option']['value']['SuMenhIcon'],11); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="" name="SuMenhTieuDe" value="<?php echo @$themeData['Option']['value']['SuMenhTieuDe'];?>">
                        <label >Nội dung khối 2</label>
                        <textarea class="form-control" rows="2" name="SuMenhNoiDung"><?php echo @$themeData['Option']['value']['SuMenhNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối triết lý phát triển</p>
                        <p>Icon sứ mệnh</p>
                        <?php showUploadFile('TrietLyPTIcon','TrietLyPTIcon',@$themeData['Option']['value']['TrietLyPTIcon'],12); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="" name="TrietLyPTTieuDe" value="<?php echo @$themeData['Option']['value']['TrietLyPTTieuDe'];?>">
                        <label >Nội dung khối 3</label>
                        <textarea class="form-control" rows="2" name="TrietLyPTNoiDung"><?php echo @$themeData['Option']['value']['TrietLyPTNoiDung'];?></textarea>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI GIÁ TRỊ CỐT LÕI</p>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung</p>
                        <?php showUploadFile('GiaTriCLAnhNoiDung','GiaTriCLAnhNoiDung',@$themeData['Option']['value']['GiaTriCLAnhNoiDung'],2); ?>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề</label>
                        <input type="text" class="form-control" placeholder="" name="GiaTriCLTieuDe" value="<?php echo @$themeData['Option']['value']['GiaTriCLTieuDe'];?>"><br>
                        <p>Nội dung</p>
                        <?php showEditorInput('GiaTriCLNoiDung','GiaTriCLNoiDung',@$themeData['Option']['value']['GiaTriCLNoiDung']);?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI OUR TEAM</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="OurTeamTieuDe" value="<?php echo @$themeData['Option']['value']['OurTeamTieuDe'];?>">
                        <p class="text-center p-center">Mô tả khối</p>
                        <textarea name="OurTeamNoiDung" class="form-control" rows="2"><?php echo @$themeData['Option']['value']['OurTeamNoiDung'];?></textarea><br>
                        <p><a class="text-center p-center" href="/plugins/admin/ourTeam-admin-listTeam.php" target="_blank">>>> Click để thêm thành viên</a></p>

                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI THAM GIA CÙNG CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="ThamGiaCCTTieuDe" value="<?php echo @$themeData['Option']['value']['ThamGiaCCTTieuDe'];?>">
                        <p class="text-center p-center">Mô tả khối</p>
                        <textarea name="ThamGiaCCTMoTaKhoi" class="form-control" rows="2"><?php echo @$themeData['Option']['value']['ThamGiaCCTMoTaKhoi'];?></textarea><br>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>

                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI WHAT CLIENTS SAY</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="WhatClientSayTieuDe" value="<?php echo @$themeData['Option']['value']['WhatClientSayTieuDe'];?>">
                        <br>
                        <a class="text-center p-center" href="/plugins/admin/feedback-listFeedback.php" target="_blank">>>>> Click thêm phản hồi khách hàng</a>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>

                </div>
            </td>
        </tr>


    </table>

</form>