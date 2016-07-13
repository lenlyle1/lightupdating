<?php
/* Smarty version 3.1.29, created on 2016-06-20 21:55:30
  from "/var/www/lightupmylove.com/App/Views/404/404.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57686652585d48_28996714',
  'file_dependency' => 
  array (
    '05310174274bc005bcaaf311405214ed8c42a204' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/404/404.tpl',
      1 => 1453931385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_57686652585d48_28996714 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_877677576576866525817c3_62091080',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:404/404.tpl */
function block_877677576576866525817c3_62091080($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
	<h1>Whoops! Something has gone wrong!</h1>
	<div>
		You appear to be trying to get to a page that doesn't exists.  This has been logged and if the page should exist, we will make sure it is back up as soon as possible :)
		<br />
		<br />
	</div>
</div>

<?php
}
/* {/block 'content'} */
}
