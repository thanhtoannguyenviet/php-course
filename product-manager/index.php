<?php 
    include_once "./config/config_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("utils/common.php");
        include("modules/mHeader.php");
    ?>
    <div class="container">
        <div class="main">
            <?php 
                $page = $_GET['page'];
                if ($page == null) {
                    include("pages/dashboard.php");
                } else {
                    switch ($page) {
                        case 'dashboard':
                            include("pages/dashboard.php");
                            break;
                        case 'products':
                            include("pages/products.php");
                            break;
                        case 'edit_product':
                            include("pages/edit_product.php");
                            break;
                        case 'delete_product':
                            include("pages/delete_product.php");
                            break;
                        case 'orders':
                            include("pages/orders.php");
                            break;
                        case 'customers':
                            include("pages/customers.php");
                            break;
                        default:
                            include("pages/404.php");
                            break;
                    }
                }
                
            ?>
        </div>
    </div>
    <?php 
        include("modules/mFooter.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>