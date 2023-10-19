<?php 

require 'link.php';
require 'api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
   
   $first_name = trim($_REQUEST['first_name']);
   $last_name = trim($_REQUEST['last_name']);
   $email = trim($_REQUEST['email']);
   $country = trim($_REQUEST['country']);

   $new_user = $link -> query("INSERT INTO users(first_name, last_name, email, country) VALUES ('$first_name','$last_name','$email','$country')");

}

require 'smartyassign.php';
$smarty->display('index.html');

exit;