<?php
/* Smarty version 3.1.29, created on 2016-07-13 17:48:54
  from "/var/www/lightupmylove.com/App/Views/search/search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57867f066bb954_05646452',
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
function content_57867f066bb954_05646452 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/Lib/Templating/Smarty/plugins/function.embedcss.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_27681034657867f066a17b8_08645133',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_183269834457867f066a83e6_41504996',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_9669511457867f066b4aa5_31249654',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_106307566757867f066ba309_11203192',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:search/search.tpl */
function block_27681034657867f066a17b8_08645133($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:search/search.tpl */
function block_183269834457867f066a83e6_41504996($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/search.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:search/search.tpl */
function block_9669511457867f066b4aa5_31249654($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:search/search.tpl */
function block_106307566757867f066ba309_11203192($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
	<h1>Search for users</h1>
</div>
<?php
}
/* {/block 'content'} */
}
