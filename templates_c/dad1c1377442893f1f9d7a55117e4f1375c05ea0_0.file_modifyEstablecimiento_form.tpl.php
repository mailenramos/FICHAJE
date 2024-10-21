<?php
/* Smarty version 5.4.1, created on 2024-10-20 22:15:11
  from 'file:modifyEstablecimiento_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671564cfabdbd8_68267219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad1c1377442893f1f9d7a55117e4f1375c05ea0' => 
    array (
      0 => 'modifyEstablecimiento_form.tpl',
      1 => 1729455305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_671564cfabdbd8_68267219 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="button">
    <a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
?action=listar_establecimientos" class="btn btn-secondary">Volver</a>
</div>
<h2>Modificar Establecimiento</h2>

<form action="<?php echo BASE_URL;?>
modificar_establecimiento/<?php echo $_smarty_tpl->getValue('establecimiento')->id;?>
" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->getValue('establecimiento')->nombre;?>
" class="form-control"><br><br>
    
    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" value="<?php echo $_smarty_tpl->getValue('establecimiento')->ciudad;?>
" class="form-control"><br><br>

    <label for="direccion">Direccion:</label>
    <input type="text" id="direccion" name="direccion" value="<?php echo $_smarty_tpl->getValue('establecimiento')->direccion;?>
" class="form-control"><br><br>

    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen del Establecimiento:</label>
        <input type="file" class="form-control" name="imagen" id="imageToUpload">
    </div>
    
    <!-- Campo oculto para enviar la imagen actual si no se sube una nueva -->
    <input type="hidden" name="imagen_actual" value="<?php echo $_smarty_tpl->getValue('establecimiento')->imagen;?>
">

    <div class="text-center">
        <button type="submit" class="btn btn-success mt-2">Modificar</button>
    </div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
