<?php 
    session_start();
    
    if($_SESSION["role"] == '1'){
 


    require 'models/dbinc.php';


    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO users (name, email, username, password) VALUES (:name , :email , :username , :password)';

        $query = $pdo->prepare($sql);

        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('username', $username);
        $query->bindParam('password', $password);

        $query->execute();

        header('Location: users.php');
    }

?>

<div class="inputat">
                <form action="add_users.php" method="POST">
                
                    <input type="text" name="name" placeholder="Full name" id="name"> <br>
                    <input type="text" name="email" placeholder="Email adress" id="email"> <br>
                    <input type="text" name="username" placeholder="Username" id="username"> <br>
                    <input type="password" name="password" placeholder="Password" id="pw"> <br>
                    <button onclick="validateform()" name="submit">Sign up</button>
                </form>
</div>


<?php }else{
    header("Location: index.php");
}
?>