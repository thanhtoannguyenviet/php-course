
<?php 
     if(isset($_POST['submit'])){
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        if($connection != null){
            try{
                if($product_id == null){
                    $sql = "Insert into product(name,price,description) values(:name,:price,:description)";
                    $statement = $connection->prepare($sql);
                    $statement->bindParam(':name',$name);
                    $statement->bindParam(':price',$price);
                    $statement->bindParam(':description',$description);
                    $statement->execute();
                }
                else{
                    $sql = "Update product set name = :name, price = :price, description = :description where product_id = :product_id";
                    $statement = $connection->prepare($sql);
                    $statement->bindParam(':product_id',$product_id);
                    $statement->bindParam(':name',$name);
                    $statement->bindParam(':price',$price);
                    $statement->bindParam(':description',$description);
                    $statement->execute();
                }
                CommonFunc::ChangeURL('index.php?page=dashboard');
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
     }
?>
<?php
    if(isset( $_GET['id'])){
        $id = $_GET['id'];
        if($connection != null){
            try{
                $sql = "Select product_id,name,price,description from product where product_id = :id LIMIT 1";
                $statement = $connection->prepare($sql);
                $statement->bindParam(':id',$id);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                if ($results == null) {
                    CommonFunc::ChangeURL('index.php?page=404');
                } else {
                    echo "<h1>Update Product</h1>".'<br>';
                    echo "<form action='index.php?page=edit_product' method='post'>"
                        ."<input type='hidden' name='product_id' value='".$results[0]['product_id']."'>"
                        ."<label for='name'>Name</label>"
                        ."<input class='form-control' type='text' name='name' value='".$results[0]['name']."'>"
                        ."<label for='price'>Price</label>"
                        ."<input class='form-control' type='text' name='price' value='".$results[0]['price']."'>"
                        ."<label for='description'>Description</label>"
                        ."<input class='form-control' type='text' name='description' value='".$results[0]['description']."'>"
                        ."<input class='btn btn-primary' type='submit' value='Update' name='submit'>"
                        ."</form>";
                }
                
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
    else {
        echo "<h1>Create Product</h1>".'<br>';
        echo "<form action='index.php?page=edit_product' method='post'>"
                    ."<input type='hidden' name='product_id' value=''>"
                    ."<label for='name'>Name</label>"
                    ."<input class='form-control' type='text' name='name' value=''>"
                    ."<label for='price'>Price</label>"
                    ."<input class='form-control' type='text' name='price' value=''>"
                    ."<label for='description'>Description</label>"
                    ."<input class='form-control' type='text' name='description' value=''>"
                    ."<input class='btn btn-primary' type='submit' value='Create' name='submit'>"
                    ."</form>";
    }
?>