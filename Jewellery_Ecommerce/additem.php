<?php

/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */

require_once("config.php");
require_once("header.php");
include("left-nav.php");

$JEWEL_ID = $_GET['JEWEL_ID'];

$foundmenu = fetchThisItem($JEWEL_ID);
//print_r($foundmenu);

?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
  table.table-style-three {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: 1px;
    border-color: #3A3A3A;
    border-collapse: collapse;
  }
  table.table-style-three th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #D56A6A;
    color: #ffffff;
  }
  table.table-style-three a {
    color: #ffffff;
    text-decoration: none;
  }

  table.table-style-three tr:hover td {
    cursor: pointer;
  }
  table.table-style-three tr:nth-child(even) td{
    background-color: #F7CFCF;
  }
  table.table-style-three td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #ffffff;
  }
</style>

</head>
<body>

<form name="AddToCart" method="post" action="cart.php">
<table class="table-style-three">
  <?php foreach ($foundmenu as $cart) { ?>
      <tr><td>User ID</td> <td><input type = "text" name = "User_Id" value ="<?php session_start();  echo $_SESSION['ThisUser'];?> "readonly></td></tr>
  <tr><td>JEWEL ID</td>      <td><input type="text" name="Jewel_ID" value="<?php print $cart['JEWEL_ID']; ?>" readonly></td></tr>
  <tr><td>JEWEL Name</td>       <td><input type="text" name="Jewel_NAME" value="<?php print $cart['JEWEL_NAME']; ?>"readonly></td></tr>
      <tr><td>Jewel Price</td>       <td><input type="text" name="JEWEL_PRICE" value="<?php print $cart['JEWEL_PRICE']; ?>"readonly></td></tr>
  <tr><td>Quantity</td>          <td><input type="text" name="Quantity" value="<?php print $cart['Quantity']; ?>"></td></tr>
      <tr><td>Total Price</td>       <td><input type="text" name="Total" value="<?php print $cart['Total']; ?>"readonly></td></tr>
  <?php }
  ?>
</table>

  <input type="submit" name="Submit" value="Add">
</form>


</body>
</html>