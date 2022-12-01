
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house3d-admin-footerSetting.php',
    'sub' => array('name' => 'Cài đặt chân trang')
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
                        <p class="bold-center" style="color:red">Cài đặt chân trang</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Cài đặt logo</p>
                        <?php showUploadFile('logo','logo',@$themeData['Option']['value']['logo'],0); ?>
                        <p class="p-center text-center">Link icon facebook</p>
                        <input type="text" class="form-control" placeholder="Link icon facebook" name="facebook" value="<?php echo @$themeData['Option']['value']['facebook'];?>">
                        <p class="p-center text-center">Link icon instagram</p>
                        <input type="text" class="form-control" placeholder="Link icon instagram" name="twitter" value="<?php echo @$themeData['Option']['value']['instagram'];?>">
                        <p class="p-center text-center">Link icon linkedin</p>
                        <input type="text" class="form-control" placeholder="Link icon linkedin" name="linkedin" value="<?php echo @$themeData['Option']['value']['linkedin'];?>">
                        <p class="p-center text-center">Link icon youtube</p>
                        <input type="text" class="form-control" placeholder="Link icon youtube" name="youtube" value="<?php echo @$themeData['Option']['value']['youtube'];?>">
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Cài đặt khối 1</p>
                        <p>Tiêu đề khối 1</p>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 1" name="TieuDeKhoi1" value="<?php echo @$themeData['Option']['value']['TieuDeKhoi1'];?>">
                        <br>
                        <select name="sanPhamId" class="form-control">
                            <option value="">Lựa chọn liên kết nhanh</option>
                            <?php
                            $listLinkWeb = getLinkWebCategory();
                            if(!empty($listLinkWeb['Option']['value']['allData'])){
                                foreach ($listLinkWeb['Option']['value']['allData'] as $link){
                                    if(isset($themeData['Option']['value']['sanPhamId']) && $themeData['Option']['value']['sanPhamId'] == $link['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$link['id'].'">'.$link['name'].'</option>';
                                }
                            }?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Cài đặt khối 2</p>
                        <p>Tiêu đề khối 2</p>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 2" name="TieuDeKhoi2" value="<?php echo @$themeData['Option']['value']['TieuDeKhoi2'];?>">
                        <br>
                        <select name="BanCanTroGiupId" class="form-control">
                            <option value="">Lựa chọn liên kết nhanh</option>
                            <?php
                            $listLinkWeb = getLinkWebCategory();
                            if(!empty($listLinkWeb['Option']['value']['allData'])){
                                foreach ($listLinkWeb['Option']['value']['allData'] as $link){
                                    if(isset($themeData['Option']['value']['BanCanTroGiupId']) && $themeData['Option']['value']['BanCanTroGiupId'] == $link['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$link['id'].'">'.$link['name'].'</option>';
                                }
                            }?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <p class="p-center text-center">Cài đặt khối 3</p>
                        <p>Tiêu đề khối 3</p>
                        <input type="text" class="form-control" placeholder="Tiêu đề khối 3" name="TieuDeKhoi3" value="<?php echo @$themeData['Option']['value']['TieuDeKhoi3'];?>">
                        <br>
                        <select name="ThongTinThemId" class="form-control">
                            <option value="">Lựa chọn liên kết nhanh</option>
                            <?php
                            $listLinkWeb = getLinkWebCategory();
                            if(!empty($listLinkWeb['Option']['value']['allData'])){
                                foreach ($listLinkWeb['Option']['value']['allData'] as $link){
                                    if(isset($themeData['Option']['value']['ThongTinThemId']) && $themeData['Option']['value']['ThongTinThemId'] == $link['id']){
                                        $selected = 'selected = "selected"';
                                    }else{
                                        $selected = '';
                                    }
                                    echo '<option '.$selected.' value="'.$link['id'].'">'.$link['name'].'</option>';
                                }
                            }?>
                        </select>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</form>