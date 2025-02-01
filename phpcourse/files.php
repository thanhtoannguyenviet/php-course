<?php 
    $file_path = './data/fruits.txt';
    if(file_exists($file_path)){
        // echo readfile($file_path); // read the file and return number of bytes the file
        $file_handle = fopen($file_path, 'r');
        $file_content = fread($file_handle, filesize($file_path));
        fclose($file_handle);
        echo $file_content;
    } else {
        $file_handle = fopen($file_path, 'w');
        $file_content = 'banana'.PHP_EOL.'lime'.PHP_EOL.'kiwi';
        fwrite($file_handle,$file_content);
        fclose($file_handle);
    }
?>