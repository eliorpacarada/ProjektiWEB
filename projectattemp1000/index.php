<?php
    session_start();
    require 'models/dbinc.php';

    $sql = 'SELECT * FROM product';

    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(\PDO::FETCH_ASSOC);

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
             <?php
                foreach($result as $item) {

                echo "<div class=\"product\">";
                echo "<a href=\"contactus.php\"><img class=\"c-image\" src=\"";
                echo $item['img']."\" alt=\"\"></a></div>";
 
            }
                ?>
        </div>
            

         </div>

         <hr style="width:80%;text-align:center;margin-right:10; opacity: 50%;border: 1px solid #79b6f2;">
         
         <div class="footer">
         
         <?php
            include('./includes/footer.php')
        ?>
                
            
         </div>

    </body>
