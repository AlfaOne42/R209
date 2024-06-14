<?php

namespace ContainerSM8spaH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNiveauControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xJTpYFm.App\Controller\NiveauController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xJTpYFm.App\\Controller\\NiveauController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'niveauRepository' => ['privates', 'App\\Repository\\NiveauRepository', 'getNiveauRepositoryService', true],
        ], [
            'niveauRepository' => 'App\\Repository\\NiveauRepository',
        ]))->withContext('App\\Controller\\NiveauController::index()', $container);
    }
}
