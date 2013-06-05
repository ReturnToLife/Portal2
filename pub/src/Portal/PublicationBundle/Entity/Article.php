<?php

namespace Portal\PublicationBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class	Article
{
  private $id;

  /**
   * @Assert\NotBlank()
   * @Assert\MaxLength(limit = 200, message = "Votre titre doit comporter moins de 200 caracteres.")
   */
  protected $title;

  protected $category;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("\Datetime")
   */
  protected $releaseDate;

  /**
   * @Assert\NotBlank()
   */
  protected $content;

  /**
   * @Assert\Choice(choices = {1, 2})
   */
  protected $type;

  /**
   * @Assert\Choice(choices = {4, 5})
   */
  protected $status;

  /**
   * @Assert\NotBlank()
   */
  protected $school;

  /**
   * @Assert\Type(type = "Portal\PublicationBundle\Entity\promoChoice")
   */
  protected $promoChoice;

  protected $city;

  public function getId()
  {
    return $this->id;
  }

  private function setId()
  {
    $this->id = $id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getReleaseDate()
  {
    return $this->releaseDate;
  }

  public function setReleaseDate(\DateTime $releaseDate = null)
  {
    $this->releaseDate = $releaseDate;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getSchool()
  {
    return $this->school;
  }

  public function setSchool($school)
  {
    $this->school = $school;
  }

  public function getPromoChoice()
  {
    return $this->promoChoice;
  }

  public function setPromoChoice(promoChoice $promoChoice = null)
  {
    $this->promoChoice = $promoChoice;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setCity($city)
  {
    $this->city = $city;
  }
}