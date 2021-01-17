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
    <title>Nutricheck - Vegetables</title>    
    <link rel="stylesheet" href="css/vegetable.css">
</head> 
<?php include('templates/header.php');  ?>

<section id="gallery">
        <div class="container">
            <div class="row">

                <!--BOX 1-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/spinach.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">SPINACH</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (100g) </p>
                            <p class="card-text">Carbohydrate - 5g </p>
                            <p class="card-text">Protien -12g </p>
                            <p class="card-text">Fat -11g </p>
                            <a href="https://en.wikipedia.org/wiki/Spinach" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://cookingmatters.org/sites/default/files/Nutrition_labels_2018/Label_Spinach_Salad_with_Eggs_2018.gif  " target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 2-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/cabbage.jpg" alt="">
                        <div class="card-body">
                        <h5 class="card-title">CABBAGE</h5> 
                        </div>
                            <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                                <p class="card-text">Nutritional content (100g) </p>
                                <p class="card-text">Carbohydrate - 2.2g </p>
                                <p class="card-text">Protien - 1.5g </p>
                                <p class="card-text">Fat - 0.2g </p>
                                <a href="https://en.wikipedia.org/wiki/Cabbage" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                                <a href="https://www.fitnessvsweightloss.com/wp-content/uploads/2014/06/Nutrition-chart-of-Chinese-cabbage.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>

                <!--BOX 3-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/cauliflower.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">CAULIFLOWER</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(100g) </p>
                            <p class="card-text">Carbohydrate - 4.97g </p>
                            <p class="card-text">Protien - 1.92g </p>
                            <p class="card-text">Fat - 0.28g </p>
                            <a href="https://en.wikipedia.org/wiki/Cauliflower" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://greengiant.com/wp-content/uploads/2019/04/Cauliflower_10oz_NFP.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 4-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/potato.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">POTATO</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(148g) </p>
                            <p class="card-text">Carbohydrate - 26g </p>
                            <p class="card-text">Protien - 3g </p>
                            <p class="card-text">Fat - 0g </p>
                            <a href="https://en.wikipedia.org/wiki/Potato" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.potatogoodness.com/wp-content/uploads/2020/02/Potato-Nutrition-Label.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 5-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/sweet_potato.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">SWEET PAPATO</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (38g) </p>
                            <p class="card-text">Carbohydrate - 15g </p>
                            <p class="card-text">Protien - 5.6g </p>
                            <p class="card-text">Fat - 8.3g </p>
                            <a href="https://en.wikipedia.org/wiki/Sweet_potato" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://agrilife.org/dinnertonight/files/2016/11/Sweet-Potato-Patty-Label.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 6-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/beet_root.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">BEET ROOT</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(123g) </p>
                            <p class="card-text">Carbohydrate - 20.6g </p>
                            <p class="card-text">Protien - 1.7g </p>
                            <p class="card-text">Fat - 1.8g </p>
                            <a href="https://en.wikipedia.org/wiki/Beetroot" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://vegonline.org/images/Beet%20Nutrition%20Facts%20copy.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>



                <!--BOX 7-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/bell_pepper.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">BELL PEPPER</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (100g) </p>
                            <p class="card-text">Carbohydrate - 4g </p>
                            <p class="card-text">Protien - 1g </p>
                            <p class="card-text">Fat - 0g </p>
                            <a href="https://en.wikipedia.org/wiki/Bell_pepper" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="http://www.freshpickinsmarket.com/Images/Interior/nutrition%20facts/diced%20red-green%20bell%20peppers.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 8-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/broccoli.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">BROCCOLI</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(146g) </p>
                            <p class="card-text">Carbohydrate - 9.2g </p>
                            <p class="card-text">Protien - 3.8g </p>
                            <p class="card-text">Fat - 2.7g </p>
                            <a href="https://en.wikipedia.org/wiki/Broccoli" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://tastyseasons.com/wp-content/uploads/2015/07/broccoli-nutrition-facts.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 9-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Vegetable/peas.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PEAS</h5>
                        </div>
                        <div class="card-body"data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (100g) </p>
                            <p class="card-text">Carbohydrate - 3.69h </p>
                            <p class="card-text">Protien - 0.6g </p>
                            <p class="card-text">Fat - 0.02g </p>
                            <a href="https://en.wikipedia.org/wiki/Pea" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/33/d3/61/33d36169b314b63cbd5e4741ba31ced1.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include('templates/footer.php');  ?>
</html>