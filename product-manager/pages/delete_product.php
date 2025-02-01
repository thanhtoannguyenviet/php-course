<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($connection != null){
            try{
                $sql = "delete from product where product_id = :id";
                $statement = $connection->prepare($sql);
                $statement->bindParam(':id',$id);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                CommonFunc::ChangeURL('index.php?page=dashboard');
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>