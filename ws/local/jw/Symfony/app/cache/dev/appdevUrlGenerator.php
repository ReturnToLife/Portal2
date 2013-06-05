<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'WS_accueil' => true,
       'WS_articles' => true,
       'WS_article' => true,
       'WS_publications' => true,
       'WS_groupes' => true,
       'WS_assos' => true,
       'WS_asso' => true,
       'WS_manager' => true,
       'WS_example' => true,
       'WS_search' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getWS_accueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/',  ),));
    }

    private function getWS_articlesRouteInfo()
    {
        return array(array (  0 => 'categ',), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::articlesAction',), array (  'categ' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'categ',  ),  1 =>   array (    0 => 'text',    1 => '/Return/articles',  ),));
    }

    private function getWS_articleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::articleAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/Return/article',  ),));
    }

    private function getWS_publicationsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::publicationsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/publications',  ),));
    }

    private function getWS_groupesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::groupesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/groupes',  ),));
    }

    private function getWS_assosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::assosAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/assos',  ),));
    }

    private function getWS_assoRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'tool',), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::assoAction',  'tool' => '',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tool',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/Return/asso',  ),));
    }

    private function getWS_managerRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'tool',  2 => 'item',  3 => 'id',), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::managerAction',  'item' => '',  'id' => '',), array (  'id' => '\\d*',  'item' => 'item',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'item',    3 => 'item',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tool',  ),  3 =>   array (    0 => 'text',    1 => '/manage',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/Return/asso',  ),));
    }

    private function getWS_exampleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::exampleAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/example',  ),));
    }

    private function getWS_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ReturnEpi\\WSBundle\\Controller\\WSController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Return/search',  ),));
    }
}
