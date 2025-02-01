<?php 
    $age = 30;
    if($age > 18){
        echo "You are greater than 18 years old";
    } else {
        echo "You are so young";
    }

    // check empty
    $comments = [
        'Good', 'I like it'
    ];
    if(empty($comments)){ 
        echo "No comments";
    }
    // short comment
    echo !empty($comments) ? "There are comments" : "No comments";

    // coalescing operator
    echo $comments[0] ?? "No comments";

    // switch case
    $favirite_color = 'yellow';
    switch ($favirite_color) {
        case 'red':
            echo('I love red too');
            break;
        case 'yellow':
            echo('I love yellow too');
            break;
        case 'green':
            echo('I love green too');
            break;
        default:
            # code...
            break;
    }
?>