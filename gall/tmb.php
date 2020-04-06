<?php

$fisier=$_GET["file"];

$image = exif_thumbnail($fisier, $width, $height, $type);


if ($image!==false) {
    header('Content-type: ' .$type);
    echo $image;
    exit;
} else {
    // no thumbnail available, handle the error here
    echo 'No thumbnail available';
}


?>