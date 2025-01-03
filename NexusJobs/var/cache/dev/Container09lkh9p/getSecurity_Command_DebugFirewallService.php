<?php

namespace Container09lkh9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.xgvAKLi'] ?? self::get_ServiceLocator_XgvAKLiService($container)), ($container->privates['.service_locator.ucIFnYH'] ?? $container->load('get_ServiceLocator_UcIFnYHService')), ['dev' => [($container->privates['debug.security.authenticator.form_login.dev'] ?? $container->load('getDebug_Security_Authenticator_FormLogin_DevService'))], 'company' => [($container->privates['debug.security.authenticator.form_login.company'] ?? $container->load('getDebug_Security_Authenticator_FormLogin_CompanyService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}