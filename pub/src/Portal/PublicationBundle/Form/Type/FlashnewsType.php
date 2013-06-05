<?php

namespace Portal\PublicationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class	FlashnewsType extends AbstractType
{
  public function buildForm(FormBuilder $builder, array $options)
  {
    $builder->add('content', new CKEditorType(), array('label' => 'Flashnews',
						       'max_length' => 140));
  }

  public function getName()
  {
    return 'flashnews';
  }

  public function getDefaultOptions(array $options)
  {
    return array('data_class' => 'Portal\PublicationBundle\Entity\Flashnews');
  }
}