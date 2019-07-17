<?php
/* Smarty version 3.1.33, created on 2019-07-02 23:28:45
  from '/srv/http/ps1752/admini2/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1b863d796af9_03027786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5424231f8852cf3d425dceddb5e622bc3f92c23e' => 
    array (
      0 => '/srv/http/ps1752/admini2/themes/new-theme/template/content.tpl',
      1 => 1561554278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1b863d796af9_03027786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
