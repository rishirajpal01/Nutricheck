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
    <title>Nutricheck - Dairy</title>    
    <link rel="stylesheet" href="css/dairy.css">
</head> 
<?php include('templates/header.php');  ?>

<section id="gallery">
        <div class="container">
            <div class="row">

                <!--BOX 1-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/milk.jpg" alt="milk_img">
                        <div class="card-body">
                            <h5 class="card-title">MILK</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content 1cup (240ml)</p>
                            <p class="card-text">Carbohydrate - 15g</p>
                            <p class="card-text">Protien -  10g</p>
                            <p class="card-text">Fat -  0g</p>
                            <a href="https://en.wikipedia.org/wiki/Milk" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.stonyfield.com/wp-content/uploads/2017/02/SF_Web_HalfGallonMilk_Nutritionals_ProteinFFMilk.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 2-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/butter.jpg" alt="butter_img">
                        <div class="card-body">
                            <h5 class="card-title">BUTTER</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content 1 tbsp  </p>
                            <p class="card-text">Carbohydrate -  0g</p>
                            <p class="card-text">Protien -  0g</p>
                            <p class="card-text">Fat -  11g</p>
                            <a href="https://en.wikipedia.org/wiki/Butter" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.thediabetescouncil.com/wp-content/uploads/2016/08/butter-nutrition-facts-for-diabetics.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 3-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/ghee.jpg" alt="ghee_img">
                        <div class="card-body">
                            <h5 class="card-title">GHEE</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content 1 tbsp 14g </p>
                            <p class="card-text">Carbohydrate -  0g</p>
                            <p class="card-text">Protien -  0g</p>
                            <p class="card-text">Fat - 14g</p>
                            <a href="https://en.wikipedia.org/wiki/Ghee" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://images-na.ssl-images-amazon.com/images/I/71gKnSgNImL._SL1292_.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                <!--BOX 4-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/cheese.jpg" alt="cheese_img">
                        <div class="card-body">
                            <h5 class="card-title">CHEESE</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content(100g)  </p>
                            <p class="card-text">Carbohydrate -  3.4g</p>
                            <p class="card-text">Protien -  23g</p>
                            <p class="card-text">Fat -  33g</p>
                            <a href=" https://en.wikipedia.org/wiki/Cheese" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/7c/15/a6/7c15a6c665c37b5f2a12ff44daaa268f.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 5-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/paneer.jpeg" alt="paneer_img">
                        <div class="card-body">
                            <h5 class="card-title">PANEER</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (100g)  </p>
                            <p class="card-text">Carbohydrate - 3.38g </p>
                            <p class="card-text">Protien -  11.2g</p>
                            <p class="card-text">Fat - 4.3g </p>
                            <a href="https://en.wikipedia.org/wiki/Paneer" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/5c/9b/40/5c9b406c91d49a59b9394de757f2d80a.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 6-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="Img/dairy/yogurt.jpg" alt="yogurt_img">
                        <div class="card-body">
                            <h5 class="card-title">YOGURT</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (150g) </p>
                            <p class="card-text">Carbohydrate - 7g </p>
                            <p class="card-text">Protien - 15g </p>
                            <p class="card-text">Fat - 0g </p>
                            <a href="https://en.wikipedia.org/wiki/Yogurt" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.stonyfield.com/wp-content/uploads/2017/02/2017-11-16-Stonyfield-Organic-0-Fat-Greek_Plain-5.3oz.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
<?php include('templates/footer.php');  ?>
</html>