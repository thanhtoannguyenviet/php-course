<?php 
    $fruits = ['pineapple', 'melon', 'apple'];
    // Ko the print array voi echo
    print_r($fruits);

    echo $fruits[0];

    // associative array - còn biết đến là HashMap
    $colors = [ // key -> value
        3 => 'red',
        5 => 'green',
        7 => 'blue',
    ];

    echo $colors[5];

    $hex_colors= [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',
    ];
    echo $hex_colors['red'];

       // 1 số hàm build sẵn 
       $names = ['Anna','Banana','Canada'];
       var_dump(in_array('Denny', $names));
       // thêm 1 thành phần vào đuôi
       array_push($names,'Danny');
       print_r($names);
       // thêm vào đầu
       array_unshift($names, 'Zeros');
       // remove the last item
       array_pop($names);
       // remove the first
       array_shift($names);
?>