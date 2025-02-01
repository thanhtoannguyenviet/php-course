<div>
<h1> All Product </h1>
<button class="btn btn-primary" onclick="window.location.href='index.php?page=edit_product'">Add Product</button>
</div>
<table class="table table-striped"> 
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
<?php
    
    if($connection != null){
        try{
            $sql = "Select product_id,name,price,description from product";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($results == null) {
               echo "<tr><td colspan='4' class='text-center'>No data found</td></tr>";
            }else {
                foreach ($results as $item) {
                    echo "<tr>"
                        ."<td>".$item['product_id']."</td>"
                        ."<td>".$item['name']."</td>"
                        ."<td>".$item['price']."</td>"
                        ."<td>".$item['description']."</td>"
                        ."<td>"
                        ."<a href='index.php?page=edit_product&id=".$item['product_id']."'>Edit</a> "
                        ."<a href='index.php?page=delete_product&id=".$item['product_id']."'>Delete</a>"
                        ."</td>"
                        ."</tr>";
                }
            }
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

?>
</table>