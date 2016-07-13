<?php
/* Smarty version 3.1.29, created on 2016-06-20 20:32:51
  from "/var/www/lightupmylove.com/App/Views/user/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576852f37b8119_80792358',
  'file_dependency' => 
  array (
    '7aa480ea1da3ad551d80209ebe613733814c6a16' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/signup.tpl',
      1 => 1466454767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
    'file:user/signupForm.tpl' => 1,
  ),
),false)) {
function content_576852f37b8119_80792358 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/Lib/Templating/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/Lib/Templating/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_initScript')) require_once '/var/www/lightupmylove.com/App/Lib/Templating/Smarty/plugins/function.initScript.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_1718592057576852f377fa02_00442427',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1454370854576852f379e6c3_95976370',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_1898054684576852f37a3c78_23975983',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1893630755576852f37aef52_56880082',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:user/signup.tpl */
function block_1718592057576852f377fa02_00442427($_smarty_tpl, $_blockParentStack) {
?>
 - Sign up<?php
}
/* {/block 'title'} */
/* {block 'css'}  file:user/signup.tpl */
function block_1454370854576852f379e6c3_95976370($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/signup.tpl */
function block_1898054684576852f37a3c78_23975983($_smarty_tpl, $_blockParentStack) {
?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/validation.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/signup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/popup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/overlay.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/alerts.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1136089219765315',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {
	     		return;
     	 }
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	<?php echo '</script'; ?>
>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:user/signup.tpl */
function block_1893630755576852f37aef52_56880082($_smarty_tpl, $_blockParentStack) {
?>

	
	
   <?php echo smarty_function_initScript(array('script'=>'Signup'),$_smarty_tpl);?>

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
