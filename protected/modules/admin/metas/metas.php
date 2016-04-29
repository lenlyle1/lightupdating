<?php

$metas = array();

$metas['site'] = Metas::loadSite();

$metas['user'] = Metas::loadUser();

Template::assign('metas', $metas);

