<?php
header("Content-type: image/png");
$nomimage=$_GET['img'];
$image = ImageCreateFromPNG($nomimage);
$image2 = imageCreateTrueColor(150,150);
//$image=imageCreateTrueColor(100,100);
ImageCopyResized($image2,$image,0,0,0,0,150,150,getimagesize($nomimage)[0],getimagesize($nomimage)[1]);
imagepng($image2);
?>