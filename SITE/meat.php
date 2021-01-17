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
    <title>Nutricheck - Meat</title>    
    <link rel="stylesheet" href="css/meat.css">
</head> 
<?php include('templates/header.php');  ?>

<section id="gallery">
        <div class="container">
            <div class="row">

                <!--BOX 1-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/eggs.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">EGGS</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (per 50g) </p>
                            <p class="card-text">Carbohydrate - less than 1g </p>
                            <p class="card-text">Protien - 6g </p>
                            <p class="card-text">Fat - 4.5g </p>
                            <a href="https://en.wikipedia.org/wiki/Egg_as_food" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/72/6a/1f/726a1f87cae3ab2da6615d19f13c0a13.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 2-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/chicken.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">CHICKEN</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">Nutritional content (per 160g)</p>
                            <p class="card-text">Carbohydrate - 1g</p>
                            <p class="card-text">Protein - 35g</p>
                            <p class="card-text">Fat - 2g</p>
                            <a href="" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://sandridge.com/media/zoo/images/326_ozFully_Cooked_Grilled_Chicken_Breasts_7b34bc26d77edfaca58c0a990af5c5f4.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 3-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/turkey.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">TURKEY</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 85g)
                            </p>
                            <p class="card-text">Carbohydrate - 0g</p>
                            <p class="card-text">Protien - 19g</p>
                            <p class="card-text">Fat - 2.5g</p>
                            <a href="https://en.wikipedia.org/wiki/Turkey_as_food" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.eatturkey.org/wp-content/uploads/2019/02/RoastNoSkin_0.gif" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--BOX 4-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/mutton.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">MUTTON</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 100g)
                            </p>
                            <p class="card-text">Carbohydrate - 3g</p>
                            <p class="card-text">Protien - 31g</p>
                            <p class="card-text">Fat - 9g</p>
                            <a href="https://en.wikipedia.org/wiki/Lamb_and_mutton" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.foodsforbetterhealth.com/wp-content/uploads/2017/03/Lambs-Nutrition-348x450.jpg" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 5-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/crab.png" alt="mr_crabs">
                        <div class="card-body">
                            <h5 class="card-title">BLUE CRAB</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 85g)
                            </p>
                            <p class="card-text">
                                Carbohydrate - 0g
                            </p>
                            <p class="card-text">
                                Protien - 17g
                            </p>
                            <p class="card-text">Fat - 1.5g</p>
                            <a href="https://en.wikipedia.org/wiki/Crab#:~:text=Crabs%20are%20prepared%20and%20eaten,such%20as%20the%20snow%20crab." target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/a5/42/e3/a542e32da9efc72f7f9a49c83b477a52.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 6-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/prawns.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PRAWNS</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 28.35g)
                            </p>
                            <p class="card-text">
                                Carbohydrate - 0g
                            </p>
                            <p class="card-text">
                                Protien - 4.8g
                            </p>
                            <p class="card-text">Fat - 0g</p>
                            <a href="https://en.wikipedia.org/wiki/Shrimp_and_prawn_as_food" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://i.pinimg.com/originals/64/65/ca/6465ca611e6b27d3b9f0da74b5603ef8.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <!--BOX 7-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/duck.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">DUCK</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 287g)

                            </p>
                            <p class="card-text">
                                Carbohydrate - 0g
                            </p>
                            <p class="card-text">
                                Protien - 32.98g
                            </p>
                            <p class="card-text"> Fat - 112.91g</p>
                            <a href="https://en.wikipedia.org/wiki/Duck_as_food" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://thepoultryguide.com/wp-content/uploads/2013/04/nutrition-facts-of-duck-meat.gif" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 8-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/bacon.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">BACON</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 18g)

                            </p>
                            <p class="card-text">
                                Carbohydrate - 0g
                            </p>
                            <p class="card-text">
                                Protien - 6g
                            </p>
                            <p class="card-text">Fat - 7g</p>
                            <a href="https://en.wikipedia.org/wiki/Bacon#:~:text=Bacon%20is%20a%20type%20of,e.g.%2C%20the%20club%20sandwich)." target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://qph.fs.quoracdn.net/main-qimg-5229f3f78d0daab879f6aa2717932fa5" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <!--BOX 9-->
                <div class="col l4 s12" style="padding-top:20px">
                    <div class="card">
                        <img class="card-img-top" id="picallign" src="img/Meat/hotdog.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">HOT DOG</h5>
                        </div>
                        <div class="card-body" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:500px;">
                            <p class="card-text">
                                Nutritional content (per 56g)

                            </p>
                            <p class="card-text">
                                Carbohydrate - 1g
                            </p>
                            <p class="card-text">
                                Protien - 6g
                            </p>
                            <p class="card-text">    Fat - 16g</p>
                            <a href="https://en.wikipedia.org/wiki/Hot_dog" target="_blank" class="btn btn-outline-success btn-sm">WIKI</a>
                            <a href="https://www.kunzler.com/wp-content/uploads/2015/09/NF_1106_grill_franks.png" target="_blank" class="btn btn-outline-success btn-sm">Complete Facts</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include('templates/footer.php');  ?>
</html>