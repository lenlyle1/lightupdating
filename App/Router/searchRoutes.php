<?php


/*
	Search form
*/
$router->map( 'GET', '/search/?', 'SearchController#results');

/*
	Advanced Search form
*/
$router->map( 'GET', '/search/advanced/?', 'SearchController#advancedSearch');

/*
	Search results
*/
$router->map( 'GET', '/search/results/?', 'SearchController#results');