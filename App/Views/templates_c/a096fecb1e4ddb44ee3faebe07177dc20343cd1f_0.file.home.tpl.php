<?php
/* Smarty version 3.1.29, created on 2016-06-19 21:53:25
  from "/var/www/lightupmylove.com/App/Views/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57671455671ca1_57012522',
  'file_dependency' => 
  array (
    'a096fecb1e4ddb44ee3faebe07177dc20343cd1f' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/home.tpl',
      1 => 1466372895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_57671455671ca1_57012522 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_212349719557671455667a50_59640247',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1607645505767145566a350_22221391',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_6734544285767145566d332_10299354',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

		
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_15737247775767145566fdf9_25931335',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:home.tpl */
function block_212349719557671455667a50_59640247($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'css'}  file:home.tpl */
function block_1607645505767145566a350_22221391($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:home.tpl */
function block_6734544285767145566d332_10299354($_smarty_tpl, $_blockParentStack) {
?>


<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:home.tpl */
function block_15737247775767145566fdf9_25931335($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
	Home page
</div>
<?php
}
/* {/block 'content'} */
}
