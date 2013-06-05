<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/Return')) {
            // WS_accueil
            if (rtrim($pathinfo, '/') === '/Return') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'WS_accueil');
                }
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::indexAction',  '_route' => 'WS_accueil',);
            }

            // WS_articles
            if (0 === strpos($pathinfo, '/Return/articles') && preg_match('#^/Return/articles/(?P<categ>\\d*)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::articlesAction',)), array('_route' => 'WS_articles'));
            }

            // WS_article
            if (0 === strpos($pathinfo, '/Return/article') && preg_match('#^/Return/article/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::articleAction',)), array('_route' => 'WS_article'));
            }

            // WS_publications
            if ($pathinfo === '/Return/publications') {
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::publicationsAction',  '_route' => 'WS_publications',);
            }

            // WS_groupes
            if ($pathinfo === '/Return/groupes') {
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::groupesAction',  '_route' => 'WS_groupes',);
            }

            // WS_assos
            if ($pathinfo === '/Return/assos') {
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::assosAction',  '_route' => 'WS_assos',);
            }

            // WS_asso
            if (0 === strpos($pathinfo, '/Return/asso') && preg_match('#^/Return/asso/(?P<name>[^/]+?)(?:/(?P<tool>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::assoAction',  'tool' => '',)), array('_route' => 'WS_asso'));
            }

            // WS_manager
            if (0 === strpos($pathinfo, '/Return/asso') && preg_match('#^/Return/asso/(?P<name>[^/]+?)/manage/(?P<tool>[^/]+?)(?:/(?P<item>item)(?:/(?P<id>\\d*))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::managerAction',  'item' => '',  'id' => '',)), array('_route' => 'WS_manager'));
            }

            // WS_example
            if ($pathinfo === '/Return/example') {
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::exampleAction',  '_route' => 'WS_example',);
            }

            // WS_search
            if ($pathinfo === '/Return/search') {
                return array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::searchAction',  '_route' => 'WS_search',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
