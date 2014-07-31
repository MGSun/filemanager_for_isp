<?php

include '../../lib/config.inc.php';
$mysqli = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_password'], $conf['db_database']);


if (mysqli_connect_errno()) {
    printf("Error MySQL connection: %s\n", mysqli_connect_error());
    exit();
}

$token = sha1(time().$_GET['site']);

$query = "INSERT INTO `filemanager_tokens`(`token`,`time`) VALUES ('".$token."',NOW())";

$mysqli->query($query);

$mysqli->close();

echo $token;

header('Location: http://'.$_GET['site'].'/filemanager?t='.$token);
 

