<?php
function contact($input)
{
    global $isRequestPost;
    global $modelOption;
    $contact = $modelOption->getOption('contactSettings');

    $dataSend = arrayMap($input['request']->data);
    $returnSend = array('code' => -1, 'mess' => '');

    $captchaData = $modelOption->getOption("captchaData");
    $validateErr = '';
    $color = 'red';
    if (array_key_exists("Option", $captchaData) && array_key_exists('siteKey', $captchaData['Option']['value'])) {
        if (array_key_exists("g-recaptcha-response", $dataSend)) {
            if (strcmp($dataSend['g-recaptcha-response'],"") != 0) {
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $captchaData['Option']['value']['secretKey'] . '&response=' . $dataSend['g-recaptcha-response']);
                if (json_decode($verifyResponse)->success) {
                    if ($isRequestPost && isset($dataSend['email']) && $dataSend['email'] != '') {

                        $email = (isset($dataSend['email'])) ? $dataSend['email'] : '';
                        $fullName = (isset($dataSend['fullName'])) ? $dataSend['fullName'] : '';
                        $title = (isset($dataSend['title'])) ? $dataSend['title'] : '';
                        $fone = (isset($dataSend['fone'])) ? $dataSend['fone'] : '';
                        $content = (isset($dataSend['content'])) ? $dataSend['content'] : '';
                        if (($validateErr = validateContact($email, $fullName, $fone, $content)) === false) {

                            $modelContact = new Contact();
                            //thiếu trường sẽ báo lỗi còn thừa thì k sao
                            $modelContact->saveContact($fullName, $email, $fone, $title, $content);

                            $contactModel = $modelOption -> getOption("contact");

                            $validateErr = 'Cám ơn bạn đã liên lạc, chúng tôi sẽ phản hồi trong thời gian sớm nhất có thể!';
                            $color = 'green';

                            if (array_key_exists('webhook',$contactModel['Option']['value'])) {
                                $url = $contactModel['Option']['value']['webhook'];
                                if (strcmp($url,"") != 0) {
                                    $data = array(
                                        "text" => "Khách hàng $fullName gửi qua house3d.com\nEmail: $email\nSĐT: $fone\nLời nhắn: $content"
                                    );

                                    $curl = curl_init($url);

                                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
                                    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

                                    curl_exec($curl);

                                    curl_close($curl);

                                }
                            }

                        }
                    } else {
                        $validateErr = 'Mời bạn nhập email!';
                    }
                } else {
                    $validateErr = "Lỗi xác thựｃ captcha. xin thử lại!";
                }
            } else {
                $validateErr = "Lỗi captcha phía server, xin hãy liên lạc với chúng tôi sớm nhất có thể! Xin cảm ơn!";
            }
        }
    } else {
        $validateErr = "Lỗi captcha phía server, xin hãy liên lạc với chúng tôi sớm nhất có thể! Xin cảm ơn!";
        // Trong database chưa tồn tại key. Đây không phải giá trị có thể khởi tạo mặc định, vì vậy xin hãy khởi tạo trong trang admin
    }
    $returnSend = array('code' => 1, 'mess' => '<h3 style="color: ' . $color . ';" ></span>'. $validateErr .'</h3>');
    $cap_code = rand(100000, 999999);
    $_SESSION['capchaCode'] = $cap_code;

    setVariable('returnSend', $returnSend);
    setVariable('contact', $contact);
    setVariable('capchaCode', $cap_code);
}

function validateContact($email, $fullName, $fone, $content)
{
    $validateErr = false;

    if(empty(trim($fullName)))
    {
        $validateErr = "Họ và tên không được trống!";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validateErr = ($validateErr === false) ? "" : $validateErr . "<br>";
        $validateErr = $validateErr. "Địa chỉ email không hợp lệ!";
    }

    if(!empty(trim($fone)) && strlen($fone) > 12)
    {
        $validateErr = ($validateErr === false) ? "" : $validateErr . "<br>";
        $validateErr = $validateErr . "Số điện thoại không hợp lệ!";
    }

    if(empty(trim($content)))
    {
        $validateErr = ($validateErr === false) ? "" : $validateErr . "<br>";
        $validateErr = $validateErr . "Nội dung liên hệ không được trống!";
    }

    return $validateErr;
}

function deleteContact($input)
{
    global $urlHomes;
    global $urlPlugins;
    $modelContact = new Contact();

    if (checkAdminLogin()) {
        if (isset($input['request']->params['pass'][1])) {
            $idDelete = new MongoId($input['request']->params['pass'][1]);

            $modelContact->delete($idDelete);
        }
        $modelContact->redirect($urlPlugins . 'admin/contact-listContacts.php');
    } else {
        $modelContact->redirect($urlHomes);
    }
}


function listContacts($input)
{
    global $modelOption;
    global $urlHomes;
    global $urlNow;

    $modelContact = new Contact();

    if (checkAdminLogin()) {
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        if ($page <= 0) $page = 1;

        $limit = 15;
        $conditions = array();
        $listData = $modelContact->getPage($page, $limit);

        $totalData = $modelContact->find('count', array('conditions' => $conditions));

        $balance = $totalData % $limit;
        $totalPage = ($totalData - $balance) / $limit;
        if ($balance > 0) $totalPage += 1;

        $back = $page - 1;
        $next = $page + 1;
        if ($back <= 0) $back = 1;
        if ($next >= $totalPage) $next = $totalPage;

        if (isset($_GET['page'])) {
            $urlNow = str_replace('&page=' . $_GET['page'], '', $urlNow);
            $urlNow = str_replace('page=' . $_GET['page'], '', $urlNow);
        }

        if (strpos($urlNow, '?') !== false) {
            if (count($_GET) > 1) {
                $urlNow = $urlNow . '&page=';
            } else {
                $urlNow = $urlNow . 'page=';
            }
        } else {
            $urlNow = $urlNow . '?page=';
        }

        setVariable('listData', $listData);

        setVariable('page', $page);
        setVariable('totalPage', $totalPage);
        setVariable('back', $back);
        setVariable('next', $next);
        setVariable('urlNow', $urlNow);
    } else {
        $modelContact->redirect($urlHomes);
    }
}

function listDonate($input)
{
    global $modelOption;
    global $urlHomes;
    global $urlNow;

    $modelDonate = new Contact();

    if (checkAdminLogin()) {
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        if ($page <= 0) $page = 1;

        $limit = 15;
        $conditions = array();
        $donateList = $modelDonate->getPage($page, $limit);

        $totalData = $modelDonate->find('count', array('conditions' => $conditions));

        $balance = $totalData % $limit;
        $totalPage = ($totalData - $balance) / $limit;
        if ($balance > 0) $totalPage += 1;

        $back = $page - 1;
        $next = $page + 1;
        if ($back <= 0) $back = 1;
        if ($next >= $totalPage) $next = $totalPage;

        if (isset($_GET['page'])) {
            $urlNow = str_replace('&page=' . $_GET['page'], '', $urlNow);
            $urlNow = str_replace('page=' . $_GET['page'], '', $urlNow);
        }

        if (strpos($urlNow, '?') !== false) {
            if (count($_GET) > 1) {
                $urlNow = $urlNow . '&page=';
            } else {
                $urlNow = $urlNow . 'page=';
            }
        } else {
            $urlNow = $urlNow . '?page=';
        }

        setVariable('donateList', $donateList);
        setVariable('page', $page);
        setVariable('totalPage', $totalPage);
        setVariable('back', $back);
        setVariable('next', $next);
        setVariable('urlNow', $urlNow);
    } else {
        $modelDonate->redirect($urlHomes);
    }
}

function setting($input)
{
    global $urlHomes;
    global $modelOption;
    global $isRequestPost;

    if (checkAdminLogin()) {
        $data = $modelOption->getOption('contactSettings');
        $mess = '';

        if ($isRequestPost) {

            $dataSend = $input['request']->data;
            $data['Option']['value']['info'] = isset($dataSend['info']) ? $dataSend['info'] : '';
            $data['Option']['value']['map'] = isset($dataSend['map']) ? $dataSend['map'] : '';

            $data['Option']['value']['sendEmail'] = (isset($_POST['sendEmail'])) ? (int)$_POST['sendEmail'] : 0;
            // $data['Option']['value']['displayName']= $dataSend['displayName'];
            // $data['Option']['value']['email']= $dataSend['email'];

            $modelOption->saveOption('contactSettings', $data['Option']['value']);

            $mess = 'Save Success';
        }

        setVariable('data', $data);
        setVariable('mess', $mess);
    } else {
        $modelOption->redirect($urlHomes);
    }
}

?>