<?php
    @include 'config.php';
    session_start();
    if(isset($_POST['submit'])){

        
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pass=($_POST['password']);

        $select="SELECT * FROM `users` WHERE email= '$email' && password = '$pass'";
        $result=mysqli_query($conn,$select);
       
        if(mysqli_num_rows($result)>0){
                 $row=mysqli_fetch_array($result);

        if($row['user_type']=='admin'){
            $_SESSION['admin_name']=$row['name'];
            header('location:admin_page.html');
           }
           elseif($row['user_type']=='user'){
            $_SESSION['user_name']=$row['name'];
            header('location:starting.php');
           }
           else{
            $message[]='no user found!';
           }
        }
        else{
            $message[]='incorrect email or password!';
        }
    };


?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <title>register</title>
    <link rel="stylesheet" href="satya.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
    if(isset($message)){
        if(isset($mesage)){
            foreach($message as $message){
                echo '<div class="message">
                <span>'.$message.'</span>
                <i class="fa fa-times" onclick="this.parentElement.remove()"></i>
            </div>';
            }
        }
    }
    ?>
<div class= form-container>
<form action="" method="post" class="login-form">
    <h3>login now</h3>
    <input type="email" placeholder="email" class="box" name="email">
    <input type="password" placeholder="password" class="box" name="password">
    <input type="submit" name="submit" class="btn" value="login now">
    <p style="color:white;">already have an account?<a href="register.php" id="login">register now</a></p>
</form>
</div>
</body>
</head>
</html>