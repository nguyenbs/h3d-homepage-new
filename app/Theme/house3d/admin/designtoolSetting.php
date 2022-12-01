
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house3d-admin-designtoolSetting.php',
    'sub' => array('name' => 'Cài đặt trang công cụ thiết kế')
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
                        <input type="text" class="form-control" placeholder="" name="linkDangKyNgay" value="<?php echo @$themeData['Option']['value']['linkDangKyNgay'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link tải ứng dụng</label>
                        <input type="text" class="form-control" placeholder="" name="linkTaiUngDung" value="<?php echo @$themeData['Option']['value']['linkTaiUngDung'];?> ">
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
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <p class="p-center">Dòng mô tả banner</p>
                            <input type="text" class="form-control" placeholder="" name="BannerMota1" value="<?php echo @$themeData['Option']['value']['BannerMota1'];?>">

                        </div>
                        <div class="col-md-12">
                            <p>Link Window Os</p>
                            <input type="text" class="form-control" placeholder="" name="bannerWindowOs" value="<?php echo @$themeData['Option']['value']['bannerWindowOs'];?>">
                            <p>Link Mac Os</p>
                            <input type="text" class="form-control" placeholder="" name="bannerMacOs" value="<?php echo @$themeData['Option']['value']['bannerMacOs'];?>">

                        </div>
                        <br>

                    </div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI MENU</p>
                    </div>
                    <div class="col-md-12">
                        <select name="Menu" class="form-control">
                            <option value="">Lựa chọn menu</option>
                            <?php
                            if(!empty($listMenus)){
                                foreach ($listMenus as $menu){
                                    if(isset($themeData['Option']['value']['Menu']) && $themeData['Option']['value']['Menu'] == $menu['Option']['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$menu['Option']['id'].'">'.$menu['Option']['value']['name'].'</option>';
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
                        <p class="bold-center" style="color:red">KHỐI CÔNG CỤ THIẾT KẾ / TRỰC QUAN, DỄ SỬ DỤNG</p>
                    </div>
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-4">-->
<!--                        <p class="text-center p-center">Tiêu đề khối</p>-->
<!--                        <input type="text" class="form-control" placeholder="Nội dung dòng 1" name="CongCuThietKeNDDong1" value="--><?php //echo @$themeData['Option']['value']['CongCuThietKeNDDong1'];?><!--">-->
<!--                        <br>-->
<!--                        <input type="text" class="form-control" placeholder="Nội dung dòng 2" name="CongCuThietKeNDDong2" value="--><?php //echo @$themeData['Option']['value']['CongCuThietKeNDDong2'];?><!--">-->
<!--                    </div>-->
<!--                    <div class="col-md-4"></div>-->
<!---->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <img src="--><?php //echo $urlThemeActive; ?><!--/img/border-1.png">-->
<!--                    </div>-->
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 1</p>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 1</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuTkND1TieuDe" value="<?php echo @$themeData['Option']['value']['CongCuTkND1TieuDe'];?>"><br>
                        <?php showEditorInput('CongCuTkND1NoiDung','CongCuTkND1NoiDung',@$themeData['Option']['value']['CongCuTkND1NoiDung']);?>>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 1</p>
                        <?php showUploadFile('CongCuTkND1Video','CongCuTkND1Video',@$themeData['Option']['value']['CongCuTkND1Video'],1); ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 2</p>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 2</p>
                        <?php showUploadFile('CongCuTkND2Video','CongCuTkND2Video',@$themeData['Option']['value']['CongCuTkND2Video'],2); ?>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 2</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuTkND2TieuDe" value="<?php echo @$themeData['Option']['value']['CongCuTkND2TieuDe'];?>"><br>
                        <?php showEditorInput('CongCuTkND2NoiDung','CongCuTkND2NoiDung',@$themeData['Option']['value']['CongCuTkND2NoiDung']);?>
                    </div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 3</p>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 3</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuTkND3TieuDe" value="<?php echo @$themeData['Option']['value']['CongCuTkND3TieuDe'];?>"><br>
                        <?php showEditorInput('CongCuTkND3NoiDung','CongCuTkND3NoiDung',@$themeData['Option']['value']['CongCuTkND3NoiDung']);?>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 3</p>
                        <?php showUploadFile('CongCuTkND3Video','CongCuTkND3Video',@$themeData['Option']['value']['CongCuTkND3Video'],3); ?>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 4</p>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 4</p>
                        <?php showUploadFile('CongCuTkND4Video','CongCuTkND4Video',@$themeData['Option']['value']['CongCuTkND4Video'],4); ?>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 4</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuTkND4TieuDe" value="<?php echo @$themeData['Option']['value']['CongCuTkND4TieuDe'];?>"><br>
                        <?php showEditorInput('CongCuTkND4NoiDung','CongCuTkND4NoiDung',@$themeData['Option']['value']['CongCuTkND4NoiDung']);?>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 5</p>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 5</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuTkND5TieuDe" value="<?php echo @$themeData['Option']['value']['CongCuTkND5TieuDe'];?>"><br>
                        <?php showEditorInput('CongCuTkND5NoiDung','CongCuTkND5NoiDung',@$themeData['Option']['value']['CongCuTkND5NoiDung']);?>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 5</p>
                        <?php showUploadFile('CongCuTkND5Video','CongCuTkND5Video',@$themeData['Option']['value']['CongCuTkND5Video'],5); ?>
                    </div>
                </div>
            </td>
        </tr>
<!--        <tr>-->
<!--            <td>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <p class="bold-center" style="color:red">KHỐI YOU HAVE IDEA / WE HAVE A POWERFUL TOOL</p>-->
<!--                    </div>-->
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-4">-->
<!--                        <p class="text-center p-center">Nền khối</p>-->
<!--                        --><?php //showUploadFile('YouHaveIdeaNen','YouHaveIdeaNen',@$themeData['Option']['value']['YouHaveIdeaNen'],6); ?>
<!--                        <p class="text-center p-center">Tiêu đề khối</p>-->
<!--                        <input type="text" class="form-control" placeholder="Nội dung dòng 1" name="YouHaveIdeaTieuDe1" value="--><?php //echo @$themeData['Option']['value']['YouHaveIdeaTieuDe1'];?><!--">-->
<!--                        <br>-->
<!--                        <input type="text" class="form-control" placeholder="Nội dung dòng 2" name="YouHaveIdeaTieuDe2" value="--><?php //echo @$themeData['Option']['value']['YouHaveIdeaTieuDe2'];?><!--">-->
<!--                        <p class="text-center p-center">Nội dung</p>-->
<!--                        <textarea class="form-control" name="YouHaveNoiDung" rows="2">--><?php //echo @$themeData['Option']['value']['YouHaveNoiDung'];?><!--</textarea>-->
<!--                    </div>-->
<!--                    <div class="col-md-4"></div>-->
<!--                </div>-->
<!--            </td>-->
<!--        </tr>-->

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI TRẢI NGHIỆM SẢN PHẨM CỦA CHÚNG TÔI</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="" name="TraiNghiemTieuDe" value="<?php echo @$themeData['Option']['value']['TraiNghiemTieuDe'];?>"><br>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>
    </table>

</form>