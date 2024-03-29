<?php

namespace ContainerEgqQ5Br;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7HKXV_LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7HKXV.l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7HKXV.l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'requestRepository' => ['privates', 'App\\Repository\\RequestRepository', 'getRequestRepositoryService', true],
            'room' => ['privates', '.errored..service_locator.7HKXV.l.App\\Entity\\Room', NULL, 'Cannot autowire service ".service_locator.7HKXV.l": it references class "App\\Entity\\Room" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'requestRepository' => 'App\\Repository\\RequestRepository',
            'room' => 'App\\Entity\\Room',
        ]);
    }
}
