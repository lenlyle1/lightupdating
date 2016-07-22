<?php
/* Smarty version 3.1.29, created on 2016-07-22 19:54:46
  from "/var/www/lightupmylove.com/App/Views/user/signup1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57927a06df40e5_70940980',
  'file_dependency' => 
  array (
    '7a9e21f202027a62e26bd5a2c9380d341b182767' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/signup1.tpl',
      1 => 1469217111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_57927a06df40e5_70940980 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedjs.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_129612951157927a06dd6020_04150414',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_12955893857927a06dde1c5_78495530',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_23716617457927a06de8284_40677710',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_119988548657927a06df29c2_03238895',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:user/signup1.tpl */
function block_129612951157927a06dd6020_04150414($_smarty_tpl, $_blockParentStack) {
?>
 - Sign up<?php
}
/* {/block 'title'} */
/* {block 'css'}  file:user/signup1.tpl */
function block_12955893857927a06dde1c5_78495530($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/signup1.tpl */
function block_23716617457927a06de8284_40677710($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/validation.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/signup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/popup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/overlay.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/alerts.js"),$_smarty_tpl);?>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:user/signup1.tpl */
function block_119988548657927a06df29c2_03238895($_smarty_tpl, $_blockParentStack) {
?>

	<div class="row">

	</div>

<?php
}
/* {/block 'content'} */
}
