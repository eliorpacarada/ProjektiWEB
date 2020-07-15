<?php
    session_start();
?>


    <head>
        <title>
            GAMINGhouse
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/logo1.png">
    </head>
    <body>
        <?php
            include('./includes/header.php');
        ?>
        <hr style="width:100%;text-align:center;margin-right:10; opacity: 50%;border: 1px solid #79b6f2;">
        <?php if(isset($_SESSION['name'])):?>
            <h4 id="paragrafi">Welcome <a href="#"><?php echo $_SESSION['name']?></a></h4>
        <?php endif; ?>
        <div class="slider">
            <div class="slider-items">
                <div  class="item active">
                   <img src="img/gta1.png" />
                </div>

                <div  class="item">
                   <img src="img/resident1.png" />   
                </div>

                <div  class="item">
                   <img src="img/csgo1.png" />   
                </div>

                <div  class="item">
                    <img src="img/pubg1.png" />   
                 </div>

      
            </div>
              
                <div class="left-slide"><</div>
                <div class="right-slide">></div>
              
         </div>
      
         <script src="slide.js"></script>

         <hr style="width:80%;text-align:center;margin-right:10; opacity: 50%;border: 1px solid #79b6f2;">
          

         <div class="content">
            <div class="product">
                <a href="#"><img class="c-image" src="img/pubgp.png" alt="pubg"></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/csgop.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/greenhellp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/residentp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/falloutp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/gearp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/fall4p.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/doomp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/animalp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/Maneaterp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/minecraftp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/Xenobladep.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/1971p.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/Destroyp.png" alt=""></a>
            </div>

            <div class="product">
                <a href="#"><img class="c-image" src="img/humankindp.png" alt=""></a>
            </div>

         </div>

         <hr style="width:80%;text-align:center;margin-right:10; opacity: 50%;border: 1px solid #79b6f2;">
         
         <div class="footer">
            
                
            
         </div>
        <?php
            include('./includes/footer.php')
        ?>
    </body>
