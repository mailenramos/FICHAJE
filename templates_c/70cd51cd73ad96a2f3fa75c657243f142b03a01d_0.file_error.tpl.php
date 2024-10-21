<?php
/* Smarty version 5.4.1, created on 2024-10-18 23:46:54
  from 'file:error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712d74ed91970_65247965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cd51cd73ad96a2f3fa75c657243f142b03a01d' => 
    array (
      0 => 'error.tpl',
      1 => 1729194921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712d74ed91970_65247965 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\XAMPP\\htdocs\\db_registrosNueva\\templates';
echo '<?php'; ?>
 require 'templates/header.tpl' <?php echo '?>'; ?>


<div class='alert alert-danger' role='alert'>
    <?php echo '<?'; ?>
= $error <?php echo '?>'; ?>

</div> 

<?php echo '<?php'; ?>
 require 'templates/footer.tpl' <?php echo '?>'; ?>

<?php }
}
