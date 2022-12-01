<?php
$menus = array();

$menus[0]['title'] = 'Cài đặt giao diện';

$menus[0]['sub'][0] = array('name' => 'Cài đặt Trang chủ',
	'url' => $urlPlugins . 'theme/greenid-admin-setting.php',
	'permission'=>'settingTheme'
	);

$menus[0]['sub'][1] = array('name' => 'Cài đặt ảnh Slide banner',
	'url' => $urlPlugins . 'theme/greenid-admin-slidebannerSetting.php',
	'permission'=>'slidebannerSetting'
	);

$menus[0]['sub'][2] = array('name' => 'Cài đặt Đối tác',
	'url' => $urlPlugins . 'theme/greenid-admin-partnerSetting.php',
	'permission'=>'partnerSetting'
	);
$menus[0]['sub'][3] = array('name' => 'Cài đặt Nhà tài trợ',
	'url' => $urlPlugins . 'theme/greenid-admin-donorSetting.php',
	'permission'=>'donorSetting'
	);
// $menus[0]['sub'][4] = array('name' => 'Cài đặt Lĩnh vực ',
// 	'url' => $urlPlugins . 'theme/greenid-admin-fieldSetting.php',
// 	'permission'=>'fieldSetting'
// 	);
addMenuAdminMantan($menus);
global  $themeData ;
$themeData = $modelOption->getOption('setting');


global  $imagechangeslide ; // đổi ảnh slide banner
$imagechangeslide = $modelOption->getOption('slidebannerSetting');

global  $imagechangeLogoPartner ; //đổi ảnh đối tác logo
$imagechangeLogoPartner = $modelOption->getOption('partnerSetting');

global  $imagechangeLogoDonor ; //đổi ảnh nhà tài trợ logo
$imagechangeLogoDonor = $modelOption->getOption('donorSetting');

global $routesTheme;
$routesTheme['partner']= 'greenid/partner.php';
$routesTheme['major']= 'greenid/major.php';
$routesTheme['donor']= 'greenid/donor.php';


?>
