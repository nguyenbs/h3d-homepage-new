
<?php
$breadcrumb = array('name' => 'Cài đặt',
  'url' => $urlPlugins . 'theme/theme/house3d-admin-settingIndex.php',
  'sub' => array('name' => 'Cài đặt trang chủ')
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
    <p><?php if(!empty($mess)){echo $mess;}?></p>
    <table class="table table-hover table-border table-list">
        <tr>
            <td >
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">CÀI ĐẶT LINK</p>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link đăng ký ngay</label>
                        <input type="text" class="form-control" placeholder="" value="<?php echo @$themeData['Option']['value']['linkDangKyNgay'];?>" name="linkDangKyNgay">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1">Link tải ứng dụng</label>
                        <input type="text" class="form-control" placeholder="" value="<?php echo @$themeData['Option']['value']['linkTaiUngDung'];?>" name="linkTaiUngDung">
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
                            <p class="p-center">Poster - video banner</p>
                            <?php showUploadFile('poster0','poster0',@$themeData['Option']['value']['poster0'],11); ?>
                            <p class="p-center" >Video banner</p>
                            <?php showUploadFile('videoBanner','videoBanner',@$themeData['Option']['value']['videoBanner'],0); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối video banner</p>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 1</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="moTadong1Banner" value="<?php echo @$themeData['Option']['value']['moTadong1Banner'];?>">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả 2</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="moTadong2Banner" value="<?php echo @$themeData['Option']['value']['moTadong2Banner'];?>">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI THỐNG KÊ</p>
                    </div>
                    <div class="col-md-6">
                        <label >3D models</label>
                        <input type="number" class="form-control" placeholder="" name="thongKeModel" value="<?php echo @$themeData['Option']['value']['thongKeModel'];?>">
                    </div>
                    <div class="col-md-6">
                        <label>Mẫu thiết kế</label>
                        <input type="number" class="form-control" placeholder="" name="thongKeMauThietKe" value="<?php echo @$themeData['Option']['value']['thongKeMauThietKe'];?>">
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung dòng 1" name="tieuDeCongCuThietKeDong1" value="<?php echo @$themeData['Option']['value']['tieuDeCongCuThietKeDong1'];?>">
                        <br>
                        <input type="text" class="form-control" placeholder="Nội dung dòng 2" name="tieuDeCongCuThietKeDong2" value="<?php echo @$themeData['Option']['value']['tieuDeCongCuThietKeDong2'];?>">
                    </div>
                    <div class="col-md-4"></div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 1</p>
                    </div>
                    <div class="col-md-6">
                        <label >Heading nội dung 1</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeHeadingND1" value="<?php echo @$themeData['Option']['value']['CongCuThietKeHeadingND1'];?>"><br>
                        <label >Tiêu đề nội dung 1</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeTieuDeND1" value="<?php echo @$themeData['Option']['value']['CongCuThietKeTieuDeND1'];?>"><br>
                        <textarea class="form-control" rows="2" name="CongCuThietMoTaND1"><?php echo @$themeData['Option']['value']['CongCuThietMoTaND1'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Poster - video nội dung 1</p>
                        <?php showUploadFile('poster1','poster1',@$themeData['Option']['value']['poster1'],7); ?>
                        <p class="p-center">Video nội dung 1</p>
                        <?php showUploadFile('CongCuThietKeVideoND1','CongCuThietKeVideoND1',@$themeData['Option']['value']['CongCuThietKeVideoND1'],1); ?>

                    </div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 2</p>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Poster - video nội dung 2</p>
                        <?php showUploadFile('poster2','poster2',@$themeData['Option']['value']['poster2'],8); ?>
                        <p class="p-center">Video nội dung 2</p>
                        <?php showUploadFile('CongCuThietKeVideoND2','CongCuThietKeVideoND2',@$themeData['Option']['value']['CongCuThietKeVideoND2'],2); ?>
                    </div>
                    <div class="col-md-6">
                        <label >Heading nội dung 2</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeHeadingND2" value="<?php echo @$themeData['Option']['value']['CongCuThietKeHeadingND2'];?>"><br>
                        <label >Tiêu đề nội dung 2</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeTieuDeND2" value="<?php echo @$themeData['Option']['value']['CongCuThietKeTieuDeND2'];?>"><br>
                        <textarea class="form-control" rows="2" name="CongCuThietMoTaND2"><?php echo @$themeData['Option']['value']['CongCuThietMoTaND2'];?></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung 3</p>
                    </div>
                    <div class="col-md-6">
                        <label >Heading nội dung 3</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeHeadingND3" value="<?php echo @$themeData['Option']['value']['CongCuThietKeHeadingND3'];?>"><br>
                        <label >Tiêu đề nội dung 3</label>
                        <input type="text" class="form-control" placeholder="" name="CongCuThietKeTieuDeND3" value="<?php echo @$themeData['Option']['value']['CongCuThietKeTieuDeND3'];?>"><br>
                        <textarea class="form-control" rows="2" name="CongCuThietMoTaND3"><?php echo @$themeData['Option']['value']['CongCuThietMoTaND3'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Poster - video nội dung 3</p>
                        <?php showUploadFile('poster3','poster3',@$themeData['Option']['value']['poster3'],9); ?>
                        <p class="p-center">Video nội dung 3</p>
                        <?php showUploadFile('CongCuThietKeVideoND3','CongCuThietKeVideoND3',@$themeData['Option']['value']['CongCuThietKeVideoND3'],3); ?>
                    </div>
                    <?php include('block-content/other-resources.php'); ?>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI NÂNG CAO HIỆU QUẢ / HƯỚNG ĐẾN THIẾT KẾ TRẢI NGHIỆM</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="" name="NangCaoHieuQuaTieuDeDong1" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeDong1'];?>">
                        <br>
                        <input type="text" class="form-control" placeholder="Nội dung dòng 2" name="NangCaoHieuQuaTieuDeDong2" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeDong2'];?>">
                    </div>
                    <div class="col-md-4"></div>

                    <div class="col-md-12 text-center">
                        <img src="<?php echo $urlThemeActive; ?>/img/border-1.png">
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối 1</p>
<!--                        --><?php //showUploadFile('NangCaoHieuQuaIconKhoi1','NangCaoHieuQuaIconKhoi1',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi1'],4); ?>
                        <?php showUploadFile('NangCaoHieuQuaIconKhoi1','NangCaoHieuQuaIconKhoi1',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi1'],5); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="NangCaoHieuQuaTieuDeKhoi1" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi1'];?>">
                        <label >Nội dung khối 1</label>
                        <textarea class="form-control" rows="2" name="NangCaoHieuQuaMoTaKhoi1"><?php echo @$themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi1'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối 2</p>
<!--                        --><?php //showUploadFile('NangCaoHieuQuaIconKhoi2','NangCaoHieuQuaIconKhoi2',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi2'],5); ?>
                        <?php showUploadFile('NangCaoHieuQuaIconKhoi2','NangCaoHieuQuaIconKhoi2',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi2'],6); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="" name="NangCaoHieuQuaTieuDeKhoi2" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi2'];?>">
                        <label >Nội dung khối 2</label>
                        <textarea class="form-control" rows="2" name="NangCaoHieuQuaMoTaKhoi2"><?php echo @$themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi2'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối 3</p>
<!--                        --><?php //showUploadFile('NangCaoHieuQuaIconKhoi3','NangCaoHieuQuaIconKhoi3',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi3'],6); ?>
                        <?php showUploadFile('NangCaoHieuQuaIconKhoi3','NangCaoHieuQuaIconKhoi3',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi3'],7); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="" name="NangCaoHieuQuaTieuDeKhoi3" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi3'];?>">
                        <label >Nội dung khối 3</label>
                        <textarea class="form-control" rows="2" name="NangCaoHieuQuaMoTaKhoi3"><?php echo @$themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi3'];?></textarea>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Khối 4</p>
<!--                        --><?php //showUploadFile('NangCaoHieuQuaIconKhoi4','NangCaoHieuQuaIconKhoi4',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi4'],7); ?>
                        <?php showUploadFile('NangCaoHieuQuaIconKhoi4','NangCaoHieuQuaIconKhoi4',@$themeData['Option']['value']['NangCaoHieuQuaIconKhoi4'],8); ?>
                        <label >Tiêu đề khối 4</label>
                        <input type="text" class="form-control" placeholder="" name="NangCaoHieuQuaTieuDeKhoi4" value="<?php echo @$themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi4'];?>">
                        <label >Nội dung khối 4</label>
                        <textarea class="form-control" rows="2" name="NangCaoHieuQuaMoTaKhoi4"><?php echo @$themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi4'];?></textarea>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-cter" style="olor:red">KHỐI THIẾT KẾ ẤN TƯỢNG</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="ThietKeAnTuongTieuDe" value="<?php echo @$themeData['Option']['value']['ThietKeAnTuongTieuDe'];?>">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Lựa chọn Albums ảnh</p>
                        <select name="ThietKeAnTuongAlbum" class="form-control">
                            <option value="">Lựa chọn Album ảnh</option>
                            <?php
                            if(!empty($listAlbum)){
                                foreach ($listAlbum as $album){
                                    if(isset($themeData['Option']['value']['ThietKeAnTuongAlbum']) && $themeData['Option']['value']['ThietKeAnTuongAlbum'] == $album['Album']['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$album['Album']['id'].'">'.$album['Album']['title'].'</option>';
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
                        <p class="bold-center" style="color:red">KHỐI ỨNG DỤNG THIẾT KẾ 3D</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center p-center">Tiêu đề khối</p>
                        <input type="text" class="form-control" placeholder="Nội dung tiêu đề" name="UngDungThietKe3DTieuDe" value="<?php echo @$themeData['Option']['value']['UngDungThietKe3DTieuDe'];?>">
                        <p class="text-center p-center">Nội dung khối</p>
                        <?php showEditorInput('UngDungThietKe3DNoiDung','UngDungThietKe3DNoiDung',@$themeData['Option']['value']['UngDungThietKe3DNoiDung']);?>
                        <p class="text-center p-center">Link hướng dẫn sử dụng</p>
                        <input type="text" class="form-control" placeholder="Link hướng dẫn sử dụng" name="UngDungThietKe3DLinkHDSD" value="<?php echo @$themeData['Option']['value']['UngDungThietKe3DLinkHDSD'];?>">
                    </div>
                    <div class="col-md-6">
                        <p class="p-center text-center">Cài đặt ảnh mô tả</p>
                        <?php showUploadFile('UngDungThietKe3DAnh','UngDungThietKe3DAnh',@$themeData['Option']['value']['UngDungThietKe3DAnh'],8); ?>
                    </div>

                </div>
            </td>
        </tr>
    </table>

</form>
