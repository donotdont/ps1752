<?php
/* Smarty version 3.1.33, created on 2019-07-02 23:28:45
  from '/srv/http/ps1752/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1b863dc7fb93_23044843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f76716c8e9479c23ebaaa15b5e87e6c5b13d47' => 
    array (
      0 => '/srv/http/ps1752/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1561554279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1b863dc7fb93_23044843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
