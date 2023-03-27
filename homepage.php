<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['username']))
{
?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>home</title>
            <link rel="stylesheet" href="homepage.css">
            <script type="text/javascript" src="homepage.js"></script>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Male',     32],
          ['female',   10],
        ]);

        var options = {
          title: 'PATIENTS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
        </head>
        <body>
        <section id="sidebar">
<div class="white-label" style="background-color:#0d6ad7" >
    <div class="nav-profile">
    <div class="nav-profile-image" >
                            <img src="male profile.png" alt="profile-img"
                            />
                            <div class="nav-profile-name" ><?php echo $_SESSION['username'];?><i class="fa fa-caret-down"></i>
                            </div>
                        </div>
    </div>
</div>
<div id="sidebar-nav">
<ul>
<li><a href="search.php"><i class="fa fa-desktop"></i>Check-in</a></li>
<li><a href="Registration.php"><i class="fa fa-usd"></i>Register-Patient</a></li>
<li><a href="manage.php"><i class="fa fa-pencil-square-o"></i> Manage Patient FIle </a></li>
<li><a href="#"><i class="fa fa-sitemap"></i>Appointments<br>& Scheduling</a></li>
<div class="logout"><a href="logout.php" style="height:30px;width:30px;margin-left:40px;color:antiquewhite;"><button>LOGOUT</button></a></div>
</ul>
</div>
</section>
<section id="content">
    <div id="header">
        <div class="header-nav" style="background-color: #0d6ad7;">
            <div class=menu-button >HERITAGE HOSPITAL <div class=logo2 style="height:40px;width:40px;margin-left:3px"><img src="medart.png" alt="" srcset=""></div></div>
        </div>
    </div>
    <div class="content">
        <div class="widget-box sample-widget">
            <div class="widget-header" style="background-color: #0d6ad7;" >
                <h2>NUMBER OF PATIENTS FOR TODAY</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content" style="font-size:175px;text-align:center;">
                32
            </div>
        </div>
        <div class="widget-box sample-widget"  >
            <div class="widget-header"style="width: 584px;">
                <h2>PATIENT CHART</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
            <div id="piechart" style="width: 500px; height: 200px;"></div>
        </div>
        </div>
        <div class="widget-box sample-widget">
            <div class="widget-content">
                <div class="contslide" style="height:150px;" >
                <div id="slideshow-example" data-component="slideshow">
        <div role="list">
          <div class="slide">
            <img src="slide1.jpg" alt="">
            <figcaption style="background-color:black;color:white;" >MAMAMAMAMAAM</figcaption>
          </div>
          <div class="slide">
            <img src="reg_page2.jpg" alt="">
            <figcaption style="background-color:black;color:white;" >MAMAMAMAMAAM</figcaption>
          </div>
          <div class="slide">
            <img src="doc.jpeg" alt="">
            <figcaption style="background-color:black;color:white;" >MAMAMAMAMAAM</figcaption>
          </div>
        </div>
      </div>
        </div>
    <script src="homepage.js"></script>
            </div>
        </div>
        
        
    </div>
</section>
        </body>
    </html>

    <?php
}
else {
    header("location: p1.php");
    exit();
}
?>