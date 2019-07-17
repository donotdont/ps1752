<?php
/* Smarty version 3.1.33, created on 2019-07-02 23:28:49
  from '/srv/http/ps1752/admini2/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1b8641a00551_95601431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7324d0cca43f9ac70065057472346f8320545f5c' => 
    array (
      0 => '/srv/http/ps1752/admini2/themes/default/template/content.tpl',
      1 => 1561554278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1b8641a00551_95601431 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
