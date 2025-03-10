<?php

namespace ContainerFQD6fyi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppAuthenticator2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.App\Security\AppAuthenticator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticator.php';

        return $container->privates['debug.App\\Security\\AppAuthenticator'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticator(($container->privates['App\\Security\\AppAuthenticator'] ?? $container->load('getAppAuthenticatorService')));
    }
}
