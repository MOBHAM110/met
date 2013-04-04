<?php
require_once '../login/login_check.php';
$css_url="../templates/".$met_skin."/css";
$img_url="../templates/".$met_skin."/images";
$lev=0;
$menbermanage=1;
$met_member_use=1;
require '../content/access.php';
include template('member/member_add');
footer();
?>