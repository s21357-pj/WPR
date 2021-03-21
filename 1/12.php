<?php
$a = 6;
$b = 2;
$arr = array();
$arr[0] = array(1, 2);
$arr[1] = array(3, 4);
$arr[2] = array(5, 6);
$arr[3] = array(7, 8);
$arr[4] = array(1, 2);
$arr[5] = array(2, 3);
$arr[6] = array(3, 4);

// transpose
for ($i = 0; $i <= $b; $i++) {
	for ($j = 0; $j <= $a; $j++) {
		echo ($arr[$j][$i]." ");
	}
	echo ("<br>");
}
?>
