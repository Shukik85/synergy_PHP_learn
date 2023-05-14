<?php
/* Smarty version 4.3.1, created on 2023-05-01 16:49:07
  from 'C:\OSPanel\domains\websiteSmarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644fc353970136_00001673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92720904866b4edbda6c8674a161a0f7ed2a731' => 
    array (
      0 => 'C:\\OSPanel\\domains\\websiteSmarty\\templates\\main.html',
      1 => 1682948769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fc353970136_00001673 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Урок 13</title>
</head>
<body>
    <h1>Привет, новый пользователь!</h1>
    <br>
    <h3>Сегодня: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h3>
    <table>
            <thead>
                <tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'values', false, 'key');
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
?>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Всего: <?php echo $_smarty_tpl->tpl_vars['len']->value;?>
</td>
                </tr>
            </tfoot>
    </table>    
</body>
</html><?php }
}
