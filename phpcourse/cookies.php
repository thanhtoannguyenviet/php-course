<?php 
// Cookies: 
// - save data in remote browser
// - you can retrieve it when user visit the site again
    $_HOUR = 3600;
    setcookie('username', 'Toan', time()+ $_HOUR);
    // time() lấy thgian hiện tại dưới dạng số
    echo $_COOKIE['username']??'unknown';

// Sessions:
// - save data in server
// - can be used across multiple pages

    session_start(); // kích hoạt session
    $_SESSION['username'] = 'Toan';
    echo "Session: ".$_SESSION['username'];
?>