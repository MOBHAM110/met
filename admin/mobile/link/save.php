<?php
$depth='../';
require_once $depth.'../login/login_check.php';
if($action=="editor"){
$query = "update $met_link SET 
                      webname              = '$webname',
					  info                 = '$info',
					  link_type            = '$link_type',
					  weburl               = '$weburl',
					  weblogo              = '$weblogo',
					  contact              = '$contact',
					  orderno              = '$orderno',
					  com_ok               = '$com_ok',
					  show_ok              = '$show_ok', 
					  addtime              = '$m_now_date'
					  where id='$id'";

$db->query($query);
$htmjs = onepagehtm('link','index').'$|$';
$htmjs.= indexhtm();
metsave('../mobile/link/index.php?lang='.$lang,'',$depth,$htmjs);
}
?>
