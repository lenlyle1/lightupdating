<?php
/* Smarty version 3.1.29, created on 2016-07-13 17:04:04
  from "/var/www/lightupmylove.com/App/Views/pages/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57867484b234e1_49043317',
  'file_dependency' => 
  array (
    'bf8c5b08a00e165848d12019ec51f8c03a87a3ce' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/pages/home.tpl',
      1 => 1468429359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_57867484b234e1_49043317 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_211328196257867484b19c76_02076866',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_147340486357867484b1c846_87731608',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_76613237957867484b1f5d6_94990835',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_69176744857867484b21bc1_37697469',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:pages/home.tpl */
function block_211328196257867484b19c76_02076866($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:pages/home.tpl */
function block_147340486357867484b1c846_87731608($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:pages/home.tpl */
function block_76613237957867484b1f5d6_94990835($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:pages/home.tpl */
function block_69176744857867484b21bc1_37697469($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
	Home
</div>
<?php
}
/* {/block 'content'} */
}
