<?php

// spl_autoload_register('myAutoLoader');

// function myAutoLoader($className) {

// $path = "class/";

// $extension = ".class.php";

// $fullPath = $path. $className . $extension;

// include_once $fullPath;

// }

// ---------- OR ----------

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {

    $path = 'class/';

    $extension = '.class.php';

    $fileName = $path. $className . $extension;

    // 'if' condition is used to get specific error. 
    // Without this condition check you'll get multiple error message if class not found.
    if (!file_exists($fileName)) {
        return false;
    }

    include_once $fileName;

}