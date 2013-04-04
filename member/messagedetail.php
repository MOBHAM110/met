<?php
require_once 'login_check.php';
require_once ROOTPATH.'member/index_member.php';
$message_list=$db->get_one("select * from $met_message where id='$id'");
if(!$message_list){
okinfo('message.php?lang='.$lang,$lang_js1);
}
$mfname='message_detail';
include template('member');
footermember();
?>