<?php

namespace ContainerSM8spaH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gv5aC7b.App\Controller\FormationController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gv5aC7b.App\\Controller\\FormationController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formation' => ['privates', '.errored..service_locator.Gv5aC7b.App\\Entity\\Formation', NULL, 'Cannot autowire service ".service_locator.Gv5aC7b": it needs an instance of "App\\Entity\\Formation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'formation' => 'App\\Entity\\Formation',
        ]))->withContext('App\\Controller\\FormationController::show()', $container);
    }
}
