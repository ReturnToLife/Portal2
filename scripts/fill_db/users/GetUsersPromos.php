<?php

include_once('./conf.php');

// Must contain your $mysql_login, $mysql_pass, $ionis_login, $ionis_unix_password and $intra_password
include_once('./conf_perso.php');

include_once(IUI_DIR.'ionisinfo.class.php');

$iui = new IonisInfo($mysql_login, $mysql_pass, $mysql_dbname,
		     $ionis_login, $ionis_unix_password, $absolute_path_local_files, $afs);

$logins = array();
$logins = $iui->getLogins(0, 0, 0);

foreach ($logins as $login)
{
  if (!$login)
    continue;
  $promo = $iui->getPromo($login);
  $promo = ($promo == "0" ? "" : $promo);
  $login_promo[$login] = $promo;
}

var_dump($login_promo);
