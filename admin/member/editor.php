<?php
require_once '../login/login_check.php';


$admin_list = $db->get_one("SELECT * FROM $met_admin_table WHERE id='$id'");
if(!$admin_list){
metsave('-1',$lang_dataerror);
}
$lev=0;
$menbermanage=1;
$met_member_use=1;
$list_access['access']=$admin_list['usertype'];
require '../content/access.php';
$checkid=($admin_list['checkid'])?"checked=checked":"";

$css_url="../templates/".$met_skin."/css";
$img_url="../templates/".$met_skin."/images";
include template('member/member_editor');
footer();
?>