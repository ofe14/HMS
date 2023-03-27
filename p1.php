<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <div class="maincont">
            <div class="container">
                <div class="container_logo">
                    <img src="medart.png" alt="">
                </div>
                <div class="head"><b>HOSPITAL MANAGEMENT SYSTEM</b></div>
                <div class="foot">
                    <?php if(isset($_GET['error'])){?>
                        <p class="error"> <?php echo $_GET['error'];?></p>
                        <?php
                    }?>
                    <form action="login.php" method="post">
                        <div class="username">
                            <label for=""><b>USERNAME : </b><input type="text" name="uname" id="user"></label>
                        </div>
                        <div class="password">
                            <label for=""><b>PASSWORD :</b></label><input type="password" name="password" id="pass"><br>
                            <input type="submit" value="login" name=>
                        </div>
                    </form>
                    <a href="dashboard.html">Reset password</a><br>
        </div>
    </form>
</body>
</html>