<?php
/* Smarty version 4.3.4, created on 2023-10-14 04:08:41
  from 'C:\OSPanel\domains\Petproject\table.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6529ea19860599_84986280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88ead16a3c13df99f57aa0b4da17474512f5a42' => 
    array (
      0 => 'C:\\OSPanel\\domains\\Petproject\\table.php',
      1 => 1697245719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6529ea19860599_84986280 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="form-control">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Сообщение</th>
                <th scope="col">Email</th>
                <th scope="col">Страна</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['message'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        </tbody>
        </table>
</div>
</body>
</html>

<?php echo '<?php'; ?>

// require 'table.php';

require 'link.php';
require 'libs/Smarty.class.php';
 
$smarty = new Smarty;

$form_users = $link -> query("SELECT * FROM users");

while($table = $form_users -> fetch_array(MYSQLI_ASSOC)){
   $users[] = $table;
}

$smarty->display('table.php');

<?php echo '?>'; ?>




<?php }
}
