<?php

    require 'models/dbinc.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "DELETE from product WHERE id= :id";

    $query = $pdo->prepare($query);
    $query->execute(['id' => $id]);

    header('Location: index.php')
?>