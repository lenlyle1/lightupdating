<?php

$sites = Site::loadAll();

global $smarty;
$smarty->assign('sites', $sites);