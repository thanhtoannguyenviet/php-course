<?php
    $reg_extensinos = ['png', 'jpg','jpeg', 'gif', 'mp4'];
    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload'])){
            $file_size = $_FILES['upload']['size'];
            $file_name = $_FILES['upload']['name'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $destination = "uploads/${file_name}";
            $file_extension = explode('.', $file_name);
            $file_extension = strtolower(end($file_extension));
            // validate file
            if(in_array($file_extension, $reg_extensinos)){
                if($file_size <= 1000000){
                    //ok, move from temp folder to /uploads
                    move_uploaded_file($file_tmp_name, $destination);
                    $error_msg = '<p style="color:green"> File upload success</p>';
                }
                else $error_msg = '<p style="color:red"> File is too big </p>';
            }
            echo $file_name, $file_size, $destination;      
        } else {
            $error_msg = '<p style="color:red"> No file selected, please try again. </p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File upload</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"
        method="post"
        enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload" id=""/>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php $error_msg ?? '' ?>
</body>
</html>