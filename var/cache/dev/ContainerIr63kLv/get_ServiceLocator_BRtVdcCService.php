<?php

namespace ContainerIr63kLv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BRtVdcCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bRtVdcC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bRtVdcC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'building' => ['privates', '.errored..service_locator.bRtVdcC.App\\Entity\\Building', NULL, 'Cannot autowire service ".service_locator.bRtVdcC": it references class "App\\Entity\\Building" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'building' => 'App\\Entity\\Building',
            'entityManager' => '?',
        ]);
    }
}
