<?php
session_start();
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "admin" && $password == "admin") {
            header("Location: Lat3_4a.php");
            $_SESSION["login"] = true;
            exit;
        }
        $error = true;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="login-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div class="login-page">
                <p>Company</p>
                <div class="login-page-content">
                    <form action="" method="post">
                        <h1>Sign in to Account</h1>
                        <br><hr><br>

                        <?php if( isset($error) ) :  ?>
                            <p style="color: red; font-size: small">username atau password salah</p>
                        <?php  endif; ?> 

                        <input type="text" name="username"><br>
                        <input type="password" name="password">
                        <br>
                        <input type="submit" name="submit" value="Sign In">
                    </form> 
                </div>
            </div>
            <div class="desc-page">
                <h1>Hello, Gais!</h1>
                <hr> 
                <p>Isi data diri kamu dan temukan <br> berbagai film menarik!</p>
            </div>
        </div>
    </div>
</body>
</html>