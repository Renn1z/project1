<?php
/* Smarty version 4.3.4, created on 2023-10-14 16:20:58
  from 'C:\OSPanel\domains\Petproject\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652a95ba9b2f28_11857018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126d85e6cff5f2d4f14a8212a49f96381f3bd44d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\Petproject\\index.html',
      1 => 1697289657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652a95ba9b2f28_11857018 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php if (((isset($_smarty_tpl->tpl_vars['new_user']->value)))) {?>
        <div class="alert alert-success" role="alert">
            Всё прошло успешно!
        </div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            Ошибка добавления пользователя!
        </div> 
    <?php }?>
        <form action="index.php" method="post" class="form-control">
            <div class="card">
                <div class="card-body">
                    <h5>Погода</h5>
                    <p>Температура: <?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
 &deg;C</p>
                    <p>Скорость ветра: <?php echo $_smarty_tpl->tpl_vars['wind_speed']->value;?>
 м/c</p>
                    <p>Регион: <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
</p>
                    <p>Дата: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
                    <p>Время: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
                </div>
              </div>
            <div class="form-row">  
                <div class="col">
                    <input type="text" name="first_name" placeholder="Имя" required class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="last_name" placeholder="Фамилия" class="form-control" required>
                </div>
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
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="table/table.php" role="button">Все записанные пользователи</a>
              </div>
            
            
        </form>
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
