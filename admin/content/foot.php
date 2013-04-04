<?php
require_once '../login/login_check.php';
if($action=="modify"){
	require_once $depth.'../include/config.php';
	metsave('../content/foot.php?lang='.$lang.'&anyid='.$anyid);
}else{
	$css_url="../templates/".$met_skin."/css";
	$img_url="../templates/".$met_skin."/images";
	include template('content/set_foot');
	footer();
}
?>