<?php
/* Smarty version 3.1.30, created on 2020-09-12 21:21:20
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f5d1fb02def91_15628322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac2919b1990c59b5840ac45ae6207701eac5dd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\accueil\\index.html',
      1 => 1599902472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d1fb02def91_15628322 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page d'accueil</title>
	<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/b.css"/>
	<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
	
	<?php echo '<script'; ?>
 language=javascript>
		function load_design() {
			document.getElementById("design_js").style.color = "#40007d";
		}

	<?php echo '</script'; ?>
>
	
</head>

<body onload="load_design()">
<form>
	<table>
		<tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/add"  style="width: 300px">INSCRIPTION</a></td></tr>
	</table>
</form>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
	<div class="panel panel-info">
		<div class="panel-heading">BIENVENUE SUR LE SITE  WEURIKO
			<hr>
			<?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
			<div class="alert alert-danger" style="font-size:18px; text-align:justify;">
				<?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>

			</div>
			<?php }?>
		</div>
		<div class="panel-body">

			<div class="alert alert-success" style="font-size:18px; text-align:justify;">

				<div class="container">
					<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/connexion">

						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<h2>Formulaire de connexion</h2>
								<br>

							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="sr-only" for="login">Nom d'Utilisateur</label>
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
										<input type="text" name="login" class="form-control" id="login"
											   placeholder="Entrez votre login" required autofocus>
									</div>
								</div>
							</div>
							<div class="col-md-3">

							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="password">Mot de passe</label>
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
										<input type="password" name="password" class="form-control" id="password"
											   placeholder="Entrez votrer Mot de passe" required>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->
                        </span>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 1rem">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success" name="connexion"><i class="fa fa-sign-in"></i> Connexion</button>
							</div>
						</div>
					</form>
				</div>

			</div>

		</div>
	</div>
</div>
</body>
</html>
<?php }
}
