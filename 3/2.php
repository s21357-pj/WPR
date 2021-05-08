<!DOCTYPE html>
<html>
<body>

 <form action="2.php" method="post">
  <label for="a">Imię:</label><br>
  <input type="text" id="a" name="a"><br>
  <label for="b">Nazwisko</label><br>
  <input type="text" id="b" name="b"><br>
  <input type="submit" value="Submit">
</form> 
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["a"]) && isset($_POST["b"])) {
	try {
		if(file_put_contents("2.csv", $_POST["a"]." ".$_POST["b"]."\b", FILE_APPEND | LOCK_EX) !== false) {
			echo("Information has been saved");
		}
	} catch (Exception $e) {
		echo ("Incorrect input");
	}
}
?>
