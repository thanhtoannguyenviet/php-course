<?php 
    // for
    for($i = 0; $i < 10; $i++){
        echo "i = $i</br>";
    }
    // while - do-while
    $i = 0;
    while ($i <= 10) {
        echo "i = $i</br>";
        $i++; // nếu không có sẻ bị infinite loop
    }

    do{
        echo "i = $i</br>";
        $i++;
    }while($i<10);

    // foreach
    $fruits = ['apple', 'pinapple', 'orange', 'lemon'];
    foreach ($fruits as $index => $fruit) {
        echo "$index - $fruit </br>";
    }
    $person = [
        'full_name' => 'Nguyen Viet Thanh Toan',
        'email' => 'abc@gmail.com',
        'age' => 18
    ];
    // foreach - associated arrays
    foreach ($person as $key => $value) {
        echo "$key : $value </br>";
    }
?>