<?php
/* Smarty version 5.4.1, created on 2024-10-21 03:37:01
  from 'file:form_buscar_categoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715b03dab6712_43851686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbb269745857ce1ff5b4f111a17bc9f2957f60ce' => 
    array (
      0 => 'form_buscar_categoria.tpl',
      1 => 1729474619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6715b03dab6712_43851686 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
?><h3>Buscar por establecimiento</h3>
    <form method="GET" action="buscar" class="mb-4">
        <div class="row">
            <div class="col">
                <select name="establecimiento" class="form-control" id="establecimiento">
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
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form><?php }
}
