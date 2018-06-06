<?php 

include_once 'model/User.php';

$user  new User();
$hasil = $user->ambilUser ($_POST ['username']);




 ?>