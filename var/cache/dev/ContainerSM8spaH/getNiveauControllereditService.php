<?php

namespace ContainerSM8spaH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNiveauControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pe1VYp3.App\Controller\NiveauController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pe1VYp3.App\\Controller\\NiveauController::edit()'] = ($container->privates['.service_locator.Pe1VYp3'] ?? $container->load('get_ServiceLocator_Pe1VYp3Service'))->withContext('App\\Controller\\NiveauController::edit()', $container);
    }
}
