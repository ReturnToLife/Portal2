<?php

namespace Portal\PublicationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Portal\PublicationBundle\Entity\Utils;

class	ArticleType extends AbstractType
{
  public function buildForm(FormBuilder $builder, array $options)
  {
    $categories = array('General', 'Pedago', 'Labo', 'Asso');
    // A rajouter dans iui : getPromos, getSchools, getCities
    $schools = array('Epitech', 'EPITA', 'e-artsup', 'Sup\'Internet',
		     'Sup\'Biotech', 'IPSA', 'Ionis STM', 'ETNA');
    $cities = array('Paris', 'Lyon', 'Marseille', 'Toulouse', 'Lille',
		    'Rennes', 'Strasbourg', 'Nantes', 'Nancy', 'Bordeaux',
		    'Nice', 'Montpellier');

    $builder->add('title', null, array('label' => 'Titre'));
    $builder->add('content', new CKEditorType());

    $builder->add('category', 'choice', array('choices' => Utils::arrayToMap($categories),
					      'label' => 'Categorie'));
    $builder->add('school', 'choice', array('choices' => Utils::arrayToMap($schools),
					    'label' => 'Ecole'));
    $builder->add('promoChoice', new PromoChoiceType());
    $builder->add('city', 'choice', array('choices' => Utils::arrayToMap($cities),
					  'label' => 'Ville'));
  }

  public function getName()
  {
    return 'article';
  }

  public function getDefaultOptions(array $options)
  {
    return array('data_class' => 'Portal\PublicationBundle\Entity\Article');
  }
}