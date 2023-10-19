<?php

require 'libs/Smarty.class.php';
 
$smarty = new Smarty;

$smarty->assign('users',$users);
$smarty->assign('w_table',$w_table);
$smarty->assign('temp',$temp);
$smarty->assign('wind_speed',$wind_speed);
$smarty->assign('region',$region);
$smarty->assign('date',$date);
$smarty->assign('new_weather',$new_weather);
$smarty->assign('time',$time);