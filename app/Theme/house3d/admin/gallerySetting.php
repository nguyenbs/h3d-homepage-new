
<?php
$breadcrumb = array('name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house-admin-gallerySetting.php',
    'sub' => array('name' => 'Cài đặt giao diện')
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
                        <p class="bold-center" style="color:red">KHỐI THIẾT KẾ ẤN TƯỢNG</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <select name="AlbumThietKeAnTuong" class="form-control">
                            <option value="">Lựa chọn Album ảnh</option>
                            <?php
                            if(!empty($listAlbum)){
                                foreach ($listAlbum as $album){
                                    if(isset($themeData['Option']['value']['AlbumThietKeAnTuong']) && $themeData['Option']['value']['AlbumThietKeAnTuong'] == $album['Album']['id']){
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


    </table>

</form>