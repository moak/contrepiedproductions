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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'CP\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // admin_application
                if ($pathinfo === '/admin/application') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\ApplicationAdminController::editAction',  '_route' => 'admin_application',);
                }

                if (0 === strpos($pathinfo, '/admin/agenda')) {
                    // admin_agendas
                    if ($pathinfo === '/admin/agendas') {
                        return array (  '_controller' => 'CP\\AdminBundle\\Controller\\AgendaAdminController::indexAction',  '_route' => 'admin_agendas',);
                    }

                    // admin_agenda_add
                    if ($pathinfo === '/admin/agenda/add') {
                        return array (  '_controller' => 'CP\\AdminBundle\\Controller\\AgendaAdminController::addAction',  '_route' => 'admin_agenda_add',);
                    }

                    // admin_agenda_edit
                    if (0 === strpos($pathinfo, '/admin/agenda/edit') && preg_match('#^/admin/agenda/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agenda_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\AgendaAdminController::editAction',));
                    }

                    // admin_agenda_delete
                    if (0 === strpos($pathinfo, '/admin/agenda/delete') && preg_match('#^/admin/agenda/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agenda_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\AgendaAdminController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/spectacle')) {
                // admin_spectacles
                if ($pathinfo === '/admin/spectacles') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleAdminController::indexAction',  '_route' => 'admin_spectacles',);
                }

                // admin_spectacle_add
                if ($pathinfo === '/admin/spectacle/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleAdminController::addAction',  '_route' => 'admin_spectacle_add',);
                }

                if (0 === strpos($pathinfo, '/admin/spectacle/edit')) {
                    // admin_spectacle_edit
                    if (preg_match('#^/admin/spectacle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacle_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleAdminController::editAction',));
                    }

                    // admin_spectacle_edit_long
                    if (0 === strpos($pathinfo, '/admin/spectacle/edit/long') && preg_match('#^/admin/spectacle/edit/long/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacle_edit_long')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleAdminController::editLongAction',));
                    }

                }

                // admin_spectacle_delete
                if (0 === strpos($pathinfo, '/admin/spectacle/delete') && preg_match('#^/admin/spectacle/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacle_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/jeunepublic')) {
                // admin_jeunepublics
                if ($pathinfo === '/admin/jeunepublics') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicAdminController::indexAction',  '_route' => 'admin_jeunepublics',);
                }

                // admin_jeunepublic_add
                if ($pathinfo === '/admin/jeunepublic/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicAdminController::addAction',  '_route' => 'admin_jeunepublic_add',);
                }

                if (0 === strpos($pathinfo, '/admin/jeunepublic/edit')) {
                    // admin_jeunepublic_edit
                    if (preg_match('#^/admin/jeunepublic/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublic_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicAdminController::editAction',));
                    }

                    // admin_jeunepublic_edit_long
                    if (0 === strpos($pathinfo, '/admin/jeunepublic/edit/long') && preg_match('#^/admin/jeunepublic/edit/long/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublic_edit_long')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicAdminController::editLongAction',));
                    }

                }

                // admin_jeunepublic_delete
                if (0 === strpos($pathinfo, '/admin/jeunepublic/delete') && preg_match('#^/admin/jeunepublic/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublic_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/slide')) {
                // admin_slides
                if ($pathinfo === '/admin/slides') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SlideAdminController::indexAction',  '_route' => 'admin_slides',);
                }

                // admin_slide_add
                if ($pathinfo === '/admin/slide/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SlideAdminController::addAction',  '_route' => 'admin_slide_add',);
                }

                // admin_slide_edit
                if (0 === strpos($pathinfo, '/admin/slide/edit') && preg_match('#^/admin/slide/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slide_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SlideAdminController::editAction',));
                }

                // admin_slide_delete
                if (0 === strpos($pathinfo, '/admin/slide/delete') && preg_match('#^/admin/slide/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slide_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SlideAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/produit')) {
                // admin_produits
                if ($pathinfo === '/admin/produits') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\ProduitAdminController::indexAction',  '_route' => 'admin_produits',);
                }

                // admin_produit_add
                if ($pathinfo === '/admin/produit/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\ProduitAdminController::addAction',  '_route' => 'admin_produit_add',);
                }

                // admin_produit_edit
                if (0 === strpos($pathinfo, '/admin/produit/edit') && preg_match('#^/admin/produit/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produit_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\ProduitAdminController::editAction',));
                }

                // admin_produit_delete
                if (0 === strpos($pathinfo, '/admin/produit/delete') && preg_match('#^/admin/produit/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produit_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\ProduitAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/jeunepublicimage')) {
                // admin_jeunepublicimages
                if ($pathinfo === '/admin/jeunepublicimages') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicImageAdminController::indexAction',  '_route' => 'admin_jeunepublicimages',);
                }

                // admin_jeunepublicimage_add
                if ($pathinfo === '/admin/jeunepublicimage/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicImageAdminController::addAction',  '_route' => 'admin_jeunepublicimage_add',);
                }

                if (0 === strpos($pathinfo, '/admin/jeunepublicimage/edit')) {
                    // admin_jeunepublicimage_edit
                    if (preg_match('#^/admin/jeunepublicimage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublicimage_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicImageAdminController::editAction',));
                    }

                    // admin_jeunepublicimage_edit_long
                    if (0 === strpos($pathinfo, '/admin/jeunepublicimage/edit/long') && preg_match('#^/admin/jeunepublicimage/edit/long/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublicimage_edit_long')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicImageAdminController::editLongAction',));
                    }

                }

                // admin_jeunepublicimage_delete
                if (0 === strpos($pathinfo, '/admin/jeunepublicimage/delete') && preg_match('#^/admin/jeunepublicimage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_jeunepublicimage_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\JeunepublicImageAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/spectacleimage')) {
                // admin_spectacleimages
                if ($pathinfo === '/admin/spectacleimages') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleImageAdminController::indexAction',  '_route' => 'admin_spectacleimages',);
                }

                // admin_spectacleimage_add
                if ($pathinfo === '/admin/spectacleimage/add') {
                    return array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleImageAdminController::addAction',  '_route' => 'admin_spectacleimage_add',);
                }

                if (0 === strpos($pathinfo, '/admin/spectacleimage/edit')) {
                    // admin_spectacleimage_edit
                    if (preg_match('#^/admin/spectacleimage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacleimage_edit')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleImageAdminController::editAction',));
                    }

                    // admin_spectacleimage_edit_long
                    if (0 === strpos($pathinfo, '/admin/spectacleimage/edit/long') && preg_match('#^/admin/spectacleimage/edit/long/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacleimage_edit_long')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleImageAdminController::editLongAction',));
                    }

                }

                // admin_spectacleimage_delete
                if (0 === strpos($pathinfo, '/admin/spectacleimage/delete') && preg_match('#^/admin/spectacleimage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_spectacleimage_delete')), array (  '_controller' => 'CP\\AdminBundle\\Controller\\SpectacleImageAdminController::deleteAction',));
                }

            }

        }

        // cp_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cp_homepage');
            }

            return array (  '_controller' => 'CP\\CPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cp_homepage',);
        }

        // cp_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'CP\\CPBundle\\Controller\\DefaultController::contactAction',  '_route' => 'cp_contact',);
        }

        // cp_newsletter
        if ($pathinfo === '/newsletter') {
            return array (  '_controller' => 'CP\\CPBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'cp_newsletter',);
        }

        if (0 === strpos($pathinfo, '/spectacle')) {
            // cp_spectacles
            if ($pathinfo === '/spectacles') {
                return array (  '_controller' => 'CP\\CPBundle\\Controller\\SpectacleController::indexAction',  '_route' => 'cp_spectacles',);
            }

            // cp_spectacle_view
            if (preg_match('#^/spectacle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cp_spectacle_view')), array (  '_controller' => 'CP\\CPBundle\\Controller\\SpectacleController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/produit')) {
            // cp_produits
            if ($pathinfo === '/produits') {
                return array (  '_controller' => 'CP\\CPBundle\\Controller\\ProduitController::indexAction',  '_route' => 'cp_produits',);
            }

            // cp_produit
            if (preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cp_produit')), array (  '_controller' => 'CP\\CPBundle\\Controller\\ProduitController::produitAction',));
            }

        }

        if (0 === strpos($pathinfo, '/jeunepublic')) {
            // cp_jeunepublics
            if ($pathinfo === '/jeunepublics') {
                return array (  '_controller' => 'CP\\CPBundle\\Controller\\JeunepublicController::indexAction',  '_route' => 'cp_jeunepublics',);
            }

            // cp_jeunepublic_view
            if (preg_match('#^/jeunepublic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cp_jeunepublic_view')), array (  '_controller' => 'CP\\CPBundle\\Controller\\JeunepublicController::viewAction',));
            }

        }

        // cp_agenda
        if ($pathinfo === '/agenda') {
            return array (  '_controller' => 'CP\\CPBundle\\Controller\\AgendaController::indexAction',  '_route' => 'cp_agenda',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
