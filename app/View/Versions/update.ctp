<?php
	$breadcrumb= array( 'name'=>'Version Update',
						'url'=>$urlVersionControl.'update',
					  );
	addBreadcrumbAdmin($breadcrumb);
	$apiUrl = 'https://id.house3d.net';
	$user= $this->Session->read('infoAdminLogin');
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div style="padding-left: 10%; padding-right: 10%" >
	<div class="clear"></div>
<div class="cauhinh">
	<div>
		<h3>Thay đổi R và ResourceR</h3>
		<p><strong>Phiên bản hiện tại :</strong>  </p>
		<p>House3d.com : <?php echo $R_com; ?> ,</p>
		<p>House3d.net : <?php echo $R_net; ?> ,</p>
		<form method="post" action="">
				Api url:<br>
			  <input class="form-control" type="text" name="apiUrl" style="width: 40%" value="https://id.house3d.net/api/flashvar-upgrade">
			  <br>
				Authorization:<br>
			  <input class="form-control" type="text" name="authcode" style="width: 40%" value="cCKf97gM9A7T2WySYnTHWaLHXxLj27g6yy8h7eX77saYX8j4kLgM3GdJsNyeHxnxhUVGct3Yaz4bvvMtw9RhkqMBmeyU5QKkvJfjJHdJL4BQwRREuJTVaAnn97Fu5uLu">
			  <br>
			  R:<br>
			  <input class="form-control" type="text" name="R" style="width: 40%" value="">
			  <br>
			  ResourceR:<br>
			  <input class="form-control" type="text" name="resourceR" style="width: 40%" value="">
			  <input class="btn btn-danger" type="submit" value="Update" name="update-r">
		</form>

		<?php
			if(isset($_POST['update-r'])){
				if (isset($_POST['R']) && isset($_POST['resourceR']) && isset($_POST['authcode']) && isset($_POST['apiUrl'])) {
					$r = $_POST['R'];
					$resourceR = $_POST['resourceR'];
					$authorization = 'Authorization: Bearer '.$_POST['authcode'];
					$apiUrl = $_POST['apiUrl'];
					$headerCommand = ['R'=>$r,'ResourceR'=>$resourceR];
					$headerCommand = json_encode($headerCommand);

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
					curl_setopt($ch, CURLOPT_URL,$apiUrl);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS,$headerCommand);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$server_output = curl_exec ($ch);
					curl_exec($ch);
					if (curl_error($ch)) {
					    $error_msg = curl_error($ch);
					    var_dump($error_msg);
					}
					curl_close ($ch);

					$save['UserRecord']['user'] = $user['Admin']['user'];
		            $save['UserRecord']['file'] = 'flashvar-upgrade';
		            $time = date('h:i:s d/m/Y',time());
		            $save['UserRecord']['time'] = $time;
		            $save['UserRecord']['status'] = 'update flashvar';

		            $save['UserRecord']['change_log'] = 'bản cũ : com - '.$R_com.', net -'.$R_net.'. Update thành : R-'.$r.' resourceR -'.$resourceR;

					App::import('Model', 'UserRecord');
					$this->UserRecord = new UserRecord();
					$this->UserRecord->save($save['UserRecord']);
					header("Refresh:0");

				}
			}
		?>

	</div>
</div>

<div class="upload-standalone">
	<h3>Upload phiên bản mới</h3>
	<p style="color: red">Các đường dẫn phải kết thúc bằng dấu "/"</p>
	<form method="post" action="" enctype="multipart/form-data">
			<input type="text" name="path-version" placeholder="Đường dẫn đến nơi upload" class="form-control" style="width: 40%">
			<input class="form-control" type="text" name="version_tag" style="width: 50%" placeholder="Version Tag">
            <input class="form-control" type="text" name="git_info" style="width: 50%" placeholder="Git Info">
  			<textarea class="form-control" rows="5" name="change_log" placeholder="Change log"  id="comment"></textarea>

			<input type="text" name="path-zip-backup" placeholder="Đường dẫn file cần Backup" class="form-control" style="width: 40%">

			<input type="text" name="path-version-backup" placeholder="Đường dẫn đến nơi Backup" class="form-control" style="width: 40%">
            <input class="btn btn-default" type="file" name="zipfile"/>

            <input type="submit" class="btn btn-primary" name="uploadclick" value="Upload"/>
    </form>

    <?php // Xử Lý Upload

    // Nếu người dùng click Upload
    if (isset($_POST['uploadclick']) && isset($_POST['path-version']) && isset($_POST['path-version-backup']) )
    {

    	// Tạo bản backup
    	date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y_m_d_h_i_s', time());

        $standaloneFolder = $_POST['path-version'];
        $backupStandalone = $_POST['path-version-backup'];
        $file = $_POST['path-zip-backup'];

        $version_tag = $_POST['version_tag'];
        $git_info = $_POST['git_info'];
        $change_log = $_POST['change_log'];


        //tạo folder

        if (!file_exists($backupStandalone.$date)) {
    		mkdir($backupStandalone.$date, 0777, true);

	            $file_to_go = str_replace($standaloneFolder,$backupStandalone.$date.'/',$file);

	            copy($file, $file_to_go);
	            $save['UserRecord']['user'] = $user['Admin']['user'];
	            $save['UserRecord']['file'] = $file_to_go;
	            $time = date('h:i:s d/m/Y',time());
	            $save['UserRecord']['time'] = $time;
	            $save['UserRecord']['status'] = 'backup H3D app';

				App::import('Model', 'UserRecord');
				$this->UserRecord = new UserRecord();
				$this->UserRecord->save($save['UserRecord']);


        	echo 'tạo backup '.$date.'  ';
		}
        //tạo xong backup


        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['zipfile']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['zipfile']['error'] > 0)
            {
                echo '   File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['zipfile']['tmp_name'], $standaloneFolder.$_FILES['zipfile']['name']);

                echo 'Đã upload phiên bản mới';
                $save['UserRecord']['user'] = $user['Admin']['user'];
	            $save['UserRecord']['file'] = $standaloneFolder.$_FILES['zipfile']['name'];
	            $time = date('h:i:s d/m/Y',time());
	            $save['UserRecord']['time'] = $time;
	            $save['UserRecord']['status'] = 'update H3D app';
	            $save['UserRecord']['version_tag'] = $version_tag;
	            $save['UserRecord']['git_info'] = $git_info;
	            $save['UserRecord']['change_log'] = $change_log;

				App::import('Model', 'UserRecord');
				$this->UserRecord = new UserRecord();
				$this->UserRecord->save($save['UserRecord']);
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>
</div>


<div class="upload-resource (Không chứa SWF)">


	<h3>Upload Resource</h3>
	<form method="post" enctype="multipart/form-data">
			<input class="form-control" type="text" name="path" style="width: 50%" placeholder="nhập đường dẫn nơi update">

            <input class="btn btn-default" type="file" name="my_file[]" multiple>
            <input class="btn btn-primary" type="submit" value="Upload">
        </form>
        <?php

        	if (isset($_POST['path'])) {
        		$path = $_POST['path'];


        		if (isset($_FILES['my_file'])) {
	                $myFile = $_FILES['my_file'];
	                $fileCount = count($myFile["name"]);

	                for ($i = 0; $i < $fileCount; $i++) {

	                    move_uploaded_file($myFile['tmp_name'][$i], $path.$myFile['name'][$i]);
	                     	$save['UserRecord']['user'] = $user['Admin']['user'];
				            $save['UserRecord']['file'] = $path.$myFile['name'][$i];
				            $time = date('h:i:s d/m/Y',time());
				            $save['UserRecord']['time'] = $time;
				            $save['UserRecord']['status'] = 'update resource';

							App::import('Model', 'UserRecord');
							$this->UserRecord = new UserRecord();
							$this->UserRecord->save($save['UserRecord']);
	                }
	                echo 'uploaded '.$fileCount.'file';
            	}
        	}else{
        		echo "bạn chưa nhập path";
        	}
        ?>


        <h3>Upload SWF</h3>
	<form method="post" enctype="multipart/form-data">
			<input class="form-control" type="text" name="path-swf" style="width: 50%" placeholder="nhập đường dẫn nơi update">

            <input class="btn btn-default" type="file" name="my_file_swf[]" multiple>
            <input class="form-control" type="text" name="version_tag" style="width: 50%" placeholder="Version Tag">
            <input class="form-control" type="text" name="git_info" style="width: 50%" placeholder="Git Info">
  			<textarea class="form-control" rows="5" name="change_log" placeholder="change log"  id="comment"></textarea>
            <input class="btn btn-primary" type="submit" name="upload-swf" value="Upload">
        </form>
        <?php

        	if (isset($_POST['path-swf'])&&isset($_POST['upload-swf'])) {
        		$path = $_POST['path-swf'];

        		$version_tag = $_POST['version_tag'];
		        $git_info = $_POST['git_info'];
		        $change_log = $_POST['change_log'];

        		if (isset($_FILES['my_file_swf'])) {
	                $myFile = $_FILES['my_file_swf'];
	                $fileCount = count($myFile["name"]);

	                for ($i = 0; $i < $fileCount; $i++) {

	                    move_uploaded_file($myFile['tmp_name'][$i], $path.$myFile['name'][$i]);
	                     	$save['UserRecord']['user'] = $user['Admin']['user'];
				            $save['UserRecord']['file'] = $path.$myFile['name'][$i];
				            $time = date('h:i:s d/m/Y',time());
				            $save['UserRecord']['time'] = $time;
				            $save['UserRecord']['status'] = 'update swf';
				            $save['UserRecord']['version_tag'] = $version_tag;
				            $save['UserRecord']['git_info'] = $git_info;
				            $save['UserRecord']['change_log'] = $change_log;

							App::import('Model', 'UserRecord');
							$this->UserRecord = new UserRecord();
							$this->UserRecord->save($save['UserRecord']);
	                }
	                echo 'uploaded '.$fileCount.'file';
            	}
        	}else{
        		echo "bạn chưa nhập path";
        	}

        ?>


        <form method="post">
        	<input class="form-control" type="text" name="path-source-swf" style="width: 50%" placeholder="nhập đường dẫn nơi chứa source">
        	<input class="form-control" type="text" name="path-source-backup" style="width: 50%" placeholder="nhập đường dẫn nơi để backup">

        	<input class="btn btn-danger" type="submit" value="Backup resource & swf" name="backup">
        </form>
        <?php
        	if (isset($_POST['backup'])&& isset($_POST['path-source-backup'])) {
        		$resAndSwfFolder = $_POST['path-source-swf'];
        		$resAndSwfBackUp = $_POST['path-source-backup'];
        		// Tạo bản backup
		    	date_default_timezone_set('Asia/Ho_Chi_Minh');
		        $date = date('Y_m_d_h_i_s', time());

		        //tạo folder

		        $zip = new ZipArchive();
				if ($zip->open($resAndSwfBackUp.$date.'.zip', ZIPARCHIVE::CREATE) !== TRUE) {
					var_dump('Không thể tạo file zip, kiểm tra quyền tại folder '.$resAndSwfBackUp); die;
				}
				$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($resAndSwfFolder),RecursiveIteratorIterator::LEAVES_ONLY);

				foreach ($iterator as $key=>$value) {
					if (!is_dir($value)) {
						$zip->addFile(realpath($key), $key) or die ("ERROR: Could not add file: $key");
					}

				}
				// close and save archive
				$zip->close();
				$save['UserRecord']['user'] = $user['Admin']['user'];
				$save['UserRecord']['file'] = $resAndSwfBackUp.$date.'.zip';
				$time = date('h:i:s d/m/Y',time());
				$save['UserRecord']['time'] = $time;
				$save['UserRecord']['status'] = 'backup swf/resource';

				App::import('Model', 'UserRecord');
				$this->UserRecord = new UserRecord();
				$this->UserRecord->save($save['UserRecord']);
				echo "Đã tạo backup ".$date;

		    }
        ?>



</div>

</div>
</div>


<div id="content" style="padding-left: 10%; padding-right: 10%">
	<h3>Thay đổi gần đây</h3>
	<a href="<?php $urlVersionControl.'update' ?>">Refresh</a>

    <form action="" method="post" name="duan" class="taovienLimit">

        <table id="listTin" cellspacing="0" class="table table-striped">

            <tr>
                <td>Time</td>
    	        <td>File</td>
                <td>User</td>
                <td>Status</td>
                <td>Change Log</td>
                <td>Version Tag</td>
                <td>Git Info</td>
                <td>Build Version</td>


            </tr>

            <?php
                foreach($listData as $tin)
                {
                	$change_log =   '';
                    $version_tag = '';
                    $git_info = '';
                    $format = "d M Y";
                    if (array_key_exists('change_log', $tin['UserRecord'])) {
                    	$change_log = $tin['UserRecord']['change_log'];
                    }
                    if (array_key_exists('version_tag', $tin['UserRecord'])) {
                    	$version_tag = $tin['UserRecord']['version_tag'];
                    }
                    if (array_key_exists('git_info', $tin['UserRecord'])) {
                    	$git_info = $tin['UserRecord']['git_info'];
                    }

                    echo '<tr>
                              <td>'.$tin['UserRecord']['time'].'</td>
                              <td>'.$tin['UserRecord']['file'].'</td>
                              <td>'.$tin['UserRecord']['user'].'</td>
                              <td>'.$tin['UserRecord']['status'].'</td>
                             <td>'.$change_log.'</td>
                             <td>'.$version_tag.'</td>
                             <td>'.$git_info.'</td>
                          </tr>';
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

                echo '<a href="'.$urlPage.$back.'">'.'previousPage'.'</a> ';
                for($i=$startPage;$i<=$endPage;$i++){
                    echo ' <a href="'.$urlPage.$i.'">'.$i.'</a> ';
                }
                echo ' <a href="'.$urlPage.$next.'">'.'nextPage'.'</a> ';

                echo 'totalPage'.': '.$totalPage;
            ?>
    	</p>
    </form>
    <?php
    echo "<a href='history'>download</a>";
    ?>
</div>



