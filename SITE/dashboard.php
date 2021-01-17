<?php
 session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutricheck - Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    
</head> 

<?php include('templates/header.php');  ?>


    <a href="meat.php" target="_blank">
        
        <div class="outline" id="meat">
        
            <p class="centre" id="meattext">MEAT</p>
    
        </div>

    </a>

    <a href="vegetables.php" target="_blank">
        
        <div class="outline" id="vegetable">
        
            <p class="centre" id="vegtext">VEGETABLES</p>
    
        </div>
    
    </a>

    <a href="fruits.php" target="_blank">
        
        <div class="outline" id="fruits">
        
            <p class="centre" id="fruittext" >FRUITS</p>
    
         </div>
    
    </a> 

    <a href="dairy.php" target="_blank"> 
        
        <div class="outline" id="dairy">
        
            <p class="centre" id="dairytext">DAIRY</p>
    
        </div>  
    </a>


    <?php include('templates/footer.php');  ?>
</html>