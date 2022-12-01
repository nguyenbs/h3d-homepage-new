<?php
$breadcrumb = array('name' => 'Cài đặt Đối tác',
	'url' => $urlPlugins . 'theme/greenid-admin-donorSetting.php',
	'sub' => array('name' => '')
);
addBreadcrumbAdmin($breadcrumb);
?>
<form action="" method="POST">
	<input type="" name="id" value="<?php echo @$dataEdit['id'];?>" class="hidden">
	<div class="row">
		<div class="col-sm-6">
			<div><label>Ảnh</label></div>
			
			<?php                    
			showUploadFile('image','image',@$dataEdit['image'],0);
			?>
		</div>
		<div class="col-sm-6">
			<label>Đường dẫn</label>
			<input type="" name="url" class="form-control" value="<?php echo @$dataEdit['url'];?>"  >
		</div>
		<div class="col-sm-12">
			<input type="submit" name="" value="Thêm" class="btn btn-success" style="margin-top: 15px;">
		</div>
	</div>
</form>
<hr>
<table class="table table-bordered table-hover table-striped ">
	<tr>
		<th>STT</th>
		<th>Ảnh</th>
		<th>Đường dẫn</th>
		<th>Hành động</th>
	</tr>
	<?php  
		if(!empty($imagechangeLogoDonor)){
			$i=0;
			foreach ($imagechangeLogoDonor['Option']['value']['Data'] as $key => $value) {
				$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td>
						<img src="<?php echo $value['image'];?>" class="img-responsive" style="height: 100px;width: 100px;">
					</td>
					<td><?php echo $value['url'];?></td>
					<td>
							<a href="<?php echo $urlPlugins . 'theme/greenid-admin-donorSetting.php?idEdit='.$value['id']?>">Sửa</a> |
							<a onclick="return confirm('bạn có chắc chắn không ?');" href="<?php echo $urlPlugins . 'theme/greenid-admin-deleteImageDonor.php?idDelete='.$value['id']?>">Xóa</a>
					</td>

				</tr>
				
				<?php 
			}
		}
	?>
</table>