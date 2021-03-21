<?php
function ispanagram($s) {
	$alphabet= str_split("abcdefghijklmnopqrstuvwxyz");
	foreach($alphabet as $char){
		if (strpos(strtolower($s), $char)===false) {
			return false;
		}
	}
	return true;
}
echo(ispanagram("The quick brown fox jumps over the lazy dog") ? 'true' : 'false');
?>
