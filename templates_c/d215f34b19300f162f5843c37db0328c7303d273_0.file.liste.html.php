<?php
/* Smarty version 3.1.30, created on 2020-09-04 00:00:50
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\produit\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f516792f176b6_74130054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215f34b19300f162f5843c37db0328c7303d273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\produit\\liste.html',
      1 => 1599157456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f516792f176b6_74130054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
    <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
            <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Produit</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">service</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/liste">contact</a></li>
        </ul>
    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['produits']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['produits']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Libele</th>
									<th>Quantite Stock</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['libP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['qtStock'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/delete/<?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/edit/<?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/add">Ajout d'un produit</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
