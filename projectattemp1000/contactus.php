<?php
    require 'models/dbinc.php';

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $emailadress = $_POST['emailadress'];
        $message = $_POST['message'];


        $sql = 'INSERT INTO contactus (fullname, emailadress, message) VALUES (:fullname , :emailadress , :message)';

        $query = $pdo->prepare($sql);

        $query->bindParam('fullname', $fullname);
        $query->bindParam('emailadress', $emailadress);
        $query->bindParam('message', $message);

        $query->execute();

        header('Location: index.php');
    }
?>



    <head>
        <title>Contact us - gamingHOUSE</title>

        <link rel="stylesheet" href="contactus.css">
        <link rel="icon" href="img/logo1.png">
    </head>

    <body>
        <?php
            include('./includes/header.php');
        ?>
        <hr style="width:80%;text-align:center;margin-right:10; opacity: 50%;border: 1px solid #79b6f2;">

            <h3>CONTACT US</h3>

            <br>
            <br>
            <br>
            <br>
            <br>

            <p>Do you want to buy an item? Please fulfill your information, and send your message!</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <form action="contactus.php" class="inputi" method="POST">
                <input type="text" class="inputat" name="fullname" placeholder="Full name" id="fullname">
                <input type="text" class="inputat" name="emailadress" placeholder="Email adress" id="email">
                <input type="text" class="inputat" name="message" placeholder="Message" id="message">
                <button id="submiti" onclick="validateform()" name="submit">Sent</button>
                <br>
            </form>


            <script>
                function validateform(){
                    var emri = document.getElementById('fullname').value;
                    var emaili = document.getElementById('email').value;
                    var mesazhi = document.getElementById('message').value;

                    if(emri == "" || emaili == "" || mesazhi == ""){
                        alert("Please fulfill the information");
                    }
                }
            </script>

    </body>
