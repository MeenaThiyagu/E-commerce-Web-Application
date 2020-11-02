<?php
/**
 * Created by PhpStorm.
 * Owner: Meena
 * Date: 03-26-2020
 */
function fetchAllJewels()
{

    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT JEWEL_ID, JEWEL_NAME, JEWEL_PRICE, IMAGE FROM MENU ORDER BY JEWEL_ID");

    $stmt->execute();
    $stmt->bind_result($JEWEL_ID,$JEWEL_NAME, $JEWEL_PRICE, $IMAGE);
    while ($stmt->fetch()){
        $row[] = array('JEWEL_ID' => $JEWEL_ID,
            'JEWEL_NAME' => $JEWEL_NAME,
            'JEWEL_PRICE' => $JEWEL_PRICE,
            'IMAGE' => $IMAGE
        );
    }
    $stmt->close();
    return ($row);
}


function fetchThisItem($JEWEL_ID)
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT JEWEL_ID, JEWEL_NAME, JEWEL_PRICE, IMAGE FROM MENU
    WHERE JEWEL_ID=?");
    $stmt->bind_param("i", $JEWEL_ID);
    $stmt->execute();
    $stmt->bind_result($JEWEL_ID,$JEWEL_NAME, $JEWEL_PRICE, $IMAGE);
    while ($stmt->fetch()){
        $row[] = array('JEWEL_ID' => $JEWEL_ID,
            'JEWEL_NAME' => $JEWEL_NAME,
            'JEWEL_PRICE' => $JEWEL_PRICE,
            'IMAGE' => $IMAGE
        );
    }
    $stmt->close();
    return ($row);
}


function AddNewItem($User_ID, $JEWEL_ID, $JEWEL_Name, $JEWEL_PRICE, $Quantity,$Total)
{
    $Total=$Quantity*$JEWEL_PRICE;
    global $mysqli;
    $stmt = $mysqli->prepare(
        "INSERT INTO cart ( User_Id, Jewel_Id, Jewel_Name, Jewel_Price, Quantity,Total)VALUES 
(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $User_ID, $JEWEL_ID, $JEWEL_Name, $JEWEL_PRICE, $Quantity,$Total);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
    echo "The new item".$result;
    echo "Total price for purchase is:";
    print_r($Total);
}


function checkLogins($User_Name)
{
    global $mysqli;
    $stmt = $mysqli->prepare("select User_Name
		from user_details where  User_Name = ?");
    $stmt->bind_param($User_Name);
    $stmt->execute();
    $stmt->bind_result($User_Name);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'username' => $User_Name
        );
    }
    $stmt->close();
    print_r($row);

    if ($row[0] > '0') {
        return '0';
    } else {
        return '1';
    }
}
function createNewUser($UserName, $fname, $lname, $Password, $Email, $number)
{
    global $mysqli;
    //Generate A random userid
    $character_array = array_merge( range(0, 9));
    $rand_string = "";
    for ($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }

    $stmt = $mysqli->prepare(
        "INSERT INTO user_details (
		userid,
		User_Name,
		First_Name,
		Last_Name,
		Password,
		Email,
		Mobile_Number
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("ssssss", $UserName, $fname, $lname, $Password, $Email, $number);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function updateThisRecord($UserName, $fname, $lname, $Password, $Email, $number)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "UPDATE user_details
		SET
		User_Name=?,
		First_Name=?,
		Last_Name=?,
		Password=?,
		Email=?,
		Mobile_Number=?
		WHERE
		UserID = ?
		LIMIT 1"
    );
    $stmt->bind_param("ssssss", $UserName, $fname, $lname, $Password, $Email, $number);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function fetchAllUsers()
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "SELECT
        UserID,
		User_Name,
		First_Name,
		Last_Name,
		Password,
		Email,
		Mobile_Number
		FROM user_details"
    );
    $stmt->execute();
    $stmt->bind_result($userID,$fname, $lname, $UserName, $Password, $Email, $number);

    while ($stmt->fetch()) {
        $row[] = array(
            'userID'=>$userID,
            'firstname' => $fname,
            'lastname' => $lname,
            'User_Name' => $UserName,
            'Password' => $Password,
            'Email' => $Email,
            'number' => $number
        );
    }
    $stmt->close();
    return ($row);
}

function fetchThisUser($userID)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "SELECT
        UserID,
		User_Name,
		First_Name,
		Last_Name,
		Password,
		Email,
		Mobile_Number
		FROM user_details WHERE
    UserID = ?
    LIMIT 1"
    );
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $stmt->bind_result($userID, $UserName, $fname, $lname,  $Password, $Email, $number);

    while ($stmt->fetch()) {
        $row[] = array(
            'userID'=>$userID,
            'User_Name' => $UserName,
            'firstname' => $fname,
            'lastname' => $lname,
            'Password' => $Password,
            'Email' => $Email,
            'Number' => $number
        );
    }
    $stmt->close();
    return ($row);
}

