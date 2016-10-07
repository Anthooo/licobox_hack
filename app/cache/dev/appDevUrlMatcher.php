<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'LicoboxBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'LicoboxBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // licobox_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'licobox_homepage');
            }

            return array (  '_controller' => 'LicoboxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'licobox_homepage',);
        }

        // check_user
        if ($pathinfo === '/plip') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_check_user;
            }

            return array (  '_controller' => 'LicoboxBundle\\Controller\\DefaultController::checkUserAction',  '_route' => 'check_user',);
        }
        not_check_user:

        if (0 === strpos($pathinfo, '/licorne')) {
            // licorne_index
            if (rtrim($pathinfo, '/') === '/licorne') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licorne_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'licorne_index');
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\LicorneController::indexAction',  '_route' => 'licorne_index',);
            }
            not_licorne_index:

            // licorne_show
            if (preg_match('#^/licorne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licorne_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\LicorneController::showAction',));
            }
            not_licorne_show:

            // licorne_new
            if ($pathinfo === '/licorne/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_licorne_new;
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\LicorneController::newAction',  '_route' => 'licorne_new',);
            }
            not_licorne_new:

            // licorne_edit
            if (preg_match('#^/licorne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_licorne_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_edit')), array (  '_controller' => 'LicoboxBundle\\Controller\\LicorneController::editAction',));
            }
            not_licorne_edit:

            // licorne_delete
            if (preg_match('#^/licorne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_licorne_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_delete')), array (  '_controller' => 'LicoboxBundle\\Controller\\LicorneController::deleteAction',));
            }
            not_licorne_delete:

        }

        if (0 === strpos($pathinfo, '/habitat')) {
            // habitat_index
            if (rtrim($pathinfo, '/') === '/habitat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitat_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'habitat_index');
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\HabitatController::indexAction',  '_route' => 'habitat_index',);
            }
            not_habitat_index:

            // habitat_show
            if (preg_match('#^/habitat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitat_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\HabitatController::showAction',));
            }
            not_habitat_show:

        }

        if (0 === strpos($pathinfo, '/pelage')) {
            // pelage_index
            if (rtrim($pathinfo, '/') === '/pelage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pelage_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pelage_index');
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\PelageController::indexAction',  '_route' => 'pelage_index',);
            }
            not_pelage_index:

            // pelage_show
            if (preg_match('#^/pelage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pelage_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelage_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\PelageController::showAction',));
            }
            not_pelage_show:

        }

        if (0 === strpos($pathinfo, '/eyes')) {
            // eyes_index
            if (rtrim($pathinfo, '/') === '/eyes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eyes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eyes_index');
                }

                return array (  '_controller' => 'LicoboxBundle\\Controller\\EyesController::indexAction',  '_route' => 'eyes_index',);
            }
            not_eyes_index:

            // eyes_show
            if (preg_match('#^/eyes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eyes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eyes_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\EyesController::showAction',));
            }
            not_eyes_show:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/corne')) {
                // corne_index
                if (rtrim($pathinfo, '/') === '/corne') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_corne_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'corne_index');
                    }

                    return array (  '_controller' => 'LicoboxBundle\\Controller\\CorneController::indexAction',  '_route' => 'corne_index',);
                }
                not_corne_index:

                // corne_show
                if (preg_match('#^/corne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_corne_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corne_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\CorneController::showAction',));
                }
                not_corne_show:

            }

            if (0 === strpos($pathinfo, '/capture')) {
                // capture_index
                if (rtrim($pathinfo, '/') === '/capture') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_capture_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'capture_index');
                    }

                    return array (  '_controller' => 'LicoboxBundle\\Controller\\CaptureController::indexAction',  '_route' => 'capture_index',);
                }
                not_capture_index:

                // capture_show
                if (preg_match('#^/capture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_capture_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capture_show')), array (  '_controller' => 'LicoboxBundle\\Controller\\CaptureController::showAction',));
                }
                not_capture_show:

                // capture_new
                if ($pathinfo === '/capture/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_capture_new;
                    }

                    return array (  '_controller' => 'LicoboxBundle\\Controller\\CaptureController::newAction',  '_route' => 'capture_new',);
                }
                not_capture_new:

                // capture_edit
                if (preg_match('#^/capture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_capture_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capture_edit')), array (  '_controller' => 'LicoboxBundle\\Controller\\CaptureController::editAction',));
                }
                not_capture_edit:

                // capture_delete
                if (preg_match('#^/capture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_capture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'capture_delete')), array (  '_controller' => 'LicoboxBundle\\Controller\\CaptureController::deleteAction',));
                }
                not_capture_delete:

            }

        }

        // homepage
        if ($pathinfo === '/plop') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
