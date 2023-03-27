<?php 
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<a href="search.php"> <button>back</button> </a><br>
<div class="wrapper">
<div class="cont">
<?php
$data=$_GET['data'];
$sql = "SELECT * FROM `registration` WHERE firstname='$data'";
$result = mysqli_query($conn,$sql);
if($result)
{
    $row=mysqli_fetch_assoc($result);
    echo '<div class="pic"><img src="male profile.png" alt="example"> </div> <br>';
    echo '<b><u>PERSONAL-INFORMATION</u>';
    echo '<br><br><b>FIRSTNAME';
    echo str_repeat('&nbsp;',16).'MIDDLE-NAME';
    echo str_repeat('&nbsp;',16).'SURNAME';
    echo '<br>'.$row['firstname'];
    echo  str_repeat('&nbsp;',40).$row['middlename'];
    echo str_repeat('&nbsp;',30).$row['surname'];
    echo '<br><br>D.O.B';
    echo str_repeat('&nbsp;',36).'GENDER';
    echo str_repeat('&nbsp;',16).'PHONE NUMBER';
    echo  str_repeat('&nbsp;',18).'MAIL';
    echo '<br>'.$row['d.o.b'];
    echo  str_repeat('&nbsp;',28).$row['gender'];
    echo  str_repeat('&nbsp;',18).$row['phone.no'];
    echo  str_repeat('&nbsp;',18).$row['mail'];
    echo '<br><br><b><u>NEXT OF KIN</u>';
    echo '<br><br>'.'NEXT OF KIN:';
    echo str_repeat('&nbsp;',20).'PHONE';
    echo '<br>'.$row['next of kin'];
    echo str_repeat('&nbsp;',33).$row['phone'];
    echo '<br><br><b><u>RESIDENTIAL INFORMATION</u>';
    echo '<br><br>ADDRESS'.$row['address'].'';
    echo '<br>POSTAL-CODE:'.$row['postal.code'].'';
    echo '<br>STATE:'.$row['state'].'';
    echo '<br>MAILING-ADDRESS:'.$row['m.address'].'';
    echo '<br>MAIL-POSTAL-CODE:'.$row['m.postal.code'].'';
    echo '<br><STATE:'.$row['m.state'].'';
}  
?>
</div>
</div>
</body>
</html>
