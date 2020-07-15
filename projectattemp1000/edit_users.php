<?php
    session_start();

    require 'models/dbinc.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql="SELECT * from users WHERE id = :id";

    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        $sql = 'UPDATE users SET name = :name, email = :email, username = :username WHERE id = :id';

        $query = $pdo->prepare($sql);

        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('username', $username);
        $query->bindParam('id', $id);

        $query->execute();

        header('Location: dashboard.php');
    }

?>

<div class="inputat">
        <form method="POST">
                
            <input type="text" name="name" value="<?php echo $user['name']?>" id="name"> <br>
            <input type="text" name="email" value="<?php echo $user['email']?>" id="email"> <br>
            <input type="text" name="username" value="<?php echo $user['username']?>" id="username"> <br>
            <button  name="submit">Submit</button>
        </form>
</div>
