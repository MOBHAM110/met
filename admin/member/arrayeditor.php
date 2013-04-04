<?php
require_once '../login/login_check.php';

$admin_list = $db->get_one("SELECT * FROM $met_admin_array WHERE id='$id'");
if(!$admin_list){
metsave('-1',$lang_dataerror);
}

$css_url="../templates/".$met_skin."/css";
$img_url="../templates/".$met_skin."/images";
include template('member/member_array_editor');
footer();
?>