<?php

namespace ContainerNHSTNgp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['request_stack'])) {
                yield 'request_stack' => ($container->services['request_stack'] ?? null);
            }
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (false) {
                yield 'cache.annotations' => null;
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->services['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->services['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($container->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['twig'])) {
                yield 'twig' => ($container->privates['twig'] ?? null);
            }
            if (isset($container->privates['twig.form.engine'])) {
                yield 'twig.form.engine' => ($container->privates['twig.form.engine'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['doctrine.debug_data_holder'])) {
                yield 'doctrine.debug_data_holder' => ($container->privates['doctrine.debug_data_holder'] ?? null);
            }
            if (isset($container->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($container->privates['form.type.entity'] ?? null);
            }
        }, fn () => 0 + (int) (isset($container->services['request_stack'])) + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (false) + (int) (false) + (int) (false) + (int) (false) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->services['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->privates['form.choice_list_factory.cached'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['twig'])) + (int) (isset($container->privates['twig.form.engine'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['doctrine.debug_data_holder'])) + (int) (isset($container->privates['form.type.entity']))), ['request_stack' => ['?resetRequestFormats'], 'cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'mailer.message_logger_listener' => ['reset'], 'debug.stopwatch' => ['reset'], 'debug.event_dispatcher' => ['reset'], 'session_listener' => ['reset'], 'form.choice_list_factory.cached' => ['reset'], 'cache.validator_expression_language' => ['reset'], 'twig' => ['resetGlobals'], 'twig.form.engine' => ['reset'], 'doctrine' => ['reset'], 'doctrine.debug_data_holder' => ['reset'], 'form.type.entity' => ['reset']]);
    }
}
