<?php

namespace Controllers;

use \Lib\Search\RunSearch as Search;

Class SearchController
{
	function search()
	{
		return 'search/search';
	}

	function advancedSearch()
	{
		return 'search/advanced';
	}

	function results()
	{
		$results = Search::go();

		\Lib\Utils\Template::assign('results', $results);

		return 'search/results';
	}
}