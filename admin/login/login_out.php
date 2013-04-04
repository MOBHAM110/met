<?php
session_start();
		  $_SESSION['metinfo_admin_name'] ='';
          $_SESSION['metinfo_admin_pass'] ='';
		  $_SESSION['metinfo_admin_time'] ='';
		  $_SESSION['metinfo_admin_pop']  ='';
		  $_SESSION['metinfo_admin_type'] ='';
		  $_SESSION['languser'] ='';
		  if(isset($_COOKIE['PHPSESSID'])) setcookie("PHPSESSID", "", mktime()-86400*7, "/");
Header("Location: ../");
exit;
?>
