<?php
/* Smarty version 3.1.30-dev/59, created on 2016-04-15 08:41:37
  from "/home/domeconnection/public_html/valerian/views/product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_5710e1816419a2_66917924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b140525902f514cdf2c7d646df5ed7bb778f9dd' => 
    array (
      0 => '/home/domeconnection/public_html/valerian/views/product.html',
      1 => 1460724096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5710e1816419a2_66917924 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved = $_smarty_tpl->tpl_vars['p'];
?>
    <?php echo $_smarty_tpl->tpl_vars['p']->value['model'];?>

    <?php echo $_smarty_tpl->tpl_vars['p']->value['brand'];?>

    <?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>

  <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>
<?php }
}
