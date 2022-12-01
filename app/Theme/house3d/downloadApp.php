<?php
function getDownloadLink()
{
    if (isset($_GET['platform'])) {
        global $downloadSetting;
        switch ($_GET['platform']) {
            case 'win_x64':
                redirect($downloadSetting['Option']['value']['LinkFileWindow64']);
                break;

            case 'win_x86':
                redirect($downloadSetting['Option']['value']['LinkFileWindow32']);
                break;

            case 'mac_osx':
                redirect($downloadSetting['Option']['value']['LinkFileMac']);
                break;
            case 'h3d_tool':
                redirect($downloadSetting['Option']['value']['CongCuTKKhoi1LinkFile']);
                break;
            case 'h3d_editor':
                redirect($downloadSetting['Option']['value']['CongCuTKKhoi2LinkFile']);
                break;
        }
    }
    redirect("/");
}

getDownloadLink();