<?php
/* Smarty version 3.1.30, created on 2020-09-12 23:07:47
  from "C:\xampp\htdocs\mesproget\gestionStockSamanemvc\view\contact\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f5d38a386bcf3_11905268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bb48f3316cbb42c699a9ecd58b2941d1d4a63a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesproget\\gestionStockSamanemvc\\view\\contact\\liste.html',
      1 => 1599944862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d38a386bcf3_11905268 (Smarty_Internal_Template $_smarty_tpl) {
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
declaration/liste">Declaration</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
service/liste">service</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/liste">Contact</a></li>
        </ul>
    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:10px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['contacts']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['contacts']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Nom</th>
									<th>Prenom </th>
									<th>Tel</th>
									<th>Adress</th>
									<th>Email</th>
									<th>Message</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['nom'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['prenom'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['tel'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['adress'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['message'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/delete/<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
contact/edit/<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
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
contact/add">Ajout d'un Contact</a>
			</div>
		</div>

	</body>
</html>
<?php }
}
