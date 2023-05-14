<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
    }

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: login.php");
    }
?>

<html>
<head>
    <title>Order Form</title>
    <link rel="stylesheet" href="style-4a.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div>
            <h1>Selamat Datang!</h1>
            <form action="Lat3_4b.php" method="post">
                <p> 
                Order CD, amount: <br>
                <input type="text" name="cd_order" value="<?php 
                    if(isset($_POST["cd_order_update"])) {
                        echo $_POST["cd_order_update"];
                    } else {
                        echo "0";
                    }
                ?>" size="2" maxlength="2">
                </p>
                <p> 
                Order DVD, amount: <br>
                <input type="text" name="dvd_order" value="<?php 
                    if(isset($_POST["dvd_order_update"])) {
                        echo $_POST["dvd_order_update"];
                    } else {
                        echo "0";
                    }
                ?>" size="2"maxlength="2">
                </p>
                <hr>
                <div class="icon-wrapper">
                    <i class="fa-solid fa-cart-shopping fa-sm" style="color: white;"></i>
                </div>
                <input type="submit" value="Add To Cart" name="submit">
            </form>
            <form action="" method="post" id="logout">
                <input type="submit" value="Log Out" name="logout">
            </form>
        </div>

        
    </div>
    
</body>
</html>
