<?php

namespace ContainerVYoRFD7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDevControllerregisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5SuUxla.App\Controller\DevController::register()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5SuUxla.App\\Controller\\DevController::register()'] = ($container->privates['.service_locator.5SuUxla'] ?? $container->load('get_ServiceLocator_5SuUxlaService'))->withContext('App\\Controller\\DevController::register()', $container);
    }
}
