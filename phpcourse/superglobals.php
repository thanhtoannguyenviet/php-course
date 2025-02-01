<?php 
    // print_r($_SERVER);
    // ?name=Toan&age=18
    if(isset($_GET['name'])){
        echo $_GET['name'];
    }
    $age = $_GET['age'] ?? '';
    echo $age;
?>