<?php
/* Smarty version 3.1.29, created on 2016-07-17 22:51:28
  from "/var/www/lightupmylove.com/App/Views/site-css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578c0bf02097e6_96819680',
  'file_dependency' => 
  array (
    '7e940f4f5e78f8ed73d702d8a9d528eb7b39a2ca' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/site-css.tpl',
      1 => 1468795884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578c0bf02097e6_96819680 ($_smarty_tpl) {
?>
<style>

body {
	/*background-color: <?php echo $_smarty_tpl->tpl_vars['swatch7']->value;?>
;*/
}
header, footer {
	background-color: <?php echo $_smarty_tpl->tpl_vars['swatch1']->value;?>
;
	color: <?php echo $_smarty_tpl->tpl_vars['swatch2']->value;?>
;

}
.main-body{
	background-color: #fff;
}
.main-body {
	border: 3px solid <?php echo $_smarty_tpl->tpl_vars['swatch10']->value;?>
;
	border-top: 0px;
	border-bottom: 0px;
}
.btn-head {
	background-color: <?php echo $_smarty_tpl->tpl_vars['swatch2']->value;?>
;
	color: <?php echo $_smarty_tpl->tpl_vars['swatch5']->value;?>
;
	margin-top: 10px;
}
label {
	color: <?php echo $_smarty_tpl->tpl_vars['swatch4']->value;?>
;
}

.user-brief > .username {
	background-color: <?php echo $_smarty_tpl->tpl_vars['swatch3']->value;?>
;
}

</style>

<?php }
}
