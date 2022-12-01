<?php
$breadcrumb = array(
    'name' => 'Cài đặt',
    'url' => $urlPlugins . 'theme/theme/house3d-admin-setting.php',
    'sub' => array(
        'name' => 'Cài đặt trang giới thiệu'
    )
);
addBreadcrumbAdmin($breadcrumb);
?>
<!-- Lưu -->
<script type="text/javascript">
    function save() {
        document.listForm.submit();
    }
</script>

<style>
    .bold-center {
        text-align: center;
        font-weight: bold;
        color: red;
    }

    .p-center {
        font-weight: bold;
    }

    .table-list tr {
        border: 1px solid #006f31;
    }
</style>
<div class="thanhcongcu">
    <div class="congcu" onclick="save();">
        <input type="hidden" id="idChange" value=""/>
        <span id="save">
      <input type="image" src="<?php echo $webRoot; ?>images/save.png"/>
    </span>
        <br/>
        Lưu
    </div>
</div>
<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'></div>
<form action="" method="post" name="listForm">
    <p><?php echo @$mess; ?></p>
    <table class="table table-hover table-border table-list">
        <tr>
            <td> <!-- Khối banner -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="bold-center" style="color:red">KHỐI BANNER</p>
                    </div> <!-- Tiêu để -->
                    <div class="col-md-6"> <!-- Config ảnh banner -->
                        <div class="form-group">
                            <p class="p-center">Ảnh banner</p>
                            <?php showUploadFile('AnhBanner', 'AnhBanner', @$themeData['Option']['value']['AnhBanner'], 0); ?>
                        </div>
                    </div> <!-- Config ảnh banner -->
                    <div class="col-md-6"> <!-- Config mô tả khối banner -->
                        <p class="p-center text-center">Khối banner</p>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả banner 1</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMota1"
                                   value="<?php echo @$themeData['Option']['value']['BannerMota1']; ?>">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-3">
                            <p class="p-center">Dòng mô tả banner 2</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="BannerMota2"
                                   value="<?php echo @$themeData['Option']['value']['BannerMota2']; ?>">
                        </div>
                        <br>
                    </div> <!-- Config mô tả khối banner -->
                </div>
            </td> <!-- Khối banner -->
        </tr>
        <tr>
            <td>
                <div class="row">

                    <div class="col-md-12"> <!-- Tiêu đề khối -->
                        <p class="bold-center" style="color:red">KHỐI WINDOWS / MACOS</p>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <p class="p-center">Tiêu đề khối</p>
                            <input type="text" class="form-control" placeholder="" name="WindowMacTieuDe"
                                   value="<?php echo @$themeData['Option']['value']['WindowMacTieuDe']; ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p class="bold-center" style="color:blue">Cài đặt cho Windows</p>
                        <div class="col-md-6">
                            <p class="p-center">Icon Windows</p>
                            <div class="form-group">
                                <?php showUploadFile('IconWindow', 'IconWindow', @$themeData['Option']['value']['IconWindow'], 1); ?>
                            </div>
                            <div class="clearfix"></div>

                            <p class="p-center">Link button Windows 32 bit</p>
                            <input type="text" class="form-control" placeholder="" name="LinkWindow32"
                                   id="LinkWindow32"
                                   value="<?php echo @$themeData['Option']['value']['LinkWindow32']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Link button Windows 64 bit</p>
                            <input type="text" class="form-control" placeholder="" name="LinkWindow64"
                                   id="LinkWIndow64"
                                   value="<?php echo @$themeData['Option']['value']['LinkWindow64']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Lịch sử thay đổi link download</p>
                            <table style="width: 100%">
                                <col width="150">
                                <col width="200">
                                <col width="200">
                                <tr>
                                    <th>Ngày thay đổi</th>
                                    <th>Link cũ</th>
                                    <th>Link mới</th>
                                </tr>
                                <?php // Lấy tất cả các thay đổi ra
                                foreach ($themeData['Option']['value']['WindowsLinkUpdateHistory'] as $windowsLinkFileUpdateHistory) {
                                    echo "<tr>";
                                    echo "<td>" . $windowsLinkFileUpdateHistory[0] . "</td>";
                                    echo "<td><a>" . $windowsLinkFileUpdateHistory[1] . "</a></td>";
                                    echo "<td><a href='" . $windowsLinkFileUpdateHistory[2] . "'>" . $windowsLinkFileUpdateHistory[2] . "</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <p class="p-center">Version Windows</p>
                            <input type="text" class="form-control" placeholder="" name="VersionWindow"
                                   value="<?php echo @$themeData['Option']['value']['VersionWindow']; ?>">
                            <div class="clearfix"></div>
                            <p class="p-center">Link file Windows 32 bit</p>
                            <input type="text" class="form-control" placeholder="" name="LinkFileWindow32"
                                   id="LinkFileWindow32"
                                   value="<?php echo @$themeData['Option']['value']['LinkFileWindow32']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Link file Windows 64 bit</p>
                            <input type="text" class="form-control" placeholder="" name="LinkFileWindow64"
                                   id="LinkFileWindow64"
                                   value="<?php echo @$themeData['Option']['value']['LinkFileWindow64']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Lịch sử thay đổi link file</p>
                            <table style="width: 100%">
                                <col width="150">
                                <col width="200">
                                <col width="200">
                                <col width="100">
                                <tr>
                                    <th>Ngày thay đổi</th>
                                    <th>Link cũ</th>
                                    <th>Link mới</th>
                                    <th>Version</th>
                                </tr>
                                <?php // Lấy tất cả các thay đổi ra
                                if (array_key_exists("WindowsLinkFileUpdateHistory", $themeData['Option']['value'])) {
                                    foreach ($themeData['Option']['value']['WindowsLinkFileUpdateHistory'] as $windowsLinkFileUpdateHistory) {
                                        echo "<tr>";
                                        echo "<td>" . $windowsLinkFileUpdateHistory[0] . "</td>";
                                        echo "<td><a>" . $windowsLinkFileUpdateHistory[1] . "</a></td>";
                                        echo "<td><a href='" . $windowsLinkFileUpdateHistory[2] . "'>" . $windowsLinkFileUpdateHistory[2] . "</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="bold-center" style="color:blue">Cài đặt cho MacOS</p>

                        <div class="col-md-6">
                            <p class="p-center">Icon MacOS</p>
                            <div class="form-group">
                                <?php showUploadFile('IconMac', 'IconMac', @$themeData['Option']['value']['IconMac'], 2); ?>
                            </div>
                            <div class="clearfix"></div>

                            <p class="p-center">Link button MacOS</p>
                            <input type="text" class="form-control" placeholder="" name="LinkMac" id="LinkMac"
                                   value="<?php echo @$themeData['Option']['value']['LinkMac']; ?>">
                            <div class="clearfix"></div>
                            <p class="p-center">Link button MacOS Retina</p>
                            <input type="text" class="form-control" placeholder="" name="LinkMacRetina" id="LinkMacRetina"
                                   value="<?php echo @$themeData['Option']['value']['LinkMacRetina']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Lịch sử thay đổi link download</p>
                            <table style="width: 100%">
                                <col width="150">
                                <col width="200">
                                <col width="200">
                                <tr>
                                    <th>Ngày thay đổi</th>
                                    <th>Link cũ</th>
                                    <th>Link mới</th>
                                </tr>
                                <?php // Lấy tất cả các thay đổi ra
                                foreach ($themeData['Option']['value']['MacLinkUpdateHistory'] as $macLinkUpdateHistory) {
                                    echo "<tr>";
                                    echo "<td>" . $macLinkUpdateHistory[0] . "</td>";
                                    echo "<td><a>" . $macLinkUpdateHistory[1] . "</a></td>";
                                    echo "<td><a href='" . $macLinkUpdateHistory[2] . "'>" . $macLinkUpdateHistory[2] . "</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>

                        </div>
                        <div class="col-md-6">
                            <p class="p-center">Version MacOS</p>
                            <input type="text" class="form-control" placeholder="" name="VersionMac"
                                   id="VersionMac"
                                   value="<?php echo @$themeData['Option']['value']['VersionMac']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Link file MacOS</p>
                            <input type="text" class="form-control" placeholder=""
                                   name="LinkFileMac" id="LinkFileMac"
                                   value="<?php echo @$themeData['Option']['value']['LinkFileMac']; ?>">
                            <div class="clearfix"></div>
                            <p class="p-center">Link file MacOS Retina</p>
                            <input type="text" class="form-control" placeholder=""
                                   name="LinkFileMacRetina" id="LinkFileMacRetina"
                                   value="<?php echo @$themeData['Option']['value']['LinkFileMacRetina']; ?>">
                            <div class="clearfix"></div>

                            <p class="p-center">Lịch sử thay đổi link file</p>
                            <table style="width: 100%">
                                <col width="150">
                                <col width="200">
                                <col width="200">
                                <col width="100">
                                <tr>
                                    <th>Ngày thay đổi</th>
                                    <th>Link cũ</th>
                                    <th>Link mới</th>
                                    <th>Version</th>
                                </tr>
                                <?php // Lấy tất cả các thay đổi ra
                                if (array_key_exists("MacLinkFileUpdateHistory", $themeData['Option']['value'])) {
                                    foreach ($themeData['Option']['value']['MacLinkFileUpdateHistory'] as $macLinkFileUpdateHistory) {
                                        echo "<tr>";
                                        echo "<td>" . $macLinkFileUpdateHistory[0] . "</td>";
                                        echo "<td><a>" . $macLinkFileUpdateHistory[1] . "</a></td>";
                                        echo "<td><a href='" . $macLinkFileUpdateHistory[2] . "'>" . $macLinkFileUpdateHistory[2] . "</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div><!-- Config khối Mac -->
                </div>
            </td>
        </tr>
        <tr>
            <td>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<p class="bold-center" style="color:red">KHỐI CÔNG CỤ THIẾT KẾ</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<p class="p-center">Tiêu đề khối</p>
							<input type="text" class="form-control" placeholder="" name="KhoiCongCuTieuDe"
								   value="<?php echo @$themeData['Option']['value']['KhoiCongCuTieuDe']; ?>">
						</div>
						<div class="col-md-3"></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p class="p-center">Icon khối 1</p>
							<div class="form-group">
								<?php showUploadFile('CongCuTKKhoi1Icon', 'CongCuTKKhoi1Icon', @$themeData['Option']['value']['CongCuTKKhoi1Icon'], 3); ?>
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 1 dòng 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi1MoTa1"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi1MoTa1']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 1 dòng 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi1MoTa2"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi1MoTa2']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải về button khối 1</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi1LinkTai"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi1LinkTai']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải file khối 1</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi1LinkFile"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi1LinkFile']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Lịch sử link tải file</p>
							<table style="width: 100%">
								<col width="150">
								<col width="200">
								<col width="200">
								<col width="100">
								<tr>
									<th>Ngày thay đổi</th>
									<th>Link cũ</th>
									<th>Link mới</th>
								</tr>
								<?php // Lấy tất cả các thay đổi ra
								if (array_key_exists("Module1LinkFileUpdateHistory", $themeData['Option']['value'])) {
									foreach ($themeData['Option']['value']['Module1LinkFileUpdateHistory'] as $module1LinkFileUpdateHistory) {
										echo "<tr>";
										echo "<td>" . $module1LinkFileUpdateHistory[0] . "</td>";
										echo "<td><a>" . $module1LinkFileUpdateHistory[1] . "</a></td>";
										echo "<td><a href='" . $module1LinkFileUpdateHistory[2] . "'>" . $module1LinkFileUpdateHistory[2] . "</a></td>";
										echo "</tr>";
									}
								}
								?>
							</table>
							<br>
						</div>
						<div class="col-md-6">
							<p class="p-center">Icon khối 2</p>
							<div class="form-group">
								<?php showUploadFile('CongCuTKKhoi2Icon', 'CongCuTKKhoi2Icon', @$themeData['Option']['value']['CongCuTKKhoi2Icon'], 4); ?>
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 2 dong 1</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi2MoTa1"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi2MoTa1']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 2 dòng 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi2MoTa2"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi2MoTa2']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải về khối 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi2LinkTai"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi2LinkTai']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải file khối 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi2LinkFile"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi2LinkFile']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Lịch sử link tải file</p>
							<table style="width: 100%">
								<col width="150">
								<col width="200">
								<col width="200">
								<col width="100">
								<tr>
									<th>Ngày thay đổi</th>
									<th>Link cũ</th>
									<th>Link mới</th>
								</tr>
								<?php // Lấy tất cả các thay đổi ra
								if (array_key_exists("Module2LinkFileUpdateHistory", $themeData['Option']['value'])) {
									foreach ($themeData['Option']['value']['Module2LinkFileUpdateHistory'] as $module2LinkFileUpdateHistory) {
										echo "<tr>";
										echo "<td>" . $module2LinkFileUpdateHistory[0] . "</td>";
										echo "<td><a>" . $module2LinkFileUpdateHistory[1] . "</a></td>";
										echo "<td><a href='" . $module2LinkFileUpdateHistory[2] . "'>" . $module2LinkFileUpdateHistory[2] . "</a></td>";
										echo "</tr>";
									}
								}
								?>
							</table>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p class="p-center">Icon khối 3</p>
							<div class="form-group">
								<?php showUploadFile('CongCuTKKhoi3Icon', 'CongCuTKKhoi3Icon', @$themeData['Option']['value']['CongCuTKKhoi3Icon'], 5); ?>
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 3 dòng 1</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi3MoTa1"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi3MoTa1']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 3 dòng 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi3MoTa2"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi3MoTa2']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải về khối 3</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi3LinkTai"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi3LinkTai']; ?>">
							</div>
							<br>
						</div>
						<div class="col-md-6">
							<p class="p-center">Icon khối 4</p>
							<div class="form-group">
								<?php showUploadFile('CongCuTKKhoi4Icon', 'CongCuTKKhoi4Icon', @$themeData['Option']['value']['CongCuTKKhoi4Icon'], 6); ?>
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 4 dòng 1</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi4MoTa1"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi4MoTa1']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Mô tả khối 4 dòng 2</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi4MoTa2"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi4MoTa2']; ?>">
							</div>
							<div class="clearfix"></div>
							<p class="p-center">Link tải về khối 4</p>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="" name="CongCuTKKhoi4LinkTai"
									   value="<?php echo @$themeData['Option']['value']['CongCuTKKhoi4LinkTai']; ?>">
							</div>
							<br>
						</div>
					</div>
				</div>
            </td>
        </tr>

		//Khối các tài nguyên khác
		<?php include('download-setting/other-resources.php'); ?>

    </table>
</form>


