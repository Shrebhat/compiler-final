<?php
    $language = strtolower($_POST['language']);
    $code = $_POST['code'];

    $random = substr(md5(mt_rand()), 0, 7);
    $filePath = "temp/" . $random . "." . $language;
    $programFile = fopen($filePath, "w");
    fwrite($programFile, $code);
    fclose($programFile);

    if($language == "php") {
        $output = shell_exec(" 2>&1");
        echo $output;
    }
    if($language == "python") {
        $output = shell_exec("C:\Users\user\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Python 3.9\IDLE (Python 3.9 64-bit).lnk 2>&1");
        echo $output;
    }
    if($language == "java") {
        $output = shell_exec(" 2>&1");
        echo $output;
    }

    if($language == "node") {
        rename($filePath, $filePath.".js");
        $output = shell_exec("node $filePath.js 2>&1");
        echo $output;
    }
    if($language == "c") {
        $outputExe = $random . ".exe";
        shell_exec("");
        $output = shell_exec();
        echo $output;
    }
    if($language == "cpp") {
        $outputExe = $random . ".exe";
        shell_exec("");
        $output = shell_exec("");
        echo $output;
    }