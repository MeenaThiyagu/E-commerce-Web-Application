<?php

require_once("config.php");

require_once("header.php");


echo "

<html>
	
				<form name='Login' action='loginverification.php"."' method='post'>
				<p>
				<label>Username:</label>
				<input type='text' name='username'>
				</p>
				<p>
				<label>Password:</label>
				<input type='password' name='password'>
				</p>
				<p>
				<label>&nbsp;</label>
				<input type='submit' value='Login' class='submit'>
				</p>
				</form>
<div style='padding-bottom:400px;'></div>

</body>
</html>";

?>
