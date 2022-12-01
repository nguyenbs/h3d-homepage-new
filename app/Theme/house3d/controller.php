<?php
function settingIndex($input) {
  global $modelOption;
  global $isRequestPost;
  global $urlHomes;
  global $modelAlbum;

  if (checkAdminLogin()) {
    $themeData = $modelOption->getOption('settingIndex');
    $mess = '';
    $dataSend= $input['request']->data;
    $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
      if ($isRequestPost) {
      $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
      $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
      $themeData['Option']['value']['videoBanner'] = @$dataSend['videoBanner'];
      $themeData['Option']['value']['moTadong1Banner'] = @$dataSend['moTadong1Banner'];
      $themeData['Option']['value']['moTadong2Banner'] = @$dataSend['moTadong2Banner'];
      $themeData['Option']['value']['thongKeModel'] = @$dataSend['thongKeModel'];
      $themeData['Option']['value']['thongKeMauThietKe'] = @$dataSend['thongKeMauThietKe'];
      $themeData['Option']['value']['tieuDeCongCuThietKeDong1'] = @$dataSend['tieuDeCongCuThietKeDong1'];
      $themeData['Option']['value']['tieuDeCongCuThietKeDong2'] = @$dataSend['tieuDeCongCuThietKeDong2'];

      $themeData['Option']['value']['CongCuThietKeHeadingND1'] = @$dataSend['CongCuThietKeHeadingND1'];
      $themeData['Option']['value']['CongCuThietKeTieuDeND1'] = @$dataSend['CongCuThietKeTieuDeND1'];
      $themeData['Option']['value']['CongCuThietKeVideoND1'] = @$dataSend['CongCuThietKeVideoND1'];
      $themeData['Option']['value']['CongCuThietMoTaND1'] = @$dataSend['CongCuThietMoTaND1'];


      $themeData['Option']['value']['CongCuThietKeHeadingND2'] = @$dataSend['CongCuThietKeHeadingND2'];
      $themeData['Option']['value']['CongCuThietKeTieuDeND2'] = @$dataSend['CongCuThietKeTieuDeND2'];
      $themeData['Option']['value']['CongCuThietMoTaND2'] = @$dataSend['CongCuThietMoTaND2'];
      $themeData['Option']['value']['CongCuThietKeVideoND2'] = @$dataSend['CongCuThietKeVideoND2'];

      $themeData['Option']['value']['CongCuThietKeHeadingND3'] = @$dataSend['CongCuThietKeHeadingND3'];
      $themeData['Option']['value']['CongCuThietKeTieuDeND3'] = @$dataSend['CongCuThietKeTieuDeND3'];
      $themeData['Option']['value']['CongCuThietMoTaND3'] = @$dataSend['CongCuThietMoTaND3'];
      $themeData['Option']['value']['CongCuThietKeVideoND3'] = @$dataSend['CongCuThietKeVideoND3'];


      $themeData['Option']['value']['NangCaoHieuQuaTieuDeDong1'] = @$dataSend['NangCaoHieuQuaTieuDeDong1'];
      $themeData['Option']['value']['NangCaoHieuQuaTieuDeDong2'] = @$dataSend['NangCaoHieuQuaTieuDeDong2'];

      $themeData['Option']['value']['NangCaoHieuQuaIconKhoi1'] = @$dataSend['NangCaoHieuQuaIconKhoi1'];
      $themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi1'] = @$dataSend['NangCaoHieuQuaTieuDeKhoi1'];
      $themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi1'] = @$dataSend['NangCaoHieuQuaMoTaKhoi1'];

      $themeData['Option']['value']['NangCaoHieuQuaIconKhoi2'] = @$dataSend['NangCaoHieuQuaIconKhoi2'];
      $themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi2'] = @$dataSend['NangCaoHieuQuaTieuDeKhoi2'];
      $themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi2'] = @$dataSend['NangCaoHieuQuaMoTaKhoi2'];

      $themeData['Option']['value']['NangCaoHieuQuaIconKhoi3'] = @$dataSend['NangCaoHieuQuaIconKhoi3'];
      $themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi3'] = @$dataSend['NangCaoHieuQuaTieuDeKhoi3'];
      $themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi3'] = @$dataSend['NangCaoHieuQuaMoTaKhoi3'];

      $themeData['Option']['value']['NangCaoHieuQuaIconKhoi4'] = @$dataSend['NangCaoHieuQuaIconKhoi4'];
      $themeData['Option']['value']['NangCaoHieuQuaTieuDeKhoi4'] = @$dataSend['NangCaoHieuQuaTieuDeKhoi4'];
      $themeData['Option']['value']['NangCaoHieuQuaMoTaKhoi4'] = @$dataSend['NangCaoHieuQuaMoTaKhoi4'];

      $themeData['Option']['value']['ThietKeAnTuongTieuDe'] = @$dataSend['ThietKeAnTuongTieuDe'];
      $themeData['Option']['value']['ThietKeAnTuongAlbum'] = @$dataSend['ThietKeAnTuongAlbum'];

      $themeData['Option']['value']['poster0'] = @$dataSend['poster0'];
      $themeData['Option']['value']['poster1'] = @$dataSend['poster1'];
      $themeData['Option']['value']['poster2'] = @$dataSend['poster2'];
      $themeData['Option']['value']['poster3'] = @$dataSend['poster3'];


      $themeData['Option']['value']['UngDungThietKe3DTieuDe'] = @$dataSend['UngDungThietKe3DTieuDe'];
      $themeData['Option']['value']['UngDungThietKe3DNoiDung'] = @$dataSend['UngDungThietKe3DNoiDung'];
      $themeData['Option']['value']['UngDungThietKe3DLinkHDSD'] = @$dataSend['UngDungThietKe3DLinkHDSD'];
      $themeData['Option']['value']['UngDungThietKe3DAnh'] = @$dataSend['UngDungThietKe3DAnh'];

      $themeData['Option']['value']['otherResources'] = @$dataSend['otherResources'];

      $modelOption->saveOption('settingIndex', $themeData['Option']['value']);

      $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
    }
    setVariable('listAlbum', $listAlbum);
    setVariable('themeData', $themeData);
    setVariable('mess',$mess);
  } else {
    $modelOption->redirect($urlHomes);
  }
}

function settingIntroduce($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('settingInstroduce');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['LinkDangKyNgay'] = @$dataSend['LinkDangKyNgay'];
            $themeData['Option']['value']['LinkTaiUngDung'] = @$dataSend['LinkTaiUngDung'];

            $themeData['Option']['value']['anhBanner'] = @$dataSend['anhBanner'];
            $themeData['Option']['value']['BannerMotaDong1'] = @$dataSend['BannerMotaDong1'];
            $themeData['Option']['value']['BannerMotaDong2'] = @$dataSend['BannerMotaDong2'];
            $themeData['Option']['value']['VeChungToiTieuDe'] = @$dataSend['VeChungToiTieuDe'];
            $themeData['Option']['value']['VeChungToiNoiDung'] = @$dataSend['VeChungToiNoiDung'];
            $themeData['Option']['value']['VeChungToiAnhNoiDung'] = @$dataSend['VeChungToiAnhNoiDung'];

            $themeData['Option']['value']['TamNhinTieuDe'] = @$dataSend['TamNhinTieuDe'];
            $themeData['Option']['value']['TamNhinNoiDung'] = @$dataSend['TamNhinNoiDung'];
            $themeData['Option']['value']['SuMenhTieuDe'] = @$dataSend['SuMenhTieuDe'];
            $themeData['Option']['value']['SuMenhNoiDung'] = @$dataSend['SuMenhNoiDung'];
            $themeData['Option']['value']['TrietLyPTTieuDe'] = @$dataSend['TrietLyPTTieuDe'];
            $themeData['Option']['value']['TrietLyPTNoiDung'] = @$dataSend['TrietLyPTNoiDung'];

            $themeData['Option']['value']['GiaTriCLAnhNoiDung'] = @$dataSend['GiaTriCLAnhNoiDung'];
            $themeData['Option']['value']['GiaTriCLTieuDe'] = @$dataSend['GiaTriCLTieuDe'];
            $themeData['Option']['value']['GiaTriCLNoiDung'] = @$dataSend['GiaTriCLNoiDung'];

            $themeData['Option']['value']['OurTeamTieuDe'] = @$dataSend['OurTeamTieuDe'];
            $themeData['Option']['value']['OurTeamNoiDung'] = @$dataSend['OurTeamNoiDung'];

            $themeData['Option']['value']['ThamGiaCCTTieuDe'] = @$dataSend['ThamGiaCCTTieuDe'];
            $themeData['Option']['value']['ThamGiaCCTMoTaKhoi'] = @$dataSend['ThamGiaCCTMoTaKhoi'];
            $themeData['Option']['value']['WhatClientSayTieuDe'] = @$dataSend['WhatClientSayTieuDe'];

            $themeData['Option']['value']['TamNhinIcon'] = @$dataSend['TamNhinIcon'];
            $themeData['Option']['value']['SuMenhIcon'] = @$dataSend['SuMenhIcon'];
            $themeData['Option']['value']['TrietLyPTIcon'] = @$dataSend['TrietLyPTIcon'];

            $modelOption->saveOption('settingInstroduce', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}
function designtoolSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('designToolSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];
            $themeData['Option']['value']['CongCuThietKeNDDong1'] = @$dataSend['CongCuThietKeNDDong1'];
            $themeData['Option']['value']['CongCuThietKeNDDong2'] = @$dataSend['CongCuThietKeNDDong2'];
            $themeData['Option']['value']['CongCuTkND1TieuDe'] = @$dataSend['CongCuTkND1TieuDe'];
            $themeData['Option']['value']['CongCuTkND1NoiDung'] = @$dataSend['CongCuTkND1NoiDung'];
            $themeData['Option']['value']['CongCuTkND1Video'] = @$dataSend['CongCuTkND1Video'];

            $themeData['Option']['value']['CongCuTkND2Video'] = @$dataSend['CongCuTkND2Video'];
            $themeData['Option']['value']['CongCuTkND2TieuDe'] = @$dataSend['CongCuTkND2TieuDe'];
            $themeData['Option']['value']['CongCuTkND2NoiDung'] = @$dataSend['CongCuTkND2NoiDung'];

            $themeData['Option']['value']['CongCuTkND3TieuDe'] = @$dataSend['CongCuTkND3TieuDe'];
            $themeData['Option']['value']['CongCuTkND3NoiDung'] = @$dataSend['CongCuTkND3NoiDung'];
            $themeData['Option']['value']['CongCuTkND3Video'] = @$dataSend['CongCuTkND3Video'];

            $themeData['Option']['value']['CongCuTkND4TieuDe'] = @$dataSend['CongCuTkND4TieuDe'];
            $themeData['Option']['value']['CongCuTkND4NoiDung'] = @$dataSend['CongCuTkND4NoiDung'];
            $themeData['Option']['value']['CongCuTkND4Video'] = @$dataSend['CongCuTkND4Video'];

            $themeData['Option']['value']['CongCuTkND5TieuDe'] = @$dataSend['CongCuTkND5TieuDe'];
            $themeData['Option']['value']['CongCuTkND5NoiDung'] = @$dataSend['CongCuTkND5NoiDung'];
            $themeData['Option']['value']['CongCuTkND5Video'] = @$dataSend['CongCuTkND5Video'];

            $themeData['Option']['value']['YouHaveIdeaNen'] = @$dataSend['YouHaveIdeaNen'];
            $themeData['Option']['value']['YouHaveIdeaTieuDe1'] = @$dataSend['YouHaveIdeaTieuDe1'];
            $themeData['Option']['value']['YouHaveIdeaTieuDe2'] = @$dataSend['YouHaveIdeaTieuDe2'];
            $themeData['Option']['value']['YouHaveNoiDung'] = @$dataSend['YouHaveNoiDung'];


            $themeData['Option']['value']['IconEmail'] = @$dataSend['IconEmail'];
            $themeData['Option']['value']['Email'] = @$dataSend['Email'];

            $themeData['Option']['value']['IconSale'] = @$dataSend['IconSale'];
            $themeData['Option']['value']['Sale'] = @$dataSend['Sale'];

            $themeData['Option']['value']['IconSupport'] = @$dataSend['IconSupport'];
            $themeData['Option']['value']['Support'] = @$dataSend['Support'];

            $themeData['Option']['value']['bannerWindowOs'] = @$dataSend['bannerWindowOs'];
            $themeData['Option']['value']['bannerMacOs'] = @$dataSend['bannerMacOs'];
            $themeData['Option']['value']['TraiNghiemTieuDe'] = @$dataSend['TraiNghiemTieuDe'];

            $modelOption->saveOption('designToolSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listNotice = $modelNotice->getAllPage();
        $categoryNotice = changeNoticeCategoryToList(getListNoticeCategory());
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
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

function cloudMediaSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('cloudMediaSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];
            $themeData['Option']['value']['CongCuThietKeNDDong1'] = @$dataSend['CongCuThietKeNDDong1'];
            $themeData['Option']['value']['CongCuThietKeNDDong2'] = @$dataSend['CongCuThietKeNDDong2'];
            $themeData['Option']['value']['CongCuTkND1TieuDe'] = @$dataSend['CongCuTkND1TieuDe'];
            $themeData['Option']['value']['CongCuTkND1NoiDung'] = @$dataSend['CongCuTkND1NoiDung'];
            $themeData['Option']['value']['CongCuTkND1Video'] = @$dataSend['CongCuTkND1Video'];

            $themeData['Option']['value']['CongCuTkND2Video'] = @$dataSend['CongCuTkND2Video'];
            $themeData['Option']['value']['CongCuTkND2TieuDe'] = @$dataSend['CongCuTkND2TieuDe'];
            $themeData['Option']['value']['CongCuTkND2NoiDung'] = @$dataSend['CongCuTkND2NoiDung'];

            $themeData['Option']['value']['CongCuTkND3TieuDe'] = @$dataSend['CongCuTkND3TieuDe'];
            $themeData['Option']['value']['CongCuTkND3NoiDung'] = @$dataSend['CongCuTkND3NoiDung'];
            $themeData['Option']['value']['CongCuTkND3Video'] = @$dataSend['CongCuTkND3Video'];
            $themeData['Option']['value']['AlbumThietKeTieuDe'] = @$dataSend['AlbumThietKeTieuDe'];
            $themeData['Option']['value']['ThietKeAlbum'] = @$dataSend['ThietKeAlbum'];

            $modelOption->saveOption('cloudMediaSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listNotice = $modelNotice->getAllPage();
        $categoryNotice = changeNoticeCategoryToList(getListNoticeCategory());
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
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
function marketingSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('marketingSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];
            $themeData['Option']['value']['CongCuThietKeNDDong1'] = @$dataSend['CongCuThietKeNDDong1'];
            $themeData['Option']['value']['CongCuThietKeNDDong2'] = @$dataSend['CongCuThietKeNDDong2'];
            $themeData['Option']['value']['CongCuTkND1TieuDe'] = @$dataSend['CongCuTkND1TieuDe'];
            $themeData['Option']['value']['CongCuTkND1NoiDung'] = @$dataSend['CongCuTkND1NoiDung'];
            $themeData['Option']['value']['CongCuTkND1Video'] = @$dataSend['CongCuTkND1Video'];

            $themeData['Option']['value']['CongCuTkND2Video'] = @$dataSend['CongCuTkND2Video'];
            $themeData['Option']['value']['CongCuTkND2TieuDe'] = @$dataSend['CongCuTkND2TieuDe'];
            $themeData['Option']['value']['CongCuTkND2NoiDung'] = @$dataSend['CongCuTkND2NoiDung'];

            $themeData['Option']['value']['CongCuTkND3TieuDe'] = @$dataSend['CongCuTkND3TieuDe'];
            $themeData['Option']['value']['CongCuTkND3NoiDung'] = @$dataSend['CongCuTkND3NoiDung'];
            $themeData['Option']['value']['CongCuTkND3Video'] = @$dataSend['CongCuTkND3Video'];
            $themeData['Option']['value']['ThietKeAlbum'] = @$dataSend['ThietKeAlbum'];
            $themeData['Option']['value']['ThietKeAnTuongTieuDe'] = @$dataSend['ThietKeAnTuongTieuDe'];

            $modelOption->saveOption('marketingSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listNotice = $modelNotice->getAllPage();
        $categoryNotice = changeNoticeCategoryToList(getListNoticeCategory());
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
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
function nenTangDichVu3DSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('nenTangDichVu3DSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['BannerMota3'] = @$dataSend['BannerMota3'];
            $themeData['Option']['value']['BannerMota4'] = @$dataSend['BannerMota4'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];

            $themeData['Option']['value']['ThietKeAlbum'] = @$dataSend['ThietKeAlbum'];
            $themeData['Option']['value']['AlbumThietKeTieuDe'] = @$dataSend['AlbumThietKeTieuDe'];

            $themeData['Option']['value']['CongCuTkND1TieuDe'] = @$dataSend['CongCuTkND1TieuDe'];
            $themeData['Option']['value']['CongCuTkND1NoiDung'] = @$dataSend['CongCuTkND1NoiDung'];
            $themeData['Option']['value']['CongCuTkND1Video'] = @$dataSend['CongCuTkND1Video'];

            $themeData['Option']['value']['CongCuTkND2Video'] = @$dataSend['CongCuTkND2Video'];
            $themeData['Option']['value']['CongCuTkND2TieuDe'] = @$dataSend['CongCuTkND2TieuDe'];
            $themeData['Option']['value']['CongCuTkND2NoiDung'] = @$dataSend['CongCuTkND2NoiDung'];
            $modelOption->saveOption('nenTangDichVu3DSetting', $themeData['Option']['value']);

            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
        setVariable('listMenus', $listMenus);
        setVariable('themeData', $themeData);
        setVariable('listMenus', $listMenus);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}
function nenTangMuaBanNoiThatSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('nenTangMuaBanNoiThatSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['BannerMota3'] = @$dataSend['BannerMota3'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];

            $themeData['Option']['value']['MuaSamNen'] = @$dataSend['MuaSamNen'];
            $themeData['Option']['value']['MuaSamMoTa'] = @$dataSend['MuaSamMoTa'];
            $themeData['Option']['value']['MuaSamIcon'] = @$dataSend['MuaSamIcon'];
            $themeData['Option']['value']['TraiNghiemTTATieuDe'] = @$dataSend['TraiNghiemTTATieuDe'];
            $themeData['Option']['value']['TraiNghiemTTANoiDung'] = @$dataSend['TraiNghiemTTANoiDung'];
            $themeData['Option']['value']['DanhGiaSanPhamTieuDe'] = @$dataSend['DanhGiaSanPhamTieuDe'];
            $themeData['Option']['value']['DanhGiaSanPhamNoiDung'] = @$dataSend['DanhGiaSanPhamNoiDung'];
            $themeData['Option']['value']['SanPhamDaDangTieuDe'] = @$dataSend['SanPhamDaDangTieuDe'];
            $themeData['Option']['value']['SanPhamDaDangNoiDung'] = @$dataSend['SanPhamDaDangNoiDung'];
            $themeData['Option']['value']['BanHangNen'] = @$dataSend['BanHangNen'];
            $themeData['Option']['value']['BanHangMoTa'] = @$dataSend['BanHangMoTa'];
            $themeData['Option']['value']['BanHangIcon'] = @$dataSend['BanHangIcon'];


            $themeData['Option']['value']['MarketingTieuDe'] = @$dataSend['MarketingTieuDe'];
            $themeData['Option']['value']['MarketingNoiDung'] = @$dataSend['MarketingNoiDung'];
            $themeData['Option']['value']['KenhBanHangTieuDe'] = @$dataSend['KenhBanHangTieuDe'];
            $themeData['Option']['value']['KenhBanHangNoiDung'] = @$dataSend['KenhBanHangNoiDung'];
            $themeData['Option']['value']['KhachHangTiemNangTieuDe'] = @$dataSend['KhachHangTiemNangTieuDe'];
            $themeData['Option']['value']['KhachHangTiemNangNoiDung'] = @$dataSend['KhachHangTiemNangNoiDung'];

            $themeData['Option']['value']['IconEmail'] = @$dataSend['IconEmail'];
            $themeData['Option']['value']['Email'] = @$dataSend['Email'];

            $themeData['Option']['value']['IconSale'] = @$dataSend['IconSale'];
            $themeData['Option']['value']['Sale'] = @$dataSend['Sale'];

            $themeData['Option']['value']['IconSupport'] = @$dataSend['IconSupport'];
            $themeData['Option']['value']['SanPhamDaDangIcon'] = @$dataSend['SanPhamDaDangIcon'];
            $themeData['Option']['value']['DanhGiaSanPhamIcon'] = @$dataSend['DanhGiaSanPhamIcon'];
            $themeData['Option']['value']['TraiNghiemTTAIcon'] = @$dataSend['TraiNghiemTTAIcon'];
            $themeData['Option']['value']['KhachHangTiemNangIcon'] = @$dataSend['KhachHangTiemNangIcon'];
            $themeData['Option']['value']['KenhBanHangIcon'] = @$dataSend['KenhBanHangIcon'];
            $themeData['Option']['value']['KhachHangTiemNangIcon'] = @$dataSend['KhachHangTiemNangIcon'];
            $themeData['Option']['value']['MarketingIcon'] = @$dataSend['MarketingIcon'];



            $themeData['Option']['value']['NguoiTieuDungTieuDe'] = @$dataSend['NguoiTieuDungTieuDe'];
            $themeData['Option']['value']['NguoiTieuDungNoiDung'] = @$dataSend['NguoiTieuDungNoiDung'];
            $themeData['Option']['value']['NguoiTieuDungVideo'] = @$dataSend['NguoiTieuDungVideo'];

            $themeData['Option']['value']['NhaCungCapNoiDung'] = @$dataSend['NhaCungCapNoiDung'];
            $themeData['Option']['value']['NhaCungCapTieuDe'] = @$dataSend['NhaCungCapTieuDe'];
            $themeData['Option']['value']['NhaCungCapVideo'] = @$dataSend['NhaCungCapVideo'];

            $modelOption->saveOption('nenTangMuaBanNoiThatSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
        setVariable('listMenus', $listMenus);
        setVariable('themeData', $themeData);
        setVariable('listMenus', $listMenus);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}
function nenTangMuaBan3DSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelNotice;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('nenTangMuaBan3DSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['linkDangKyNgay'] = @$dataSend['linkDangKyNgay'];
            $themeData['Option']['value']['linkTaiUngDung'] = @$dataSend['linkTaiUngDung'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['BannerMota3'] = @$dataSend['BannerMota3'];
            $themeData['Option']['value']['BannerMota4'] = @$dataSend['BannerMota4'];
            $themeData['Option']['value']['Menu'] = @$dataSend['Menu'];

            $themeData['Option']['value']['ThietKeAlbum'] = @$dataSend['ThietKeAlbum'];

            $themeData['Option']['value']['IconEmail'] = @$dataSend['IconEmail'];
            $themeData['Option']['value']['Email'] = @$dataSend['Email'];

            $themeData['Option']['value']['IconSale'] = @$dataSend['IconSale'];
            $themeData['Option']['value']['Sale'] = @$dataSend['Sale'];

            $themeData['Option']['value']['IconSupport'] = @$dataSend['IconSupport'];
            $themeData['Option']['value']['Support'] = @$dataSend['Support'];
            $themeData['Option']['value']['CongCuTkND1TieuDe'] = @$dataSend['CongCuTkND1TieuDe'];
            $themeData['Option']['value']['CongCuTkND1NoiDung'] = @$dataSend['CongCuTkND1NoiDung'];
            $themeData['Option']['value']['CongCuTkND1Video'] = @$dataSend['CongCuTkND1Video'];

            $themeData['Option']['value']['CongCuTkND2Video'] = @$dataSend['CongCuTkND2Video'];
            $themeData['Option']['value']['CongCuTkND2TieuDe'] = @$dataSend['CongCuTkND2TieuDe'];
            $themeData['Option']['value']['CongCuTkND2NoiDung'] = @$dataSend['CongCuTkND2NoiDung'];

            $modelOption->saveOption('nenTangMuaBan3DSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listMenus = $modelOption->getOption('menus', 'all');
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
        setVariable('listMenus', $listMenus);
        setVariable('themeData', $themeData);
        setVariable('listMenus', $listMenus);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

function productSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('productSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['LinkDanKyNgay'] = @$dataSend['LinkDanKyNgay'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];
            $themeData['Option']['value']['SanPhamDichVuNDDong1'] = @$dataSend['SanPhamDichVuNDDong1'];
            $themeData['Option']['value']['SanPhamDichVuNDDong2'] = @$dataSend['SanPhamDichVuNDDong2'];


            $themeData['Option']['value']['SPKhoi1Icon'] = @$dataSend['SPKhoi1Icon'];
            $themeData['Option']['value']['SPKhoi1TieuDe'] = @$dataSend['SPKhoi1TieuDe'];
            $themeData['Option']['value']['SPKhoi1NoiDung'] = @$dataSend['SPKhoi1NoiDung'];

            $themeData['Option']['value']['SPKhoi2Icon'] = @$dataSend['SPKhoi2Icon'];
            $themeData['Option']['value']['SPKhoi2TieuDe'] = @$dataSend['SPKhoi2TieuDe'];
            $themeData['Option']['value']['SPKhoi2NoiDung'] = @$dataSend['SPKhoi2NoiDung'];

            $themeData['Option']['value']['SPKhoi3Icon'] = @$dataSend['SPKhoi3Icon'];
            $themeData['Option']['value']['SPKhoi3TieuDe'] = @$dataSend['SPKhoi3TieuDe'];
            $themeData['Option']['value']['SPKhoi3NoiDung'] = @$dataSend['SPKhoi3NoiDung'];

            $themeData['Option']['value']['SPKhoi4Icon'] = @$dataSend['SPKhoi4Icon'];
            $themeData['Option']['value']['SPKhoi4TieuDe'] = @$dataSend['SPKhoi4TieuDe'];
            $themeData['Option']['value']['SPKhoi4NoiDung'] = @$dataSend['SPKhoi4NoiDung'];

            $themeData['Option']['value']['SPKhoi5Icon'] = @$dataSend['SPKhoi5Icon'];
            $themeData['Option']['value']['SPKhoi5TieuDe'] = @$dataSend['SPKhoi5TieuDe'];
            $themeData['Option']['value']['SPKhoi5NoiDung'] = @$dataSend['SPKhoi5NoiDung'];

            $themeData['Option']['value']['SPKhoi6Icon'] = @$dataSend['SPKhoi6Icon'];
            $themeData['Option']['value']['SPKhoi6TieuDe'] = @$dataSend['SPKhoi6TieuDe'];
            $themeData['Option']['value']['SPKhoi6NoiDung'] = @$dataSend['SPKhoi6NoiDung'];

            $themeData['Option']['value']['DoitacTieuDe'] = @$dataSend['DoitacTieuDe'];
            $themeData['Option']['value']['DoitacNoiDung'] = @$dataSend['DoitacNoiDung'];
            $themeData['Option']['value']['AlbumDoiTac'] = @$dataSend['AlbumDoiTac'];

            $themeData['Option']['value']['ThamGiaCungChungToiNen'] = @$dataSend['ThamGiaCungChungToiNen'];
            $themeData['Option']['value']['ThamGiaCungChungToiTieuDe'] = @$dataSend['ThamGiaCungChungToiTieuDe'];
            $themeData['Option']['value']['ThamGiaCungChungToiNoiDung'] = @$dataSend['ThamGiaCungChungToiNoiDung'];
            $themeData['Option']['value']['KhachHangNoiGiTieuDe'] = @$dataSend['KhachHangNoiGiTieuDe'];
            $themeData['Option']['value']['SPKhoi6NoiDung'] = @$dataSend['SPKhoi6NoiDung'];
            $themeData['Option']['value']['SPKhoi6NoiDung'] = @$dataSend['SPKhoi6NoiDung'];
            $themeData['Option']['value']['SPKhoi6NoiDung'] = @$dataSend['SPKhoi6NoiDung'];

            $modelOption->saveOption('productSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

function downloadSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('downloadSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];

            $themeData['Option']['value']['WindowMacTieuDe'] = @$dataSend['WindowMacTieuDe'];
            $themeData['Option']['value']['IconWindow'] = @$dataSend['IconWindow'];
            $themeData['Option']['value']['LinkWindow32'] = @$dataSend['LinkWindow32'];
            $themeData['Option']['value']['LinkWindow64'] = @$dataSend['LinkWindow64'];
            $themeData['Option']['value']['LinkFileWindow32'] = @$dataSend['LinkFileWindow32'];
            $themeData['Option']['value']['LinkFileWindow64'] = @$dataSend['LinkFileWindow64'];

            $themeData['Option']['value']['IconMac'] = @$dataSend['IconMac'];
            $themeData['Option']['value']['LinkMac'] = @$dataSend['LinkMac'];
            $themeData['Option']['value']['LinkMacRetina'] = @$dataSend['LinkMacRetina'];
            $themeData['Option']['value']['LinkFileMac'] = @$dataSend['LinkFileMac'];
            $themeData['Option']['value']['LinkFileMacRetina'] = @$dataSend['LinkFileMacRetina'];

            $themeData['Option']['value']['KhoiCongCuTieuDe'] = @$dataSend['KhoiCongCuTieuDe'];

            $themeData['Option']['value']['CongCuTKKhoi1Icon'] = @$dataSend['CongCuTKKhoi1Icon'];
            $themeData['Option']['value']['CongCuTKKhoi2Icon'] = @$dataSend['CongCuTKKhoi2Icon'];
            $themeData['Option']['value']['CongCuTKKhoi3Icon'] = @$dataSend['CongCuTKKhoi3Icon'];
            $themeData['Option']['value']['CongCuTKKhoi4Icon'] = @$dataSend['CongCuTKKhoi4Icon'];

            $themeData['Option']['value']['CongCuTKKhoi1LinkFile'] = @$dataSend['CongCuTKKhoi1LinkFile'];
            $themeData['Option']['value']['CongCuTKKhoi2LinkFile'] = @$dataSend['CongCuTKKhoi2LinkFile'];


            $themeData['Option']['value']['CongCuTKKhoi1MoTa1'] = @$dataSend['CongCuTKKhoi1MoTa1'];
            $themeData['Option']['value']['CongCuTKKhoi2MoTa1'] = @$dataSend['CongCuTKKhoi2MoTa1'];
            $themeData['Option']['value']['CongCuTKKhoi3MoTa1'] = @$dataSend['CongCuTKKhoi3MoTa1'];
            $themeData['Option']['value']['CongCuTKKhoi4MoTa1'] = @$dataSend['CongCuTKKhoi4MoTa1'];

            $themeData['Option']['value']['CongCuTKKhoi1MoTa2'] = @$dataSend['CongCuTKKhoi1MoTa2'];
            $themeData['Option']['value']['CongCuTKKhoi2MoTa2'] = @$dataSend['CongCuTKKhoi2MoTa2'];
            $themeData['Option']['value']['CongCuTKKhoi3MoTa2'] = @$dataSend['CongCuTKKhoi3MoTa2'];
            $themeData['Option']['value']['CongCuTKKhoi4MoTa2'] = @$dataSend['CongCuTKKhoi4MoTa2'];

            $themeData['Option']['value']['CongCuTKKhoi1LinkTai'] = @$dataSend['CongCuTKKhoi1LinkTai'];
            $themeData['Option']['value']['CongCuTKKhoi2LinkTai'] = @$dataSend['CongCuTKKhoi2LinkTai'];
            $themeData['Option']['value']['CongCuTKKhoi3LinkTai'] = @$dataSend['CongCuTKKhoi3LinkTai'];
            $themeData['Option']['value']['CongCuTKKhoi4LinkTai'] = @$dataSend['CongCuTKKhoi4LinkTai'];

            $themeData['Option']['value']['VersionMac'] = @$dataSend['VersionMac'];
            $themeData['Option']['value']['VersionWindow'] = @$dataSend['VersionWindow'];

			$themeData['Option']['value']['otherResources'] = @$dataSend['otherResources'];

            $downloadSetting = $modelOption->getOption('downloadSetting');

            // Kiểm tra link download thay đổi ---------------------------------------------
            if (strcmp(trim($downloadSetting['Option']['value']['LinkWindow64'],""),trim(@$dataSend['LinkWindow64'],"")) != 0) {
                array_push($themeData['Option']['value']['WindowsLinkUpdateHistory'],
                    array(
                        date('c')." bản x64",
                        trim($downloadSetting['Option']['value']['LinkWindow64'],""), //Link cũ
                        trim(@$dataSend['LinkWindow64'],""), // Link mới
                        trim(@$dataSend['VersionWindow'],"")
                    )
                );
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkWindow32'],""),trim(@$dataSend['LinkWindow32'],"")) != 0) {
                array_push($themeData['Option']['value']['WindowsLinkUpdateHistory'],
                    array(
                        date('c')." bản x32",
                        trim($downloadSetting['Option']['value']['LinkWindow32'],""),
                        trim(@$dataSend['LinkWindow32'],""),
                        trim(@$dataSend['VersionMac'])
                    )
                );
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkMac'],""),trim(@$dataSend['LinkMac'],"")) != 0) {
                array_push($themeData['Option']['value']['MacLinkUpdateHistory'],
                    array(
                        date('c'),
                        trim($downloadSetting['Option']['value']['LinkMac'],""),
                        trim(@$dataSend['LinkMac'],"")
                    )
                );
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkMacRetina'],""),trim(@$dataSend['LinkMacRetina'],"")) != 0) {
                array_push($themeData['Option']['value']['MacLinkUpdateHistory'],
                    array(
                        date('c') . ' Retina',
                        trim($downloadSetting['Option']['value']['LinkMacRetina'],""),
                        trim(@$dataSend['LinkMacRetina'],"")
                    )
                );
            }
            // -----------------------------------------------------------------------------

            // Kiểm tra link file thay đổi ---------------------------------------------
            if(!array_key_exists('LinkFileWindow64', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['LinkFileWindow64'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkFileWindow64'],""),trim(@$dataSend['LinkFileWindow64'],"")) != 0) {
                if(!array_key_exists('WindowsLinkFileUpdateHistory', $themeData['Option']['value'])) {
                    $themeData['Option']['value']['WindowsLinkFileUpdateHistory'] = [];
                }
                if($themeData['Option']['value']['WindowsLinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['WindowsLinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['WindowsLinkFileUpdateHistory'],
                    array(
                        date('c')." bản x64",
                        trim($downloadSetting['Option']['value']['LinkFileWindow64'],""), //Link cũ
                        trim(@$dataSend['LinkFileWindow64'],""), // Link mới
                        trim(@$dataSend['VersionWindow'])
                    )
                );
            }
            if(!array_key_exists('LinkFileWindow32', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['LinkFileWindow32'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkFileWindow32'],""),trim(@$dataSend['LinkFileWindow32'],"")) != 0) {
                if($themeData['Option']['value']['WindowsLinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['WindowsLinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['WindowsLinkFileUpdateHistory'],
                    array(
                        date('c')." bản x32",
                        trim($downloadSetting['Option']['value']['LinkFileWindow32'],""),
                        trim(@$dataSend['LinkFileWindow32'],""),
                        trim(@$dataSend['VersionWindow'])
                    )
                );
            }
            if(!array_key_exists('LinkFileMac', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['LinkFileMac'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkFileMac'],""),trim(@$dataSend['LinkFileMac'],"")) != 0) {
                if(!array_key_exists('MacLinkFileUpdateHistory', $themeData['Option']['value'])) {
                    $themeData['Option']['value']['MacLinkFileUpdateHistory'] = [];
                }
                if($themeData['Option']['value']['MacLinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['MacLinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['MacLinkFileUpdateHistory'],
                    array(
                        date('c'),
                        trim($downloadSetting['Option']['value']['LinkFileMac'],""),
                        trim(@$dataSend['LinkFileMac'],""),
                        trim(@$dataSend['VersionMac'])
                    )
                );
            }
            if(!array_key_exists('LinkFileMacRetina', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['LinkFileMacRetina'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['LinkFileMacRetina'],""),trim(@$dataSend['LinkFileMacRetina'],"")) != 0) {
                if(!array_key_exists('MacLinkFileUpdateHistory', $themeData['Option']['value'])) {
                    $themeData['Option']['value']['MacLinkFileUpdateHistory'] = [];
                }
                if($themeData['Option']['value']['MacLinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['MacLinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['MacLinkFileUpdateHistory'],
                    array(
                        date('c') . ' Retina',
                        trim($downloadSetting['Option']['value']['LinkFileMacRetina'],""),
                        trim(@$dataSend['LinkFileMacRetina'],""),
                        trim(@$dataSend['LinkFileMacRetina'])
                    )
                );
            }

            if(!array_key_exists('CongCuTKKhoi1LinkFile', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['CongCuTKKhoi1LinkFile'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['CongCuTKKhoi1LinkFile'],""),trim(@$dataSend['CongCuTKKhoi1LinkFile'],"")) != 0) {
                if(!array_key_exists('Module1LinkFileUpdateHistory', $themeData['Option']['value'])) {
                    $themeData['Option']['value']['Module1LinkFileUpdateHistory'] = [];
                }
                if($themeData['Option']['value']['Module1LinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['Module1LinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['Module1LinkFileUpdateHistory'],
                    array(
                        date('c'),
                        trim($downloadSetting['Option']['value']['CongCuTKKhoi1LinkFile'],""),
                        trim(@$dataSend['CongCuTKKhoi1LinkFile'],"")
                    )
                );
            }
            if(!array_key_exists('CongCuTKKhoi2LinkFile', $downloadSetting['Option']['value'])) {
                $downloadSetting['Option']['value']['CongCuTKKhoi2LinkFile'] = '#';
            }
            if (strcmp(trim($downloadSetting['Option']['value']['CongCuTKKhoi2LinkFile'],""),trim(@$dataSend['CongCuTKKhoi2LinkFile'],"")) != 0) {
                if(!array_key_exists('Module2LinkFileUpdateHistory', $themeData['Option']['value'])) {
                    $themeData['Option']['value']['Module2LinkFileUpdateHistory'] = [];
                }
                if($themeData['Option']['value']['Module2LinkFileUpdateHistory'] == null) {
                    $themeData['Option']['value']['Module2LinkFileUpdateHistory'] = [];
                }
                array_push($themeData['Option']['value']['Module2LinkFileUpdateHistory'],
                    array(
                        date('c'),
                        trim($downloadSetting['Option']['value']['CongCuTKKhoi2LinkFile'],""),
                        trim(@$dataSend['CongCuTKKhoi2LinkFile'],"")
                    )
                );
            }
            // -----------------------------------------------------------------------------


            $modelOption->saveOption('downloadSetting', $themeData['Option']['value']);

            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

function platformSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('platformSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['LinkDanKyNgay'] = @$dataSend['LinkDanKyNgay'];
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];

            $themeData['Option']['value']['BanLaAiTieuDe'] = @$dataSend['BanLaAiTieuDe'];
            $themeData['Option']['value']['BanLaAiKhoi1Icon'] = @$dataSend['BanLaAiKhoi1Icon'];
            $themeData['Option']['value']['BanLaAiKhoi1TieuDe'] = @$dataSend['BanLaAiKhoi1TieuDe'];
            $themeData['Option']['value']['BanLaAiKhoi2Icon'] = @$dataSend['BanLaAiKhoi2Icon'];
            $themeData['Option']['value']['BanLaAiKhoi2TieuDe'] = @$dataSend['BanLaAiKhoi2TieuDe'];
            $themeData['Option']['value']['BanLaAiKhoi3Icon'] = @$dataSend['BanLaAiKhoi3Icon'];
            $themeData['Option']['value']['BanLaAiKhoi3TieuDe'] = @$dataSend['BanLaAiKhoi3TieuDe'];
            $themeData['Option']['value']['BanLaAiKhoi4Icon'] = @$dataSend['BanLaAiKhoi4Icon'];
            $themeData['Option']['value']['BanLaAiKhoi4TieuDe'] = @$dataSend['BanLaAiKhoi4TieuDe'];
            $themeData['Option']['value']['BanLaAiKhoi4TieuDe'] = @$dataSend['BanLaAiKhoi4TieuDe'];

            $themeData['Option']['value']['HayThamGiaTieuDe'] = @$dataSend['HayThamGiaTieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi1Icon'] = @$dataSend['HayThamGiaKhoi1Icon'];
            $themeData['Option']['value']['HayThamGiaKhoi2Icon'] = @$dataSend['HayThamGiaKhoi2Icon'];
            $themeData['Option']['value']['HayThamGiaKhoi3Icon'] = @$dataSend['HayThamGiaKhoi3Icon'];
            $themeData['Option']['value']['HayThamGiaKhoi4Icon'] = @$dataSend['HayThamGiaKhoi4Icon'];
            $themeData['Option']['value']['HayThamGiaKhoi5Icon'] = @$dataSend['HayThamGiaKhoi5Icon'];
            $themeData['Option']['value']['HayThamGiaKhoi6Icon'] = @$dataSend['HayThamGiaKhoi6Icon'];

            $themeData['Option']['value']['HayThamGiaKhoi1TieuDe'] = @$dataSend['HayThamGiaKhoi1TieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi2TieuDe'] = @$dataSend['HayThamGiaKhoi2TieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi3TieuDe'] = @$dataSend['HayThamGiaKhoi3TieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi4TieuDe'] = @$dataSend['HayThamGiaKhoi4TieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi5TieuDe'] = @$dataSend['HayThamGiaKhoi5TieuDe'];
            $themeData['Option']['value']['HayThamGiaKhoi6TieuDe'] = @$dataSend['HayThamGiaKhoi6TieuDe'];

            $themeData['Option']['value']['ThamGiaCungChungToiNen'] = @$dataSend['ThamGiaCungChungToiNen'];
            $themeData['Option']['value']['ThamGiaCungChungToiTieuDe'] = @$dataSend['ThamGiaCungChungToiTieuDe'];
            $themeData['Option']['value']['ThamGiaCungChungToiNoiDung'] = @$dataSend['ThamGiaCungChungToiNoiDung'];

            $themeData['Option']['value']['DeTraiNghiemTieuDe1'] = @$dataSend['DeTraiNghiemTieuDe1'];
            $themeData['Option']['value']['DeTraiNghiemTieuDe2'] = @$dataSend['DeTraiNghiemTieuDe2'];

            $themeData['Option']['value']['DeTraiNghiemKhoi1Icon'] = @$dataSend['DeTraiNghiemKhoi1Icon'];
            $themeData['Option']['value']['DeTraiNghiemKhoi2Icon'] = @$dataSend['DeTraiNghiemKhoi2Icon'];
            $themeData['Option']['value']['DeTraiNghiemKhoi3Icon'] = @$dataSend['DeTraiNghiemKhoi3Icon'];
            $themeData['Option']['value']['DeTraiNghiemKhoi4Icon'] = @$dataSend['DeTraiNghiemKhoi4Icon'];
            $themeData['Option']['value']['DeTraiNghiemKhoi5Icon'] = @$dataSend['DeTraiNghiemKhoi5Icon'];
            $themeData['Option']['value']['DeTraiNghiemKhoi6Icon'] = @$dataSend['DeTraiNghiemKhoi6Icon'];

            $themeData['Option']['value']['DeTraiNghiemKhoi1TieuDe'] = @$dataSend['DeTraiNghiemKhoi1TieuDe'];
            $themeData['Option']['value']['DeTraiNghiemKhoi2TieuDe'] = @$dataSend['DeTraiNghiemKhoi2TieuDe'];
            $themeData['Option']['value']['DeTraiNghiemKhoi3TieuDe'] = @$dataSend['DeTraiNghiemKhoi3TieuDe'];
            $themeData['Option']['value']['DeTraiNghiemKhoi4TieuDe'] = @$dataSend['DeTraiNghiemKhoi4TieuDe'];
            $themeData['Option']['value']['DeTraiNghiemKhoi5TieuDe'] = @$dataSend['DeTraiNghiemKhoi5TieuDe'];
            $themeData['Option']['value']['DeTraiNghiemKhoi6TieuDe'] = @$dataSend['DeTraiNghiemKhoi6TieuDe'];

            $themeData['Option']['value']['DeTraiNghiemKhoi1NoiDung'] = @$dataSend['DeTraiNghiemKhoi1NoiDung'];
            $themeData['Option']['value']['DeTraiNghiemKhoi2NoiDung'] = @$dataSend['DeTraiNghiemKhoi2NoiDung'];
            $themeData['Option']['value']['DeTraiNghiemKhoi3NoiDung'] = @$dataSend['DeTraiNghiemKhoi3NoiDung'];
            $themeData['Option']['value']['DeTraiNghiemKhoi4NoiDung'] = @$dataSend['DeTraiNghiemKhoi4NoiDung'];
            $themeData['Option']['value']['DeTraiNghiemKhoi5NoiDung'] = @$dataSend['DeTraiNghiemKhoi5NoiDung'];
            $themeData['Option']['value']['DeTraiNghiemKhoi6NoiDung'] = @$dataSend['DeTraiNghiemKhoi6NoiDung'];

            $modelOption->saveOption('platformSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

function footerSetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('footerSetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['ThongTinThemId'] = @$dataSend['ThongTinThemId'];
            $themeData['Option']['value']['BanCanTroGiupId'] = @$dataSend['BanCanTroGiupId'];
            $themeData['Option']['value']['sanPhamId'] = @$dataSend['sanPhamId'];
            $themeData['Option']['value']['logo'] = @$dataSend['logo'];
            $themeData['Option']['value']['facebook'] = @$dataSend['facebook'];
            $themeData['Option']['value']['instagram'] = @$dataSend['instagram'];
            $themeData['Option']['value']['linkedin'] = @$dataSend['linkedin'];
            $themeData['Option']['value']['youtube'] = @$dataSend['youtube'];

            $themeData['Option']['value']['TieuDeKhoi1'] = @$dataSend['TieuDeKhoi1'];
            $themeData['Option']['value']['TieuDeKhoi2'] = @$dataSend['TieuDeKhoi2'];
            $themeData['Option']['value']['TieuDeKhoi3'] = @$dataSend['TieuDeKhoi3'];

            $modelOption->saveOption('footerSetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

function gallerySetting($input){
    global $modelOption;
    global $isRequestPost;
    global $urlHomes;
    global $modelAlbum;

    if (checkAdminLogin()) {
        $themeData = $modelOption->getOption('gallerySetting');
        $mess = '';
        $dataSend= $input['request']->data;
        if ($isRequestPost) {
            $themeData['Option']['value']['AnhBanner'] = @$dataSend['AnhBanner'];
            $themeData['Option']['value']['BannerMota1'] = @$dataSend['BannerMota1'];
            $themeData['Option']['value']['BannerMota2'] = @$dataSend['BannerMota2'];

            $themeData['Option']['value']['TieuDeThietKeAnTuong'] = @$dataSend['TieuDeThietKeAnTuong'];
            $themeData['Option']['value']['AlbumThietKeAnTuong'] = @$dataSend['AlbumThietKeAnTuong'];

            $modelOption->saveOption('gallerySetting', $themeData['Option']['value']);
            $mess= "<p style='color:green;font-size:20px;'>Lưu thành công !<p>";
        }
        $listAlbum = $modelAlbum->getNewAlbum(9999,array('lock'=>0));
        setVariable('listAlbum', $listAlbum);
        setVariable('themeData', $themeData);
        setVariable('mess',$mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}
?>
