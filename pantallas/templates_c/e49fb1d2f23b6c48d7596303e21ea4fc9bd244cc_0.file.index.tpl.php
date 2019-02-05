<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-02-05 21:15:55
=======
/* Smarty version 3.1.33, created on 2019-02-01 12:01:01
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
/* Smarty version 3.1.33, created on 2019-02-01 12:01:01
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  from 'C:\UwAmp\pantallas\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5c59eefbd0ac54_13616363',
=======
  'unifunc' => 'content_5c5426ed0d0b67_60980567',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
  'unifunc' => 'content_5c5426ed0d0b67_60980567',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49fb1d2f23b6c48d7596303e21ea4fc9bd244cc' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\index.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1549397204,
=======
      1 => 1548840437,
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
      1 => 1548840437,
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5c59eefbd0ac54_13616363 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5c5426ed0d0b67_60980567 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
function content_5c5426ed0d0b67_60980567 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
?><!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</head>

<body>
	<div id="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<<<<<<< HEAD
<<<<<<< HEAD
  		<span id="error"><?php echo $_smarty_tpl->tpl_vars['parameter']->value;?>
</span>
	</div>
	<div id="login">
		<form action="login.php" method="post">
=======
  		<span id="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
	</div>
	<div id="login">
		<form action="bridge_login.php" method="post">
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
  		<span id="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
	</div>
	<div id="login">
		<form action="bridge_login.php" method="post">
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
			<section id="title">
				<h2>INICIO DE SESIÓN</h2>
			</section>
			<section id="campos">
				<input type="text" id="user" name="user" placeholder="USUARIO">
				<input type="password" id="psw" name="psw" placeholder="CONTRASEÑA">
			</section>
			<section>
				<button type="submit">Enviar datos</button>
			</section>
		</form>
	</div>
</body>
</html>

<?php }
}
