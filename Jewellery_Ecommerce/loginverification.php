<?php
/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */
require_once("config.php");

require_once("header.php");
session_start();
$User_Name = $_POST['username'];
$password = $_POST['password'];
print_r($User_Name);
print_r($password);
$check = checkLogins($User_Name);
print_r($check);

if ($check)
{
    $_SESSION['ThisUser'] = $User_Name;
    header('Location: /Jewellery_Web Content & Dev/displaymenu.php');
}
else
{
    //echo "login fail";
    $error= print_r("Oops, invalid login");
   header('Location: /Jewellery_Web Content & Dev/index.php');
    include('Location: /Jewellery_Web Content & Dev/index.php');
    echo $error;

}