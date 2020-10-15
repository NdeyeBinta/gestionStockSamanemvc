<?php
/* Smarty version 3.1.30, created on 2020-09-13 16:58:34
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\trouver\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f5e339a5f8926_91824804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5536746a4ddc7899a37ec81e8e5e59e0f8425ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\trouver\\edit.html',
      1 => 1599902460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e339a5f8926_91824804 (Smarty_Internal_Template $_smarty_tpl) {
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
declaration/liste">Produit</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">service</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/liste">Contact</a></li>
            </ul>
        </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Trouver/update">
						<div class="form-group">
							<label class="control-label">ID du Contact</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['id'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Titre de l'article</label>
							<input class="form-control" type="text" name="titre" id="titre" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['nom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Categorie</label>
							<input class="form-control" type="text" name="categorie" id="categorie" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['prenom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Information Suplementaire</label>
							<input class="form-control" type="text" name="info" id="info" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['message'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Telephone</label>
							<input class="form-control" type="text" name="tel" id="tel" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['tel'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Adress</label>
							<input class="form-control" type="text" name="adress" id="adress" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['adress'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="text" name="email" id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['email'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Image</label>
							<input class="form-control" type="text" name="pic" id="pic" value="<?php if (isset($_smarty_tpl->tpl_vars['trouver']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['trouver']->value['email'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Trouver/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
