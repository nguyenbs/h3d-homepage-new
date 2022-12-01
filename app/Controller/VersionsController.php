<?php

class VersionsController extends AppController
{
    var $name = 'Versions';
    var $helpers = array('Session', 'Paginator');
    var $paginate = array();

    function update()
    {

        $urlLocal = $this->getUrlLocal();
        $urlNow = curPageURL(1);

        Controller::loadModel('UserRecord');

        if (checkAdminLogin()) {
            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
            if ($page <= 0)
                $page = 1;
            $limit = 15;
            $conditions = array();
            $listData = $this->UserRecord->getPage($page, $limit);

            $totalData = $this->UserRecord->find('count', array('conditions' => $conditions));
            $balance = $totalData % $limit;
            $totalPage = ($totalData - $balance) / $limit;
            if ($balance > 0)
                $totalPage += 1;

            $back = $page - 1;
            $next = $page + 1;
            if ($back <= 0)
                $back = 1;
            if ($next >= $totalPage)
                $next = $totalPage;

            if (isset($_GET['page'])) {
                $urlPage = str_replace('&page=' . $_GET['page'], '', $urlNow);
                $urlPage = str_replace('page=' . $_GET['page'], '', $urlPage);
            } else {
                $urlPage = $urlNow;
            }

            if (strpos($urlPage, '?') !== false) {
                if (count($_GET) > 1) {
                    $urlPage = $urlPage . '&page=';
                } else {
                    $urlPage = $urlPage . 'page=';
                }
            } else {
                $urlPage = $urlPage . '?page=';
            }
            $urlBase = ($this->webroot == '/') ? getDomainUrl() : getDomainUrl() . $this->webroot;
            $urlBase = str_replace('/app/webroot/', '', $urlBase);
            $urlVersionControl = $urlBase . 'versions/';


            $authorization = 'Authorization: Bearer cCKf97gM9A7T2WySYnTHWaLHXxLj27g6yy8h7eX77saYX8j4kLgM3GdJsNyeHxnxhUVGct3Yaz4bvvMtw9RhkqMBmeyU5QKkvJfjJHdJL4BQwRREuJTVaAnn97Fu5uLu';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_URL, "https://id.house3d.net/api/flashvar-upgrade");

            $content = curl_exec($ch);


            $this->set('urlVersionControl', $urlVersionControl);
            $this->set('listData', $listData);
            $this->set('page', $page);
            $this->set('totalPage', $totalPage);
            $this->set('back', $back);
            $this->set('next', $next);
            $this->set('urlPage', $urlPage);
            $this->set('R_net', $content);
            curl_setopt($ch, CURLOPT_URL, "https://id.house3d.com/api/flashvar-upgrade");
            $content = curl_exec($ch);
            $this->set('R_com', $content);

        } else {
            $this->redirect($urlLocal['urlAdmins'] . 'login');
        }

    }

    function downloadHistory()
    {
        $result = "";
        Controller::loadModel('UserRecord');
        $records = $this -> UserRecord ->getAllRecords();
        foreach ($records as $historyRecord) {
            foreach ($historyRecord as $userRecord) {
                $change_log = array_key_exists('change_log', $userRecord) ? $userRecord['change_log'] . ";" : "";
                $version_tag = array_key_exists('version_tag', $userRecord) ? $userRecord['version_tag'] . ";" : "";
                $git_info = array_key_exists('git_info', $userRecord) ? $userRecord['git_info'] . ";" : "";
                $historyString =
                    $userRecord['time'] . ";" .
                    $userRecord['file'] . ";" .
                    $userRecord['user'] . ";" .
                    $userRecord['status'] . ";" .
                    $change_log . ";" .
                    $version_tag . ";" .
                    $git_info . "\r\n";
                $result .= $historyString;
            }
        }

        $this -> response -> body($result);
        $this->response->type('csv');
        $this->response->download('history.csv');

        return $this->response;
    }
}


?>
