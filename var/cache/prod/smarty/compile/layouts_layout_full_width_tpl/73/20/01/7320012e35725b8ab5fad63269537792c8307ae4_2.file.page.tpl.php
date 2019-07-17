<?php
/* Smarty version 3.1.33, created on 2019-07-02 23:49:58
  from '/srv/http/ps1752/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1b8b366022a0_68958042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7320012e35725b8ab5fad63269537792c8307ae4' => 
    array (
      0 => '/srv/http/ps1752/themes/classic/templates/page.tpl',
      1 => 1561554279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1b8b366022a0_68958042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8684090955d1b8b365fd9c9_82982685', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12573557865d1b8b365fe569_74956902 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20738438495d1b8b365fdef6_11394482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12573557865d1b8b365fe569_74956902', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7181958705d1b8b36600226_98190555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3844831075d1b8b36600913_47857719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8153900405d1b8b365ffc86_31272319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7181958705d1b8b36600226_98190555', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3844831075d1b8b36600913_47857719', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5500031745d1b8b36601756_34109205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18006243165d1b8b366012d8_94694231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5500031745d1b8b36601756_34109205', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8684090955d1b8b365fd9c9_82982685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8684090955d1b8b365fd9c9_82982685',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20738438495d1b8b365fdef6_11394482',
  ),
  'page_title' => 
  array (
    0 => 'Block_12573557865d1b8b365fe569_74956902',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8153900405d1b8b365ffc86_31272319',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7181958705d1b8b36600226_98190555',
  ),
  'page_content' => 
  array (
    0 => 'Block_3844831075d1b8b36600913_47857719',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18006243165d1b8b366012d8_94694231',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5500031745d1b8b36601756_34109205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20738438495d1b8b365fdef6_11394482', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8153900405d1b8b365ffc86_31272319', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18006243165d1b8b366012d8_94694231', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
