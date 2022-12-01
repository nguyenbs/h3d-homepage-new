<?php
$menus = array();
$menus[0]['title'] = 'Cài đặt giao diện';
$menus[0]['sub'][0] = array('name' => 'Giao diện trang chủ',
	'url' => $urlPlugins . 'theme/house3d-admin-settingIndex.php',
	'permission'=>'settingIndex'
);

$menus[0]['sub'][1] = array('name' => 'Giao diện giới thiệu',
    'url' => $urlPlugins . 'theme/house3d-admin-settingIntroduce.php',
    'permission'=>'settingIntroduce'
);
$menus[0]['sub'][2] = array('name' => 'Giao diện Platform',
    'url' => $urlPlugins . 'theme/house3d-admin-platformSetting.php',
    'permission'=>'platformSetting'
);
$menus[0]['sub'][3] = array('name' => 'Giao diện công cụ thiết kế',
    'url' => $urlPlugins . 'theme/house3d-admin-designtoolSetting.php',
    'permission'=>'designtoolSetting'
);

$menus[0]['sub'][4] = array('name' => 'Giao diện 3D/VR clound media',
    'url' => $urlPlugins . 'theme/house3d-admin-cloudMediaSetting.php',
    'permission'=>'3dvrCloudMediaSetting'
);
$menus[0]['sub'][5] = array('name' => 'Giao diện 3D/VR/AR marketing',
    'url' => $urlPlugins . 'theme/house3d-admin-marketingSetting.php',
    'permission'=>'3dvrarMarketingSetting'
);
$menus[0]['sub'][6] = array('name' => 'Giao diện nền tảng dịch vụ 3D',
    'url' => $urlPlugins . 'theme/house3d-admin-nenTangDichVu3DSetting.php',
    'permission'=>'nenTangDichVu3DSetting'
);

$menus[0]['sub'][7] = array('name' => 'Giao diện mua bán nội thất',
    'url' => $urlPlugins . 'theme/house3d-admin-nenTangMuaBanNoiThatSetting.php',
    'permission'=>'nenTangMuaBanNoiThatSetting'
);

$menus[0]['sub'][8] = array('name' => 'Giao diện mua bán thiết kế 3d',
    'url' => $urlPlugins . 'theme/house3d-admin-nenTangMuaBan3DSetting.php',
    'permission'=>'nenTangMuaBan3DSetting'
);
$menus[0]['sub'][9] = array('name' => 'Giao diện sản phẩm',
    'url' => $urlPlugins . 'theme/house3d-admin-productSetting.php',
    'permission'=>'productSetting'
);

$menus[0]['sub'][10] = array('name' => 'Giao diện download',
    'url' => $urlPlugins . 'theme/house3d-admin-downloadSetting.php',
    'permission'=>'downloadSetting'
);

$menus[0]['sub'][11] = array('name' => 'Giao diện gallery',
    'url' => $urlPlugins . 'theme/house3d-admin-gallerySetting.php',
    'permission'=>'gallerySetting'
);
$menus[0]['sub'][12] = array('name' => 'Cài đặt chân trang',
    'url' => $urlPlugins . 'theme/house3d-admin-footerSetting.php',
    'permission'=>'footerSetting'
);

$menus[0]['sub'][12][1] = array('name' => 'Cài đặt chân trang',
	'url' => $urlPlugins . 'theme/house3d-admin-footerSetting.php',
	'permission'=>'footerSetting'
);


addMenuAdminMantan($menus);
global  $downloadSetting;
global  $productSetting;
global  $nenTangMuaBan3DSetting ;
global  $nenTangMuaBanNoiThatSetting ;
global  $nenTangDichVu3DSetting ;
global  $marketingSetting ;
global  $cloudMediaSetting ;
global  $designToolSetting ;
global  $settingInstroduce ;
global  $settingIndex ;
global  $platformSetting ;
global  $footerSetting ;
global  $gallerySetting ;


$settingIndex = $modelOption->getOption('settingIndex');
$settingInstroduce = $modelOption->getOption('settingInstroduce');
$designToolSetting = $modelOption->getOption('designToolSetting');
$cloudMediaSetting = $modelOption->getOption('cloudMediaSetting');
$marketingSetting = $modelOption->getOption('marketingSetting');
$nenTangDichVu3DSetting = $modelOption->getOption('nenTangDichVu3DSetting');
$nenTangMuaBanNoiThatSetting = $modelOption->getOption('nenTangMuaBanNoiThatSetting');
$nenTangMuaBan3DSetting = $modelOption->getOption('nenTangMuaBan3DSetting');
$productSetting = $modelOption->getOption('productSetting');
$downloadSetting = $modelOption->getOption('downloadSetting');
$platformSetting = $modelOption->getOption('platformSetting');
$footerSetting = $modelOption->getOption('footerSetting');
$gallerySetting = $modelOption->getOption('gallerySetting');

function getOurTeam($limit){
    $modelOurTeam = new ourTeam();
    $array= [
        'limit' => $limit,
        'order' => ['sort' => 'ASC']
    ];
    return $modelOurTeam->find('all',$array);
}

function getThietKeAnTuong(){
    global $urlNow;
    global $modelOption;
    $modelAlbum = new Album();
    $gallerySetting = $modelOption->getOption('gallerySetting');
    $listData = $modelAlbum->find('first',array('conditions'=>array('_id'=>$gallerySetting['Option']['value']['AlbumThietKeAnTuong'])));
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 9;
    $count_data = count($listData['Album']['img']);
    $total_page = ceil($count_data/$limit);
    if($current_page >$total_page){
        $current_page = $total_page;
    }elseif($current_page < 1){
        $current_page = 1;
    }

    $offset = ($current_page - 1) * $limit;
    $page_end = $limit + $offset;
    $data = array();

    for($i = $offset;$i < $page_end;$i++){
        if(isset($listData['Album']['img'][$i])){
            array_push($data,$listData['Album']['img'][$i]);
        }
    }

    return array(
        'data'=>$data,
        'title'=>$listData['Album']['title'],
        'page'=>$current_page,
        'total_page'=>$total_page,
        'current_page'=>$current_page,
    );

}





?>
