<?php
header("Content-type: image/png");
$nomimage=$_GET['img'];
$image = ImageCreateFromPNG($nomimage);
$image2 = imageCreateTrueColor(100,100);
ImageCopyResized($image2,$image,0,0,0,0,100,100,getimagesize($nomimage)[0],getimagesize($nomimage)[1]);

$possede=$_GET['possede'];
if ($possede==0) {
    imagefilter($image2, IMG_FILTER_COLORIZE, -255, -255, -255);
}

imagepng($image2);
?>