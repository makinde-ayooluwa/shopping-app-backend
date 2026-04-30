<?php

spl_autoload_register("autoload");

function autoload($class_name){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $class_name . $extension;
}