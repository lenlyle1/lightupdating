<?php
/* Smarty version 3.1.29, created on 2016-07-13 18:42:14
  from "/var/www/lightupmylove.com/App/Views/search/results.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57868b867fbd28_69612573',
  'file_dependency' => 
  array (
    '03682dc02bf35a63d12c3cf7f49c12730f12d7e6' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/search/results.tpl',
      1 => 1468433150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_57868b867fbd28_69612573 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/Lib/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/Lib/SmartyPlugins/function.embedjs.php';
if (!is_callable('smarty_function_initScript')) require_once '/var/www/lightupmylove.com/App/Lib/SmartyPlugins/function.initScript.php';
if (!is_callable('smarty_function_generate_resized_image')) require_once '/var/www/lightupmylove.com/App/Lib/SmartyPlugins/function.generate_resized_image.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_42168633457868b867e9181_17797464',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_4248800257868b867eb7e1_88973719',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_101112519557868b867ef9f8_01731140',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_22071059557868b867f3131_37668828',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:search/results.tpl */
function block_42168633457868b867e9181_17797464($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:search/results.tpl */
function block_4248800257868b867eb7e1_88973719($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/search.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:search/results.tpl */
function block_101112519557868b867ef9f8_01731140($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/search.js"),$_smarty_tpl);?>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:search/results.tpl */
function block_22071059557868b867f3131_37668828($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_initScript(array('script'=>'Search'),$_smarty_tpl);?>


	<div class="row">
		Search Results

		<?php
$_from = $_smarty_tpl->tpl_vars['results']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_result_0_saved_item = isset($_smarty_tpl->tpl_vars['result']) ? $_smarty_tpl->tpl_vars['result'] : false;
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_0_saved_local_item = $_smarty_tpl->tpl_vars['result'];
?>
			<div class="user-brief">
				<?php echo smarty_function_generate_resized_image(array('img'=>((string)$_smarty_tpl->tpl_vars['result']->value)."->image",'width'=>"300"),$_smarty_tpl);?>

			</div>
		<?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved_local_item;
}
if ($__foreach_result_0_saved_item) {
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved_item;
}
?>
	</div>
<?php
}
/* {/block 'content'} */
}
