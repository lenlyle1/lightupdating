<?php
/* Smarty version 3.1.29, created on 2016-07-22 20:02:01
  from "/var/www/lightupmylove.com/App/Views/user/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57927bb9b94996_46248519',
  'file_dependency' => 
  array (
    '7aa480ea1da3ad551d80209ebe613733814c6a16' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/signup.tpl',
      1 => 1469217718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
    'file:user/signupForm.tpl' => 1,
  ),
),false)) {
function content_57927bb9b94996_46248519 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_186623692557927bb9b818e7_55987872',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_137508134157927bb9b846e4_94305349',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_134143281657927bb9b8b167_70677409',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_140875965357927bb9b8da91_24827814',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:user/signup.tpl */
function block_186623692557927bb9b818e7_55987872($_smarty_tpl, $_blockParentStack) {
?>
 - Sign up<?php
}
/* {/block 'title'} */
/* {block 'css'}  file:user/signup.tpl */
function block_137508134157927bb9b846e4_94305349($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/signup.tpl */
function block_134143281657927bb9b8b167_70677409($_smarty_tpl, $_blockParentStack) {
?>

	


<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:user/signup.tpl */
function block_140875965357927bb9b8da91_24827814($_smarty_tpl, $_blockParentStack) {
?>

	
	
	<div class="row">
		<?php if (!empty($_smarty_tpl->tpl_vars['prelaunch']->value)) {?>
		<div class="row">
			<p>The site will be launching in the next month.  Please sign up to be notified when we go live.</p>

			<p>The first 1,000 people to sign up will be automatically upgraded to a premium account for free.</p>
		</div>
		<?php }?>
		<h1>Signup</h1>
	</div>
	<div class="row error hidden" id="errorBox"></div>
	<div class="row">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/signupForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>

<?php
}
/* {/block 'content'} */
}
