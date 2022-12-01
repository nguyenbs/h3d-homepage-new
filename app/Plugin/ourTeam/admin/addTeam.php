<?php
$breadcrumb = array('name' => 'Danh sách dự án',
	'url' => $urlPlugins . 'admin/timeline-admin-listProject.php',
	'sub' => array('name' => '')
);
addBreadcrumbAdmin($breadcrumb);
?> 
<form action="" method="POST">
	<?php // pr($dataEdit);?>
	<div class="row">
		<input type="text" name="id" value="<?php echo @$dataEdit['ourTeam']['id'];?>" class="hidden">
		<div class="col-sm-4">
			<label>Tên thành viên</label>
			<input type="text" name="name" class="form-control" value="<?php echo @$dataEdit['ourTeam']['name'];?>" required>
		</div>
		<div class="col-sm-4">
			<label>Chức vụ</label>
            <input type="text" name="position" class="form-control" value="<?php echo @$dataEdit['ourTeam']['position'];?>" required>
		</div>
		<div class="col-sm-4">
			<p>Ảnh đại diện</p>
			<?php showUploadFile('avatar','avatar',@$dataEdit['ourTeam']['avatar'],0);?>
		</div>
		
		<div class="col-sm-12" style="margin-top: 20px;">
			<input type="submit" name="" value="Lưu" class="btn btn-success">
		</div>
	</div>
</form>