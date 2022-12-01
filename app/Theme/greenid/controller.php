<?php
function setting($input) {
  global $modelOption;
  global $isRequestPost;
  global $urlHomes;
  global $languageMantan;
  global $modelAlbum;
  global $modelNotice;

  if (checkAdminLogin()) {
    $themeData = $modelOption->getOption('setting');
    $mess = '';
    $dataSend= arrayMap($input['request']->data);

    if ($isRequestPost) {
      $themeData['Option']['value']['fb'] = @$dataSend['fb'];
      $themeData['Option']['value']['twitter'] = @$dataSend['twitter'];
      $themeData['Option']['value']['youtube'] = @$dataSend['youtube'];
      $themeData['Option']['value']['sukien']= (int)$dataSend['sukien'];

      $themeData['Option']['value']['tab1']= $dataSend['tab1'];
      $themeData['Option']['value']['tab2']= $dataSend['tab2'];
      $themeData['Option']['value']['tab3']= $dataSend['tab3'];
      $themeData['Option']['value']['tab4']= $dataSend['tab4'];

      $themeData['Option']['value']['duan1']= $dataSend['duan1'];
      $themeData['Option']['value']['duan2']= $dataSend['duan2'];

      $themeData['Option']['value']['donghanh']= (int)$dataSend['donghanh'];

      $modelOption->saveOption('setting', $themeData['Option']['value']);

      $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
    }
    $listMenus = $modelOption->getOption('menus', 'all');
    $listNotice = $modelNotice->getAllPage();
    $categoryNotice = changeNoticeCategoryToList(getListNoticeCategory());
    setVariable('listMenus', $listMenus);
    setVariable('categoryNotice', $categoryNotice);
    setVariable('themeData', $themeData);
    setVariable('listMenus', $listMenus);
    setVariable('listNotice', $listNotice);
    setVariable('mess',$mess);
  } else {
    $modelOption->redirect($urlHomes);
  }
}




function slidebannerSetting($input){
 global $modelOption;
 global $isRequestPost;
 global $urlHomes;
 global $languageMantan;
 global $modelAlbum;
 global $modelNotice;
 global $urlPlugins;

 if (checkAdminLogin()) {
  $imagechangeslide = $modelOption->getOption('slidebannerSetting');
  if(!empty($_GET['idEdit'])){
    $dataEdit= $imagechangeslide['Option']['value']['Data'][$_GET['idEdit']];
    setVariable('dataEdit',$dataEdit);
  }
  if ($isRequestPost) {
    $dataSend=$input['request']->data;
    if($dataSend['id'] == ''){
      if (!isset($imagechangeslide['Option']['value']['tData'])){
       $imagechangeslide['Option']['value']['tData'] = 1;
     }else{
      $imagechangeslide['Option']['value']['tData'] += 1;
    }
    $imagechangeslide['Option']['value']['Data'][$imagechangeslide['Option']['value']['tData']] = array(
      'id' => (int) $imagechangeslide['Option']['value']['tData'],
      'image' => $dataSend['image'],
      // 'url' => $dataSend['url'],
      ); 
  } else{
   $idEdit = (int) $dataSend['id'];
   $imagechangeslide['Option']['value']['Data'][$idEdit]['image'] = $dataSend['image'];
   // $imagechangeslide['Option']['value']['Data'][$idEdit]['url'] = $dataSend['url']; 
 }
 $modelOption->saveOption('slidebannerSetting', $imagechangeslide['Option']['value']);
 $modelOption->redirect($urlPlugins . 'theme/greenid-admin-slidebannerSetting.php?status=1');
}
setVariable('imagechangeslide', $imagechangeslide);
}
}

function deleteImageSlider(){
  global $urlPlugins;
  global $modelOption;
  global $urlHomes;
  if (checkAdminLogin()) {
    $imagechangeslide = $modelOption->getOption('slidebannerSetting');
    $idDelete = (int) $_GET['idDelete'];
    unset($imagechangeslide['Option']['value']['Data'][$idDelete]);
    $modelOption->saveOption('slidebannerSetting', $imagechangeslide['Option']['value']);
    $modelOption->redirect($urlPlugins . 'theme/greenid-admin-slidebannerSetting.php?status=2');
  } else {
    $modelOption->redirect($urlHomes);
  }
}



// đối tác
function partnerSetting($input){
 global $modelOption;
 global $isRequestPost;
 global $urlHomes;
 global $languageMantan;
 global $modelAlbum;
 global $modelNotice;
 global $urlPlugins;

 if (checkAdminLogin()) {
  $imagechangeLogoPartner = $modelOption->getOption('partnerSetting');
  if(!empty($_GET['idEdit'])){
    $dataEdit= $imagechangeLogoPartner['Option']['value']['Data'][$_GET['idEdit']];
    setVariable('dataEdit',$dataEdit);
  }
  if ($isRequestPost) {
    $dataSend=$input['request']->data;
    if($dataSend['id'] == ''){
      if (!isset($imagechangeLogoPartner['Option']['value']['tData'])){
       $imagechangeLogoPartner['Option']['value']['tData'] = 1;
     }else{
      $imagechangeLogoPartner['Option']['value']['tData'] += 1;
    }
    $imagechangeLogoPartner['Option']['value']['Data'][$imagechangeLogoPartner['Option']['value']['tData']] = array(
      'id' => (int) $imagechangeLogoPartner['Option']['value']['tData'],
      'image' => $dataSend['image'],
      'url' => $dataSend['url']//
      ); 
  } else{
   $idEdit = (int) $dataSend['id'];
   $imagechangeLogoPartner['Option']['value']['Data'][$idEdit]['image'] = $dataSend['image'];
   $imagechangeLogoPartner['Option']['value']['Data'][$idEdit]['url'] = $dataSend['url']; //
 }
 $modelOption->saveOption('partnerSetting', $imagechangeLogoPartner['Option']['value']);
 $modelOption->redirect($urlPlugins . 'theme/greenid-admin-partnerSetting.php?status=1');
}
setVariable('imagechangeLogoPartner', $imagechangeLogoPartner);
}
}
function deleteImagePartner(){
  global $urlPlugins;
  global $modelOption;
  global $urlHomes;
  if (checkAdminLogin()) {
    $imagechangeLogoPartner = $modelOption->getOption('partnerSetting');
    $idDelete = (int) $_GET['idDelete'];
    unset($imagechangeLogoPartner['Option']['value']['Data'][$idDelete]);
    $modelOption->saveOption('partnerSetting', $imagechangeLogoPartner['Option']['value']);
    $modelOption->redirect($urlPlugins . 'theme/greenid-admin-partnerSetting.php?status=2');
  } else {
    $modelOption->redirect($urlHomes);
  }
}


// nhà tài trợ
function donorSetting($input){
 global $modelOption;
 global $isRequestPost;
 global $urlHomes;
 global $languageMantan;
 global $modelAlbum;
 global $modelNotice;
 global $urlPlugins;

 if (checkAdminLogin()) {
  $imagechangeLogoDonor = $modelOption->getOption('donorSetting');
  if(!empty($_GET['idEdit'])){
    $dataEdit= $imagechangeLogoDonor['Option']['value']['Data'][$_GET['idEdit']];
    setVariable('dataEdit',$dataEdit);
 }
  if ($isRequestPost) {
    $dataSend=$input['request']->data;
    if($dataSend['id'] == ''){
      if (!isset($imagechangeLogoDonor['Option']['value']['tData'])){
       $imagechangeLogoDonor['Option']['value']['tData'] = 1;
     }else{
      $imagechangeLogoDonor['Option']['value']['tData'] += 1;
    }
    $imagechangeLogoDonor['Option']['value']['Data'][$imagechangeLogoDonor['Option']['value']['tData']] = array(
      'id' => (int) $imagechangeLogoDonor['Option']['value']['tData'],
      'image' => $dataSend['image'],
      'url' => $dataSend['url']//
      ); 
  } else{
   $idEdit = (int) $dataSend['id'];
   $imagechangeLogoDonor['Option']['value']['Data'][$idEdit]['image'] = $dataSend['image'];
   $imagechangeLogoDonor['Option']['value']['Data'][$idEdit]['url'] = $dataSend['url']; //
 }
 $modelOption->saveOption('donorSetting', $imagechangeLogoDonor['Option']['value']);
 $modelOption->redirect($urlPlugins . 'theme/greenid-admin-donorSetting.php?status=1');
}
setVariable('imagechangeLogoDonor', $imagechangeLogoDonor);
}
}
function deleteImageDonor(){
  global $urlPlugins;
  global $modelOption;
  global $urlHomes;
  if (checkAdminLogin()) {
    $imagechangeLogoDonor = $modelOption->getOption('donorSetting');
    $idDelete = (int) $_GET['idDelete'];
    unset($imagechangeLogoDonor['Option']['value']['Data'][$idDelete]);
    $modelOption->saveOption('donorSetting', $imagechangeLogoDonor['Option']['value']);
    $modelOption->redirect($urlPlugins . 'theme/greenid-admin-donorSetting.php?status=2');
  } else {
    $modelOption->redirect($urlHomes);
  }
}

?>