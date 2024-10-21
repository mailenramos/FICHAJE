<?php
/* Smarty version 5.4.1, created on 2024-10-19 00:56:48
  from 'file:form_alta_registro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712e7b00d1182_89252818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4afed69e6fc0b9125a563d07dfc2ab2cea056ed' => 
    array (
      0 => 'form_alta_registro.tpl',
      1 => 1729292207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712e7b00d1182_89252818 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
?><!-- Botón para desplegar el formulario de registro -->
<div class="text-center">
    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#formRegistro" aria-expanded="false" aria-controls="formRegistro">
        Cargar Nuevo Registro
    </button>
</div>

<!-- Formulario que se oculta y muestra -->
<div class="collapse" id="formRegistro">
    <div class="card card-body">
        <h4 class="mb-3 text-center">Subir Registro</h4>
        <form action="nueva" method="POST" class="my-4" style="max-width: 600px; margin: auto;">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input required name="nombre" type="text" class="form-control" id="nombre">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="accion">Acción</label>
                        <select required name="accion" class="form-control" id="accion">
                            <option value="" disabled selected>Selecciona una acción</option>
                            <option value="entrada">Entrada</option>
                            <option value="salida">Salida</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input required name="fecha" type="date" class="form-control" id="fecha">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input required name="hora" type="time" class="form-control" id="hora">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="establecimiento">Establecimiento</label>
                <select required name="establecimiento_id" class="form-control" id="establecimiento">
                    <option value="" disabled selected>Selecciona un establecimiento</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('establecimientos'), 'establecimiento');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('establecimiento')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->id, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);?>

                        </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success mt-2">Guardar Registro</button>
            </div>
        </form>
    </div>
</div>
<?php }
}
