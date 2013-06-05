<?php

namespace Portal\PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

use Portal\PublicationBundle\Entity\Flashnews;
use Portal\PublicationBundle\Form\Type\FlashnewsType;
use Portal\PublicationBundle\Entity\Article;
use Portal\PublicationBundle\Form\Type\ArticleType;
use Portal\PublicationBundle\Entity\PromoChoice;

class	PublicationController extends Controller
{
  public function indexAction(Request $request)
  {
    $menuLinks = array('article' => 'pub_article', 'flashnews' => 'pub_flashnews', 'event' => 'pub_event');
    return $this->render('PortalPublicationBundle:Publication:index.html.twig', array('links' => $menuLinks));
  }

  public function articleAction(Request $request)
  {
    $article = new Article();
    $article->setStatus(4); // en correction
    $article->setReleaseDate(new \Datetime('today'));
    $article->setType(2); // 2 == article normal (1 ==  event)
    $promoChoice = new PromoChoice();
    $article->setPromoChoice($promoChoice);
    $article->getPromoChoice()->setPromoChoice(array('2017'));

    $form = $this->createForm(new ArticleType(), $article);

    if ($request->getMethod() == 'POST')
      {
	$form->bindRequest($request);

	if ($form->isValid())
	  {
	    if ($article->getPromoChoice()->other)
	      $article->getPromoChoice()->promoChoice[] = $article->getPromoChoice()->other;
	    return $this->render('PortalPublicationBundle:Test:article.html.twig', array('article' => $article));
	    /* return $this->redirect($this->generateUrl('pub_success', array('item' => 'article'))); */
	  }
      }

    return $this->render('PortalPublicationBundle:Publication:article.html.twig', array('form' => $form->createView()));
  }

  public function flashnewsAction(Request $request)
  {
    $flashnews = new Flashnews();
    $flashnews->setStatus(4); // en correction
    $flashnews->setReleaseDate(new \Datetime('today'));

    $form = $this->createForm(new FlashnewsType(), $flashnews);

    if ($request->getMethod() == 'POST')
      {
	$form->bindRequest($request);

	if ($form->isValid())
	  {
	    /* return $this->render('PortalPublicationBundle:Test:flashnews.html.twig', array('flashnews' => $flashnews)); */
	    return $this->redirect($this->generateUrl('pub_success', array('item' => 'flashnews')));
	  }
      }

    return $this->render('PortalPublicationBundle:Publication:flashnews.html.twig', array('form' => $form->createView()));
  }

  public function eventAction(Request $request)
  {
    return $this->render('PortalPublicationBundle:Publication:event.html.twig');
  }

  public function successAction($item)
  {
    return $this->render('PortalPublicationBundle:Publication:success.html.twig', array('item' => $item));
  }
}