<?php 
    $email = $_POST['username'] ?? ''; 
    // SQL Injection defence
    // htmlspecialchars($_POST['username']) -- 
    // filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'] ?? '';
    echo "Username: ".$email."</br>";
    echo "Password: ".$password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3> Login</h3>
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username"/>
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="text" name="password"/>
        </div>
        <input type="submit" value="Submit" name="submit"/>
    </form>
</body>
</html>