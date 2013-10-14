<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'zcms_admin_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/zCmsAdmin/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'zCmsAdmin\Entity' => 'zcms_admin_entities'
                )
            )
        )
    ),
    'zCmsAdmin' => array(
        'layout' => 'layout/z-cms-admin'
    ),
    'controllers' => array(
        'invokables' => array(
            'zCmsAdmin\Controller\Index' => 'zCmsAdmin\Controller\IndexController',
            'zCmsAdmin\Controller\Assets' => 'zCmsAdmin\Controller\AssetsController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'z-cms-admin' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/admin[/:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'zCmsAdmin\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        ),
        'factories' => array(
            'zCmsAdmin\Cache' =>
            'Zend\Cache\Service\StorageCacheFactory',
            'zadminnav_navigation' => 'zCmsAdmin\Navigation\Service\AdminNavigationFactory',
        //'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        //'locale' => 'en_US',
        'locale' => 'de_CH',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'cache' => array(
        'adapter' => array(
            'name' => 'filesystem'
        ),
        'options' => array(
            'cache_dir' => 'data/cache',
        // other options
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
        )
    ),
    'navigation' => array(
        'zadminnav' => array(
            'zAdminHome' => array(
                'label' => 'Admin Dashboard',
                'route' =>'z-cms-admin','action' => 'index','controller' => 'index',
            ),
            'zAdminAssets' => array(
                'label' => 'Assets',
                'route' =>'z-cms-admin','controller' => 'assets',
                'pages' => array(
                    'zAdminAssetsList' => array(
                        'label' => 'List Assets',
                        'route' =>'z-cms-admin','action' => 'index','controller' => 'assets',
                    ),
                    'zAdminAssetsAdd' => array(
                        'label' => 'Add Assets',
                        'route' =>'z-cms-admin','action' => 'add','controller' => 'assets',
                    ),
                    'zAdminAssetsEdit' => array(
                        'label' => 'Edit Assets',
                        'route' =>'z-cms-admin','action' => 'edit','controller' => 'assets',
                    ),
                    'zAdminAssetsRemove' => array(
                        'label' => 'Remove Assets',
                        'route' =>'z-cms-admin','action' => 'remove','controller' => 'assets',
                    ),
                    'zAdminAssetsView' => array(
                        'label' => 'View Assets',
                        'route' =>'z-cms-admin','action' => 'view','controller' => 'assets',
                    ),
                )
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => \TRUE,
        'display_exceptions' => \TRUE,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
        //'zcms/content/view' => __DIR__ . '/../view/z-cms/content/view.phtml',
            'zAdminSidenav' => __DIR__ . '/../view/z-cms-admin/partial/sidenav.phtml',
            'zAdminBreadcrumbs' => __DIR__ . '/../view/z-cms-admin/partial/breadcrumbs.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);