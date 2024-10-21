<?php
/* Smarty version 5.4.1, created on 2024-10-20 20:25:08
  from 'file:modify_registro_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67154b044a9bf4_15444082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '801c3675927adedce49ee4a5483d7b217fe03391' => 
    array (
      0 => 'modify_registro_form.tpl',
      1 => 1729448545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67154b044a9bf4_15444082 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<h2>Modificar Registro</h2>

<form action="<?php echo BASE_URL;?>
modificar/<?php echo $_smarty_tpl->getValue('registro')->id;?>
" method="POST">
    <label for="nombre">Nombre:</label>
     <input type="text" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->getValue('registro')->nombre;?>
" class="form-control"><br><br>
     
    <label for="action">Acción</label>
         <select required name="action" class="form-control" id="action">
            <option value="" disabled selected>Selecciona una acción</option>
            <option value="entrada">Entrada</option>
            <option value="salida">Salida</option>
        </select>

     <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="<?php echo $_smarty_tpl->getValue('registro')->fecha;?>
" class="form-control"><br><br>

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" value="<?php echo $_smarty_tpl->getValue('registro')->hora;?>
" class="form-control"><br><br>

   
    <label for="establecimiento">Establecimiento</label>
        <select required name="establecimiento_id" class="form-control" id="establecimiento">
            <option value="" disabled selected>Selecciona un establecimiento</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('establecimientos'), 'establecimiento');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('establecimiento')->value) {
$foreach0DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->id, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('establecimiento')->nombre, ENT_QUOTES, 'UTF-8', true);?>

            </option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    
                    
   
    
    
    <div class="text-center">
                <button type="submit" class="btn btn-success mt-2">Modificar</button>
    </div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
