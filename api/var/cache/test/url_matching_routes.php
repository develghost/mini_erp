<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/transaction_action' => [[['_route' => 'api_transactions_put_transaction_item', '_controller' => 'App\\Controller\\TransactionController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put_transaction'], null, ['PUT' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(index)?(?:\\.([^/]++))?(*:31)'
                .'|/docs(?:\\.([^/]++))?(*:58)'
                .'|/c(?'
                    .'|o(?'
                        .'|ntexts/(.+)(?:\\.([^/]++))?(*:100)'
                        .'|mpanies(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:136)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:174)'
                            .')'
                        .')'
                    .')'
                    .'|lients(?'
                        .'|(?:\\.([^/]++))?(?'
                            .'|(*:212)'
                        .')'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:250)'
                        .')'
                    .')'
                .')'
                .'|/transactions(?:\\.([^/]++))?(*:289)'
                .'|/employees(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:328)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:366)'
                    .')'
                .')'
                .'|/providers(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:407)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:445)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        100 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        136 => [
            [['_route' => 'api_companies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_companies_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        174 => [
            [['_route' => 'api_companies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_companies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_companies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_companies_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Company', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        212 => [
            [['_route' => 'api_clients_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        250 => [
            [['_route' => 'api_clients_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_clients_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_clients_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        289 => [[['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        328 => [
            [['_route' => 'api_employees_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_employees_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        366 => [
            [['_route' => 'api_employees_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_employees_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_employees_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_employees_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Employee', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        407 => [
            [['_route' => 'api_providers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_providers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        445 => [
            [['_route' => 'api_providers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_providers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_providers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_providers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Provider', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
