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
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a href="newpage.php"><button>Home</button></a>
    <div class="container">
        <form action="" method="post">
            <input type="text" placeholder="Search data" name="search">
            <button name="submit" >Search</button>
        </form>
        <div class="table">
            <table>
                <?php 
                if(isset($_POST['submit']))
                {
                    $search =$_POST['search'];
                    $sql ="SELECT * FROM `registration` WHERE id like '%$search%' or firstname like '%$search%' ";
                    $result =mysqli_query($conn,$sql);
                    if($result)
                    {
                        if(mysqli_num_rows($result)>0)
                        {
                             echo '  
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
                             </tr>
                             </thead>';
                             while($row=mysqli_fetch_assoc($result))
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
                                <tbody>
                                <td><a href="search_result.php ?data='.$fname.'">'.$id.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$regdate.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$fname.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$mname.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$sname.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$dob.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$age.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$gender.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$marital.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$occupation.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$nationality.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$mail.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$address1.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$phone.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$post.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$state.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$nok.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$address2.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$nokphone.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$post1.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$state2.'</a></td>
                                <td><a href="search_result.php ?data='.$fname.'">'.$payment.'</a></td>
                                </tbody>
                                </tr>';
                             }
                        }
                        else
                        {
                            echo '<h2>DATA NOT FOUND</h2>';
                        }
                    }
                } 
                ?>
            </table>
        </div>
    </div>
</body>
</html>