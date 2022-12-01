<?php
$breadcrumb= array( 'name'=>'Contact Management',
	'url'=>$urlPlugins.'admin/contact-listDonate.php',
	'sub'=>array('name'=>'Donate List')
	);
addBreadcrumbAdmin($breadcrumb);
?> 

<div class="clear"></div>

<div id="content">

	<form action="" method="post" name="duan" class="taovienLimit">

		<table id="listTin" cellspacing="0" class="tableList">

			<tr>
				<td align="center">Date</td>
				<td align="center">Full Name</td>
				<td align="center">Email</td>
				<td align="center">Phone</td>
				<td align="center" width="250">Content</td>
				<td align="center" width="160">Choice</td>

			</tr>

			<?php

			$confirm= 'Bạn muốn xóa liên hệ này !!';
			foreach($donateList as $thongtin)
			{pr($thongtin);
				$format = "d M Y";
				$date=date('d-m-Y h:i:s', $tin['Contact']['created']->sec); 
				?>
				<tr>
				<td><?php echo $date ?></td>
				<td><?php echo @$thongtin['Contact']['fullname_dn']; ?></td>
				<td><?php echo @$thongtin['Contact']['email'];?></td>
				<td><?php echo @$thongtin['Contact']['phone_dn']; ?></td>
				<td><?php echo @$thongtin['Contact']['content_dn']; ?></td>
				<td align="center"> 
					<a style="padding: 4px 8px;" href="<?php echo $urlPlugins."admin/contact-deleteContact.php/".$thongtin['Contact']['id']; ?>" class="input" onclick="return confirm($confirm);"  >Delete</a>
				</td>

			</tr>
			<?php
		}

		?>


	</table>
	<p>
		<?php
		if($page>5){
			$startPage= $page-5;
		}else{
			$startPage= 1;
		}

		if($totalPage>$page+5){
			$endPage= $page+5;
		}else{
			$endPage= $totalPage;
		}

		echo '<a href="'.$urlNow.$back.'">Previous Page</a> ';
		for($i=$startPage;$i<=$endPage;$i++){
			echo ' <a href="'.$urlNow.$i.'">'.$i.'</a> ';
		}
		echo ' <a href="'.$urlNow.$next.'">Next Page</a> ';
		?>
	</p>
</form>





</div>