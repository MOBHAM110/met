<?php
$depth='../';
require_once $depth.'../login/login_check.php';
$query="select * from $met_app where id='$id'";
$app_dl=$db->get_one($query);
include "../$app_dl[file]/index.php";
?>