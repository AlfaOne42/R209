<?php

namespace ContainerG4sGUXs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dy6wSj2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dy6wSj2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dy6wSj2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formation' => ['privates', '.errored..service_locator.dy6wSj2.App\\Entity\\Formation', NULL, 'Cannot autowire service ".service_locator.dy6wSj2": it needs an instance of "App\\Entity\\Formation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'formation' => 'App\\Entity\\Formation',
        ]);
    }
}