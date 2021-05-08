<?php
function plus($a, $b) {
	echo ($a + $b);
}
function minus($a, $b) {
	echo ($a - $b);
}
function devision($a, $b) {
	if ($b == 0) { throw new Exception('Devision by zero'); }
	echo ($a / $b);
}
function multiplication($a, $b) {
	echo ($a * $b);
}
?>