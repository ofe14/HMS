<?php
session_start();
include "db_conn.php";

/*Registration*/
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $regdate=$_POST['regdate'];
    $fname =$_POST['firstname'];
    $mname =$_POST['middlename'];
    $sname =$_POST['surname'];
    $dob=$_POST['date'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $marital=$_POST['marital'];
    $occupation=$_POST['occupation'];
    $nationality=$_POST['nationality'];
    $phone=$_POST['phone'];
    $mail=$_POST['email'];
    $nok=$_POST['nok'];
    $nokphone=$_POST['nokphone'];
    $address1=$_POST['address1'];
    $post=$_POST['post'];
    $state=$_POST['state'];
    $address2=$_POST['address2'];
    $post1=$_POST['post2'];
    $state2=$_POST['state2'];
    $payment=$_POST['payment'];



}

$sql = "INSERT INTO `registration`(`id`, `registration-date`, `firstname`, `middlename`, `surname`, `d.o.b`, `age`, `gender`, `marital`, `occupation`, `nationality`, `phone.no`, `mail`, `next of kin`, `phone`, `address`, `postal.code`, `state`, `m.address`, `m.postal.code`, `m.state`, `payment`) VALUES 
('$id','$regdate','$fname','$mname','$sname','$dob','$age','$gender','$marital','$occupation','$nationality','$phone','$mail','$nok','$nokphone','$address1','$post','$state','$address2','$post1','$state2','$payment')";

if(mysqli_query($conn, $sql))
{
    echo "<Script>alert('new record inserted')</script>";
    header("location: manage.php");
    exit();
}
else
{
    echo "erro:".mysqli_error($conn);

}
mysqli_close($conn);
