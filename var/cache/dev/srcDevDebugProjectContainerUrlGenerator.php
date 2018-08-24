<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'admin_homepage' => array(array(), array('_controller' => 'App\\Controller\\AdminController::adminHomepage'), array(), array(array('text', '/admin/')), array(), array()),
        'admin_competition' => array(array(), array('_controller' => 'App\\Controller\\AdminController::managementCompetition'), array(), array(array('text', '/admin/competition')), array(), array()),
        'admin_aboutus' => array(array(), array('_controller' => 'App\\Controller\\AdminController::managementAboutUs'), array(), array(array('text', '/admin/aboutUs')), array(), array()),
        'admin_regulation' => array(array(), array('_controller' => 'App\\Controller\\AdminController::managementRegulation'), array(), array(array('text', '/admin/regulation')), array(), array()),
        'admin_gallery' => array(array(), array('_controller' => 'App\\Controller\\AdminController::managementGallery'), array(), array(array('text', '/admin/gallery')), array(), array()),
        'admin_quiz' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::showQuiz'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/quiz')), array(), array()),
        'admin_quiz_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::deleteQuiz'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/quiz_delete')), array(), array()),
        'admin_gallery_image' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::showImage'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/gallery_image')), array(), array()),
        'admin_gallery_image_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::deleteImage'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/gallery_image_delete')), array(), array()),
        'admin_training_choice' => array(array(), array('_controller' => 'App\\Controller\\AdminController::choiceTraining'), array(), array(array('text', '/admin/training_choice')), array(), array()),
        'admin_new_training' => array(array(), array('_controller' => 'App\\Controller\\AdminController::createTraining'), array(), array(array('text', '/admin/training')), array(), array()),
        'admin_delete_training' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::deleteTraining'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/training_delete')), array(), array()),
        'admin_training' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::managementTraining'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/training')), array(), array()),
        'app_lucky_number' => array(array(), array('_controller' => 'App\\Controller\\LuckyController::number'), array(), array(array('text', '/lucky/number')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\PublicController::homepage'), array(), array(array('text', '/')), array(), array()),
        'aboutus' => array(array(), array('_controller' => 'App\\Controller\\PublicController::aboutUs'), array(), array(array('text', '/aboutUs')), array(), array()),
        'enroll' => array(array(), array('_controller' => 'App\\Controller\\PublicController::enroll'), array(), array(array('text', '/enroll')), array(), array()),
        'updated' => array(array(), array('_controller' => 'App\\Controller\\PublicController::keepMeUpdated'), array(), array(array('text', '/keep_me_updated')), array(), array()),
        'usage_conditions' => array(array(), array('_controller' => 'App\\Controller\\PublicController::usageConditions'), array(), array(array('text', '/CGU')), array(), array()),
        'regulation' => array(array(), array('_controller' => 'App\\Controller\\PublicController::regulation'), array(), array(array('text', '/regulation')), array(), array()),
        'gallery' => array(array(), array('_controller' => 'App\\Controller\\PublicController::gallery'), array(), array(array('text', '/gallery')), array(), array()),
        'img_gallery' => array(array(), array('_controller' => 'App\\Controller\\PublicController::img_gallery'), array(), array(array('text', '/img_gallery')), array(), array()),
        'quiz_gallery' => array(array(), array('_controller' => 'App\\Controller\\PublicController::quiz_gallery'), array(), array(array('text', '/quiz_gallery')), array(), array()),
        'training_choice' => array(array(), array('_controller' => 'App\\Controller\\PublicController::trainingChoice'), array(), array(array('text', '/training')), array(), array()),
        'training' => array(array('id'), array('_controller' => 'App\\Controller\\PublicController::training'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/training')), array(), array()),
        'correction' => array(array('id'), array('_controller' => 'App\\Controller\\PublicController::trainingCorrection'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/correction')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
