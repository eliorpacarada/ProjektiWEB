<?php
    session_start();

    if($_SESSION['role'] =="1"){
        require 'models/dbinc.php';
        $query = $pdo->query('SELECT * from users');
        $users = $query->fetchAll();


        $query1 = $pdo->query('SELECT * FROM contactus');
        $contacts = $query1->fetchAll();

?>


    <div class="container">
    <a href="add_users.php">Add users</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
            <tr>
                <td><?php echo$user['name']?></td>
                <td><?php echo$user['email']?></td>
                <td><?php echo$user['username']?></td>
                <td><?php echo$user['password']?></td>
                <td><a href="edit_users.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                <td><a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact):?>
            <tr>
                <td><?php echo$contact['fullname']?></td>
                <td><?php echo$contact['emailadress']?></td>
                <td><?php echo$contact['message']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    </div>

<?php }else{
    header("Location: index.php");
}