<?php

    require 'models/dbinc.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "DELETE from users WHERE id= :id";

    $query = $pdo->prepare($query);
    $query->execute(['id' => $id]);

    header('Location: dashboard.php');
?>