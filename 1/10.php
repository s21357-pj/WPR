<?php
function writeStars($n) {
	for($i = 1; $i <= $n; $i++) {
		for($j = 1; $j <= $i; $j++) {
			echo ("* ");
		}
		echo ("<br>");
	}
	
	for($i = $n; $i >= 1; $i--) {
		for($j = 1; $j <= $i; $j++) {
			echo ("* ");
		}
	    echo ("<br>");
	}

	for($i = $n; $i >= 1; $i--) {
		for($j = 1; $j <= $n-$i; $j++) {
			echo ("&nbsp;&nbsp;&nbsp;");
		}
		for($j = 1; $j <= $i; $j++) {
			echo ("* ");
		}
	    echo ("<br>");
	}
	for($i = 1; $i <= $n; $i++) {
		for($j = 1; $j <= $n-$i; $j++) {
			echo ("&nbsp;&nbsp;&nbsp;");
		}
		for($j = 1; $j <= $i; $j++) {
			echo ("* ");
		}
	    echo ("<br>");
	}
}
writeStars(3);
?>
