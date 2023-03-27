<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname'])&& isset($_POST['password']))
{
    function validate($data)
    {
        $data =trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
}
if(empty($uname))
{
    header("location: p1.php? error=user name is required");
    exit();
}
elseif(empty($pass))
{
    header("location: p1.php? error =password is required");
    exit();
}

$sql = "SELECT * FROM `users` WHERE username ='$uname' AND password ='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)=== 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['username']===$uname && $row['password']===$pass)
    {
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id'] =$row['id'];
        header("location: newpage.php");
        exit();
    }
    else
    {
        header("locaiton: p1.php?error=incorrect username or password");
        exit();
    }
}
else{
    header("location: p1.php");
    exit();
}