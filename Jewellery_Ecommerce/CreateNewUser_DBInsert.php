<?php
/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */

require_once("config.php");

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$UserName = $_POST['User_Name'];
$Password = $_POST['Password'];
$confirm = $_POST['Confirm'];
$Email = $_POST['Email'];
$number = $_POST['number'];

$newuser = createNewUser($UserName, $fname, $lname, $Password, $Email, $number);

echo "Registered successfully";

include ("login.php");
?>