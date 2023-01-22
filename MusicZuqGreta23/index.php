<?php
session_start();
//require("model/bdd.php");
//Chargement automatique des classes (classes métiers et managers)
spl_autoload_register(function ($class_name) {
    if (strstr($class_name, "Manager")) {
        include "model/manager/" . $class_name . ".php";
    } else {
        include "model/class/" . $class_name . '.class.php';
    }
});
//$lePDO = etablirCo();
$path = filter_var($_GET['path'] ?? "main", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
switch ($path) {
    case "main":
        require('controller/controller.php');
        break;

        // i use only one controller


    case "article":
        require("controller/controller.php");
        break;

    case "cours":
        require("controller/controller.php");
        break;

    default:
        require("view/404.php");
}
