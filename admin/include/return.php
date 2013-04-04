<?php
require_once '../login/login_check.php';
if($type=='lang'){
	$metinfo.= '<ol>';
foreach($met_langok as $key=>$val){
$cls='';
if($langadminok=="metinfo" or (strstr($langadminok,"-".$val[mark]."-"))){
    $metinfo.='<li title="'.$val[mark].'">'.$val[name].'</li>';
}}
	$metinfo.= '</ol>';
	echo $metinfo;
}
?>