<?php 
    include 'User.php';
    $user = new User();
    $user->set_name("Toan");
    echo $user->get_name();
?>