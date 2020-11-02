<?php

/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */

include("left-nav.php");

?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
       Purchase Jewel Online
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
            width: 70px;

        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
            width: 70px;

        }
        table.table-style-three a {
            color: blue;
            text-decoration: none;
            width: 40px;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
            width: 40px;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
            width: 40px;
            max-width: 50px;
            max-height: 50px;
        }
    </style>

</head>
<body style="background-color:darkgray">

<?php require_once("config.php");

$Jewel = fetchAllJewels();

?>
<!-- Table goes in the document BODY -->
<table class="table-style-three" ">
    <thead>
    <!-- display user details header  -->
    <th>JEWEL ID</th>
    <th>JEWEL NAME</th>
    <th> PRICE in ($)</th>
    <th>Have a glance</th>
    </thead>
    <tbody>
    <?php
    foreach($Jewel as $displayRecords) { ?>
        <tr>
            <td><a href = "additem.php?JEWEL_ID=<?php print $displayRecords['JEWEL_ID']; ?>"><?php print $displayRecords['JEWEL_ID']; ?></a></td>
            <td><?php print $displayRecords['JEWEL_NAME']; ?></td>
            <td><?php print $displayRecords['JEWEL_PRICE']; ?></td>
            <td><img width="120%" height="12%" src = "<?php print $displayRecords['IMAGE']; ?>"</td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>

