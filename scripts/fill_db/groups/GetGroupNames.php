<?php

include('./conf.php');
include(SIMPLE_HTML_DIR.'simple_html_dom.php');

$contents = @file_get_contents($file, false, null, -1);
if ($contents === false)
  die(__FILE__ . ", line " . __LINE__ . ": Error: couldn't open file " . $file . "\n");
$html = str_get_html($contents);

$cast_names = $html->find('/[@id="intra_display_zone"]/form/input[name=type]');

$categories = array();
foreach ($cast_names as $name)
{
  $members = array();
  foreach ($name->find('../table/tbody/tr/td[1]/') as $member)
    {
      if ($member->plaintext != "")
	$members[] = $member->plaintext;
    }

  /* Map: category -> member list */
  $categories[$name->value] = $members;
}

var_dump($categories);
