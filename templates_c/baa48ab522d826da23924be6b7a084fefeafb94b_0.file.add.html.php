<?php
/* Smarty version 3.1.30, created on 2020-09-12 23:19:56
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\service\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f5d3b7ca26f89_29136769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa48ab522d826da23924be6b7a084fefeafb94b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\service\\add.html',
      1 => 1599945564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d3b7ca26f89_29136769 (Smarty_Internal_Template $_smarty_tpl) {
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
declaration/liste">Declaration</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">service</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/liste">contact</a></li>
            </ul>
        </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:10px;">
			<div class="panel panel-info">
				<div class="panel-heading">FORMULAIRE SERVICE</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/add">
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prenom</label>
							<input class="form-control" type="text" name="prenom" id="prenom"/>
						</div>
						<div class="form-group">
							<label class="control-label">Telephone</label>
							<input class="form-control" type="text" name="tel" id="tel"/>
						</div>
						<div class="form-group">
							<label class="control-label">Adress</label>
							<input class="form-control" type="text" name="adress" id="adress"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="text" name="email" id="email"/>
						</div>
						<div class="form-group">
							<label class="control-label">Type</label>
							<input class="form-control" type="text" name="type" id="type"/>
						</div>
						<div class="form-group">
							<label class="control-label">Description</label>
							<input class="form-control" type="text" name="description" id="description"/>
						</div>

						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">Retour </a>
			</div>
		</div>
	</body>
</html><?php }
}
