<?php
$A = array(1, 5, 6, 3, 2, 1, 2, 3, 9, 7, 6);
$B = array(2, 3, 1, 2, 2, 0, 1, 1, 1, 1, 1);
$iloczyn = 0;
for ($i=0; $i<sizeof($A); $i++) {
    $iloczyn+=$A[$i]*$A[$i];
}
echo $iloczyn;
?>
