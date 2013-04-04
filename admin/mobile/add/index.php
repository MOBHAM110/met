<?php
$depth='../';
require_once $depth.'../login/login_check.php';
$navoks[3]='ui-btn-active';
foreach ($met_class as $key=>$val){
	if($val['module']==2 && (!$val['bigclass'] || $val[releclass])){
		$purview='admin_pop'.$val['id'];
		$purview=$$purview;
		$metcmspr=$metinfo_admin_pop=="metinfo" || $purview=='metinfo'?1:0;
		if($metcmspr){
			$val['url'] = 'news_add.php?lang='.$lang.'&class1='.$val[id];
			$contentlistes[] = $val;
		}
	}
}
$css_url=$depth."../templates/".$met_skin."/css";
$img_url=$depth."../templates/".$met_skin."/images";
include template('mobile/add/index');
footer();
?>