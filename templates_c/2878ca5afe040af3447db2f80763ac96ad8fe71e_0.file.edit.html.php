<?php
/* Smarty version 3.1.30, created on 2020-09-03 21:17:39
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\contact\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f5141536580b0_40214702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2878ca5afe040af3447db2f80763ac96ad8fe71e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\contact\\edit.html',
      1 => 1599158037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5141536580b0_40214702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
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
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Produit</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">Service</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Sortie</a></li>
            </ul>
        </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Contact/update">
						<div class="form-group">
							<label class="control-label">ID du Contact</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['nom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prenom</label>
							<input class="form-control" type="text" name="prenom" id="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['prenom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Telephone</label>
							<input class="form-control" type="text" name="tel" id="tel" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['tel'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Adress</label>
							<input class="form-control" type="text" name="adress" id="adress" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['adress'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="text" name="email" id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['email'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Message</label>
							<input class="form-control" type="text" name="message" id="message" value="<?php if (isset($_smarty_tpl->tpl_vars['service']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['service']->value['message'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Contact/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
