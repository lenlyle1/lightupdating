<?php

namespace Lib\Search;

use Lib\DB\Mysql;

Class RunSearch
{
	public function go()
	{
		global $memc;

		$sql = "SELECT u.id, u.username, i.image_url as image
				FROM users AS u
				LEFT JOIN user_images i
					ON u.id = i.user_id
				LIMIT 0, 9";

		$results = $memc->fetch($sql, array(), 'fetchAll', 5);

		return $results;
	}
}