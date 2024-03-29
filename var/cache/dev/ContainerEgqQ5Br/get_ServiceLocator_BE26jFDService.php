<?php

namespace ContainerEgqQ5Br;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BE26jFDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BE26jFD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BE26jFD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'requestRepository' => ['privates', 'App\\Repository\\RequestRepository', 'getRequestRepositoryService', true],
            'room' => ['privates', '.errored..service_locator.BE26jFD.App\\Entity\\Room', NULL, 'Cannot autowire service ".service_locator.BE26jFD": it references class "App\\Entity\\Room" but no such service exists.'],
        ], [
            'requestRepository' => 'App\\Repository\\RequestRepository',
            'room' => 'App\\Entity\\Room',
        ]);
    }
}
