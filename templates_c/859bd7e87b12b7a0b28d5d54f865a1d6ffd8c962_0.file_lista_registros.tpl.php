<?php
/* Smarty version 5.4.1, created on 2024-10-21 04:11:38
  from 'file:lista_registros.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715b85a20c2f8_64988570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859bd7e87b12b7a0b28d5d54f865a1d6ffd8c962' => 
    array (
      0 => 'lista_registros.tpl',
      1 => 1729476642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta_registro.tpl' => 1,
    'file:form_buscar_categoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6715b85a20c2f8_64988570 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:form_alta_registro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="container mt-4">
    <?php $_smarty_tpl->renderSubTemplate('file:form_buscar_categoria.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h2>Registro</h2>
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('registros'), 'registro');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('registro')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item mb-2 p-3 shadow-sm bg-light rounded item-registro">
                <div class="registro-info">
                    <div class="registro-detail">
                        <span class="me-2">📝</span>
                        <strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('registro')->nombre, ENT_QUOTES, 'UTF-8', true);?>
</strong>
                    </div>
                    <div class="registro-detail">
                        <span class="me-2">🏢</span>
                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('registro')->nombre_establecimiento, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                    <div class="registro-detail">
                        <span class="me-2">🕒</span>
                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('registro')->hora, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                    <div class="registro-detail">
                        <span class="me-2">🚪</span>
                        <span class="me-2"><?php echo $_smarty_tpl->getValue('registro')->action;?>
</span>
                    </div>
                    <div class="registro-detail">
                        <span class="me-2">📅</span>
                        <span><?php echo $_smarty_tpl->getValue('registro')->fecha;?>
</span>
                    </div>
                </div>
                <div class="registro-actions">
                    <a href="verDetalle_registro/<?php echo $_smarty_tpl->getValue('registro')->id;?>
" class="btn btn-primary btn-sm me-2">Ver detalle</a>
                    <a href="eliminar/<?php echo $_smarty_tpl->getValue('registro')->id;?>
" class="btn btn-danger btn-sm">Borrar</a>
                    <a href="formModificar/<?php echo $_smarty_tpl->getValue('registro')->id;?>
" class="btn btn-success btn-sm">Modificar</a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
    
    <p class="mt-3"><small>Existen <?php echo $_smarty_tpl->getValue('count');?>
 registros</small></p>
</div>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
