<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/corresponsalia')) {
            // corresponsalia_tasacambio
            if ($pathinfo === '/corresponsalia/tasacambio') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::tasacambioAction',  '_route' => 'corresponsalia_tasacambio',);
            }

            // corresponsalia_inicio
            if ($pathinfo === '/corresponsalia/inicio') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'corresponsalia_inicio',);
            }

            if (0 === strpos($pathinfo, '/corresponsalia/rendirgasto')) {
                // corresponsalia_rendirgasto
                if (preg_match('#^/corresponsalia/rendirgasto/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_rendirgasto')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::rendirgastoAction',));
                }

                // corresponsalia_rendirgastofunhon
                if (0 === strpos($pathinfo, '/corresponsalia/rendirgastofunhon') && preg_match('#^/corresponsalia/rendirgastofunhon/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_rendirgastofunhon')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::rendirgastofunhonAction',));
                }

            }

            // corresponsalia_guardarendicion
            if (0 === strpos($pathinfo, '/corresponsalia/guardarendicion') && preg_match('#^/corresponsalia/guardarendicion/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_guardarendicion')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::guardarendicionAction',));
            }

            // corresponsalia_editarendicion
            if (0 === strpos($pathinfo, '/corresponsalia/editarendicion') && preg_match('#^/corresponsalia/editarendicion/(?P<idrendicion>[^/]++)/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_editarendicion')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::editarendicionAction',));
            }

            // tipocorresponsalia_actualizarendicion
            if (0 === strpos($pathinfo, '/corresponsalia/actualizarendicion') && preg_match('#^/corresponsalia/actualizarendicion/(?P<idrendicion>[^/]++)/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipocorresponsalia_actualizarendicion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocorresponsalia_actualizarendicion')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::actualizarendicionAction',));
            }
            not_tipocorresponsalia_actualizarendicion:

            // corresponsalia_borrarrendicion
            if (0 === strpos($pathinfo, '/corresponsalia/borrarrendicion') && preg_match('#^/corresponsalia/borrarrendicion/(?P<idrendicion>[^/]++)/(?P<idtipogasto>[^/]++)/(?P<anio>[^/]++)/(?P<mes>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_corresponsalia_borrarrendicion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_borrarrendicion')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::borrarrendicionAction',));
            }
            not_corresponsalia_borrarrendicion:

            if (0 === strpos($pathinfo, '/corresponsalia/ajax')) {
                // corresponsalia_ajax_gasfun
                if (0 === strpos($pathinfo, '/corresponsalia/ajax/gasfun') && preg_match('#^/corresponsalia/ajax/gasfun/(?P<datos>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_ajax_gasfun')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\AjaxController::gasfunAction',));
                }

                // corresponsalia_ajax_formdescripciongasto
                if (0 === strpos($pathinfo, '/corresponsalia/ajax/formdescripciongasto') && preg_match('#^/corresponsalia/ajax/formdescripciongasto/(?P<idtipo>[^/]++)/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_ajax_formdescripciongasto')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\AjaxController::formdescripciongastoAction',));
                }

            }

            // tipocorresponsalia
            if ($pathinfo === '/corresponsalia/tipocorresponsalia/lista') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::indexAction',  '_route' => 'tipocorresponsalia',);
            }

            // tipocorresponsalia_show
            if (preg_match('#^/corresponsalia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocorresponsalia_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::showAction',));
            }

            // tipocorresponsalia_new
            if ($pathinfo === '/corresponsalia/new') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::newAction',  '_route' => 'tipocorresponsalia_new',);
            }

            // tipocorresponsalia_create
            if ($pathinfo === '/corresponsalia/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipocorresponsalia_create;
                }

                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::createAction',  '_route' => 'tipocorresponsalia_create',);
            }
            not_tipocorresponsalia_create:

            // tipocorresponsalia_edit
            if (preg_match('#^/corresponsalia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocorresponsalia_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::editAction',));
            }

            // tipocorresponsalia_update
            if (preg_match('#^/corresponsalia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipocorresponsalia_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocorresponsalia_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::updateAction',));
            }
            not_tipocorresponsalia_update:

            // tipocorresponsalia_delete
            if (preg_match('#^/corresponsalia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipocorresponsalia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocorresponsalia_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipocorresponsaliaController::deleteAction',));
            }
            not_tipocorresponsalia_delete:

            if (0 === strpos($pathinfo, '/corresponsalia/tipomoneda')) {
                // tipomoneda
                if ($pathinfo === '/corresponsalia/tipomoneda') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::indexAction',  '_route' => 'tipomoneda',);
                }

                // tipomoneda_show
                if (preg_match('#^/corresponsalia/tipomoneda/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomoneda_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::showAction',));
                }

                // tipomoneda_new
                if ($pathinfo === '/corresponsalia/tipomoneda/new') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::newAction',  '_route' => 'tipomoneda_new',);
                }

                // tipomoneda_create
                if ($pathinfo === '/corresponsalia/tipomoneda/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipomoneda_create;
                    }

                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::createAction',  '_route' => 'tipomoneda_create',);
                }
                not_tipomoneda_create:

                // tipomoneda_edit
                if (preg_match('#^/corresponsalia/tipomoneda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomoneda_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::editAction',));
                }

                // tipomoneda_update
                if (preg_match('#^/corresponsalia/tipomoneda/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipomoneda_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomoneda_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::updateAction',));
                }
                not_tipomoneda_update:

                // tipomoneda_delete
                if (preg_match('#^/corresponsalia/tipomoneda/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipomoneda_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomoneda_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\TipomonedaController::deleteAction',));
                }
                not_tipomoneda_delete:

            }

            if (0 === strpos($pathinfo, '/corresponsalia/corresponsalia')) {
                // corresponsalia
                if ($pathinfo === '/corresponsalia/corresponsalia') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::indexAction',  '_route' => 'corresponsalia',);
                }

                // corresponsalia_show
                if (preg_match('#^/corresponsalia/corresponsalia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::showAction',));
                }

                // corresponsalia_new
                if ($pathinfo === '/corresponsalia/corresponsalia/new') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::newAction',  '_route' => 'corresponsalia_new',);
                }

                // corresponsalia_create
                if ($pathinfo === '/corresponsalia/corresponsalia/reate') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_corresponsalia_create;
                    }

                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::createAction',  '_route' => 'corresponsalia_create',);
                }
                not_corresponsalia_create:

                // corresponsalia_edit
                if (preg_match('#^/corresponsalia/corresponsalia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::editAction',));
                }

                // corresponsalia_update
                if (preg_match('#^/corresponsalia/corresponsalia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_corresponsalia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::updateAction',));
                }
                not_corresponsalia_update:

                // corresponsalia_delete
                if (preg_match('#^/corresponsalia/corresponsalia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_corresponsalia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corresponsalia_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CorresponsaliaController::deleteAction',));
                }
                not_corresponsalia_delete:

            }

            if (0 === strpos($pathinfo, '/corresponsalia/estadofondo')) {
                // estadofondo_aniomes
                if ($pathinfo === '/corresponsalia/estadofondo/aniomes') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::estadofondoaniomesAction',  '_route' => 'estadofondo_aniomes',);
                }

                // estadofondo
                if ($pathinfo === '/corresponsalia/estadofondo') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::indexAction',  '_route' => 'estadofondo',);
                }

                // estadofondo_show
                if (preg_match('#^/corresponsalia/estadofondo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadofondo_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::showAction',));
                }

                // estadofondo_new
                if ($pathinfo === '/corresponsalia/estadofondo/new') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::newAction',  '_route' => 'estadofondo_new',);
                }

                // estadofondo_create
                if ($pathinfo === '/corresponsalia/estadofondo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_estadofondo_create;
                    }

                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::createAction',  '_route' => 'estadofondo_create',);
                }
                not_estadofondo_create:

                // estadofondo_edit
                if (preg_match('#^/corresponsalia/estadofondo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadofondo_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::editAction',));
                }

                // estadofondo_update
                if (preg_match('#^/corresponsalia/estadofondo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_estadofondo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadofondo_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::updateAction',));
                }
                not_estadofondo_update:

                // estadofondo_delete
                if (preg_match('#^/corresponsalia/estadofondo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_estadofondo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadofondo_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\EstadofondoController::deleteAction',));
                }
                not_estadofondo_delete:

            }

            if (0 === strpos($pathinfo, '/corresponsalia/cambio')) {
                // cambio
                if (preg_match('#^/corresponsalia/cambio/(?P<idcor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::indexAction',));
                }

                // cambio_show
                if (preg_match('#^/corresponsalia/cambio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::showAction',));
                }

                // cambio_new
                if (0 === strpos($pathinfo, '/corresponsalia/cambio/new') && preg_match('#^/corresponsalia/cambio/new/(?P<idcor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_new')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::newAction',));
                }

                // cambio_create
                if (0 === strpos($pathinfo, '/corresponsalia/cambio/create') && preg_match('#^/corresponsalia/cambio/create/(?P<idcor>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cambio_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_create')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::createAction',));
                }
                not_cambio_create:

            }

            // cambio_edit
            if (preg_match('#^/corresponsalia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::editAction',));
            }

            if (0 === strpos($pathinfo, '/corresponsalia/cambio')) {
                // cambio_update
                if (preg_match('#^/corresponsalia/cambio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cambio_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::updateAction',));
                }
                not_cambio_update:

                // cambio_delete
                if (preg_match('#^/corresponsalia/cambio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cambio_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambio_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\CambioController::deleteAction',));
                }
                not_cambio_delete:

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_homepage
            if ($pathinfo === '/usuario/inicio') {
                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuario_homepage',);
            }

            if (0 === strpos($pathinfo, '/usuario/log')) {
                if (0 === strpos($pathinfo, '/usuario/login')) {
                    // usuario_login
                    if ($pathinfo === '/usuario/login') {
                        return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
                    }

                    // usuario_login_check
                    if ($pathinfo === '/usuario/login_check') {
                        return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => 'usuario_login_check',);
                    }

                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array('_route' => 'usuario_logout');
                }

            }

            if (0 === strpos($pathinfo, '/usuario/c')) {
                // contacto
                if ($pathinfo === '/usuario/contacto') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'UsuarioBundle:Default:contacto.html.twig',  '_route' => 'contacto',);
                }

                // cambioclave
                if ($pathinfo === '/usuario/cambioclave') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::cambioclaveAction',  '_route' => 'cambioclave',);
                }

            }

            // actualizacambioclave
            if ($pathinfo === '/usuario/actualizacambioclave') {
                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::actualizacambioclaveAction',  '_route' => 'actualizacambioclave',);
            }

            // notificar
            if ($pathinfo === '/usuario/notificar') {
                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::notificarAction',  '_route' => 'notificar',);
            }

            // user
            if ($pathinfo === '/usuario/lista') {
                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/usuario/rol')) {
                // rol
                if ($pathinfo === '/usuario/rol/lista') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
                }

                // rol_show
                if (preg_match('#^/usuario/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::showAction',));
                }

                // rol_new
                if ($pathinfo === '/usuario/rol/new') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
                }

                // rol_create
                if ($pathinfo === '/usuario/rol/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rol_create;
                    }

                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
                }
                not_rol_create:

                // rol_edit
                if (preg_match('#^/usuario/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::editAction',));
                }

                // rol_update
                if (preg_match('#^/usuario/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rol_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::updateAction',));
                }
                not_rol_update:

                // rol_delete
                if (preg_match('#^/usuario/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rol_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\RolController::deleteAction',));
                }
                not_rol_delete:

            }

            if (0 === strpos($pathinfo, '/usuario/perfil')) {
                // perfil
                if ($pathinfo === '/usuario/perfil/perfil/lista') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::indexAction',  '_route' => 'perfil',);
                }

                // perfil_show
                if (preg_match('#^/usuario/perfil/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::showAction',));
                }

                // perfil_new
                if ($pathinfo === '/usuario/perfil/new') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::newAction',  '_route' => 'perfil_new',);
                }

                // perfil_create
                if ($pathinfo === '/usuario/perfil/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_perfil_create;
                    }

                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::createAction',  '_route' => 'perfil_create',);
                }
                not_perfil_create:

                // perfil_edit
                if (preg_match('#^/usuario/perfil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_edit')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::editAction',));
                }

                // perfil_update
                if (preg_match('#^/usuario/perfil/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_perfil_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_update')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::updateAction',));
                }
                not_perfil_update:

                // perfil_delete
                if (preg_match('#^/usuario/perfil/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_perfil_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_delete')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\PerfilController::deleteAction',));
                }
                not_perfil_delete:

            }

            if (0 === strpos($pathinfo, '/usuario/usercorresponsalia')) {
                // usercorresponsalia
                if ($pathinfo === '/usuario/usercorresponsalia') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::indexAction',  '_route' => 'usercorresponsalia',);
                }

                // usercorresponsalia_show
                if (preg_match('#^/usuario/usercorresponsalia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usercorresponsalia_show')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::showAction',));
                }

                // usercorresponsalia_new
                if ($pathinfo === '/usuario/usercorresponsalia/new') {
                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::newAction',  '_route' => 'usercorresponsalia_new',);
                }

                // usercorresponsalia_create
                if ($pathinfo === '/usuario/usercorresponsalia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usercorresponsalia_create;
                    }

                    return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::createAction',  '_route' => 'usercorresponsalia_create',);
                }
                not_usercorresponsalia_create:

                // usercorresponsalia_edit
                if (preg_match('#^/usuario/usercorresponsalia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usercorresponsalia_edit')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::editAction',));
                }

                // usercorresponsalia_update
                if (preg_match('#^/usuario/usercorresponsalia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usercorresponsalia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usercorresponsalia_update')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::updateAction',));
                }
                not_usercorresponsalia_update:

                // usercorresponsalia_delete
                if (preg_match('#^/usuario/usercorresponsalia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usercorresponsalia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usercorresponsalia_delete')), array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\UsercorresponsaliaController::deleteAction',));
                }
                not_usercorresponsalia_delete:

            }

        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Administracion\\UsuarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
