<?php

namespace ReturnEpi\WSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WSController extends Controller
{
	var $mysql_login = 'root';
	var $mysql_pass = '';

	var $mysql_dbname = 'return-to_life';

	var $ionis_login = 'TO_REPLACE';
	var $ionis_unix_password = 'TO_REPLACE';

	var $absolute_path_local_files;

	var $iui;

	var $rm;
	var $session;
	var $request;

	/*public function smthgAction()
    {
		// Récupérer du get ou du post
		$request = $this->get('request');
        // On récupère notre paramètre GET tag.
        $tag = $request->query->get('tag');
		// On récupère notre paramètre POST tag.
		$tag = $request->request->get('tag');


		 // Récupération d'un service (ex:mailer)
        $mailer = $this->get('mailer');
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello !')
            ->setFrom('david.lassagne@gmail.com')
            ->setTo('david.lassagne@gmail.com')
            ->setBody('Coucou, voici un email !');
        $mailer->send($message);

		
         // Setter une variable de session (ici user_id)
        $session = $this->get('session');
        $user_id = $session->get('user_id');
        $session->set('user_id', 91);

    }*/
	
	public function indexAction()
    {
		echo("<span></span>");
		//Don't use ByLogin controllers here

		/*include_once("scriptcreatedb.php");
		createreturndb("return-to_life");*/
		$this->checkinfos();

		$flashs = $this->getflash(5);
		$flashscores = $this->getflashscore($flashs);
		$events = $this->getevent(2);

		while (count($events) < 2)
			$events[] = array("image" => '',
			"titre" => "Rien de prévu", "contenu" => "Event à venir !",
			"parution" => 0);

		for($i=0; $i<count($events); $i++)
			$events[$i]["contenu"] = substr($events[$i]["contenu"], 0, 100)." ...";

		return $this->render('ReturnEpiWSBundle:WS:index.html.twig',
		array("flashs" => $flashs,
		"flashscores" => $flashscores,
		"events" => $events));
    }

	public function articlesAction($categ)
    {
		$this->checkinfos();
		$stripexcep = "<p><br><li><ul>";
		
		$articles = $this->getarticles($categ);
		for($i=0; $i<count($articles); $i++)
			if (strlen(strip_tags($articles[$i]["contenu"])) > 1043)
				$articles[$i]["contenu"] = substr(strip_tags($articles[$i]["contenu"], $stripexcep), 0, 1043)." ...";
			else
				$articles[$i]["contenu"] = strip_tags($articles[$i]["contenu"], $stripexcep);
		return $this->render('ReturnEpiWSBundle:WS:articles.html.twig',
		array("articles" => $articles, "flag" => true));
	}

	public function articleAction($id)
    {
		if (empty($id))
			return $this->articlesAction("");
		$this->checkinfos();
		$article = $this->rm->getarticle_byid($id);
		$contribs1 = $this->rm->resultquery("
			SELECT contrib_type.name, ionisusersinformations.login
			FROM contrib_type, contrib_article, ionisusersinformations
			WHERE contrib_type.id = contrib_article.id_contrib_type
			AND ionisusersinformations.id = contrib_article.id_student
			AND id_article = ".$id."
			ORDER BY contrib_type.id, ionisusersinformations.login");
		$contribs2 = array();
		$save = "";
		foreach ($contribs1 as $item)
			$contribs2[$item["name"]][] = $item["login"];
		return($this->render('ReturnEpiWSBundle:WS:article.html.twig',
		array("article" => $article[0],
		"contribs" => $contribs2)));
	}

	public function publicationsAction()
    {
		$this->checkinfos();
		
		return($this->render('ReturnEpiWSBundle:WS:publications.html.twig',
		array()));
	}

	public function groupesAction()
    {
		$this->checkinfos();
		
		return($this->render('ReturnEpiWSBundle:WS:groupes.html.twig',
		array()));
	}
	
	public function assosAction()
    {
		$this->checkinfos();
		
		return($this->render('ReturnEpiWSBundle:WS:assos.html.twig',
		array()));
	}

	public function assoAction($name, $tool)
    {
		$this->checkinfos();
		$check = $this->getcheck($name, $tool, false);
		
		$events = $this->geteventbylink(2, $check[0]["id"]);
		$events = $this->checkevents($events);
		
		$asso = $this->getvitrine_byasso($check[0]["id"]);
		$asso = $this->checkasso($asso, $check, $name);
		
		$visible = $this->getvisibletools_byid($asso[0]["id"]);
		
		$info = array();
		switch ($tool)
		{
			case "groupe":
				break;
			case "membres":
				break;
			case "tresorerie":
				break;
			case "materiel":
				$materiel = $this->rm->getmateriel_byidgroup($check[0]["id"]);
				$info["materiel"] = $materiel;
				break;
			case "vitrine":
				break;
			case "epices":
				break;
			case "todolist":
				break;
		}
		
		return($this->render('ReturnEpiWSBundle:WS:asso.html.twig',
		array("asso" => $asso[0], "tool" => ucfirst($tool),
		"events" => $events, "name" => $name, "visible" => $visible,
		"infos" => $info)));
	}
	
	public function getflash($nb)
	{
		$allflash = $this->rm->customselectall_get("flash", "id");
		if (count($allflash) <= $nb)
			return ($this->rm->customselectall_get("flash", "*"));
		$ran = array();
		while (count($ran) < $nb)
		{
			$rnd = rand(0, count($allflash) - 1);
			if (!in_array($allflash[$rnd]["id"], $ran))
				$ran[] = $allflash[$rnd]["id"];
		}
		$ret = array();
		foreach ($ran as $item)
			{
				$result = $this->rm->getflash_byid($item);
				$ret[] = $result[0];
			}
		return ($ret);
	}

	public function getflashscore($flash)
	{
		$ret = array();
		foreach ($flash as $item)
		{
			$result = $this->rm->resultquery("
			SELECT sum(approbation) as score 
			FROM flash_assoc 
			WHERE id_flash = ".$item["id"]);
			if (is_null($result[0]["score"]))
				$ret[] = 0;
			else
				$ret[] = $result[0]["score"];
		}
		return ($ret);
	}

	public function getevent($nb)
	{
		$result = $this->rm->resultquery("
			SELECT * 
			FROM article 
			WHERE type = 1
			AND parution > '".date("Y-m-d H:i:s")."'
			ORDER BY parution DESC
			LIMIT 0, ".$nb.";");
		return($result);
	}

	public function geteventbylink($nb, $group_name)
	{
		$result2 = array();
		$resultevent = $this->rm->resultquery("
			SELECT * 
			FROM group_name 
			WHERE name = '".$group_name."';");
		if (!empty($resultevent))
			$result2 = $this->rm->resultquery("
				SELECT * 
				FROM article 
				WHERE type = 1
				AND parution > '".date("Y-m-d H:i:s")."'
				AND link = ".$resultevent[0]["id"]."
				ORDER BY parution DESC
				LIMIT 0, ".$nb.";");
		return($result2);
	}

	public function getarticles($categ)
	{
		$result = $this->rm->resultquery("
		SELECT * FROM article
		WHERE type = 2".
		(!empty($categ) ? " AND categ = ".$categ." ":" ").
		"ORDER BY parution DESC");
		return($result);
	}

	public function exampleAction()
	{
		$this->checkinfos();
		return $this->render('ReturnEpiWSBundle:WS:example.html.twig');
	}
	
	public function searchAction()
	{
		$this->checkinfos();
		if (is_null($this->request->request->get("searchval")) ||
			strlen($this->request->request->get("searchval")) < 3)
			return ($this->indexAction());
		$results = $this->getsearch($this->request->request->get("searchval"));
		
		return $this->render('ReturnEpiWSBundle:WS:search.html.twig', 
		array("results" => $results,
		"searchval" => $this->request->request->get("searchval"),
		"flashscores" => $this->getflashscore($results["flashs"])));
	}

	public function checkinfos()
	{
		if (empty($this->absolute_path_local_files))
			$this->absolute_path_local_files = dirname(__FILE__)."/local";
		if (empty($this->iui))
			$this->iui = new IonisInfo($this->mysql_login, $this->mysql_pass, $this->mysql_dbname,
			$this->ionis_login, $this->ionis_unix_password, $this->absolute_path_local_files);
		if (empty($this->rm))
			$this->rm = new ReturnManager($this->iui, "localhost", "root", "", "return-to_life");

		$this->session = $this->get('session');
		$this->request = $this->get('request');
		
        if (!is_null($this->request->request->get("sendlogin")))
		{
			$login = $this->request->request->get("login");
			$mdp = $this->request->request->get("mdp");
			if ($this->iui->checkPass($login, $mdp))
				$this->session->set('student', $this->iui->getId($login));
		}

		if (!is_null($this->request->request->get("senddc")))
			$this->session->set('student', null);

		if (!is_null($this->request->request->get("flashid")) && 
			!is_null($this->session->get('student')))
		{
			if ($this->rm->hasrelation_withflash($this->session->get('student'),
				$this->request->request->get("flashid")))
			{
				$this->rm->executequery("update flash_assoc set approbation = ".$this->request->request->get("difflash")."
				where id_student = ".$this->session->get('student')." and id_flash = ".$this->request->request->get("flashid"));
			}
			else
			{
				$this->rm->addflashassoc_byid($this->session->get('student'),
				$this->request->request->get('flashid'),
				$this->request->request->get('difflash'));
			}
		}
	}
	
	public function getsearch($val)
	{
		$result = array();
		$stripexcep = "<p><br><li><ul>";
		
		$sql = "SELECT * from article
				WHERE (titre LIKE '%".$val."%'
				OR contenu LIKE '%".$val."%')
				AND type = 2;";
		$data = $this->rm->resultquery($sql);
		for($i=0; $i<count($data); $i++)
			if (strlen(strip_tags($data[$i]["contenu"])) > 1043)
				$data[$i]["contenu"] = substr(strip_tags($data[$i]["contenu"], $stripexcep), 0, 1043)." ...";
			else
				$data[$i]["contenu"] = strip_tags($data[$i]["contenu"], $stripexcep);
		$result["articles"] = $data;
		
		$sql = "SELECT * from article
				WHERE (titre LIKE '%".$val."%'
				OR contenu LIKE '%".$val."%')
				AND type = 1;";
		$data = $this->rm->resultquery($sql);
		for($i=0; $i<count($data); $i++)
			if (strlen(strip_tags($data[$i]["contenu"])) > 1043)
				$data[$i]["contenu"] = substr(strip_tags($data[$i]["contenu"], $stripexcep), 0, 1043)." ...";
			else
				$data[$i]["contenu"] = strip_tags($data[$i]["contenu"], $stripexcep);
		$result["events"] = $data;

		$sql = "SELECT * from flash WHERE contenu LIKE '%".$val."%';";
		$result["flashs"] = $this->rm->resultquery($sql);
		
		return ($result);
	}
	
	public function getvitrine_byasso($group_id)
	{
		$sql = "select * from group_vitrine
				where id_group = ".$group_id.";";
		return ($this->rm->resultquery($sql));
	}
	
	public function getvisibletools_byid($groupvitrine_id)
	{
		$sql = "select outil_gestion.* from outil_gestion, outil_visible
				where outil_gestion.id = outil_visible.id_outil_gestion
				and outil_visible.id_group_vitrine = ".$groupvitrine_id."
				and outil_visible.visible = 1;";
		return($this->rm->resultquery($sql));
	}
	
	public function checkgroupname($val)
	{
		$check = $this->rm->resultquery("SELECT * from group_assoc where id_parent = 6
										and id_child = ".$val.";");
		if (empty($check))
			return (false);
		return (true);
	}
	
	public function checktool($name, $tool, $check)
	{
		$check2 = $this->checkexistenznconnected($tool);
		
		$vitrine = $this->rm->resultquery("select * from group_vitrine where id_group = ".$check[0]["id"].";");
		$check3 = $this->rm->resultquery("select * from outil_visible
		where id_outil_gestion = ".$check2[0]["id"]." 
		and id_group_vitrine = ".$vitrine[0]["id"].";");
		if (empty($check3) || $check3[0]["visible"] == 0)
			throw $this->createNotFoundException(
			"La visibilite sur l'outil '".$tool."' a ete desactivee par l'administrateur de l'association ".$name);
	}
	
	public function managerAction($name, $tool, $item, $id)
	{
		$this->checkinfos();
		
		$check = $this->getcheck($name, $tool, true);
		
		$asso = $this->getvitrine_byasso($check[0]["id"]);
		$asso = $this->checkasso($asso, $check, $name);
		$this->checkformsmanagers($asso[0]["id"], $this->request->request->get("saveiditem"));
		
		$visible = $this->getvisibletools_byid($asso[0]["id"]);
		$check2 = $this->rm->gettools_bystudent($check[0]["id"], $this->session->get('student'));
		
		$info = array();
		if ($id >= 0 && is_numeric($id))
			switch ($tool)
			{
				case "groupe":
					break;
				case "membres":
					break;
				case "tresorerie":
					break;
				case "materiel":
					$materiel = $this->rm->getmateriel_byid($id);
					if (empty($materiel) && $id != 0)
						throw $this->createNotFoundException(
						"L'item d'id ".$id." pour l'outil ".$tool." n'existe pas !");
					$info["materiel"] = $materiel;
					$info["statut"] = $this->rm->getstatusmatos();
					break;
				case "vitrine":
					
					break;
				case "epices":
					break;
				case "todolist":
					break;
			}
		else
			switch ($tool)
			{
				case "groupe":
					break;
				case "membres":
					break;
				case "tresorerie":
					break;
				case "materiel":
					var_dump($this->request->request);
					$materiel = $this->rm->getmateriel_byidgroup($check[0]["id"]);
					$info["materiel"] = $materiel;
					break;
				case "vitrine":
					$vitrine = $this->rm->getvitrine_byidgroup($check[0]["id"]);
					$info["visible"] = $this->rm->getoutilvisible_byidgroupvitrine($vitrine["id"]);
					foreach ($info["visible"] as $key => $item)
					{
						$datatool = $this->rm->gettool($item["id_outil_gestion"]);
						$info["visible"][$key]["name"] = $datatool[0]["name"];
					}
					break;
				case "epices":
					break;
				case "todolist":
					break;
			}
		return($this->render('ReturnEpiWSBundle:WS:manager.html.twig',
		array("name" => $name, "tool" => ucfirst($tool), "visible" => $visible,
		"asso" => $asso[0], "tools" => $check2, "infos" => $info,
		"item" => $item, "id" => $id)));
	}
	
	public function checkasso($asso, $check, $name)
	{
		if (empty($asso))
		{
			$this->rm->addvitrine_bygroupid($check[0]["id"], $name);
			copy("images/defaultbanner.jpg", "images/".$name."banner.jpg");
			$asso = $this->getvitrine_byasso($check[0]["id"]);
			$tools = $this->rm->customselectall_get("outil_gestion", "*");
			foreach ($tools as $item)
				$this->rm->addoutilvisible($asso[0]["id"], $item["id"], 0);
			$this->rm->setoutilvisible($asso[0]["id"], 2, 1);
		}
		
		return($asso);
	}
	
	public function checkevents($events)
	{
		while (count($events) < 2)
			$events[] = array("image" => '',
			"titre" => "Rien de prévu", "contenu" => "Event à venir !",
			"parution" => 0);
		for($i=0; $i<count($events); $i++)
			$events[$i]["contenu"] = substr($events[$i]["contenu"], 0, 100)." ...";
		return ($events);
	}
	
	public function getcheck($name, $tool, $manager)
	{
		$ret = $this->rm->resultquery("SELECT * FROM group_name WHERE name = '".$name."';");
		if (empty($ret) || !$this->checkgroupname($ret[0]["id"]))
			throw $this->createNotFoundException("L'association ".$name." n'existe pas !");
		if ($tool != "")
			if ($manager)
				$this->checktoolmanager($name, $tool, $ret);
			else
				$this->checktool($name, $tool, $ret);
		return($ret);
	}
	
	public function checktoolmanager($name, $tool, $check)
	{
		$this->checkexistenznconnected($tool);
		$check2 = $this->rm->gettools_bystudent($check[0]["id"], $this->session->get('student'));
		$flag = true;
		foreach ($check2 as $item)
			if (in_array($tool, $item))
				$flag = false;
		if ($flag)
			throw $this->createNotFoundException(
			"Vous n'etes pas autorise a utiliser l'outil ".$tool." pour l'asso ".$name." !");
		return ($check2);
	}
	
	public function checkexistenznconnected($tool)
	{
		$check2 = $this->rm->resultquery("SELECT * FROM outil_gestion WHERE name = '".$tool."';");
		if (empty($check2) || $check2[0]["id"] == 1)
			throw $this->createNotFoundException("L'outil '".$tool."' n'existe pas !");
		if(is_null($this->session->get('student')))
			throw $this->createNotFoundException(
			"Vous n'etes pas autorise a consulter cette page sans etre connecte !");
		return($check2);
	}

	public function checkformsmanagers($id_group_vitrine, $id_item)
	{
		// Vitrine manager modif
		if(!is_null($this->request->request->get("sendmodifvitrine")))
		{
			$data = $this->rm->resultquery("select max(id) as max from outil_gestion");
			for ($i = 0; $i <= $data[0]["max"]; $i++)
				if (!is_null($this->request->request->get("vitrine".$i)))
					$this->rm->setoutilvisible($id_group_vitrine,
					$i, $this->request->request->get("vitrine".$i));
		}
		
		// Matériel manager add
		if(!is_null($this->request->request->get("sendaddmatos")))
		{
			$groupname = $this->rm->getgroup_byidvitrine($id_group_vitrine);
			$tmp = $this->request->request;
			if ($tmp->get("nommatos") != "" && is_numeric($tmp->get("nbrmatos")))
				$this->rm->custominsert_materiel(array("", $tmp->get("nommatos"),
				$tmp->get("descmatos"), $tmp->get("statutmatos"), $tmp->get("nbrmatos"),
				$tmp->get("notematos"), $groupname["id"]));
		}
		
		// Matériel manager modif
		if(!is_null($this->request->request->get("sendmodmatos")))
		{
			$groupname = $this->rm->getgroup_byidvitrine($id_group_vitrine);
			$tmp = $this->request->request;
			if ($tmp->get("nommatos") != "" && is_numeric($tmp->get("nbrmatos")))
				$this->rm->customupdate_materiel(array("nom" => $tmp->get("nommatos"),
				"description" => $tmp->get("descmatos"), "statut" => $tmp->get("statutmatos"), 
				"nombre" => $tmp->get("nbrmatos"), "note" => $tmp->get("notematos")),
				array("id" => $id_item));
			var_dump("hahahaha !");
		}
		
		// Matériel manager delete
		if(!is_null($this->request->request->get("iddelmatos")))
		{
			$this->rm->removemateriel_byid(
			$this->request->request->get("iddelmatos"));
		}
		
		// Trésorerie manager add
		if(!is_null($this->request->request->get("sendaddtresor")))
		{
			echo("trying to add tresor \n");
		}
		
		// Trésorerie manager modif
		if(!is_null($this->request->request->get("sendmodtresor")))
		{
			echo("trying to modif tresor \n");
		}
		
		// Trésorerie manager delete
		if(!is_null($this->request->request->get("iddeltresor")))
		{
			echo("trying to delete tresor \n");
		}
	}
}