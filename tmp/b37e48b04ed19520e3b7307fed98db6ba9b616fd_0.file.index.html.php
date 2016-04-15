<?php
/* Smarty version 3.1.30-dev/59, created on 2016-04-15 10:40:36
  from "/home/domeconnection/public_html/valerian/views/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_5710fd64d77ae9_79864249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37e48b04ed19520e3b7307fed98db6ba9b616fd' => 
    array (
      0 => '/home/domeconnection/public_html/valerian/views/index.html',
      1 => 1460731231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5710fd64d77ae9_79864249 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- SUGGESTIONS -->

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header full">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>SKI's</h1>
						                  <hr class="tall">
                        <span class="subheading">Decouvrez les skis dans toutes leurs largeurs.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-links">
                      <a href="categories.php"><button type="button" class="btn btn-primary">Consulter par categorie</button></a>
                      <a href="brands.php"><button type="button" class="btn btn-primary">Consulter par marque</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="sub-container">
      <div class="row content-title">
        <h2>La suggestion du chef :</2>
      </div>
      <div class="row products">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suggest']->value, 's');
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$__foreach_s_0_saved = $_smarty_tpl->tpl_vars['s'];
?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail product">
              <!-- <img class="product-image" src="img/..." alt="Image du ski"> -->
              <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['s']->value['model'];?>
 <small><span class="glyphicon glyphicon-minus"></span> <?php echo $_smarty_tpl->tpl_vars['s']->value['brand'];?>
</small></h3>
                <p>Description du ski</p>
                <p class="price inline"><b><?php echo $_smarty_tpl->tpl_vars['s']->value['price'];?>
€</b></p>
                <p class="boutons inline">
                  <a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id_ski'];?>
" class="btn btn-default pull-right" role="button"><span class="glyphicon glyphicon-menu-right"></span> Consulter</a>
                  <a href="#" title="Ajouter aux favoris" class="btn btn-default pull-right" role="button"><span class="glyphicon glyphicon-star-empty"></span></a>
                </p>
            </div>
          </div>
        </div>
      <?php
$_smarty_tpl->tpl_vars['s'] = $__foreach_s_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </div>
  </div>
<?php }
}
