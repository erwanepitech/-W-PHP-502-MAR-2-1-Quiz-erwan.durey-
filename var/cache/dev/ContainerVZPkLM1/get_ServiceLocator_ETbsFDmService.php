<?php

namespace ContainerVZPkLM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ETbsFDmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ETbsFDm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ETbsFDm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'categorie' => 'App\\Repository\\CategorieRepository',
            'paginator' => '?',
        ]);
    }
}
