<?php

namespace Portal\PublicationBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContext;

/**
 * @Assert\Callback(methods = {"isOtherValid"})
 */
class	PromoChoice
{
  public $promoChoice;

  /**
   * @Assert\MaxLength(limit = 10)
   */
  public $other;

  public function getPromoChoice()
  {
    return $this->promoChoice;
  }

  public function setPromoChoice($promoChoice)
  {
    $this->promoChoice = $promoChoice;
  }

  public function getOther()
  {
    return $this->other;
  }

  public function setOther($other)
  {
    $this->other = $other;
  }

  public function isOtherValid(ExecutionContext $context)
  {
    if (!($this->promoChoice) && !($this->other))
      {
	$propertyPath = $context->getPropertyPath().'.other';
	$context->setPropertyPath($propertyPath);
	$context->addViolation("Vous devez entrer une promotion si vous n'en choisissez pas une dans la liste !", array(), null);
      }
  }
}