<?php

$item_count = count($_POST['name']);
$file = fopen('streamline.trealet', 'w+');
fwrite($file, "{\r\n");
fwrite($file, "\t\"trealet\":{\r\n");
fwrite($file, "\t\t\"exec\":\"streamline\",\r\n");
fwrite($file, "\t\t\"title\":\"" . $_POST['title'] . "\",\r\n");
fwrite($file, "\t\t\"author\":\"" . $_POST['author'] . "\",\r\n");
fwrite($file, "\t\t\"banner\":\"" . $_POST['banner'] . "\",\r\n");
fwrite($file, "\t\t\"desc\":\"" . $_POST['desc'] . "\",\r\n");
fwrite($file, "\t\t\"items\":[\r\n");

for($i = 0; $i < $item_count; $i++)
{
    fwrite($file, "\t\t\t{\r\n");

    fwrite($file, "\t\t\t\t\"name\":\"" . $_POST['name'][$i] . "\",\r\n");
    fwrite($file, "\t\t\t\t\"info\":\"" . $_POST['info'][$i] . "\",\r\n");
    $image_arr = explode(' ', $_POST['images'][$i]);

    fwrite($file, "\t\t\t\t\"images\":[");
    for($j = 0; $j < count($image_arr); $j++)
    {
        if($j < count($image_arr) - 1)
        {
            fwrite($file, $image_arr[$j] . ",");
        } else {
            fwrite($file, $image_arr[$j]);
        }
    }

    fwrite($file, "]\r\n");

    if($i < $item_count - 1)
    {
        fwrite($file, "\t\t\t},\r\n");
    } else {
        fwrite($file, "\t\t\t}\r\n");
    }
}

fwrite($file, "\t\t]\r\n");
fwrite($file, "\t}\r\n");
fwrite($file, "}");

$file_url = 'streamline.trealet';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
readfile($file_url);
