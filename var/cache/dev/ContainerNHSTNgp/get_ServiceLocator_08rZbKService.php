<?php

namespace ContainerNHSTNgp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_08rZbKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0_8rZbK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0_8rZbK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'service' => ['privates', '.errored..service_locator.0_8rZbK.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.0_8rZbK": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'service' => 'App\\Entity\\Service',
        ]);
    }
}
