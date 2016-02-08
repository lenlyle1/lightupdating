<?php

$roles = Roles::loadAll();

Template::assign('roles', $roles);