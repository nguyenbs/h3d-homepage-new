<?php
$breadcrumb = array('name' => 'Danh sách thành viên dự án',
	'url' => $urlPlugins . 'admin/timeline-admin-listTeam.php',
	'sub' => array('name' => '')
);
addBreadcrumbAdmin($breadcrumb);
?>  
<div class="thanhcongcu">
	<div class="congcu">
		<span> 
			<a href="<?php echo $urlPlugins; ?>admin/ourTeam-admin-addTeam.php"> <img src="<?php echo $webRoot;?>images/add.png" /> Thêm</a>
		</span>
	</div>
</div>
<?php //pr($listData);?>
<table class="table table-bordered table-hover table-striped ">
	<th>STT</th>
	<th>Tên thành viên</th>
	<th>Vị trí</th>
	<th>Avatar</th>
	<th>Sắp xếp</th>
	<th>Lựa chọn</th>
	<?php 
		if(!empty($listData)){
            foreach ($listData as $key => $value) {
				?>
				<tr>
					<td><?php echo $key+1;?></td>
                    <td><?php echo $value['ourTeam']['name'];?></td>
                    <td><?php echo $value['ourTeam']['position'];?></td>
                    <td><img src="<?php echo $value['ourTeam']['avatar'];?>" style="width: 120px;height: 120px"></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="idOurTeam" value="<?php echo $value['ourTeam']['id'];?>">
                            <input type="number" name="sort" value="<?php echo @$value['ourTeam']['sort'];?>" style="width: 28%;padding: 5px 5px;">
                            <input type="submit" value="Lưu" class="btn btn-primary">
                        </form>
                    </td>
					<td>
                        <a href="<?php echo $urlPlugins.'admin/ourTeam-admin-addTeam.php?idEdit='.$value['ourTeam']['id'];?>">Sửa</a>
                        <a onclick="confirm('yes or no');" href="<?php echo $urlPlugins.'admin/ourTeam-admin-deleteTeam.php?idDelete='.$value['ourTeam']['id'];?>">Xóa</a>
                    </td>
				</tr>
				<?php 
			}
		}
	?>
</table>
