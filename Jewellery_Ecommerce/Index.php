<?php

require_once("config.php");
require_once("header.php");
global $username;

echo "
<html>
<head>
    <style>
body
{
    padding:30px;
    table-b;
    font-size: x-large;
    color: coral;
}
a{
color:white;
}
</style>
</head>
        

<body>
<body style=\"background-image: url('images/index.jpg');\">
</body>
	 <tr>
            <td><a href='displaymenu.php'> View all jewelleries</a></td>
            <br>
            <br>
            <br>
            <td><a href='register.php'>Register New Account</a></td>
            <br>
            <br>
            <br>
            <td><a href='login.php'>Login</a></td>
            <br>
            <br>
            <br>
        </tr>
        <br>";
?>