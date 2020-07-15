<?php
    
    session_start();
    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }

    require 'models/dbinc.php';

    if(isset($_POST['submit'])):
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = $pdo->prepare('SELECT id , name , email , password, role FROM users WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
        }else{
            echo"Fjalekalimi ose email gabim!";
        }

    endif;

?>



    <head>
        <title>Sign in / gamingHOUSE</title>
        <link rel="stylesheet" href="loginform.css">
        <link rel="icon" href="img/logo1.png">
    </head>

    <body>
        <div class="main">
            <div class="image">
                <a href="index.php"><img src="img/fotologin.png" alt=""></a>
            </div>

            <form action="loginform.php" class="inputat" method="POST">
                
                    <input type="text" name="email" placeholder="Email" id="email">
                
                
                    <input type="password" name = "password" placeholder="Password" id="pw">
                

              <button onclick="validateform()" name="submit">Sign in</button>
            </form>
            <br>
            <p>Don't have an account? <a href="signup.php"> Sign up now</a></p>
        </div>

        <script>
            function validateform(){
                var username = document.getElementById('username').value;
                var password = document.getElementById('pw').value;

                if(username == "" || password == ""){
                    alert('Username or password invalid');
                }
            }
        </script>
    </body>
