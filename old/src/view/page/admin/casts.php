<?php

function	view_admin_casts_menu()
{
  global	$lang;
  $buttons = array($lang->msg('view') => \Page\getUrl(array('cast' => 'view')),
		   $lang->msg('add') => \Page\getUrl(array('cast' => 'add')),
		   $lang->msg('del') => \Page\getUrl(array('cast' => 'del')));
  echo '<div class="submenu">';
  foreach ($buttons as $name => $url)
    echo '<a href="',$url,'"><span class="btn button">',$name,'</span></a>';
  echo '</div>';
}

function	view_admin_casts_view($info)
{
  $casts = $info[cast]->getArrayFromTree();
  foreach ($casts as $id => $cast)
    {
      $members = $info[cast]->getCastMembers($id);
      echo '<button class="cent" onclick="show(\'cast_', $id,
	'\'); return(false);">', $cast,'</button><br />';
      echo '<div class="dview" id="cast_', $id,'">';
      if ($members)
	print_members($members);
      echo '</div>';
    }
}

function	print_members($members)
{
  foreach ($members as $mymember)
    echo $mymember, '<br />';
}

function	view_admin_casts_add($info)
{
  global	$lang;
  \View\view('form_result', $info[casts_add]);
  \View\view('form', array(array('type' => 'select',
				 'label' => $lang->msg('admin_cast_addsublabel'),
				 'value' => $info[cast]->getArrayFromTree(),
				 'name' => 'parent'),
			   array('type' => 'text',
				 'label' => $lang->msg('name'),
				 'name' => 'name',
				 'value' => ''),
			   array('type' => 'submit',
				 'value' => $lang->msg('add'),
				 'name' => 'admin_cast_add')));
}

function	view_admin_casts_del($info)
{
  global	$lang;
  \View\view('form_result', $info[casts_del]);
  \View\view('form', array(array('type' => 'select',
				 'label' => $lang->msg('admin_cast_delsublabel'),
				 'value' => $info[cast]->getArrayFromTree(),
				 'name' => 'cast'),
			   array('type' => 'single_check',
				 'label' => $lang->msg('confirm'),
				 'value' => true,
				 'name' => 'confirm'),
			   array('type' => 'submit',
				 'value' => $lang->msg('del'),
				 'name' => 'admin_cast_del')));
}

function	view_admin_casts_error($info)
{
  \View\view('error', 404);
}

function	view_admin_casts($info)
{
  view_admin_casts_menu();
  if (!isset($_GET['cast']))
    $_GET['cast'] = 'view';
  $fun = 'view_admin_casts_'.$_GET['cast'];
  if (!function_exists($fun))
    $fun = 'view_admin_casts_error';
  $fun($info);
}
