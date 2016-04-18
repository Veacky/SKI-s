<?php
/* Smarty version 3.1.30-dev/59, created on 2016-04-18 16:16:16
  from "/home/domeconnection/public_html/valerian/views/product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57154090271110_64544394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b140525902f514cdf2c7d646df5ed7bb778f9dd' => 
    array (
      0 => '/home/domeconnection/public_html/valerian/views/product.html',
      1 => 1461010574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57154090271110_64544394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container top product">
  <div class="row">
    <div class="col-sm-3 col-md-3">
      <span class = "img-skis" style="background-image: url(img/skis/<?php echo $_smarty_tpl->tpl_vars['p']->value['brand'];?>
_<?php echo $_smarty_tpl->tpl_vars['p']->value['model'];?>
.jpg)"/><span>
    </div>
    <div class="col-sm-9 col-md-9">
      <div class="row">
        <div class="col-sm-9">
          <h2 class="inline model"><?php echo $_smarty_tpl->tpl_vars['p']->value['model'];?>
 </h2>
          <span class="glyphicon glyphicon-minus"></span>
          <h2 class="inline brand"> <?php echo $_smarty_tpl->tpl_vars['p']->value['brand'];?>
</h2>
          <h3>Catégorie : <?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</h3>
          <br>
        </div>
        <div class="col-sm-3">
          <button title="<?php echo $_smarty_tpl->tpl_vars['p']->value['favTitle'];?>
" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['p']->value['favClass'];?>
 need-margTop-plz" role="button"><span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['p']->value['favGlyphicon'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['p']->value['favTitle'];?>
</button>
        </div>
      </div>

        <h4>Description du ski :</h4>
          <p class="details">Al Dente a été conçu et immaginé pour correspondre parfaitement aux attentes d'Henrik Harlaut : un ski très souple permettant d'avoir une polyvalance etrême dans le park ou dans la montagne. C'est un ski très ludique qui est parfait pour les Butters, les Gaps ou même réaliser dans transferts dans le park; mais il est aussi très performant all montain. Il s'inscrit dans la lignée de l'ARV.</p>
      <br>
        <h4>Caracteritiques :</h4>
          <p class="details">L'Al Dente bénéficie lui aussi de la technologie AR50 avec un champs droit sous la zone de pilotage et une construction Cap spatule et talon. SEMELLE S7 base. CARRES 2.2 mm. Tiges carbone et kevlar. Plaque métal laminée.</p>
      <br>
      <div class="row">
        <div class="col-sm-8">
          <h4> Tailles et dimentions :</h4>
          <p class="details">
            • Ligne de cöte : <b>123 - 98 - 133</b> mm <br>
            • Poids : <b>1 700</b>g  le ski <br>
            • Tailles : <b>168</b>, <b>178</b>, <b>188</b> cm <br>
            • Rayon : <b>20.5</b>m
          </p>
        <br>
        </div>
        <div class="col-sm-4">
          <h4 class="price">Prix :</h4>
          <span class="price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
€</span>
        </div>
      </div>
    </div>


  </div>
</div>
<?php }
}
