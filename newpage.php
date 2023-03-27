<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boxstyle.css">
</head>
<body>
    <div class="content-header">
        <div class="prof">
            <div class="white-label" >
                <div class="nav-profile">
                <div class="nav-profile-image" >
                                        <img src="male profile.png" alt="profile-img"
                                        />
                                        <div class="nav-profile-name" ><?php echo $_SESSION['username'];?><i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <div class="header-nav" style="background-color: #0d6ad7;">
                <div class=menu-button >HERITAGE HOSPITAL <div class=logo2 style="height:40px;width:40px;margin-left:3px"><img src="medart.png" alt="" srcset=""></div></div>
            </div>
        </div>
    </div>
    <div class="body">
        <div id="sidebar-nav">
            <a href="search.php"><div class="side-list">Check - in</div></a>
            <a href="Registration.php"><div class="side-list">Register-Patient</div></a>
            <a href="manage.php"><div class="side-list"> Manage Patient FIle</div></a>
            <a href="#"><div class="side-list">Appointments<br>& Scheduling</div></a>
            <a href="p1.php"><button style="height:30px;width:60px;margin-left:40px;color:antiquewhite">logout</button></a></div>
            <div class="content">
                <video  width="1200" autoplay loop muted plays-inline class="background-clip">
                    <source src="vid.mp4" type="video/mp4">
                </video>
                <div class="caption" style ="color:red">
                   <div class="caphead"><h1> <u> WELCOME TO HERITAGE HOSPITAL</u></h1></div>
                    <i> "IN AN AGE WHERE MALPRACTICE THREATENS THE LIVES OF OUR COMMUNITY WE AIM TO CREATE A SAFE ENVIROMENT BY EMPHASIZING PRECAUTION,SAFETY,
                        AND WELFARE OF OUR PATIENTS.WE DO THAT BY STRIVING TO LOWER MEDICAL ERRORS REDUCE READMISSION RATES, AND EDUCATE OUR PATIENTSON HOW TO LIVE A HEALTHY LIFESTYLE. "</i>
                </div>
          </div>
        <script src="homepage.js"></script>
            </div>
    </div>

    
</body>
</html>
<?php
}
else {
    header("location: p1.php");
    exit();
}
?>