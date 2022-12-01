<?php
$menus = array();
$menus[0]['title'] = 'Our Team';
$menus[0]['sub'][0] = array('name' => 'Danh sách thành viên dự án', 'url' => $urlPlugins . 'admin/ourTeam-admin-listTeam.php','permission'=>'listTeam');
addMenuAdminMantan($menus);
?>