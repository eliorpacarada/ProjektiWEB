    <link rel="stylesheet" href="style.css">
    
    <header>
    <a href="index.php"><img class="logo" src="img/logo1.png" alt="logo"></a>
    <?php if(!isset($_SESSION['name'])): ?>
        <ul class="nav-links">
            <a href="index.php"><li>Home</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="contactus.php"><li>Contact</li></a>
            <a href="signup.php"><li>Sign up</li></a>
        </ul>
        <a href="loginform.php"><img class="signinl" src="img/icons.png" alt="signin"></a>
    <?php endif;?>
    <?php if(isset($_SESSION['name']) && $_SESSION['role'] == "1"): ?>
        <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="contactus.php"><li>Contact</li></a>
            <a href="dashboard.php"><li>AdminDashboard</li></a>
        </ul>

        <a href="logout.php"><img class="signinl" src="img/logout.png" alt="logout"></a>

    <?php endif; ?>


    <?php if(isset($_SESSION['name']) && $_SESSION['role'] == '0'): ?>
        <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="contactus.php"><li>Contact</li></a>
        </ul>

        <a href="logout.php"><img class="signinl" src="img/logout.png" alt="logout"></a>

    <?php endif; ?>


    </header>
