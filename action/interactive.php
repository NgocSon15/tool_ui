<?php
$question_count = count($_POST['type']);
$file = fopen('stepquest.trealet', 'w+');

fwrite($file, "{\r\n");
fwrite($file, "\t\"trealet\":{\r\n");
fwrite($file, "\t\t\"exec\":\"streamline\",\r\n");
fwrite($file, "\t\t\"title\":\"" . $_POST['title'] . "\",\r\n");
fwrite($file, "\t\t\"steps\":[\r\n");

for($i = 0; $i < $question_count; $i++) {
    fwrite($file, "\t\t\t{\r\n");

    fwrite($file, "\t\t\t\t\"type\":\"" . $_POST['type'][$i] . "\",\r\n");

    if($_POST['type'][$i] == 'single') {
        $answer = null;
        fwrite($file, "\t\t\t\t\"question\":\"" . $_POST['question'][$i] . "\",\r\n");
        $options = explode("\r\n", $_POST['option'][$i]);

        fwrite($file, "\t\t\t\t\"options\":[");
        for($j = 0; $j < count($options); $j++)
        {
            if($j < count($options) - 1)
            {
                fwrite($file, "\"" . $options[$j] . "\",");
            } else {
                fwrite($file, "\"" . $options[$j] . "\"");
            }

            if($options[$j] == $_POST['answer'][$i]) {
                $answer = $j + 1;
            }
        }

        fwrite($file, "],\r\n");
        fwrite($file, "\t\t\t\t\"answer\":\"" . $answer . "\"\r\n");
    } elseif ($_POST['type'][$i] == 'multi') {
        $answer_arr = [];
        fwrite($file, "\t\t\t\t\"question\":\"" . $_POST['question'][$i] . "\",\r\n");
        $options = explode("\r\n", $_POST['option'][$i]);
        $answers = explode("\r\n", $_POST['answer'][$i]);

        fwrite($file, "\t\t\t\t\"options\":[");
        for($j = 0; $j < count($options); $j++)
        {
            if($j < count($options) - 1)
            {
                fwrite($file, "\"" . $options[$j] . "\",");
            } else {
                fwrite($file, "\"" . $options[$j] . "\"");
            }

            foreach ($answers as $answer) {
                if($options[$j] == $answer) {
                    array_push($answer_arr, $j + 1);
                }
            }
        }
        fwrite($file, "],\r\n");

        fwrite($file, "\t\t\t\t\"answer\":[");
        for($j = 0; $j < count($answer_arr); $j++) {
            if($j < count($answer_arr) - 1)
            {
                fwrite($file, "\"" . $answer_arr[$j] . "\",");
            } else {
                fwrite($file, "\"" . $answer_arr[$j] . "\"");
            }
        }
        fwrite($file, "]\r\n");
    } else {
        fwrite($file, "\t\t\t\t\"image\":\"" . $_POST['image'][$i] . "\",\r\n");
        fwrite($file, "\t\t\t\t\"answer\":\"" . $_POST['answer'][$i] . "\"\r\n");
    }

    if($i < $question_count - 1)
    {
        fwrite($file, "\t\t\t},\r\n");
    } else {
        fwrite($file, "\t\t\t}\r\n");
    }
}

fwrite($file, "\t\t]\r\n");
fwrite($file, "\t}\r\n");
fwrite($file, "}");

$file_url = 'stepquest.trealet';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
readfile($file_url);