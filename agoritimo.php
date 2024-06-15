<?php
$link = "C:\Users\diogo\music";
$files = scandir($link);
$filesDelete = [];

$i = 0;
foreach ($files as $file){
    if(array_key_exists($i - 1,$files)){
        if($file == str_replace(" (2)","",$files[$i - 1])){
            $filesDelete[] = $file;
        }
    }
    $i++;
}

foreach ($filesDelete as $fileDelete){
    if(file_exists($link.DIRECTORY_SEPARATOR.$fileDelete)){
        unlink($link.DIRECTORY_SEPARATOR.$fileDelete);
        echo $link.DIRECTORY_SEPARATOR.$fileDelete." deleted<br>";
    }
}
