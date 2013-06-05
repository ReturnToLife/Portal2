<?php

namespace Portal\PublicationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Portal\PublicationBundle\Entity\Utils;

class	PromoChoiceType extends AbstractType
{
  public function buildForm(FormBuilder $builder, array $options)
  {
    // iui getPromos()
    $promos = array('2017', '2016', '2015', '2014', '2013', '2012');

    $builder->add('promoChoice', 'choice', array('choices' => Utils::arrayToMap($promos),
						 'multiple' => true,
						 'expanded' => true,
						 'label' => 'Promo'));
    $builder->add('other', 'text', array('label' => 'Autre'));
  }

  public function getName()
  {
    return 'promoChoice';
  }

  public function getPromos()
  {
    return $this->promos;
  }
}
