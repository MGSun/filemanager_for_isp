<?php

include '../../lib/config.inc.php';
$mysqli = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_password'], $conf['db_database']);


if (mysqli_connect_errno()) {
    printf("Error MySQL connection: %s\n", mysqli_connect_error());
    exit();
}



$token = preg_replace('/[^1234567890abcdef]/','',$_GET['t']);

$query = "DELETE FROM `filemanager_tokens` WHERE `token` = '".$token."'";

$mysqli->query($query);


if($mysqli->affected_rows > 0)
	echo "'status':'true'";
else
	echo "'status':'false'";

$mysqli->close();

