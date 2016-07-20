<?php
/* Smarty version 3.1.29, created on 2016-07-16 19:53:21
  from "/var/www/lightupmylove.com/App/Views/search/results.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a90b16fa774_88733952',
  'file_dependency' => 
  array (
    '03682dc02bf35a63d12c3cf7f49c12730f12d7e6' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/search/results.tpl',
      1 => 1468698798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_578a90b16fa774_88733952 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedjs.php';
if (!is_callable('smarty_function_initScript')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.initScript.php';
if (!is_callable('smarty_function_generate_resized_image')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.generate_resized_image.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_934355133578a90b16d33e5_82917464',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1178924108578a90b16db5a8_19553391',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_1522437781578a90b16e9435_17378047',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_273772082578a90b16ee6d5_36861837',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:search/results.tpl */
function block_934355133578a90b16d33e5_82917464($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:search/results.tpl */
function block_1178924108578a90b16db5a8_19553391($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/search.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:search/results.tpl */
function block_1522437781578a90b16e9435_17378047($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/search.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/results.js"),$_smarty_tpl);?>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:search/results.tpl */
function block_273772082578a90b16ee6d5_36861837($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_initScript(array('script'=>'Search'),$_smarty_tpl);?>

	<?php echo smarty_function_initScript(array('script'=>'Results'),$_smarty_tpl);?>


	<div class="row">
		<h1>Search Results</h1>
		<div class="search-results">
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
				<div class="user-brief" data-id="<?php echo $_smarty_tpl->tpl_vars['result']->value->id;?>
">
					<?php echo smarty_function_generate_resized_image(array('img'=>$_smarty_tpl->tpl_vars['result']->value->thumbnail,'width'=>"200"),$_smarty_tpl);?>

					<div class="username">
						<div><?php echo $_smarty_tpl->tpl_vars['result']->value->username;?>
</div>
					</div>
					<div class="details"></div>
				</div>
			<?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved_local_item;
}
if ($__foreach_result_0_saved_item) {
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved_item;
}
?>
		</div>
	</div>
<?php
}
/* {/block 'content'} */
}
