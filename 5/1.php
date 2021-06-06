<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = 'password';
$dbname = "db";
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
mysql_set_charset('utf8', $dbcnx);
if(!$dbcnx) {
  echo "ERROR";
exit();
}
if (!@mysql_select_db($dbname, $dbcnx))
{
  echo "ERROR";
}

$sql = "SELECT * FROM test";
$result = mysql_query($sql);
while($tb = mysql_fetch_assoc($result)){
    echo ($tb["id"]);
}

?>
