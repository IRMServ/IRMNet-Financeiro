<?php
namespace Financeiro;
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
     'acl' => array(
        'Financeiro' => array(
            'FINANCEIRO - CONTÁBIL' => array(
                'Financeiro\Controller\Index:index',              
            ),
            'TI' => array(
                'Financeiro\Controller\Index:index',              
            ),
        )
    ),
    'router' => array(
        'routes' => array(
            // This defines the hostname route which forms the base
            // of each "child" route
            'financeiro' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/financeiro',
                    'defaults' => array(
                       // '__NAMESPACE__' => 'Financeiro\Controller',
                        'controller' => 'Financeiro\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Financeiro\Controller\Index' => 'Financeiro\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../../Base/view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../../Base/view/error/404.phtml',
            'error/index' => __DIR__ . '/../../Base/view/error/index.phtml',
            'partials/navigation' => __DIR__ . '/../view/partials/navigation.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);