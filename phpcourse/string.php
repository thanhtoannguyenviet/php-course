<?php 
    $full_name = "Nguyen Viet Thanh Toan";
    echo "Length: ".strlen($full_name);
    echo strtolower($full_name);
    echo strtoupper($full_name);
    //find and replace
    echo str_replace(' ', '-', $full_name);

    if(str_starts_with($full_name, 'Nguyen')){
        echo "Trai họ Nguyễn";
    }
    if(str_ends_with($full_name, 'Toan')){
        echo "Trai tên Toàn";
    }
    // how to ignore the html string
    echo htmlspecialchars("<h1>Html String</h1>");
    printf('<br> %s likes %s', 'Toan', 'BMW');
    printf('pi = %f', 3.14)
?>