<?php
    include_once "./utils/constants.php";
    $connection = null;
    try {
        $connection = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connect successfully";
    } catch (PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
        $connection = null;
    }
?>