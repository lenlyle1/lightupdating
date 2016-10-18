<?php
/* Smarty version 3.1.29, created on 2016-07-16 21:18:38
  from "/var/www/lightupmylove.com/App/Views/admin/login/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578aa4ae577311_58411593',
  'file_dependency' => 
  array (
    '9b126bca684a7834627c29d1bd7c4ec7d5bb75a0' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/admin/login/login.tpl',
      1 => 1466972347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
    'file:user/loginForm.tpl' => 1,
  ),
),false)) {
function content_578aa4ae577311_58411593 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedjs.php';
if (!is_callable('smarty_function_initScript')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.initScript.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_1301170905578aa4ae555380_14226222',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_797805082578aa4ae5593f5_14893194',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_872073062578aa4ae55cd85_25622141',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1629966707578aa4ae565883_51150720',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:admin/login/login.tpl */
function block_1301170905578aa4ae555380_14226222($_smarty_tpl, $_blockParentStack) {
?>
 - Login<?php
}
/* {/block 'title'} */
/* {block 'css'}  file:admin/login/login.tpl */
function block_797805082578aa4ae5593f5_14893194($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:admin/login/login.tpl */
function block_872073062578aa4ae55cd85_25622141($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/login.js"),$_smarty_tpl);?>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:admin/login/login.tpl */
function block_1629966707578aa4ae565883_51150720($_smarty_tpl, $_blockParentStack) {
?>

	
	<?php echo smarty_function_initScript(array('script'=>'Login'),$_smarty_tpl);?>

	<?php if (!empty($_SESSION['loggedIn'])) {?>
		logged in 
	<?php }?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/loginForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'content'} */
}
