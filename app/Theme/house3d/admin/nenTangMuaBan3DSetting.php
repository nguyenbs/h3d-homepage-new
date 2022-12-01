
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house3d-admin-nenTangMuaBan3DSetting.php',
    'sub' => array('name' => 'Cài đặt trang nền mua bán thiết kế 3D')
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
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link đăng ký ngay</label>
                        <input type="text" class="form-control" placeholder="" name="linkDangKyNgay" value="<?php echo @$themeData['Option']['value']['linkDangKyNgay'];?>">
                    </div>
                    <div class="col-md-6"><label for="exampleFormControlInput1">Link tải ứng dụng</label>
                        <input type="text" class="form-control" placeholder="" name="linkTaiUngDung" value="<?php echo @$themeData['Option']['value']['linkTaiUngDung'];?>">
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
                        <p class="p-center text-center">Khối banner</p>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 1</p>
                        </div>
                        <div class="col-md-9" style="margin-bottom: 5px">
                            <input type="text" class="form-control" placeholder="" name="BannerMota1" value="<?php echo @$themeData['Option']['value']['BannerMota1'];?>">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 2</p>
                        </div>
                        <div class="col-md-9" style="margin-bottom: 5px">
                            <input type="text" class="form-control" placeholder="" name="BannerMota2" value="<?php echo @$themeData['Option']['value']['BannerMota2'];?>">
                        </div>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 3</p>
                        </div>
                        <div class="col-md-9" style="margin-bottom: 5px">
                            <textarea class="form-control" rows="2" name="BannerMota3"><?php echo @$themeData['Option']['value']['BannerMota3'];?></textarea>
                        </div>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 4</p>
                        </div>
                        <div class="col-md-9" style="margin-bottom: 5px">
                            <textarea class="form-control" rows="2" name="BannerMota4"><?php echo @$themeData['Option']['value']['BannerMota4'];?></textarea>
                        </div>
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
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
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
                    <div class="col-md-3"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI DỊCH VỤ BÁN</p>
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
                </div>
            </td>
        </tr>
<!--        <tr>-->
<!--            <td>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <p class="bold-center" style="color:red">KHỐI ALBUM THIẾT KẾ</p>-->
<!--                    </div>-->
<!--                    <div class="col-md-3"></div>-->
<!--                    <div class="col-md-6">-->
<!--                        <select name="ThietKeAlbum" class="form-control">-->
<!--                            <option value="">Lựa chọn Album ảnh</option>-->
<!--                            --><?php
//                            if(!empty($listAlbum)){
//                                foreach ($listAlbum as $album){
//                                    if(isset($themeData['Option']['value']['ThietKeAlbum']) && $themeData['Option']['value']['ThietKeAlbum'] == $album['Album']['id']){
//                                        $selected = 'selected = "selected"';
//                                    }else{
//                                        $selected = '';
//                                    }
//                                    echo '<option '.$selected.' value="'.$album['Album']['id'].'">'.$album['Album']['title'].'</option>';
//                                }
//                            }?>
<!--                        </select>-->
<!--                    </div>-->
<!--                    <div class="col-md-3"></div>-->
<!--                </div>-->
<!--            </td>-->
<!--        </tr>-->
    </table>

</form>