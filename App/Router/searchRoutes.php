<?php


/*
	Search form
*/
$router->map( 'GET', '/search/?', 'SearchController#search');

/*
	Advanced Search form
*/
$router->map( 'GET', '/search/advanced/?', 'SearchController#advancedSearch');

/*
	Search results
*/
$router->map( 'GET', '/search/results/?', 'SearchController#results');