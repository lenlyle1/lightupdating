<?php
/* Smarty version 3.1.29, created on 2016-07-16 19:56:07
  from "/var/www/lightupmylove.com/App/Views/search/search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a9157b15bc4_47199976',
  'file_dependency' => 
  array (
    '2a5f3a736b701e70e069379679bb87176345d98d' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/search/search.tpl',
      1 => 1468432131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_578a9157b15bc4_47199976 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_1805763234578a9157b03b28_88817555',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1767502528578a9157b0a7b2_36106609',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_1971144763578a9157b125c6_09793254',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_229469001578a9157b14637_13742351',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:search/search.tpl */
function block_1805763234578a9157b03b28_88817555($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:search/search.tpl */
function block_1767502528578a9157b0a7b2_36106609($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/search.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:search/search.tpl */
function block_1971144763578a9157b125c6_09793254($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:search/search.tpl */
function block_229469001578a9157b14637_13742351($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
	<h1>Search for users</h1>
</div>
<?php
}
/* {/block 'content'} */
}
