<?php

class ReturnManager
{

  var $database = "";
  var $iui;
  var $bdd;

  public function __construct($iuiclass, $dblocation, $dbuser, $dbpwd, $dbtouse)
  {
    $this->bdd = mysql_connect($dblocation, $dbuser, $dbpwd);
    $this->database = $dbtouse;
    $this->iui = $iuiclass;

    session_start();
    ob_start();
  }
  
  /*
   * USEFULL FUNCTIONS
   *
   * Here you will find some small functions to shorten your code
   */

  /*
   * SELECT QUERIES
   */

  private function customselect_article($conditions)
  { 
    return (customselect($this->database, "article", $conditions));
  }

  private function customselect_articleassoc($conditions)
  {
    return (customselect($this->database, "article_assoc", $conditions));
  }

  private function customselect_contribarticle($conditions)
  {
    return (customselect($this->database, "contrib_article", $conditions));
  }

  private function customselect_contribflash($conditions)
  {
    return (customselect($this->database, "contrib_flash", $conditions));
  }

  private function customselect_contribtype($conditions)
  {
    return (customselect($this->database, "contrib_type", $conditions));
  }

  private function customselect_flash($conditions)
  {
    return (customselect($this->database, "flash", $conditions));
  }
  
  private function customselect_flashassoc($conditions)
  {
    return (customselect($this->database, "flash_assoc", $conditions));
  }

  private function customselect_iui($conditions)
  {
    return (customselect($this->database, "ionisusersinformations", $conditions));
  }

  private function customselect_outilgestion($conditions)
  {
    return (customselect($this->database, "outil_gestion", $conditions));
  }

  private function customselect_preference($conditions)
  {
    return (customselect($this->database, "preference", $conditions));
  }

  private function customselect_tag($conditions)
  {
    return (customselect($this->database, "tag", $conditions));
  }

  private function customselect_tagassoc($conditions)
  {
    return (customselect($this->database, "tag_assoc", $conditions));
  }

  /*
   * INSERT QUERIES
   */

  private function custominsert_article($values)
  {
    return (custominsert($this->database, "article", $values));
  }

  private function custominsert_articleassoc($values)
  {
    return (custominsert($this->database, "article_assoc", $values));
  }

  private function custominsert_contribarticle($values)
  {
    return (custominsert($this->database, "contrib_article", $values));
  }

  private function custominsert_contribflash($values)
  {
    return (custominsert($this->database, "contrib_flash", $values));
  }

  private function custominsert_flash($values)
  {
    return (custominsert($this->database, "flash", $values));
  }

  private function custominsert_flashassoc($values)
  {
    return (custominsert($this->database, "flash_assoc", $values));
  }

  private function custominsert_preference($values)
  {
    return (custominsert($this->database, "preference", $values));
  }

  private function custominsert_tagassoc($values)
  {
    return (custominsert($this->database, "tag_assoc", $values));
  }

  /*
   * VARIOUS
   */

  // This function will allow you to insert on tables composed of a couple id / name
  // BEWARE ! columns names must be 'id' and 'name'
  // Used in return database for tables contrib_type / outil_gestion / tag
  private function addsimple_byname($name, $table)
  {
    $tab = array("name" => $name);
    if(!customselect($this->database, $table, $tab))
      {
	$tab = array("", $name);
	custominsert($this->database, $table, $tab);
      }
  }

  // Checking function with message error
  // Checks if a var is empty
  private function simplecheck($tocheck)
  {
    if(empty($tocheck))
      {
	echo("Argument error\n");
	return(true);
      }
    return(false);
  }


  // Checking function with message error
  // Checks if a var is empty and numeric
  private function checknum($tocheck)
  {
    if(empty($tocheck) || !is_numeric($tocheck))
      {
	echo("Numeric argument error\n");
	return(true);
      }
    return(false);
  }


  // Executes and return the ressource result of a query
  // Displays an error when the SQL syntax is wrong
  public function executequery($sql)
  {
    $query = mysql_query($sql) or die("Erreur SQL !\n".addslashes($sql)."\n".mysql_error()."\n");

    return ($query);
  }


  // Executes a query and return an exploitable array containing the results of it
  // This array is an ordinal array containing associative ones
  public function resultquery($sql)
  {
    $query = executequery($sql);

    $ret = array();
    while ($data = mysql_fetch_assoc($query))
      $ret[] = $data;

    return($ret);
  }

  // Executes a Select (*) query on the chosen table
  // You can specify which informations you want back
  public function customselectall_get($db, $table, $get)
  {
    mysql_select_db($db);

    $sql = 'select '.$get.' from '.$table;

    return(resultquery($sql));
  }


  // Executes a select query on the chosen table
  // You can specify conditions in an array with the format :
  // $conditions = array("key" => value, "key2" => value2, ...);
  public function customselect($db, $table, $conditions)
  {
    if (simplecheck($conditions))
      return(false);
    mysql_select_db($db);

    $flag = 0;
    $sql = 'select * from '.$table;

    foreach ($conditions as $key => $item)
      {
	if ($flag == 0)
	  {
	    $sql .= ' where '.$key.' = "'.addslashes($item).'"';
	    $flag = 1;
	  }
      else
        $sql .= ' and '.$key.' = "'.addslashes($item).'"';
      }
    $sql .= ';';
    return(resultquery($sql));
  }


  // Executes an insert query on the chosen table
  // You can specify values in an array with the format :
  // $conditions = array(value, value2, ...);
  // All table keys must be specified
  public function custominsert($db, $table, $values)
  {
    if (simplecheck($values))
      return(false);
    mysql_select_db($db);

    $flag = 0;
    $sql = 'insert into '.$table.' values(';

    foreach ($values as $item)
      {
	if ($flag == 0)
	  {
	    $sql .= '"'.addslashes($item).'"';
	    $flag = 1;
	  }
      else
        $sql .= ', "'.addslashes($item).'"';
      }

    $sql .= ');';
    return(executequery($sql));
  }

  /*
   * END USEFULL FUNCTIONS
   */


  /*
   * INSERT ELEMENTS PART
   *
   * Here you will find functions which will allow you to insert elements in your return database
   */

  public function addarticle($title, $category, $content, $type, $status, $school, $prom, $city)
  {
    if (simplecheck($title) || checknum($category) || simplecheck($content) || checknum($type) || checknum($status) || simplecheck($school) || simplecheck($prom) || simplecheck($city))
      return(false);

    $tab = array("", $title, $category, date("Y-m-d H:i:s"), $content, $type, $status, $school, $prom, $city);
    custominsert_article($tab);

    // TODO Doweneedthis ? Creating assoc between all articles and all students
    /*  
     $tab = customselectall_get($this->database, "ionisusersinformations", "id");

     $article = getarticle_bytitle($title);

     foreach ($tab as $data_student)
     {
     addarticleassoc_byid($data_student["id"], $article[0]["id"]);
     }
    */

  }

  public function addflash($contenu, $statut)
  {
    if (simplecheck($contenu) || checknum($statut))
      return(false);

    $tab = array("", $contenu, date("Y-m-d H:i:s"), $statut);

    custominsert_flash($tab);

    // TODO Doweneedthis ? Same reason than addarticle ...
    /*
     $tab = customselectall_get($this->database, "ionisusersinformations", "id");

     $flash = getflash_bycontent($contenu);

     foreach ($tab as $data_student)
     {
     addflashassoc_byid($data_student["id"], $flash[0]["id"]);
     }
    */
  }

  /*
   * ASSOC INSERT ELEMENTS
   */

  public function addcontribarticle_byid($type, $id_article, $id_student)
  {
    if (checknum($type) || checknum($id_article) || checknum($id_student))
      return(false);
    addsimple_byname($type, "contrib_type");
    $tab = customselect_contribtype(array("name" => $type));
    $tab2 = array($tab["id"], $id_article, $id_student);
    custominsert_contribarticle($tab2);
    return(true);
  }

  public function addcontribarticle_bylogin($type, $id_article, $login)
  {
    return(addcontribarticle_byid($type, $id_article, $this->iui->getId($login)));
  }

  public function addcontribflash_byid($type, $id_flash, $id_student)
  {
    if (checknum($type) || checknum($id_flash) || checknum($id_student))
      return(false);
    addsimple_byname($type, "contrib_type");
    $tab = customselect_contribtype(array("name" => $type));
    $tab2 = array($tab["id"], $id_flash, $id_student);
    custominsert_contribflash($tab2);
    return(true);
  }

  public function addcontribflash_bylogin($type, $id_flash, $login)
  {
    return(addcontribflash_byid($type, $id_flash, $this->iui->getId($login)));
  }

  public function addtagassoc($name, $id_article)
  {
    if (simplecheck($name) || checknum($id_article))
      return(false);
    addsimple_byname($name, "tag");
    $tab = customselect_tag(array("name" => $name));
    $tab2 = array($tab["id"], $id_article);
    custominsert_tagassoc($tab2);
    return(true);
  }

  public function addarticleassoc_byid($id_student, $id_article)
  {
    if (simplecheck($id_student) || simplecheck($id_article))
      return(false);
    $tab = array($id_student, $id_article, 0, 0);
    custominsert_articleassoc($tab);
    return(true);
  }

  public function addarticleassoc_bylogin($login, $id_article)
  {
    return(addarticleassoc_byid($this->iui->getId($login), $id_article));
  }

  public function addflashassoc_byid($id_student, $id_flash)
  {
    if (simplecheck($id_student) || simplecheck($id_flash))
      return(false);
    $tab = array($id_student, $id_flash, 0);
    custominsert_flashassoc($tab);
    return(true);
  }

  public function addflashassoc_bylogin($login, $id_flash)
  {
    return(addflashassoc_byid($this->iui->getId($login), $id_flash));
  }

  /*
   * END INSERT ELEMENTS PART
   */


  /*
   * GETTERS PART
   *
   * Here you will find functions which will allow you extract informations from your return database
   * on various tables based on various key informations
   */

  /* HERE IS ONE TEMPLATE 
   --->
 
   function getsmthg_bysmthg($smthg)
   {
   if (checknum($smthg))
   return(false);
   $tab = array("smthg" => $smthg);
   return(customselect_article($tab));
   }

   <---
  */

  /*
   * ARTICLE getters
   */

  public function getarticle_by($by, $val)
  {
    if (simplecheck($by) || simplecheck($val))
      return(false);
    $tab = array($by => $val);
    return(customselect_article($tab));
  }

  public function getarticle_by_num($by, $val)
  {
    if (simplecheck($by) || checknum($val))
      return(false);
    $tab = array($by => $val);
    return(customselect_article($tab));
  }

  public function getarticle_byid($id)
  {
    return(getarticle_by_num("id", $id));
  }

  public function getarticle_bytitle($title)
  {
    return(getarticle_by("titre", $title));
  }

  public function getarticle_bycategory($category)
  {
    return(getarticle_by_num("categ", $category));
  }

  public function getarticle_bytype($type)
  {
    return(getarticle_by_num("type", $type));
  }

  public function getarticle_bystatus($status)
  {
    return(getarticle_by_num("statut", $status));
  }

  public function getarticle_byschool($school)
  {
    return(getarticle_by("ecole", $school));
  }

  public function getarticle_byprom($prom)
  {
    return(getarticle_by("promo", $prom));
  }

  public function getarticle_bycity($city)
  {
    return(getarticle_by("ville", $city));
  }

  public function getarticle_bytag($tag)
  {
    if (!is_numeric($tag))
      {
	$tab = customselect_tag(array("name" => $type));
	$tag = $tab[0]["id"];
      }

    if (checknum($tag))
      return(false);

    $tab = array("id_tag" => $tag);
    $tab2 = customselect_tagassoc($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = getarticle_byid($item["id_article"]);

    return ($ret);
  }

  public function getarticle_bystudentcontrib($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if (checknum($student))
      return(false);

    $tab = array("id_student" => $student);
    $tab2 = customselect_contribarticle($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = getarticle_byid($item["id_article"]);

    return ($ret);
  }

  public function getarticle_bystudentunsight($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if (checknum($student))
      return(false);

    mysql_select_bd($this->database);
    $sql = 'select * from article where id not in (select article.id from article, article_assoc where article.id = article_assoc.id_article and article_assoc.id_student = "'.$student.'");';

    return(resultquery($sql));
  }

  /*
   *  TAG getter
   */

  public function gettag($tag)
  {
    if (simplchech($tag))
      return (false);
    if (!is_numeric($tag))
      return (customselect_tag(array("name" => $tag)));
    return (customselect_tag(array("id" => $tag)));
  }

  /*
   *  FLASH getters
   */

  public function getflash_by($by, $val)
  {
    if (simplecheck($by) || simplecheck($val))
      return(false);
    $tab = array($by => $val);
    return(customselect_flash($tab));
  }

  public function getflash_by_num($by, $val)
  {
    if (simplecheck($by) || checknum($val))
      return(false);
    $tab = array($by => $val);
    return(customselect_flash($tab));
  }

  public function getflash_byid($id_flash)
  {
    return(getflash_by_num("id", $id_flash));
  }

  public function getflash_bycontent($flash_content)
  {
    return(getflash_by("contenu", $flash_contenu));
  }

  public function getflash_byissue($issue)
  {
    return(getflash_by("parution", $issue));
  }

  public function getflash_bystatus($status)
  {
    return(getflash_by("statut", $status));
  }

  public function getflash_bystudentcontrib($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if (checknum($student))
      return(false);

    $tab = array("id_student" => $student);
    $tab2 = customselect_contribflash($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = getflash_byid($item["id_article"]);

    return ($ret);
  }

  public function getflash_bystudentunsight($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if (checknum($student))
      return(false);

    mysql_select_bd($this->database);
    $sql = 'select * from flash where id not in (select flash.id from flash, flash_assoc where flash.id = flash_assoc.id_flash and flash_assoc.id_student = "'.$student.'");';
  }

  /*
   *  OUTIL_GESTION getter
   */

  public function gettool($tool)
  {
    if (simplchech($tool))
      return (false);
    if (!is_numeric($tool))
      return (customselect_outilgestion(array("name" => $tool)));
    return (customselect_outilgestion(array("id" => $tool)));
  }

  /*
   *  OUTIL_GESTION getter
   */

  public function getpreference_byid($id)
  {
    if(checknum($id))
      return(false);
    $tab = array("id" => $id);
    return (customselect_preference($tab));
  }

  /*
   * END GETTERS PART
   */

}
?>