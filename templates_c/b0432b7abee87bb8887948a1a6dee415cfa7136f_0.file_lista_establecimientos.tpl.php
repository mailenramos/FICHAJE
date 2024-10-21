<?php
/* Smarty version 5.4.1, created on 2024-10-20 23:23:30
  from 'file:lista_establecimientos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671574d230e3a5_04103825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0432b7abee87bb8887948a1a6dee415cfa7136f' => 
    array (
      0 => 'lista_establecimientos.tpl',
      1 => 1729459405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta_establecimiento.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_671574d230e3a5_04103825 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="button">
            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
?action=listar" class="btn btn-secondary">Volver</a>
        </div>
<?php $_smarty_tpl->renderSubTemplate('file:form_alta_establecimiento.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-4">
    <h2>Establecimientos</h2>
    <div class="row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('establecimientos'), 'establecimiento');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('establecimiento')->value) {
$foreach0DoElse = false;
?>
        
            <div class="col-md-4 mb-3">
                <div class="card item-registro">
                    <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->imagen, ENT_QUOTES, 'UTF-8', true);?>
" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);?>
</h5>
                        <p class="card-text">Ciudad: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->ciudad, ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <div class="actions">

                             <a href="formModificarEstablecimiento/<?php echo $_smarty_tpl->getValue('establecimiento')->id;?>
" class="btn-editar">✏️</a>

                            <form action="verRegistro_establecimiento" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('establecimiento')->id;?>
">
                                <button type="submit" class="btn btn-success">Ver Registros</button>
                            </form>

                            <!-- Botón de Eliminar -->
                            <form action="eliminar_establecimiento" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('establecimiento')->id;?>
">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
