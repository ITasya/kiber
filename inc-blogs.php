<?php
$conn = mysqli_connect("sdb-u.hosting.stackcp.net", "kiberfairy-3231310021", "popi1234", "kiberfairy-3231310021");
$charset = "utf8";
if(!mysqli_set_charset($conn, $charset)){
	print("Ошибка кодировки");
}
//mysql_set_charset('utf8',$conn);
$sql = mysqli_query($conn, 'SELECT * FROM `blog`');

$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));

?>