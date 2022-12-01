<?php
	$menus= array();
    $menus[0]['title']= 'Subscribe';
	$menus[0]['sub'][0]= array('name'=>'Gửi email thông báo','url'=>$urlPlugins.'admin/subscribe-admin-send_subscribe.php','classIcon'=>'fa-envelope-o','permission'=>'nameSetting');
	$menus[0]['sub'][1]= array('name'=>'Danh sách email','url'=>$urlPlugins.'admin/subscribe-admin-list_subscribe.php','classIcon'=>'fa-list','permission'=>'subscribeSetting');
	
    addMenuAdminMantan($menus);

    function add_email_subscribe($email=null)
	{
		global $modelOption;
		
		$listSubscribe= $modelOption->getOption('listSubscribe');
		if(!isset($listSubscribe['Option']['value']['listSubscribe'])){
			$listSubscribe['Option']['value']['listSubscribe']= array();
		}
		
		if($email && !in_array($email, $listSubscribe['Option']['value']['listSubscribe'])){
			array_push($listSubscribe['Option']['value']['listSubscribe'], $email);
			$modelOption->saveOption('listSubscribe', $listSubscribe['Option']['value']);
		}
	}
?>