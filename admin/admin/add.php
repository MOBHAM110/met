<?php
require_once '../login/login_check.php';
if($admin_list[admin_group]==3){
	$admin_groupx[0]='checked="checked"';
}
if($admin_list[langok]!='metinfo'){
	foreach($met_langok as $key=>$val){
		$langoka=explode('-',$admin_list[langok]);
		for($i=0;$i<count($langoka);$i++){
			if($langoka[$i]==$val[mark])$met_langoka[]=$val;
		}
	}
}else{
	$met_langoka=$met_langok;
}
$css_url="../templates/".$met_skin."/css";
$img_url="../templates/".$met_skin."/images";
include template('admin/admin_add');
footer();
?>