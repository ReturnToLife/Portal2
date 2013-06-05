<?php

namespace ReturnEpi\WSBundle\Controller;

class ReturnManager
{

  var $database = "";
  var $iui;
  var $bdd;

  // Example : new ReturnManager(new IonisInformation(), "localhost", "jw", "TDVFaQ", "return-to_life"
  public function __construct($iuiclass, $dblocation, $dbuser, $dbpwd, $dbtouse)
  {
    $this->bdd = mysql_connect($dblocation, $dbuser, $dbpwd);
    $this->database = $dbtouse;
    $this->iui = $iuiclass;

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

  public function customselect_article($conditions)
  { 
    return ($this->customselect("article", $conditions));
  }

  public function customselect_articleassoc($conditions)
  {
    return ($this->customselect("article_assoc", $conditions));
  }

  public function customselect_contribarticle($conditions)
  {
    return ($this->customselect("contrib_article", $conditions));
  }

  public function customselect_contribflash($conditions)
  {
    return ($this->customselect("contrib_flash", $conditions));
  }

  public function customselect_contribtype($conditions)
  {
    return ($this->customselect("contrib_type", $conditions));
  }

  public function customselect_flash($conditions)
  {
    return ($this->customselect("flash", $conditions));
  }
  
  public function customselect_flashassoc($conditions)
  {
    return ($this->customselect("flash_assoc", $conditions));
  }

  public function customselect_iui($conditions)
  {
    return ($this->customselect("ionisusersinformations", $conditions));
  }

  public function customselect_outilgestion($conditions)
  {
    return ($this->customselect("outil_gestion", $conditions));
  }

  public function customselect_preference($conditions)
  {
    return ($this->customselect("preference", $conditions));
  }

  public function customselect_tag($conditions)
  {
    return ($this->customselect("tag", $conditions));
  }

  public function customselect_tagassoc($conditions)
  {
    return ($this->customselect("tag_assoc", $conditions));
  }

  /*
   * INSERT QUERIES
   */

  public function custominsert_article($values)
  {
    return ($this->custominsert("article", $values));
  }

  public function custominsert_articleassoc($values)
  {
    return ($this->custominsert("article_assoc", $values));
  }

  public function custominsert_contribarticle($values)
  {
    return ($this->custominsert("contrib_article", $values));
  }

  public function custominsert_contribflash($values)
  {
    return ($this->custominsert("contrib_flash", $values));
  }

  public function custominsert_flash($values)
  {
    return ($this->custominsert("flash", $values));
  }

  public function custominsert_flashassoc($values)
  {
    return ($this->custominsert("flash_assoc", $values));
  }

  public function custominsert_preference($values)
  {
    return ($this->custominsert("preference", $values));
  }

  public function custominsert_tagassoc($values)
  {
    return ($this->custominsert("tag_assoc", $values));
  }

  public function custominsert_groupvitrine($values)
  {
	return ($this->custominsert("group_vitrine", $values));
  }
  
  public function custominsert_outilvisible($values)
  {
	return ($this->custominsert("outil_visible", $values));
  }
  
  public function custominsert_materiel($values)
  {
	return ($this->custominsert("materiel", $values));
  }
  
  /*
   * UPDATE QUERIES
   */
   
   public function customupdate_materiel($updates, $conditions)
   {
		return ($this->customupdate("materiel", $updates, $conditions));
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
    if(!$this->customselect($this->database, $table, $tab))
      {
	$tab = array("", $name);
	$this->custominsert($this->database, $table, $tab);
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
	mysql_select_db($this->database);
    $query = mysql_query($sql) or die("Erreur SQL !\n".addslashes($sql)."\n".mysql_error()."\n");

    return ($query);
  }


  // Executes a query and return an exploitable array containing the results of it
  // This array is an ordinal array containing associative ones
  public function resultquery($sql)
  {
	mysql_select_db($this->database);
    $query = $this->executequery($sql);

    $ret = array();
    while ($data = mysql_fetch_assoc($query))
      $ret[] = $data;

    return($ret);
  }

  // Executes a Select (*) query on the chosen table
  // You can specify which informations you want back
  public function customselectall_get($table, $get)
  {
    mysql_select_db($this->database);

    $sql = 'select '.$get.' from '.$table;

    return($this->resultquery($sql));
  }


  // Executes a select query on the chosen table
  // You can specify conditions in an array with the format :
  // $conditions = array("key" => value, "key2" => value2, ...);
  public function customselect($table, $conditions)
  {
    if ($this->simplecheck($conditions))
      return(false);
    mysql_select_db($this->database);

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
    return($this->resultquery($sql));
  }


  // Executes an insert query on the chosen table
  // You can specify values in an array with the format :
  // $conditions = array(value, value2, ...);
  // All table keys must be specified
  public function custominsert($table, $values)
  {
    if ($this->simplecheck($values))
      return(false);
    mysql_select_db($this->database);

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
    return($this->executequery($sql));
  }
  
  public function customupdate($table, $updates, $conditions)
  {
    if ($this->simplecheck($updates))
      return(false);
    mysql_select_db($this->database);

    $flag = 0;
    $sql = 'update '.$table.' set ';

    foreach ($updates as $key => $item)
      {
	if ($flag == 0)
	  {
	    $sql .= $key.' = "'.addslashes($item).'"';
	    $flag = 1;
	  }
      else
        $sql .= ', '.$key.' = "'.addslashes($item).'"';
      }
	
	$flag = 0;
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
	var_dump($sql);
    return($this->executequery($sql));
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
    if ($this->simplecheck($title) || $this->checknum($category) || $this->simplecheck($content) || $this->checknum($type) 
	|| $this->checknum($status) || $this->simplecheck($school) || $this->simplecheck($prom) || $this->simplecheck($city))
      return(false);

    $tab = array("", $title, $category, date("Y-m-d H:i:s"), $content, $type, $status, $school, $prom, $city);
    $this->custominsert_article($tab);

    // TODO Doweneedthis ? Creating assoc between all articles and all students
    /*  
     $tab = customselectall_get("ionisusersinformations", "id");

     $article = getarticle_bytitle($title);

     foreach ($tab as $data_student)
     {
     addarticleassoc_byid($data_student["id"], $article[0]["id"]);
     }
    */

  }

  public function addflash($contenu, $statut)
  {
    if ($this->simplecheck($contenu) || $this->checknum($statut))
      return(false);

    $tab = array("", $contenu, date("Y-m-d H:i:s"), $statut);

    $this->custominsert_flash($tab);

    // TODO Doweneedthis ? Same reason than addarticle ...
    /*
     $tab = customselectall_get("ionisusersinformations", "id");

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
    if ($this->checknum($type) || $this->checknum($id_article) || $this->checknum($id_student))
      return(false);
    $this->addsimple_byname($type, "contrib_type");
    $tab = $this->customselect_contribtype(array("name" => $type));
    $tab2 = array($tab["id"], $id_article, $id_student);
    $this->custominsert_contribarticle($tab2);
    return(true);
  }

  public function addcontribarticle_bylogin($type, $id_article, $login)
  {
    return($this->addcontribarticle_byid($type, $id_article, $this->iui->getId($login)));
  }

  public function addcontribflash_byid($type, $id_flash, $id_student)
  {
    if ($this->checknum($type) || $this->checknum($id_flash) || $this->checknum($id_student))
      return(false);
    $this->addsimple_byname($type, "contrib_type");
    $tab = $this->customselect_contribtype(array("name" => $type));
    $tab2 = array($tab["id"], $id_flash, $id_student);
    $this->custominsert_contribflash($tab2);
    return(true);
  }

  public function addcontribflash_bylogin($type, $id_flash, $login)
  {
    return($this->addcontribflash_byid($type, $id_flash, $this->iui->getId($login)));
  }

  public function addtagassoc($name, $id_article)
  {
    if ($this->simplecheck($name) || $this->checknum($id_article))
      return(false);
    $this->addsimple_byname($name, "tag");
    $tab = $this->customselect_tag(array("name" => $name));
    $tab2 = array($tab["id"], $id_article);
    $this->custominsert_tagassoc($tab2);
    return(true);
  }

  public function addarticleassoc_byid($id_student, $id_article, $value)
  {
    if ($this->simplecheck($id_student) || $this->simplecheck($id_article))
      return(false);
    $tab = array($id_student, $id_article, 0, 1);
    $this->custominsert_articleassoc($tab);
    return(true);
  }

  public function addarticleassoc_bylogin($login, $id_article)
  {
    return($this->addarticleassoc_byid($this->iui->getId($login), $id_article));
  }

  public function addflashassoc_byid($id_student, $id_flash, $value)
  {
    if ($this->simplecheck($id_student) || $this->simplecheck($id_flash))
      return(false);
    $tab = array($id_student, $id_flash, $value);
    $this->custominsert_flashassoc($tab);
    return(true);
  }

  public function addflashassoc_bylogin($login, $id_flash)
  {
    return($this->addflashassoc_byid($this->iui->getId($login), $id_flash));
  }

  public function addvitrine_bygroupid($id_group, $groupname)
  {
	if ($this->checknum($id_group) || $this->simplecheck($groupname))
      return(false);
    $tab = array("", $id_group, "Présentation asso ".$groupname, 
	"Footer asso ".$groupname);
    $this->custominsert_groupvitrine($tab);
    return(true);
  }
  
  public function addoutilvisible($id_group_vitrine, $id_outil_gestion, $val)
  {
	if ($this->checknum($id_group_vitrine) || $this->checknum($id_outil_gestion))
      return(false);
    $tab = array($id_group_vitrine, $id_outil_gestion, $val);
    $this->custominsert_outilvisible($tab);
    return(true);
  }
  
  public function setoutilvisible($id_group_vitrine, $id_outil_gestion, $val)
  {
	if ($this->checknum($id_group_vitrine) || $this->checknum($id_outil_gestion))
      return(false);
    $sql = "UPDATE outil_visible SET visible = ".$val."
			WHERE id_group_vitrine = ".$id_group_vitrine."
			AND id_outil_gestion = ".$id_outil_gestion.";";
	$this->executequery($sql);
    return(true);
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
    if ($this->simplecheck($by) || $this->simplecheck($val))
      return(false);
    $tab = array($by => $val);
    return($this->customselect_article($tab));
  }

  public function getarticle_by_num($by, $val)
  {
    if ($this->simplecheck($by) || $this->checknum($val))
      return(false);
    $tab = array($by => $val);
    return($this->customselect_article($tab));
  }

  public function getarticle_byid($id)
  {
    return($this->getarticle_by_num("id", $id));
  }

  public function getarticle_bytitle($title)
  {
    return($this->getarticle_by("titre", $title));
  }

  public function getarticle_bycategory($category)
  {
    return($this->getarticle_by_num("categ", $category));
  }

  public function getarticle_bytype($type)
  {
    return($this->getarticle_by_num("type", $type));
  }

  public function getarticle_bystatus($status)
  {
    return($this->getarticle_by_num("statut", $status));
  }

  public function getarticle_byschool($school)
  {
    return($this->getarticle_by("ecole", $school));
  }

  public function getarticle_byprom($prom)
  {
    return($this->getarticle_by("promo", $prom));
  }

  public function getarticle_bycity($city)
  {
    return($this->getarticle_by("ville", $city));
  }

  public function getarticle_bytag($tag)
  {
    if (!is_numeric($tag))
      {
	$tab = $this->customselect_tag(array("name" => $type));
	$tag = $tab[0]["id"];
      }

    if ($this->checknum($tag))
      return(false);

    $tab = array("id_tag" => $tag);
    $tab2 = $this->customselect_tagassoc($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = $this->getarticle_byid($item["id_article"]);

    return ($ret);
  }

  public function getarticle_bystudentcontrib($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if ($this->checknum($student))
      return(false);

    $tab = array("id_student" => $student);
    $tab2 = $this->customselect_contribarticle($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = $this->getarticle_byid($item["id_article"]);

    return ($ret);
  }

  public function getarticle_bystudentunsight($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if ($this->checknum($student))
      return(false);

    $sql = 'select * from article where id not in (select article.id from article, article_assoc where article.id = article_assoc.id_article and article_assoc.id_student = "'.$student.'");';

    return($this->resultquery($sql));
  }

  /*
   *  TAG getter
   */

  public function gettag($tag)
  {
    if ($this->simplechech($tag))
      return (false);
    if (!is_numeric($tag))
      return ($this->customselect_tag(array("name" => $tag)));
    return ($this->customselect_tag(array("id" => $tag)));
  }

  /*
   *  FLASH getters
   */

  public function getflash_by($by, $val)
  {
    if ($this->simplecheck($by) || $this->simplecheck($val))
      return(false);
    $tab = array($by => $val);
    return($this->customselect_flash($tab));
  }

  public function getflash_by_num($by, $val)
  {
    if ($this->simplecheck($by) || $this->checknum($val))
      return(false);
    $tab = array($by => $val);
    return($this->customselect_flash($tab));
  }

  public function getflash_byid($id_flash)
  {
    return($this->getflash_by_num("id", $id_flash));
  }

  public function getflash_bycontent($flash_content)
  {
    return($this->getflash_by("contenu", $flash_contenu));
  }

  public function getflash_byissue($issue)
  {
    return($this->getflash_by("parution", $issue));
  }

  public function getflash_bystatus($status)
  {
    return($this->getflash_by("statut", $status));
  }

  public function getflash_bystudentcontrib($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if ($this->checknum($student))
      return(false);

    $tab = array("id_student" => $student);
    $tab2 = $this->customselect_contribflash($tab);
    $ret = array();

    foreach ($tab2 as $item)
      $ret[] = $this->getflash_byid($item["id_article"]);

    return ($ret);
  }

  public function getflash_bystudentunsight($student)
  {
    if (!is_numeric($student))
      $student = $this->iui->getId($student);

    if ($this->checknum($student))
      return(false);

    $sql = 'select * from flash where id not in (select flash.id from flash, flash_assoc where flash.id = flash_assoc.id_flash and flash_assoc.id_student = "'.$student.'");';
  }

  public function hasrelation_withflash($id_student, $id_flash)
  {
	if ($this->checknum($id_student) || $this->checknum($id_flash))
		return(false);
	if ($this->customselect_flashassoc(
	array("id_student" => $id_student, "id_flash" => $id_flash)))
		return(true);
	return(false);
  }
  
  /*
   *  OUTIL_GESTION getter
   */

  public function gettool($tool)
  {
    if ($this->simplecheck($tool))
      return (false);
    if (!is_numeric($tool))
      return ($this->customselect_outilgestion(array("name" => $tool)));
    return ($this->customselect_outilgestion(array("id" => $tool)));
  }

  /*
   *  Preference getter
   */

  public function getpreference_byid($id)
  {
    if($this->checknum($id))
      return(false);
    $tab = array("id" => $id);
    return ($this->customselect_preference($tab));
  }
  
  public function gettools_bystudent($id_group, $student)
  {
	if (!is_numeric($student))
		$student = $this->iui->getId($student);

    if ($this->checknum($student))
		return(false);
	$sql = "SELECT outil_gestion.name
			FROM outil_gestion, droit, group_name
			WHERE outil_gestion.id = droit.id_outil_gestion
			AND group_name.id = droit.id_group
			AND group_name.id IN (
				SELECT group_name.id
				FROM group_name, group_member
				WHERE group_name.id = group_member.id_group
				AND group_member.id_student = ".$student."
			)
			AND droit.id_group_effect = ".$id_group."
			GROUP BY outil_gestion.name
			ORDER BY outil_gestion.name;";
			
	return($this->resultquery($sql));
  }
   
   public function getgroups_bystudent($student)
   {
		if (!is_numeric($student))
			$student = $this->iui->getId($student);

		if ($this->checknum($student))
			return(false);
			
		$sql = "SELECT group_name.* FROM group_name, group_member
				WHERE group_name.id = group_member.id_group
				AND group_member.id_student = ".$student.";";
				
		return($this->resultquery($sql));
   }
   
   public function getassos()
   {
		$sql = "select group_name.* from group_name, group_assoc
				where group_name.id = group_assoc.id_child
				and group_assoc.id_parent in (select id from group_name where name = 'Asso');";
				
		return($this->resultquery($sql));
   }
   
   public function getvitrine_byidgroup($id_group)
   {
		$sql = "select * from group_vitrine
				where id_group = ".$id_group.";";
		$result = $this->resultquery($sql);
		return($result[0]);
   }
   
   public function getoutilvisible_byidgroupvitrine($id_group_vitrine)
   {
		$sql = "select * from outil_visible
			where id_group_vitrine = ".$id_group_vitrine.";";
		return($this->resultquery($sql));
   }
   
   public function getmateriel_byidgroup($id_group)
   {
		$sql = "select * from materiel
				where id_group = ".$id_group.";";
		return($this->resultquery($sql));
   }

   public function getmateriel_byid($id)
   {
		$sql = "select * from materiel
				where id = ".$id.";";
		$result = $this->resultquery($sql);
		if (empty($result))
			return($result);
		return($result[0]);
   }
   
   public function getstatusmatos()
   {
		$sql = "select statut from materiel
				group by statut;";
		return($this->resultquery($sql));
   }
   
   public function removemateriel_byid($id)
   {
		$sql = "delete from materiel where id = ".$id;
		return($this->executequery($sql));
   }

   public function getgroup_byidvitrine($id_group_vitrine)
   {
		$sql = "select group_name.* from group_name, group_vitrine
				where group_name.id = group_vitrine.id_group
				and group_vitrine.id = ".$id_group_vitrine.";";
		$result = $this->resultquery($sql);
		return($result[0]);
   }
   
   public function upmateriel_byid($id_group)
   {
		
   }
   
  /*
   * END GETTERS PART
   */
}
?>