<?php


?>

<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body class="grey lighten-4">
    <nav class="white z-deplth-0">
        <div class="container" style="width:100%">
            <a href="index.php" class="brand-logo"><img src="./Img/nutricheck2.png" alt="brand_logo"></a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li>
                    <span class="navbar-text">
                        <h5 id="date" class="grey-text"></h5>
                        <script>
                            var d = new Date();
                            document.getElementById("date").innerHTML = d.toDateString();                      
                        </script>
                    </span>
                </li>
                <li>
                    <a href="dairy.php" class="btn brand z-depth-0">DAIRY</a>
                </li>
                <li>
                    <a href="fruits.php" class="btn brand z-depth-0">FRUITS</a>
                </li>
                <li>
                    <a href="meat.php" class="btn brand z-depth-0">MEAT</a>
                </li>
                <li>
                    <a href="vegetables.php" class="btn brand z-depth-0">VEGETABLES</a>
                </li>
            
                <li>
                     <h5 class="grey-text">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h5>
                     
                </li>
                <li><a href="logout.php" class="btn btn-danger">Logout</a> </li>
            </ul>
       
        </div>
    
   
    </nav>