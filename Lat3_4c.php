<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <link rel="stylesheet" href="style-4c.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="wrapper-content">
            <div class="content">
                <div class="main-content">
                    <p><u>Order Summary</u></p>
                    <?php
                        $num_cd_order = $_COOKIE['cd_order'];
                        $num_dvd_order = $_COOKIE['dvd_order'];
                        echo "<p>Ordered CD: <br>".$num_cd_order." pieces</p>";
                        echo "<P>Ordered DVD: <br>".$num_dvd_order." pieces</p>";
                    ?>
                </div>
                <div class="update-data">
                    <div>
                        <p>Update Data</p>
                        <i class="fa-solid fa-arrow-down non-active"></i>
                        <div class="form-update">
                            <form action="Lat3_4a.php" method="post">
                                <p>Ubah Jumlah CD: </p>
                                <input type="text" name="cd_order_update" value="0" size="2" maxlength="2">
                                <p>Ubah Jumlah DVD: </p>
                                <input type="text" name="dvd_order_update" value="0" size="2" maxlength="2">
                                <br>
                                <input type="submit" value="ganti" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

