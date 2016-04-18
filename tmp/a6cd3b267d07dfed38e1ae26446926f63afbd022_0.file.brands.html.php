<?php
/* Smarty version 3.1.30-dev/59, created on 2016-04-18 16:56:24
  from "/home/domeconnection/public_html/valerian/views/brands.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_571549f8469fd7_96830639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cd3b267d07dfed38e1ae26446926f63afbd022' => 
    array (
      0 => '/home/domeconnection/public_html/valerian/views/brands.html',
      1 => 1461012982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571549f8469fd7_96830639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container top">
	<div class="row">
		<div class="col-sm-12">
			<h4>Cliquez sur une marques pour en afficher les skis :</h4>
		</div>
	</div>

	<div class="row-centered">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_brand_0_saved = $_smarty_tpl->tpl_vars['brand'];
?>
			<div class="col-xs-4 col-sm-3 col-md-2">
				<div class="thumbnail brand-choice" id="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand'];?>
">
				  <img src="img/brand/<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand'];?>
.jpg" alt="Logo <?php echo $_smarty_tpl->tpl_vars['brand']->value['brand'];?>
">
				  <div class="caption">
						<h3><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand'];?>
</h3>
				  </div>
				</div>
			</div>
	<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</div>
</div>


	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<hr class="tall">
		</div>
	</div>

	<div class="container products">
		  <!-- ici est ajouter l'affichage des produits depuis le JS -->
	</div>
<?php }
}
