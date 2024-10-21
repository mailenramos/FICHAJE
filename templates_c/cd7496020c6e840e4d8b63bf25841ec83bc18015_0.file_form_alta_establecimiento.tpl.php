<?php
/* Smarty version 5.4.1, created on 2024-10-19 01:56:06
  from 'file:form_alta_establecimiento.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712f596694304_23085560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7496020c6e840e4d8b63bf25841ec83bc18015' => 
    array (
      0 => 'form_alta_establecimiento.tpl',
      1 => 1729295765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712f596694304_23085560 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
?><!-- Botón para desplegar el formulario -->
<div class="text-center">
    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#formEstablecimiento" aria-expanded="false" aria-controls="formEstablecimiento">
        Cargar Nuevo Establecimiento
    </button>
</div>

<!-- Formulario que se oculta y muestra -->
<div class="collapse" id="formEstablecimiento">
    <div class="card card-body">
        <h4 class="mb-3 text-center">Subir Establecimiento</h4>
        <form action="cargar_establecimiento" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Establecimiento:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad:</label>
                <input type="text" class="form-control" name="ciudad" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen del Establecimiento:</label>
                <input type="file" class="form-control" name="imagen" id="imageToUpload" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Cargar Establecimiento</button>
            </div>
        </form>
    </div>
</div>
<?php }
}
