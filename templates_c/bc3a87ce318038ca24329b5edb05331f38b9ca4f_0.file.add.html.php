<?php
/* Smarty version 3.1.30, created on 2020-09-17 23:05:40
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\trouver\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f63cfa45557f4_33671259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc3a87ce318038ca24329b5edb05331f38b9ca4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\trouver\\add.html',
      1 => 1600376736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f63cfa45557f4_33671259 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/b.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>

	<style>
		h1{
			color: #40007d;
		}
	</style>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.3.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/cufon-yui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/arial.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/cuf_run.js"><?php echo '</script'; ?>
>
	<style>
		.td{

			text-decoration-color:#9a161a;
			color: red;


		}
		.td1{

			text-decoration-color:#9a161a;
			color:green;
			border-width: medium;
			background-size: 200px;

		}
		.t{

			text-decoration-color:#9a161a;
			color: red;
			width: 100px;
			font-size: large;


		}
		.slideshow {

			width: 280px;

			height: 280px;

			overflow: hidden;

			border: 3px solid #F2F2F2;

		}

		.slideshow ul {

			/* 3 images donc 4 x 100% */

			width: 280%;

			height: 280px;

			padding:0; margin:0;

			list-style: none;

		}

		.slideshow li {

			float: left;

		}
	</style>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/imag.js"><?php echo '</script'; ?>
>
</head>
<body >
<!-- START PAGE SOURCE -->
<div class="main" >
	<div class="main_resize">
		<div class="header">
			<div class="menu_nav">
				<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/CaptureW.PNG" align="left"   width="100" height=50" alt="" />
				<ul>

					<li class="active" class="td1"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/index">Accueil</a></li>
					<li class="td1"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
declaration/add">Publier une declaration</a></li>
					<li class="td1" ><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
trouver/liste">Trouver mon objet</a></li>
					<li class="td1" ><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">Service</a></li>
					<li class="td1"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/add">Contact</a></li>
				</ul>
				<div class="clr"></div>
			</div>
			<div class="hbg">
				<h2 class="t"><span>objet trouver</span></h2>
			</div>
		</div>
		<div class="content">

			<div class="content_bg">
				<div class="mainbar">
					<div class="article">
						<h2 class="t"><span> RETROUVER VOTRE OBJET </span></h2>
						<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:10px;">
							<div class="panel panel-info">
								<div class="panel-heading">FORMULAIRE DECLARATION</div>
								<div class="panel-body">
									<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
									<div class="alert alert-success">Données ajoutées!</div>
									<?php } else { ?>
									<div class="alert alert-danger">Erreur!</div>
									<?php }?>
									<?php }?>
									<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
trouver/add" enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label">Titre</label>
											<input class="form-control" type="text" name="titre" id="titre"/>
										</div>
										<div class="form-group">
											<label class="control-label">Categorie</label>
											<input class="form-control" type="text" name="categorie" id="categorie"/>
										</div>
										<div class="form-group">
											<label class="control-label">Description</label>
											<input class="form-control" type="text" name="info" id="info"/>
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
											<label class="control-label">Recompense</label>
											<input class="form-control" type="text" name="rec" id="rec"/>
										</div>
										<div class="form-group">
											<label class="control-label">Date perte</label>
											<input class="form-control" type="date" name="day" id="day"/>
										</div>
										<div class="form-group">
											<label class="control-label">Choisir l'image de l'objet</label>
											<input class="form-control" type="file" name="pic" id="pic"/>
										</div>
										<div class="form-group">
											<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
											<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
										</div>
									</form>
								</div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
trouver/liste">Retour </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar">
				<div class="gadget">
					<p style="text-decoration-color:red"  class="td">SELECTIONNEZ UNE  CATEGORIE</p>
					<div class="search">
						<form method="get" id="search" action="#">
                                <span>
                                <select name="matiere" id="matiere" class="form-control">
									<option value="">faite un choix</option>
									<option value="PHP">Piece d'identite</option>
									<option value="JAVA">Passports</option>
									<option value="C#">Permis de conduire</option>
									<option value="JavaScript">Telephones</option>
									<option value="HTML">Ordinateurs</option>
									<option value="AngularJS">Diplomes</option>
									<option value="AngularJS">Livres</option>
									<option value="AngularJS">Autres</option>
								</select>
                                <input name="searchsubmit" type="image" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/search.gif" value="Go" id="searchsubmit" class="btn"  />
                                </span>
						</form>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>

				<div class="gadget">
					<p style="text-decoration-color:red"  class="td">ARTICLE RECENTS</p>
					<div class="slideshow">

						<ul>

							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/coif.jpg" alt="" width="300" height="300" /></li>

							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/men.jpg" alt="" width="300" height="300" /></li>

							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/dem.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/ele.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/gard.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/meu.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/inf.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/cle.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/sac.jpeg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/tel.jpg" alt="" width="300" height="300" /></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/jar.jpg" alt="" width="300" height="300" /></li>

						</ul>
					</div>

				</div>
				<div class="gadget">
					<p style="text-decoration-color:red"  class="td">info plus</p>
					<div class="clr"></div>
					<div class="testi">
						<ul class="ex_menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/index">Connexion</a></li>
							<li><a href="#">Plus RSS des article </a> </li>
							<li><a href="#">RSS Images</a> </li>

						</ul>
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div>
	</div>

</div>

</div>
<!-- END PAGE SOURCE -->
</body>
</html><?php }
}
