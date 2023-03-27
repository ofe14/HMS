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
</head>
<link rel="stylesheet" href="style3.css">
<body>
<a href="newpage.php"><button style="color:black;margin-bottom:11px">Home</button></a>
    <div class="table" style="font-size:13px;">
        <table>
            <thead>
            <tr>
            <th>id</th>
            <th>Registraiton-date</th>
            <th>Firstname</th>
            <th>middlename</th>
            <th>Surname</th>
            <th>Date of birth</th>
            <th>age</th>
            <th>Gender</th>
            <th>marital-status</th>
            <th>occupation</th>
            <th>nationality</th>
            <th>mail</th>
            <th>Address</th>
            <th>phone number</th>
            <th>Postal code</th>
            <th>State</th>
            <th>Next of kin</th>
            <th>Mail address</th>
            <th>Phone number</th>
            <th>Postal code</th>
            <th>State</th>
            <th>payment</th>
            <th>Opertaions</th>
        </tr>
            </thead>
            <tbody>
                <?php 
                $sql ="SELECT * FROM `registration`";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    while($row =mysqli_fetch_assoc($result))
                    {

                        $id=$row['id'];
                        $regdate=$row['registration-date'];
                        $fname =$row['firstname'];
                        $mname =$row['middlename'];
                        $sname =$row['surname'];
                        $dob=$row['d.o.b'];
                        $age=$row['age'];
                        $gender=$row['gender'];
                        $marital=$row['marital'];
                        $occupation=$row['occupation'];
                        $nationality=$row['nationality'];
                        $phone=$row['phone.no'];
                        $mail=$row['mail'];
                        $nok=$row['next of kin'];
                        $nokphone=$row['phone'];
                        $address1=$row['address'];
                        $post=$row['postal.code'];
                        $state=$row['state'];
                        $address2=$row['m.address'];
                        $post1=$row['m.postal.code'];
                        $state2=$row['m.state'];
                        $payment=$row['payment'];

                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$regdate.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$mname.'</td>
                        <td>'.$sname.'</td>
                        <td>'.$dob.'</td>
                        <td>'.$age.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$marital.'</td>
                        <td>'.$occupation.'</td>
                        <td>'.$nationality.'</td>
                        <td>'.$mail.'</td>
                        <td>'.$address1.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$post.'</td>
                        <td>'.$state.'</td>
                        <td>'.$nok.'</td>
                        <td>'.$address2.'</td>
                        <td>'.$nokphone.'</td>
                        <td>'.$post1.'</td>
                        <td>'.$state2.'</td>
                        <td>'.$payment.'</td>
                        <td style="width:100px">
                        <a href="update.php? updateid='.$id.'"><button style="background-color: blue;">Update</button></a>
                        <a href="delete.php? deleteid='.$id.'"><button style="background-color: red;">Delete</button></a>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>