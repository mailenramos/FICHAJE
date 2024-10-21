<?php
/* Smarty version 5.4.1, created on 2024-10-20 22:15:39
  from 'file:detalle_registro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671564eba9e6f9_17865902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51624879eeeb4e95391e3ea192f5815a443cba89' => 
    array (
      0 => 'detalle_registro.tpl',
      1 => 1729455338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_671564eba9e6f9_17865902 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="button">
    <a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
?action=listar" class="btn btn-secondary">Volver</a>
</div>
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-light text-dark">
            <h1 class="card-title">Detalles del Registro</h1>
            <h3 class="list-group-item"><strong>Establecimiento:</strong> <?php if ($_smarty_tpl->getValue('establecimiento')->nombre) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);
} else { ?>No disponible<?php }?></h3>
        </div>
        <div class="card-body">
            <?php if ($_smarty_tpl->getValue('registro')->nombre) {?>
                <div class="row">
                    <div class="col-md-4">
                        <!-- Imagen del establecimiento -->
                        <?php if ($_smarty_tpl->getValue('establecimiento')->imagen) {?>
                            <img src="<?php echo $_smarty_tpl->getValue('BASE_URL');
echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->imagen, ENT_QUOTES, 'UTF-8', true);?>
" class="card-img-top img-fluid rounded" alt="Imagen de <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php } else { ?>
                            <p>No image available.</p>
                        <?php }?>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nombre:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('registro')->nombre, ENT_QUOTES, 'UTF-8', true);?>

                            </li>
                            <li class="list-group-item">
                                <strong>Accion:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('registro')->action, ENT_QUOTES, 'UTF-8', true);?>

                            </li>
                            <li class="list-group-item">
                                <strong>Fecha:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('registro')->fecha,"%d/%m/%Y");?>

                            </li>
                            <li class="list-group-item">
                                <strong>Hora:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('registro')->hora,"%H:%M");?>

                            </li>
                            <li class="list-group-item">
                                <strong>Dirección:</strong> <?php if ($_smarty_tpl->getValue('establecimiento')->direccion) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->direccion, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->ciudad, ENT_QUOTES, 'UTF-8', true);
} else { ?>No disponible<?php }?>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <p class="text-danger">No se encontraron detalles para este registro.</p>
            <?php }?>
        </div>
        <div class="card-footer text-end">
            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
?action=listar" class="btn btn-secondary">Volver a la Lista</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
