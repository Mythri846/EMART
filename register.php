<?php
    @include 'config.php';
    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pass=($_POST['password']);
        $cpass=($_POST['cpassword']);

        $select="SELECT * FROM `users` WHERE email= '$email' && password = '$pass'";
        $result=mysqli_query($conn,$select);
        if(mysqli_num_rows($result)>0){
            $error[]='user already exist!';
        }else{
            if($pass!=$cpass){
                $error[]='password not matched!';
            }else{
                $insert="INSERT INTO `users`(name,email,password) VALUES('$name','$email','$pass')";
                mysqli_query($conn, $insert);
                header('location:signup.php');
            }
        }
    }


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
        if(isset($error)){
            foreach($error as $error){
                echo '<span class= "error-msgs"style="color:white;">'.$error.'</span>';
            };
        };
        ?>
    
<div class= form-container>
<form action="" method="post">
        <h3>register now</h3>
        <input type="text" name="name" required placeholder="enter username" class="box">
        <input type="email" name="email" required placeholder="enter email" class="box">
        <input type="password" name="password" required placeholder="enter password" class="box">
        <input type="cpassword" name="cpassword" required placeholder="confirm password" class="box">
        <input type="submit" name="submit" value="register now" class="btn" class="satya">
        <p style="color:white;">already have an account?<a href="signup.php" id="login">login now</a></p>
    </form>
</div>
</body>
</html>