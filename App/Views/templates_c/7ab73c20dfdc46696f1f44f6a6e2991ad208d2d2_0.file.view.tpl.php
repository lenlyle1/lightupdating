<?php
/* Smarty version 3.1.29, created on 2016-07-16 20:33:56
  from "/var/www/lightupmylove.com/App/Views/user/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a9a34761676_24957039',
  'file_dependency' => 
  array (
    '7ab73c20dfdc46696f1f44f6a6e2991ad208d2d2' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/view.tpl',
      1 => 1468701233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_578a9a34761676_24957039 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_436307098578a9a3474e0d7_38239305',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_349013801578a9a34755ce0_48237003',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_931767235578a9a34758d60_52491145',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:user/view.tpl */
function block_436307098578a9a3474e0d7_38239305($_smarty_tpl, $_blockParentStack) {
?>
 - Sign up<?php
}
/* {/block 'title'} */
/* {block 'js'}  file:user/view.tpl */
function block_349013801578a9a34755ce0_48237003($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:user/view.tpl */
function block_931767235578a9a34758d60_52491145($_smarty_tpl, $_blockParentStack) {
?>

<?php echo var_dump($_smarty_tpl->tpl_vars['user']->value);?>

<?php
}
/* {/block 'content'} */
}
