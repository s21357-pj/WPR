<!DOCTYPE html>
<html>
<body>

 <form action="1.php" method="post">
  <label for="a">A:</label><br>
  <input type="number" id="a" name="a" value=0><br>
  <label for="b">B:</label><br>
  <input type="number" id="b" name="b" value=0><br>
  <input type="radio" id="plus" name="action" value="plus" checked>
  <label for="plus">+</label><br>
  <input type="radio" id="minus" name="action" value="minus">
  <label for="minus">-</label><br>
  <input type="radio" id="devision" name="action" value="devision">
  <label for="devision">/</label><br>
  <input type="radio" id="multiplication" name="action" value="multiplication">
  <label for="multiplication">*</label><br>
  <input type="submit" value="Submit">
</form> 
<?php
if(isset($_POST["a"]) && isset($_POST["b"])) {
	try {
		switch ($_POST["action"]) {
			 case "plus":
			 	echo ($_POST["a"] + $_POST["b"]);
			 	break;
			 case "minus":
			 	echo ($_POST["a"] - $_POST["b"]);
			 	break;
			case "devision":
				if ($_POST["b"] == 0) { throw new Exception('Devision by zero'); }
			 	echo ($_POST["a"] / $_POST["b"]);
			 	break;
			case "multiplication":
			 	echo ($_POST["a"] * $_POST["b"]);
			 	break;
		}
	} catch (Exception $e) {
		echo ("Incorrect input");
	}
}
?>
</body>
</html>
