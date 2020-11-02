<?php
/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */

require_once("config.php");
require_once("header.php");

$Jewel_ID = $_POST['Jewel_ID'];

session_start();
$User_Id = $_SESSION['ThisUser'];


if ($_POST['checkout'])
{
    header('Location: /Jewellery_Web Content & Dev/billing.php');
}
else
if ($_POST['proceedFromCart'])
    {
        header('Location: /Jewellery_Web Content & Dev/displaymenu.php');
        die();
    }

