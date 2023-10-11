<?php
/* Smarty version 4.3.4, created on 2023-10-09 23:10:53
  from 'C:\OSPanel\domains\Petproject\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65245e4de505a1_83436575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126d85e6cff5f2d4f14a8212a49f96381f3bd44d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\Petproject\\index.html',
      1 => 1696882252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65245e4de505a1_83436575 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <!-- <?php echo '<?php'; ?>
 if (isset($new_user)): <?php echo '?>'; ?>

        <div class="alert alert-success" role="alert">
            Всё прошло успешно!
        </div>
    <?php echo '<?php'; ?>
 else: <?php echo '?>'; ?>

        <div class="alert alert-warning" role="alert">
            Ошибка, попробуйте ещё раз!
        </div>
    <?php echo '<?php'; ?>
 endif; <?php echo '?>'; ?>
 -->
    <?php if (((isset($_smarty_tpl->tpl_vars['new_user']->value)))) {?>
        <div class="alert alert-success" role="alert">
            Всё прошло успешно!
        </div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            Ошибка, попробуйте ещё раз!
        </div> 
    <?php }?>
        <form action="index.php" method="post" class="form-control"> 
            <div class="form-row">  
                <div class="col">
                    <input type="text" name="first_name" placeholder="Имя" required class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="last_name" placeholder="Фамилия" class="form-control" required>
                </div>
            </div>
            <div class="form-group"> 
                <textarea name="message" cols="18" rows="3" placeholder="Опишите вашу проблему" class="form-control" required></textarea>                
            </div>
            <div class="form-group">
                <label>Выберите вашу страну</label>
                <select name="country" class="form-control">
                    <option value="Russia">Россия</option>
                    <option value="Belarus">Беларусь</option>
                    <option value="Kazakhstan">Казахстан</option>
                    <option value="Uzbekistan">Узбекистан</option>
                </select>
                
            </div>
            <div class="form-row">
                <div class="col">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                
            </div>
            
            <br />
            <button type="submit" class="btn btn-primary">Подтвердить</button>
        </form>
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
        <!-- <?php echo '<?php'; ?>
 if(is_array($users)){
              foreach($users as $user):<?php echo '?>'; ?>

            <tr>
                <th scope="row"><?php echo '<?php'; ?>
 echo $user['id']<?php echo '?>'; ?>
</th>
                <td><?php echo '<?php'; ?>
 echo $user['first_name']<?php echo '?>'; ?>
</td>
                <td><?php echo '<?php'; ?>
 echo $user['last_name']<?php echo '?>'; ?>
</td>
                <td><?php echo '<?php'; ?>
 echo $user['message']<?php echo '?>'; ?>
</td>
                <td><?php echo '<?php'; ?>
 echo $user['email']<?php echo '?>'; ?>
</td>
                <td><?php echo '<?php'; ?>
 echo $user['country']<?php echo '?>'; ?>
</td>
            </tr>
        <?php echo '<?php'; ?>
 endforeach; }<?php echo '?>'; ?>
 -->
        
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
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
