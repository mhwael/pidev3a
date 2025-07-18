<?php

namespace ContainerNHSTNgp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aw9RHlFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aw9RHlF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aw9RHlF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categorie' => ['privates', '.errored..service_locator.aw9RHlF.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.aw9RHlF": it needs an instance of "App\\Entity\\Categorie" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
            'entityManager' => '?',
        ]);
    }
}
