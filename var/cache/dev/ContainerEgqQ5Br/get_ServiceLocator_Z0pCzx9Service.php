<?php

namespace ContainerEgqQ5Br;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z0pCzx9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z0pCzx9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z0pCzx9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'group' => ['privates', '.errored..service_locator.z0pCzx9.App\\Entity\\Group', NULL, 'Cannot autowire service ".service_locator.z0pCzx9": it references class "App\\Entity\\Group" but no such service exists.'],
        ], [
            'group' => 'App\\Entity\\Group',
        ]);
    }
}
