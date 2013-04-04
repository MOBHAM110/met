<?php
require_once '../login/login_check.php';
if($action=="modify"){
	require_once $depth.'../include/config.php';
	metsave('../seo/seo.php?lang='.$lang.'&anyid='.$anyid);
}else{
	$radio1[$met_title_type]="checked";
	$css_url=$depth."../templates/".$met_skin."/css";
	$img_url=$depth."../templates/".$met_skin."/images";
	include template('seo/seo');
	footer();
}
?>