<?php

namespace Portal\PublicationBundle\Entity;

class	Utils
{
  public static function arrayToMap($array)
  {
    foreach ($array as $element)
      $map[$element] = $element;
    return $map;
  }
}
