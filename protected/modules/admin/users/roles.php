<?php

global $smarty;

$roles = Roles::loadAll();

$smarty->assign('roles', $roles);