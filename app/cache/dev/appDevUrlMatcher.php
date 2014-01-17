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

            if (0 === strpos($pathinfo, '/corresponsalia/moneda')) {
                // moneda
                if ($pathinfo === '/corresponsalia/moneda') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::indexAction',  '_route' => 'moneda',);
                }

                // moneda_show
                if (preg_match('#^/corresponsalia/moneda/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moneda_show')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::showAction',));
                }

                // moneda_new
                if ($pathinfo === '/corresponsalia/moneda/new') {
                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::newAction',  '_route' => 'moneda_new',);
                }

                // moneda_create
                if ($pathinfo === '/corresponsalia/moneda/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_moneda_create;
                    }

                    return array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::createAction',  '_route' => 'moneda_create',);
                }
                not_moneda_create:

                // moneda_edit
                if (preg_match('#^/corresponsalia/moneda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moneda_edit')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::editAction',));
                }

                // moneda_update
                if (preg_match('#^/corresponsalia/moneda/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_moneda_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moneda_update')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::updateAction',));
                }
                not_moneda_update:

                // moneda_delete
                if (preg_match('#^/corresponsalia/moneda/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_moneda_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moneda_delete')), array (  '_controller' => 'Frontend\\CorresponsaliaBundle\\Controller\\MonedaController::deleteAction',));
                }
                not_moneda_delete:

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

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
