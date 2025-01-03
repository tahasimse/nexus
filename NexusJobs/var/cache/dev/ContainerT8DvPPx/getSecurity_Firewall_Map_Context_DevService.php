<?php

namespace ContainerT8DvPPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_DevService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.authenticator.form_login.dev'] ?? $container->load('getSecurity_Authenticator_FormLogin_DevService'));

        if (isset($container->privates['security.firewall.map.context.dev'])) {
            return $container->privates['security.firewall.map.context.dev'];
        }
        $b = ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));
        $c = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? self::getSecurity_ContextListener_0Service($container));
            yield 2 => ($container->privates['debug.security.firewall.authenticator.dev'] ?? $container->load('getDebug_Security_Firewall_Authenticator_DevService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), $c, 'dev', $a, NULL, NULL, ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $c, ($container->privates['debug.security.event_dispatcher.dev'] ?? self::getDebug_Security_EventDispatcher_DevService($container)), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'dev_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.hd16j33', true, false, 'security.user.provider.concrete.app_user_provider', 'dev', 'security.authenticator.form_login.dev', NULL, NULL, ['form_login'], NULL, ['path' => 'dev_logout', 'target' => '/dev/login', 'enable_csrf' => NULL, 'csrf_token_id' => 'logout', 'csrf_parameter' => '_csrf_token', 'invalidate_session' => true, 'clear_site_data' => [], 'delete_cookies' => []]));
    }
}