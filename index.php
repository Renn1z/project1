<?php 

require 'libs/Smarty.class.php';
 
$smarty = new Smarty;

// $smarty->assign('new_user');

$servername = "form";
$username = "user";
$db_password = "0000";
$db = "form";

$link = mysqli_connect($servername, $username, $db_password, $db);

if ($link === false) {
   die("Error connection failed" . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
   
   

   $first_name = trim($_REQUEST['first_name']);
   $last_name = trim($_REQUEST['last_name']);
   $message = $_REQUEST['message'];
   $email = trim($_REQUEST['email']);
   $country = trim($_REQUEST['country']);

   $new_user = $link -> query("INSERT INTO users(first_name, last_name, message, email, country) VALUES ('$first_name','$last_name','$message','$email','$country')");

   
   
}

$form_users = $link -> query("SELECT * FROM users");

while($table = $form_users -> fetch_array(MYSQLI_ASSOC)){
   $users[] = $table;
}
$smarty->assign('users',$users);
// $users = $link->query('SELECT * FROM users')->fetch_all(MYSQLI_ASSOC);


// require 'index.html';
$smarty->display('index.html');

exit;