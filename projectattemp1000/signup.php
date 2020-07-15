<?php

    session_start();
    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }

    require 'models/dbinc.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO users (name, email, username, password) VALUES (:name , :email , :username , :password)';

        $query = $pdo->prepare($sql);

        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('username', $username);
        $query->bindParam('password', $password);

        $query->execute();

        header('Location: index.php');
    }
?>

    <head>
        <title>Sign up / gamingHOUSE</title>
        <link rel="stylesheet" href="signup.css">
        <link rel="icon" href="img/logo1.png">
    </head>

    <body>
        <div class="main">
            <div class="image">
                <a href="index.php"><img src="img/fotologin.png" alt=""></a>
            </div>

            <div class="inputat">
                <form action="signup.php" method="POST">
                
                    <input type="text" name="name" placeholder="Full name" id="name">
                    <input type="text" name="email" placeholder="Email adress" id="email">
                    <input type="text" name="username" placeholder="Username" id="username">
                    <input type="password" name="password" placeholder="Password" id="pw">
                    <button onclick="validateform()" name="submit">Sign up</button>
                </form>
            </div>
            <br>
        </div>

        <script>
            function validateform(){
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var username = document.getElementById('username').value;
                var password = document.getElementById('pw').value;

                if(name == "" || email == "" || username == "" || password == ""){
                    alert("Some of your informations are empty");
                }
            }
        </script>
    </body>
