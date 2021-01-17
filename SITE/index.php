<?php 
$conn=mysqli_connect('localhost', 'admin','Admin@123', 'nutricheck');

if(!$conn){
    echo 'Connection Error'. mysqli_connect_error();
}
$sql='SELECT email, password FROM userinfo';

$result=mysqli_query($conn,$sql);

$users=mysqli_fetch_all($result,MYSQLI_ASSOC);

$errors=array('email'=>'','password'=>'');


session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 

$email = $password = "";
$email_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    

    if(empty($email_err) && empty($password_err)){

        $sql = "SELECT id, email, password,username FROM userinfo WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
  
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
    
            $param_email = $email;
            

            if(mysqli_stmt_execute($stmt)){
           
                mysqli_stmt_store_result($stmt);
                
       
                if(mysqli_stmt_num_rows($stmt) == 1){                    
 
                    mysqli_stmt_bind_result($stmt, $id, $email, $pass,$username);

                    if(mysqli_stmt_fetch($stmt)){

                        if($password==$pass){
                     
                            session_start();
                            
                  
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            $_SESSION["username"] = $username;                            
       
                            header("location: dashboard.php");
                        } else{
            
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
   
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

          
            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutricheck - Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        form{
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    }
    </style>
</head>
<!-- <a href="/Nutricheck" id="position"><img src="img/landing_page/logo.png" alt="logo"></a> -->
<section class="container grey-text">
    <h4 class="center">LOGIN</h4>
    <form action="index.php" method="POST" class="white">
        <label>Your Email:</label>
        <input type="text" name="email">
        <div class="red-text"><?php echo $email_err; ?></div>
        <label>Password:</label>
        <input type="password" name="password">
        <div class="red-text"><?php echo $password_err; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
</html>