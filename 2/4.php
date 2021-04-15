<!DOCTYPE html>
<html>
<body>

 <form action="" method="post">
  <label for="a">liczba:</label><br>
  <input type="number" id="a" name="a" value=0 min=0><br>
  <input type="submit" value="Submit">
</form> 
<?php
function isPrime($num) {
  $i = 2;
  while ($i <= sqrt($num)) {
    if ($num % $i == 0) return false;
    $i == 2 ? $i++ : $i += 2;
  }
  return $num > 1;
}
if(isset($_POST["a"]) && intval($_POST["a"]) == $_POST["a"] && intval($_POST["a"]) >= 0) {
	if(isPrime($_POST["a"])) {
		echo ("Podana liczba jest liczba pierwsza");
	}
	else {
		echo ("Podana liczba nie jest liczba pierwsza");
	}
}
?>
</body>
</html>
