<?php

global $site; 

$offset = (empty($_GET['var1']) ? 0 : $_GET['var1']);
$count = (empty($_GET['var2']) ? 10 : $_GET['var2']);

// load users
$users = Users::fetchList($offset, $count);
$usersTotal = Users::fetchTotalCount($site->site_id);

Template::assign('users', $users);
Template::assign('usersTotal', $usersTotal);

