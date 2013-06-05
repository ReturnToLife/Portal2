<?php

/*
Vous devez être connectés sur votre bdd pour lancer ce script

/!\ A ne pas modifier. Pour changer le schema, voir le fichier create_db.sql
TODO: Changer tout ca en utilisant Symfony (Doctrine)
*/

define('SQL_SCRIPT_NAME', 'create_db.sql');

class MySQLException extends Exception
{
  public function __construct($message, $code = 0)
  {
    parent::__construct($message . ': ' . mysql_error(), $code);
  }
}

function create_db($unused = '')
{
  $path = getcwd() . '/' . SQL_SCRIPT_NAME;
  echo 'Script path: ' . $path . "\n";
  $sql = file_get_contents($path);
  if ($sql === FALSE)
    die("Could not read sql file.\n");
  $string_queries = explode(';', $sql);
  foreach ($string_queries as $string_query)
    {
      $trimmed = trim($string_query);
      if (strlen($trimmed) === 0)
        continue;
      $res = mysql_query($string_query . ';');
      if ($res === FALSE)
        throw new MySQLException('Error while creating table');
    }
  echo("Database schema loaded\n");
}

?>
