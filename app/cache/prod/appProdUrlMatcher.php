<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/corresponsalia')) {
            // corresponsalia_principal
            if ($pathinfo === '/corresponsalia/principal') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::principalAction',  '_route' => 'corresponsalia_principal',);
            }

            // corresponsalia_inicio
            if ($pathinfo === '/corresponsalia/inicio') {
                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'corresponsalia_inicio',);
            }

            // corresponsalia_guardatemprendicion
            if (rtrim($pathinfo, '/') === '/corresponsalia/guardatemprendicion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'corresponsalia_guardatemprendicion');
                }

                return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\DefaultController::guardatemprendicionAction',  '_route' => 'corresponsalia_guardatemprendicion',);
            }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
