<?php

namespace ContainerVYoRFD7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyControllerloginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3QECKYg.App\Controller\CompanyController::login()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3QECKYg.App\\Controller\\CompanyController::login()'] = ($container->privates['.service_locator.3QECKYg'] ?? $container->load('get_ServiceLocator_3QECKYgService'))->withContext('App\\Controller\\CompanyController::login()', $container);
    }
}
