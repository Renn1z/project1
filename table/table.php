<?php

require '/OSPanel/domains/Petproject/link.php';

$form_users = $link -> query("SELECT * FROM users");

while($table = $form_users -> fetch_array(MYSQLI_ASSOC)){
   $users[] = $table;
}

require '/OSPanel/domains/Petproject/smartyassign.php';

$smarty->display('table.html');
