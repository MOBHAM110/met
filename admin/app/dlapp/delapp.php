<?php
$depth='../';
require_once $depth.'../login/login_check.php';
if($action='del'){
$query="delete from $met_app where id='$id' and download=1";
$db->query($query);
}
echo $lang_appuninstall;
metsave('../app/dlapp/index.php?anyid='.$anyid.'&lang='.$lang,'',$depth);
?>