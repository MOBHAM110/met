<?php
require_once '../login/login_check.php';
$adminno = $db->counter($met_admin_table, " where admin_type like '%metinfo%' and id<>'$id'", "*");
if($adminno<1)metsave('-1',$lang_deleteJS);
if($action=="del"){
$allidlist=explode(',',$allid);
foreach($allidlist as $key=>$val){
$query = "delete from $met_admin_table where id='$val'";
$db->query($query);
}
metsave('../admin/index.php?lang='.$lang.'&anyid='.$anyid);
}
else{
$admin_list = $db->get_one("SELECT * FROM $met_admin_table WHERE id='$id'");
if(!$admin_list)metsave('-1',$lang_loginNoid);
$query = "delete from $met_admin_table where id='$id'";
$db->query($query);
metsave('../admin/index.php?lang='.$lang.'&anyid='.$anyid);
}
?>
