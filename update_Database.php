<?php 
session_start();
include "db_conn.php";

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
    $address2=$_POST['address2'];
    $post1=$_POST['post2'];
    $state2=$_POST['state2'];



}
$sql ="UPDATE `registration` SET `id`='$id',`registration-date`='$regdate',`firstname`='$fname',`middlename`='$mname',`surname`='$sname',`d.o.b`='$dob',`age`='$age',`gender`='$gender',`marital`='$marital',`occupation`='$occupation',`nationality`='$nationality',`phone.no`='$phone',`mail`='$mail',`next of kin`='$nok',`phone`='$nokphone',`address`='$address1',`postal.code`='$post',`state`='$state',`m.address`='$address2',`m.postal.code`='$post1',`m.state`='$state2',`payment`='$payment' WHERE `id` = '$id'";
if(mysqli_query($conn,$sql))
{
    header("location:manage.php");
    exit();
}
else
{
    echo "erro:".mysqli_error($conn);

}
?>