<?php

namespace Container95npdFV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Listener_Mercure_PublishService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.listener.mercure.publish' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\EventListener\PublishMercureUpdatesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Messenger/DispatchTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/EventListener/PublishMercureUpdatesListener.php';

        return $container->privates['api_platform.doctrine.orm.listener.mercure.publish'] = new \ApiPlatform\Core\Bridge\Doctrine\EventListener\PublishMercureUpdatesListener(($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()), ($container->privates['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['serializer'] ?? $container->getSerializerService()), $container->parameters['api_platform.formats'], NULL, ($container->privates['Symfony\\Component\\Mercure\\HubRegistry'] ?? $container->getHubRegistryService()), NULL, NULL);
    }
}
