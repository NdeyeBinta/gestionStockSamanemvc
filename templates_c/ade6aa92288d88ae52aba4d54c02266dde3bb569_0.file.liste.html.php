<?php
/* Smarty version 3.1.30, created on 2020-09-17 22:50:59
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\declaration\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f63cc330eb532_07662106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ade6aa92288d88ae52aba4d54c02266dde3bb569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\declaration\\liste.html',
      1 => 1600375856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f63cc330eb532_07662106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
public/css/style.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap-cerulean.min.css"/>

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
		.td5{
			color:salmon;


		
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
				<h2 class="t"><span>objet perdu</span></h2>
			</div>
		</div>
		<div class="content">
			<div class="content_bg">
				<div class="mainbar">
					<div class="article">
						<h2 class="t"><span> Objet Declarer </span></h2>
						<div class="col-md-10 col-xs-12 col-md-offset-2" style="margin-top:10px;">
							<div class="panel panel-info">
								<div class="panel-heading">DECLARATION DE PERTE</div>
								<div class="panel-body">
									<?php if (isset($_smarty_tpl->tpl_vars['declarations']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['declarations']->value != null) {?>
									<table class="table table-bordered table-stripped">

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['declarations']->value, 'declaration');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['declaration']->value) {
?>
										<tr>
											<img style="width: 200px;height: 100px;border-radius: 500px;" src = " http://localhost/mesproget/gestionStockSamanemvc/public/images/<?php echo $_smarty_tpl->tpl_vars['declaration']->value['pic'];?>
"/></br>

											<?php echo $_smarty_tpl->tpl_vars['declaration']->value['nom'];?>
</rb>
											<?php echo $_smarty_tpl->tpl_vars['declaration']->value['prenom'];?>
</br>
											Tel:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['tel'];?>
</br>
											Adress:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['adress'];?>
</br>
											Info:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['info'];?>
</br>
											EMAIL:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['email'];?>
</br>
											<li class="td5">Recompense:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['rec'];?>
</li>
											Date:<?php echo $_smarty_tpl->tpl_vars['declaration']->value['day'];?>
</br>
											<a  class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
declaration/delete/<?php echo $_smarty_tpl->tpl_vars['declaration']->value['id'];?>
">Supprimer</a>
											<a  class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
declaration/edit/<?php echo $_smarty_tpl->tpl_vars['declaration']->value['id'];?>
">Editer</a>
											<a  class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
commentaire/add?id=<?php echo $_smarty_tpl->tpl_vars['declaration']->value['id'];?>
">Commentaire</a>
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
declaration/add">Ajout d'un Objet</a>
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
