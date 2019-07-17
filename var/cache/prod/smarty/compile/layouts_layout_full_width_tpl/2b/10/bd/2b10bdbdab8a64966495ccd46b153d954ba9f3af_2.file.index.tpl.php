<?php
/* Smarty version 3.1.33, created on 2019-07-02 23:49:58
  from '/srv/http/ps1752/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1b8b365fb082_87185914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b10bdbdab8a64966495ccd46b153d954ba9f3af' => 
    array (
      0 => '/srv/http/ps1752/themes/classic/templates/index.tpl',
      1 => 1561554279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1b8b365fb082_87185914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2701536475d1b8b365f8a75_40004805', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5623940455d1b8b365f9022_75230028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14906489905d1b8b365f9d67_66406408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10176731875d1b8b365f9859_04595965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14906489905d1b8b365f9d67_66406408', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2701536475d1b8b365f8a75_40004805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2701536475d1b8b365f8a75_40004805',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5623940455d1b8b365f9022_75230028',
  ),
  'page_content' => 
  array (
    0 => 'Block_10176731875d1b8b365f9859_04595965',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14906489905d1b8b365f9d67_66406408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5623940455d1b8b365f9022_75230028', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10176731875d1b8b365f9859_04595965', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
