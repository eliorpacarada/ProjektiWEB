<?php 
    session_start();
    
    if($_SESSION["role"] == '1'){
 


    require 'models/dbinc.php';


    
    if(isset($_POST['submit'])){

        $img = $_POST['name'];

        $sql = 'INSERT INTO product (img) VALUES (:img)';

        $query = $pdo->prepare($sql);

        $query->bindParam('img', $img);

        $query->execute();

        header('Location: dashboard.php');
    }
?>

<div class="inputat">
                <form action="posts.php" method="POST">
                
                    <input type="text" name="name" placeholder="photopath" id="name"> <br>
                    <button onclick="validateform()" name="submit">Post</button>
                </form>
</div>


<?php }else{
    header("Location: index.php");
}
?>