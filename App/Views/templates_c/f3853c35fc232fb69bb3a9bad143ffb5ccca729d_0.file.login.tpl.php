<?php
/* Smarty version 3.1.29, created on 2016-07-17 12:34:11
  from "/var/www/lightupmylove.com/App/Views/user/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578b7b431d02c6_08558552',
  'file_dependency' => 
  array (
    'f3853c35fc232fb69bb3a9bad143ffb5ccca729d' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/login.tpl',
      1 => 1466972347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
    'file:user/loginForm.tpl' => 1,
  ),
),false)) {
function content_578b7b431d02c6_08558552 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_761628357578b7b431c0864_12688115',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_341695887578b7b431c43b2_75729757',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_159270947578b7b431ca6e4_96257077',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:user/login.tpl */
function block_761628357578b7b431c0864_12688115($_smarty_tpl, $_blockParentStack) {
?>
 - Sign up<?php
}
/* {/block 'title'} */
/* {block 'js'}  file:user/login.tpl */
function block_341695887578b7b431c43b2_75729757($_smarty_tpl, $_blockParentStack) {
?>

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
/* {block 'content'}  file:user/login.tpl */
function block_159270947578b7b431ca6e4_96257077($_smarty_tpl, $_blockParentStack) {
?>



	<div class="row">
		<h1>Login</h1>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/loginForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>

	<div class="row">
		<div class="btn btn-blue" onclick="Login.fbLogin();">Facebook <i class="fa fa-facebook"></i></div>
		<form name="facebookForm" id="facebook_signup" action="/user/signup" method="post">
			<input type="hidden" name="first_name" id="first_name" />
			<input type="hidden" name="last_name" id="last_name" />
			<input type="hidden" name="email" id="email" />
			<input type="hidden" name="picture" id="picture" />
			<input type="hidden" name="gender" id="gender" />
			<input type="hidden" name="timezone" id="timezone" />
			<input type="hidden" name="locale" id="locale" />
		</form>
	</div>
<?php
}
/* {/block 'content'} */
}
