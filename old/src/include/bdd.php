<?php

include_once('conf.php');

try
{
  $bdd = new PDO('mysql:host=localhost;dbname='.$return_dbname,
		 $mysql_login, $mysql_pass);
}
catch (Exception $e)
{
  echo "MySQL Connection error.\n";
  return ;
}
