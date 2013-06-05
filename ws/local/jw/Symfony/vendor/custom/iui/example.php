<?php
  //
  // Made by	db0
  // Contact	db0company@gmail.com
  // Website	http://db0.fr/
  //

include_once('conf.php');
include_once($class_absolute_path.'/IonisInfo.php');

$iui = new IonisInfo($mysql_login, $mysql_pass, $mysql_dbname,
		     $ionis_login, $ionis_unix_password, $absolute_path_local_files);

?>

