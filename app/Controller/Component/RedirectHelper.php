<?php
/**
 * Created by PhpStorm.
 * User: quang
 * Date: 7/12/2018
 * Time: 5:31 PM
 */


/**
 *
 * a small redirect function that can return 303 error code
 * @param $url
 * @param int $statusCode
 */
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}