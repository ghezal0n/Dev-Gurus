<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'fournisseur', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/afficher_fourni' => [[['_route' => 'affichef', '_controller' => 'App\\Controller\\FournisseurController::affiche'], null, null, null, false, false, null]],
        '/ajouter_fourni' => [[['_route' => 'ajouterf', '_controller' => 'App\\Controller\\FournisseurController::ajouterf'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/afficher_prod' => [[['_route' => 'affichep', '_controller' => 'App\\Controller\\ProduitController::affichep'], null, null, null, false, false, null]],
        '/afficher_prod2' => [[['_route' => 'affichep2', '_controller' => 'App\\Controller\\ProduitController::affichep2'], null, null, null, false, false, null]],
        '/ajouter_prod' => [[['_route' => 'ajouterp', '_controller' => 'App\\Controller\\ProduitController::ajouterp'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/modifier(?'
                    .'|f/([^/]++)(*:191)'
                    .'|p/([^/]++)(*:209)'
                .')'
                .'|/fournisseur/supprimerf/([^/]++)(*:250)'
                .'|/produit/supprimerp/([^/]++)(*:286)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'modiferf', '_controller' => 'App\\Controller\\FournisseurController::modifierf'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'modifierp', '_controller' => 'App\\Controller\\ProduitController::modifierp'], ['idProd'], null, null, false, true, null]],
        250 => [[['_route' => 'supprimerf', '_controller' => 'App\\Controller\\FournisseurController::supprimerf'], ['id'], null, null, false, true, null]],
        286 => [
            [['_route' => 'supprimerp', '_controller' => 'App\\Controller\\ProduitController::supprimerp'], ['idProd'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
