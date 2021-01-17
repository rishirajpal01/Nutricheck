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
    <title>Nutricheck - Fruits</title>    
    <link rel="stylesheet" href="css/fruits.css">
</head> 
<?php include('templates/header.php');  ?>

<section id="gallery">
        <div class="container">
            <div class="row">

                <!--BOX 1-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/apple1.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">APPLE</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (224g) </p>
                            <p class="card-text">Carbohydrate - 34g </p>
                            <p class="card-text">Protien - 1g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Apple" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://bestapples.com/wp-content/uploads/2015/10/nutritionfacts.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 2-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/banana.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">BANANA</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(55g) </p>
                            <p class="card-text">Carbohydrate - 16.9g</p>
                            <p class="card-text">Protien - 7.9g </p>
                            <p class="card-text">Fat - 6.3g </p>
                            <a href="https://en.wikipedia.org/wiki/Banana" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://chocolatecoveredkatie.com/wp-content/uploads/Chocolate-Chip-Banana-Love-Bars_EFB6/image.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 3-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/orange.jfif" alt="">
                        <div class="card-body">
                            <h5 class="card-title">ORANGE</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(250) </p>
                            <p class="card-text">Carbohydrate - 29g</p>
                            <p class="card-text">Protien - 7g</p>
                            <p class="card-text">Fat - 9g</p>
                            <a href="https://en.wikipedia.org/wiki/Orange_(fruit)" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://lh3.googleusercontent.com/proxy/2pWe3SYbd75bc6uKgMaZ0h6HxoZ1aKtYecWvIgRvPX86i2gsbpc6x6hVCgXHJl-loYAH4_F95sBbIO-pi0KoGhGtW-7XZgqX3bsfkvtphjUn27DNlI15kTqjj4NQ3uSjJVwYg6UbF4n2BRq8cNiE" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 4-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/papaya.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PAPAYA</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(140g) </p>
                            <p class="card-text">Carbohydrate - 19g</p>
                            <p class="card-text">Protien - 0g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Papaya" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://images.squarespace-cdn.com/content/v1/537f6654e4b04623e4fa0927/1409069613865-UQGCUPYVBIYNY89WSCDI/ke17ZwdGBToddI8pDm48kDK23VigifRRekt7CIgi9b8UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8GRo6ASst2s6pLvNAu_PZdKvtqkiBWpg-8bGZqwSG1A8THySpr2ySf2yQkoEBnPswxU07d-RJnJ8kCswnXjbMwo/PapayaNutrition.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 5-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/mango.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">MANGO</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (140g)</p>
                            <p class="card-text">Carbohydrate - 27g</p>
                            <p class="card-text">Protien - 0g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Mango" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://champagnemango.com/wp-content/uploads/2013/02/champagne_5lines_Rev_5-2012_final_forweb.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 6-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/watermelon.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">WATERMELON</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(154g) </p>
                            <p class="card-text">Carbohydrate - 12g</p>
                            <p class="card-text">Protien - 1g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Watermelon" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://infactcollaborative.com/wp-content/uploads/2011/08/interesting-nutrition-fact-watermelon-nutrition-label.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>



                <!--BOX 7-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/guava.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">GUAVA</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(100g) </p>
                            <p class="card-text">Carbohydrate - 14g</p>
                            <p class="card-text">Protien - 3g</p>
                            <p class="card-text">Fat - 1g</p>
                            <a href="https://en.wikipedia.org/wiki/Guava" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://cdn.wrytin.com/images/wrytup/r/1024/nutrition-edit-k0t7n0rx.jpeg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 8-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/strawberry.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">STRAWBERRY</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(144g) </p>
                            <p class="card-text">Carbohydrate - 11g</p>
                            <p class="card-text">Protien - 1g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Strawberry" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://strawberryplants.org/wp-content/uploads/2011/03/strawberry-nutrition-facts.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 9-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Fruits/pineapple1.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PINEAPPLE</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(100g) </p>
                            <p class="card-text">Carbohydrate - 12g</p>
                            <p class="card-text">Protien - 1g</p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Pineapple" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://lh3.googleusercontent.com/proxy/0_CLMG1nizh7qsombnuinP0pPC2AxG_0W6BZBQL0vxLXvFY-unXI6OQj1Dc554Ff3s8fd7t8ZA1SoFC1jOCgsyDyZS-TjFErISBtn13zHCQMMxvd_QDnEFU3oT-iuC_3rVnV_5yjDWeK" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include('templates/footer.php');  ?>
</html>