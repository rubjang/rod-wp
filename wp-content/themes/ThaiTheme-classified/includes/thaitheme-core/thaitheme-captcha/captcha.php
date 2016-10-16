<?php ob_start();
$chars = array("a","b","c","d","e","f","g","h","i","k","m","n","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9");             
$textstr = '';
for ($i = 0, $length = 6; $i < $length; $i++)
   $textstr .= $chars[rand(0, count($chars) - 1)];
$hashtext = md5($textstr);
setcookie('strSec', $hashtext, 0, '/');
if (produceCaptchaImage($textstr) != IMAGE_ERROR_SUCCESS) {
    // output header
    header( "Content-Type: image/gif" );

    header("Expires: Mon, 21 Jul 2010 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache" );

    // output error image
    @readfile('captcha/tt-bg-captcha.png');
}
ob_end_flush();
function produceCaptchaImage($text) {
    // constant values
    $backgroundSizeX = 200;
    $backgroundSizeY = 65;
    $sizeX = 200;
    $sizeY = 65;
    $fontFile = "captcha/THSarabunNew Bold.ttf";
    $textLength = strlen($text);
    // generate random security values
    $backgroundOffsetX = rand(0, $backgroundSizeX - $sizeX - 1);
    $backgroundOffsetY = rand(0, $backgroundSizeY - $sizeY - 1);
    $angle = rand(0, -1);
    $fontColorR = rand(0, 127);
    $fontColorG = rand(0, 127);
    $fontColorB = rand(0, 127);
    $fontSize = rand(40, 45);
    $textX = rand(0, (int)( $fontSize)); // these coefficients are empiric
    $textY = rand((int)($fontSize), (int)($sizeY)); // don't try to learn how they were taken out
    $gdInfoArray = gd_info();
    if (! $gdInfoArray['PNG Support'])
        return IMAGE_ERROR_GD_TYPE_NOT_SUPPORTED;

    // create image with background
    $src_im = imagecreatefrompng( "captcha/tt-bg-captcha.png");
    if (function_exists('imagecreatetruecolor')) {
        // this is more qualitative function, but it doesn't exist in old GD
        $dst_im = imagecreatetruecolor($sizeX, $sizeY);
        $resizeResult = imagecopyresampled($dst_im, $src_im, 0, 0, $backgroundOffsetX, $backgroundOffsetY, $sizeX, $sizeY, $sizeX, $sizeY);
    } else {
        // this is for old GD versions
        $dst_im = imagecreate( $sizeX, $sizeY );
        $resizeResult = imagecopyresized($dst_im, $src_im, 0, 0, $backgroundOffsetX, $backgroundOffsetY, $sizeX, $sizeY, $sizeX, $sizeY);
    }

    if (! $resizeResult)
        return IMAGE_ERROR_GD_RESIZE_ERROR;

    // write text on image
    if (! function_exists('imagettftext'))
        return IMAGE_ERROR_GD_TTF_NOT_SUPPORTED;
    $color = imagecolorallocate($dst_im, $fontColorR, $fontColorG, $fontColorB);
    imagettftext($dst_im, $fontSize, -$angle, $textX, $textY, $color, $fontFile, $text);

    // output header
    header("Content-Type: image/png");

    // output image
    imagepng($dst_im);

    // free memory
    imagedestroy($src_im);
    imagedestroy($dst_im);

    return IMAGE_ERROR_SUCCESS;
}

?>