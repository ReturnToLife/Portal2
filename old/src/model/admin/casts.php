<?php

global $def_class_dir;
include_once($def_class_dir.'CastManager.class.php');

function	model_admin_casts_add($castmanager)
{
  global $lang;
  $arg = array('result' => false,
	       'msg' => '');
  if (!isset($_POST[admin_cast_add]))
    return ;
  if (empty($_POST[parent]) || empty($_POST[name]))
    {
      $arg[msg] = $lang->msg('form_empty');
      return $arg;
    }
  if (!$castmanager->addCast($_POST[parent], $_POST[name]))
    {
      $arg[msg] = $lang->msg('admin_cast_addcast_error');
      return $arg;
    }
  $arg[result] = true;
  $arg[msg] = $lang->msg('admin_cast_addcast_success');
  return ($arg);
}

function	model_admin_casts_del($castmanager)
{
  global $lang;
  $arg = array('result' => false,
	       'msg' => '');
  if (!isset($_POST[admin_cast_del]))
    return ;
  if (empty($_POST[cast]) || !isset($_POST[confirm]))
    {
      $arg[msg] = $lang->msg('form_empty');
      return $arg;
    }
  if (!$castmanager->deleteCast($_POST[cast]))
    {
      $arg[msg] = $lang->msg('admin_cast_delcast_error');
      return $arg;
    }
  $arg[result] = true;
  $arg[msg] = $lang->msg('admin_cast_delcast_success');
  return ($arg);
}

function	model_admin_casts()
{
  $args[cast] = new CastManager;
  $args[casts_add] = model_admin_casts_add($args[cast]);
  $args[casts_del] = model_admin_casts_del($args[cast]);
  return ($args);
}
