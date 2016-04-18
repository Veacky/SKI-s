<?php
/* Smarty version 3.1.30-dev/59, created on 2016-04-18 16:30:40
  from "/home/domeconnection/public_html/valerian/views/categories.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_571543f0da0856_99963427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78d1803d2def625229ae549358816e37ebedd196' => 
    array (
      0 => '/home/domeconnection/public_html/valerian/views/categories.html',
      1 => 1461011439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571543f0da0856_99963427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container top">
	<div class="row">
		<div class="col-sm-12">
			<h4>Cliquez sur une categorie pour en afficher les skis :</h4>
		</div>
	</div>
	<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved = $_smarty_tpl->tpl_vars['cat'];
?>
			<div class="col-sm-2">
				<div class="thumbnail cat-choice btn-default" id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
">
				  <!-- <img src="img/<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"> -->
				  <div class="caption">
					<h3><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h3>
					<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['desc'];?>
</p>
				  </div>
				</div>
			</div>
			<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</div>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<hr class="tall">
		</div>
	</div>
</div>

	<div class="container products">
		  <!-- ici est ajouter l'affichage des produits depuis le JS -->
	</div>
<?php }
}
