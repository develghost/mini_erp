<?php

namespace Container95npdFV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransactionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TransactionController' shared autowired service.
     *
     * @return \App\Controller\TransactionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TransactionController.php';

        $container->services['App\\Controller\\TransactionController'] = $instance = new \App\Controller\TransactionController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\TransactionController', $container));

        return $instance;
    }
}
