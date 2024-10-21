<?php
/* Smarty version 5.4.1, created on 2024-10-21 04:45:51
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715c05fb09fe2_51243215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1af9173a0a3033680a13a41f4f4be841549a9d9' => 
    array (
      0 => 'header.tpl',
      1 => 1729478748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6715c05fb09fe2_51243215 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <base href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro de Asistencia</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-white fw-bold" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
listar">Registro de Asistencia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
listar">Registros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
listar_establecimientos">Establecimientos</a>
                        </li>
                        <?php if ((null !== ($_smarty_tpl->getValue('user') ?? null))) {?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
logout">Salir</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link text-white">Bienvenido, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->usuario, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </li>
                        
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-3">
<?php }
}
