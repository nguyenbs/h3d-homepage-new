
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house3d-admin-nenTangMuaBanNoiThatSetting.php',
    'sub' => array('name' => 'Cài đặt trang mua bán nội thất 3D')
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
                        <input type="text" class="form-control" placeholder="" name="linkDangKyNgay" value="<?php echo @$themeData['Option']['value']['linkDangKyNgay'];?>">
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

       <!--  <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI MUA SẮM</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="p-center">Nền khối</p>
                        <?php showUploadFile('MuaSamNen','MuaSamNen',@$themeData['Option']['value']['MuaSamNen'],1); ?>
                        <div class="clearfix"></div>
                        <label >Mô tả khối mua sắm</label>
                        <input type="text" class="form-control" placeholder="" name="MuaSamMoTa" value="<?php echo @$themeData['Option']['value']['MuaSamMoTa'];?>"><br>
                        <label >Link icon mua sắm</label>
                        <input type="text" class="form-control" placeholder="" name="MuaSamIcon" value="<?php echo @$themeData['Option']['value']['MuaSamIcon'];?>"><br>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </td>
        </tr> -->

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI NGƯỜI TIÊU DÙNG</p>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 1</label>
                        <input type="text" class="form-control" placeholder="" name="NguoiTieuDungTieuDe" value="<?php echo @$themeData['Option']['value']['NguoiTieuDungTieuDe'];?>"><br>
                        <?php showEditorInput('NguoiTieuDungNoiDung','NguoiTieuDungNoiDung',@$themeData['Option']['value']['NguoiTieuDungNoiDung']);?>>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 1</p>
                        <?php showUploadFile('NguoiTieuDungVideo','NguoiTieuDungVideo',@$themeData['Option']['value']['NguoiTieuDungVideo'],1); ?>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI TRẢI NGHIỆM THỰC TẾ ẢO / ĐÁNH GIÁ SẢN PHẨM / SẢN PHẨM ĐA DẠNG </p>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối trải nghiệm thực tại ảo</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('TraiNghiemTTAIcon','TraiNghiemTTAIcon',@$themeData['Option']['value']['TraiNghiemTTAIcon'],10); ?>
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="" name="TraiNghiemTTATieuDe" value="<?php echo @$themeData['Option']['value']['TraiNghiemTTATieuDe'];?>">
                        <label >Nội dung khối</label>
                        <textarea class="form-control" rows="2" name="TraiNghiemTTANoiDung"><?php echo @$themeData['Option']['value']['TraiNghiemTTANoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối đánh giá vè sản phẩm</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('DanhGiaSanPhamIcon','DanhGiaSanPhamIcon',@$themeData['Option']['value']['DanhGiaSanPhamIcon'],11); ?>
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="" name="DanhGiaSanPhamTieuDe" value="<?php echo @$themeData['Option']['value']['DanhGiaSanPhamTieuDe'];?>">
                        <label >Nội dung khối</label>
                        <textarea class="form-control" rows="2" name="DanhGiaSanPhamNoiDung"><?php echo @$themeData['Option']['value']['DanhGiaSanPhamNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối sản phẩm đa dạng</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('SanPhamDaDangIcon','SanPhamDaDangIcon',@$themeData['Option']['value']['SanPhamDaDangIcon'],18); ?>
                        <label >Tiêu đề khối</label>
                        <input type="text" class="form-control" placeholder="" name="SanPhamDaDangTieuDe" value="<?php echo @$themeData['Option']['value']['SanPhamDaDangTieuDe'];?>">
                        <label >Nội dung khối</label>
                        <textarea class="form-control" rows="2" name="SanPhamDaDangNoiDung"><?php echo @$themeData['Option']['value']['SanPhamDaDangNoiDung'];?></textarea>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI NHÀ CUNG CẤP</p>
                    </div>
                    <div class="col-md-6">
                        <p class="p-center">Ảnh nội dung 2</p>
                        <?php showUploadFile('NhaCungCapVideo','NhaCungCapVideo',@$themeData['Option']['value']['NhaCungCapVideo'],2); ?>
                    </div>
                    <div class="col-md-6">
                        <label >Tiêu đề nội dung 2</label>
                        <input type="text" class="form-control" placeholder="" name="NhaCungCapTieuDe" value="<?php echo @$themeData['Option']['value']['NhaCungCapTieuDe'];?>"><br>
                        <?php showEditorInput('NhaCungCapNoiDung','NhaCungCapNoiDung',@$themeData['Option']['value']['NhaCungCapNoiDung']);?>
                    </div>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI MARKETING / KÊNH BÁN HÀNG / KHÁCH HÀNG TIỀM NĂNG </p>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối trải Marketing</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('MarketingIcon','MarketingIcon',@$themeData['Option']['value']['MarketingIcon'],14); ?>
                        <label >Tiêu đề khối 1</label>
                        <input type="text" class="form-control" placeholder="" name="MarketingTieuDe" value="<?php echo @$themeData['Option']['value']['MarketingTieuDe'];?>">
                        <label >Nội dung khối 1</label>
                        <textarea class="form-control" rows="2" name="MarketingNoiDung"><?php echo @$themeData['Option']['value']['MarketingNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối Kênh bán hàng</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('KenhBanHangIcon','KenhBanHangIcon',@$themeData['Option']['value']['KenhBanHangIcon'],12); ?>
                        <label >Tiêu đề khối 2</label>
                        <input type="text" class="form-control" placeholder="" name="KenhBanHangTieuDe" value="<?php echo @$themeData['Option']['value']['KenhBanHangTieuDe'];?>">
                        <label >Nội dung khối 2</label>
                        <textarea class="form-control" rows="2" name="KenhBanHangNoiDung"><?php echo @$themeData['Option']['value']['KenhBanHangNoiDung'];?></textarea>
                    </div>
                    <div class="col-md-4">
                        <p class="p-center text-center">Khối Khách hàng tiềm năng</p>
                        <p>Icon Khối</p>
                        <?php showUploadFile('KhachHangTiemNangIcon','KhachHangTiemNangIcon',@$themeData['Option']['value']['KhachHangTiemNangIcon'],13); ?>
                        <label >Tiêu đề khối 3</label>
                        <input type="text" class="form-control" placeholder="" name="KhachHangTiemNangTieuDe" value="<?php echo @$themeData['Option']['value']['KhachHangTiemNangTieuDe'];?>">
                        <label >Nội dung khối 3</label>
                        <textarea class="form-control" rows="2" name="KhachHangTiemNangNoiDung"><?php echo @$themeData['Option']['value']['KhachHangTiemNangNoiDung'];?></textarea>
                    </div>
                </div>
            </td>
        </tr>

    </table>

</form>