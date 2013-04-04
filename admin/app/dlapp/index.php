<?php
$depth='../';
require_once $depth.'../login/login_check.php';
$query="select * from $met_app where download=1";
$app=$db->get_all($query);
$listclass[1]='class="now"';
$css_url=$depth."../templates/".$met_skin."/css";
$img_url=$depth."../templates/".$met_skin."/images";
include template('app/dlapp/index');
footer();
?>