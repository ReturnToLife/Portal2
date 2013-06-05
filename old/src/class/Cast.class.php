<?php

class		Cast
{
  private	$name; // string
  private	$id; // int
  private	$children; // array Cast
  private	$valid; // bool
  private	$depth; // int
  private	$members = array('test1', 'test2', 'test3'); // array string
  public	$par; // Cast

  public function	__construct($info, $depth = '0', $par = '')
  // name (string) or id (int)
  // or array ('name' => string, 'id' => int
  {
    global		$bdd;

    if (!is_array($info))
      {
	if (is_numeric($info))
	  $req = 'SELECT * FROM cast_name WHERE id=?';
	else
	  $req = 'SELECT * FROM cast_name WHERE name=?';
	$req = $bdd->prepare($req);
	$req->execute(array($info));
	if (!($req->rowCount()))
	  {
	    $this->valid = false;
	    return ;
	  }
	$info = $req->fetch();
      }
    $this->name = $info['name'];
    $this->id = $info['id'];
    $this->depth = $depth;
    $this->valid = true;
    $this->par = $par;
    $this->generateChildren();
  }

  private function	generateChildren()
  {
    global		$bdd;

    if (!$this->isValid())
      return (array());
    // todo: only one request?
    $req = $bdd->prepare('SELECT * FROM cast_assoc WHERE id_parent=?');
    $req->execute(array($this->id));
    while ($child = $req->fetch())
      {
	$this->children[] = new Cast($child['id_child'], ($this->depth + 1), $this);
      }
  }

  public function	isValid()
  {
    return ($this->valid);
  }

  public function	getName()
  {
    return ($this->isValid() ? $this->name : '');
  }

  public function	getId()
  {
    return ($this->isValid() ? $this->id : 0);
  }

  public function	getDepth()
  {
    return ($this->isValid() ? $this->depth : 0);
  }

  public function	getChildren()
  {
    return ($this->isValid() ? $this->children : array());
  }

  public function	addChild($name) // string
  {
    global		$bdd;

    if (!$this->isValid())
      return (false);
    // todo: check name validity, return false
    $req = $bdd->prepare('INSERT INTO cast_name(name) VALUES(?)');
    if (!($req->execute(array($name))))
      return (false);
    $req = $bdd->prepare('INSERT INTO cast_assoc(id_parent, id_child) VALUES(?, ?)');
    if (!($req->execute(array($this->id, $bdd->lastInsertId()))))
      return (false);
    $this->children[] = new Cast($name, ($this->depth + 1), $this);
    return (true);
  }

  public function	deleteChild($child)
  {
    global		$bdd;
    if (!$this->isValid())
      return ;
    $req = $bdd->prepare('DELETE FROM cast_assoc WHERE id_parent=? AND id_child=?');
    $req->execute(array($this->id, $child->getId()));
    // create a new array of children without this one
    $newChildren = array();
    foreach ($this->children as $mychild)
      if ($mychild->getId() != $child->getId())
	$newChildren[] = $mychild;
    $this->children = $newChildren;
  }

  public function	delete()
  {
    global		$bdd;

    if (!$this->isValid())
      return ;
    if (!empty($this->children))
      foreach ($this->children as $child)
	$child->delete();
    $req = $bdd->prepare('DELETE FROM cast_assoc WHERE id_parent=?');
    $req->execute(array($this->id));
    $req = $bdd->prepare('DELETE FROM cast_name WHERE id=?');
    $req->execute(array($this->id));
    $this->par->deleteChild($this);
    $this->valid = false;
  }

  public function	addMember($username) //string
  {
    global		$bdd, $users;

    if (!$this->isValid() || !$users->isLogin($username))
      return (false);
    $req = $bdd->prepare('INSERT INTO group_members(id_cast, login) VALUES(?, ?)');
    if (!($req->execute(array($this->id, $username))))
      return (false);
    $this->members[] = $username;
    return (true);    
  }

  public function	delMember($username) //string
  {
    global		$bdd;

    if (!$this->isValid())
      return ;
    $req = $bdd->prepare('DELETE FROM group_members WHERE id_cast = ? AND login = ?');
    if (!($req->execute(array($this->id, $username))))
      return ;
    $newMembers = array();
    foreach ($this->members as $mymember)
      if ($mymember != $username)
	$newMembers[] = $mymember;
    $this->members = $newMembers;
  }

  public function	getMembers()
  {
    return ($this->isValid() ? $this->members : array());
  }
}
