<?php

namespace Portal\PublicationBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;

class	Flashnews
{
  private $id;

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
   * @Assert\Choice(choices = {4, 5})
   */
  protected $status;

  public function getId()
  {
    return $this->id;
  }

  private function setId()
  {
    $this->id = $id;
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

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
