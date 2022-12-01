<?php
/**
 * Created by PhpStorm.
 * User: quang
 * Date: 7/5/2018
 * Time: 8:19 PM
 */

/**
 * Generate a file with hashing name in the same directory as the target file.
 *
 * @param $filePath - string - path to the target file in the local host
 * @return string - URL to CDN
 */
function hashUrl($filePath)
{
    global $homeDir;
    if (file_exists($homeDir . $filePath)) {
        global $urlCdn;

        if (isset($urlCdn) && trim($urlCdn) != "") {
            $dirChain = explode("/", $filePath);
            $fileNameAndExtArr = explode(".", $dirChain[sizeof($dirChain) - 1], 2);
            $hashedFileDirectory = '/app/webroot/assets/';

            if (!is_dir($homeDir . $hashedFileDirectory)) {
                mkdir($homeDir . $hashedFileDirectory, 0777, true);
            }

            $hashedFileName = $fileNameAndExtArr[0] . '_' . md5_file($homeDir . $filePath) . '.' . $fileNameAndExtArr[1];
            if (!file_exists($homeDir . $hashedFileDirectory . $hashedFileName)) { // No redundant creation
                copy($homeDir . $filePath, $homeDir . $hashedFileDirectory . $hashedFileName);
            }

            return $urlCdn . $hashedFileDirectory . $hashedFileName;
        }
        global $urlHomes;
        return $urlHomes . $filePath;
    }
    return $filePath;
}

function noHashUrl($filePath)
{
    global $urlCdn;
    return $urlCdn . $filePath;
}

?>