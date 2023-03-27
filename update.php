<?php
session_start();
include "db_conn.php";
$id=$_GET['updateid'];
$sql = "SELECT * FROM `registration` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style2.css">
<body>
    <div class="container">
    <div class="title">
  			Registration Form
  		</div>
    <div class="container_logo">
    <div class="box" style="margin-bottom:0px">
        <b>HERITAGE HOSPITAL</b> <div class="button" style ="text-align:left">
    <a href="homepage.php"><button style =" margin-bottom:20px;margin-top:20px;margin-left:600px; height: 40px;width:70px;">Home</button></a>
    </div>
    </div>
    <img src="medart.png" alt="">
</div>
        <div class="reg">
        <form action="update_Database.php" method="post">
                <div class="form_wrap">
                <div class="input_wrap">
                <label style="font-size:20px"><u><b>PEROSNAL DETAILS<b></u></label><br>
                    <div class="box">
           <label for=""> <b>ID NAME:</b><br>
           <input type="text" name="id" id="" value =<?php echo $id; ?>></label>
           <label for="" style = "margin-left:30px"> <b>Registraiton-date: </b><br>
           <input type="date" name="regdate" id=""value =<?php echo $regdate; ?>></label>
                    </div>
                    <div class="box">
                    <label for=""   ><b>FIRSTNAME:</b> <br>
           <input type="text" name="firstname" id=""value =<?php echo $fname; ?>>
            </label>
           <div class="label">
           <label for="" style="margin-left:30px"> <b>MIDDLENAME:</b><br>
            <input type="text" name="middlename" id=""value =<?php echo $mname; ?>></label>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;" > <b>SURNAME:</b><br>
           <input type="text" name="surname" id=""value =<?php echo $sname; ?>></label>
           </div>
            </div>
            <div class="box">
           <div class="label">
           <label for=""><b>D.O.B</b><br>
           <input type="date" name="date" id=""value =<?php echo $dob; ?>> </label>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;" > <b>AGE:</b><br>
           <input type="number" name="age" id="" value =<?php echo $age; ?>> </label>
           </div>
           <div class="input_wrap">
  					<ul>
  						<li>
  							<label class="radio_wrap">
  								<input type="radio" name="gender" value="MALE" class="input_radio" checked>
  								<span>MALE</span>
  							</label>
  						</li>
  						<li>
  							<label class="radio_wrap">
  								<input type="radio" name="gender" value="FEMALE" class="input_radio">
  								<span>FEMALE</span>
  							</label>
  						</li>
  					</ul>
  				</div>
            </div>
            <div class="box">
                    <label for=""><b>MARITAL:STATUS:</b><br>
           <input type="text" name="marital" id=""value =<?php echo $marital; ?>>
            </label>
           <div class="label">
           <label for="" style="margin-left:30px"> <b>OCCUPATION:</b><br>
            <input type="text" name="occupation" id=""value =<?php echo $occupation; ?>></label>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;" > <b>NATIONALITY:</b><br>
           <input type="text" name="nationality" id=""value =<?php echo $nationality; ?>></label>
           </div>
            </div>
            <div class="box">
            <div class="label">
           <label for=""> <b>E-MAIL</b> <br>
           <input type="text" name="email" id=""value =<?php echo $mail; ?>></label><br>
           </div>
            </div>
            <label style="font-size:20px"><u><b>HOME-ADDRESS<b></u></label><br>
            <div class="box">
            <div class="label">
           <label for="" ><b>ADDRESS </b><br>
           <input type="text" name="address1" id=""value =<?php echo $address1; ?>></label>
           </div>
            <div class="label">
           <label for="" style="margin-left:30px;"><b>PHONE</b><br>
            <input type="text" name="phone" id=""value =<?php echo $phone; ?>></label>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;"><b>POSTAL CODE</b><br>
           <input type="text" name="post" id="" style ="margin-bottom:20px" value =<?php echo $post; ?>></label>
           </div>
            </div>
            <div class="box">
           <div class="label">
           <label for=""><b>STATE</b><br>
           <select name="state" id="" value =<?php echo $state; ?>>
           <option value="ABIA">ABIA</option>
                <option value="ADAMAWA">ADAMAWA</option>
                <option value="AKWA-IBOM">AKWA-IBOM</option>
                <option value="ANAMBRA">ANAMBRA</option>
                <option value="BAUCHI">BAUCHI</option>
                <option value="BAYELSA">BAYELSA</option>
                <option value="BENUE">BENUE</option>
                <option value="BORNO">BORNO</option>
                <option value="CROSS RIVER">CROSS RIVER</option>
                <option value="DELTA">DELTA</option>
                <option value="EBONYI">EBONYI</option>
                <option value="EDO">EDO</option>
                <option value="EKITI">EKITI</option>
                <option value="ENEGU">ENEGU</option>
                <option value="GOMBE">GOMBE</option>
                <option value="IMO">IMO</option>
                <option value="JIGAWA">JIGAWA</option>
                <option value="KADUNA">KADUNA</option>
                <option value="KANO">KANO</option>
                <option value="KATSINA">KATSINA</option>
                <option value="KEBBI">KEBBI</option>
                <option value="KOGI">KOGI</option>
                <option value="KWARA">KWARA</option>
                <option value="LAGOS">LAGOS</option>
                <option value="NASARAWA">NASARAWA</option>
                <option value="NIGER">NIGER</option>
                <option value="OGUN">OGUN</option>
                <option value="ONDO">ONDO</option>
                <option value="OSUN">OSUN</option>
                <option value="OYO">OYO</option>
                <option value="PLATEAU">PLATEAU</option>
                <option value="RIVERS">RIVERS</option>
                <option value="SOKOTO">SOKOTO</option>
                <option value="TARABA">TARABA</option>
                <option value="YOBE">YOBE</option>
                <option value="ZAMFARA">ZAMFARA</option>
            </select></label>
           </div>
            </div>
            </div>
           <div class="mailing">
           <label style="font-size:20px"><u><b>NEXT OF KIN<b></u></label><br>
           <div class="box">
           <div class="label">
           <label for=""><b>NEXT OF KIN</b> <br>
           <input type="text" name="nok" id=""value =<?php echo $nok; ?>></label><br>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;"><b>ADDRESS <br> 
            </b> <input type="text" name="address2" id=""style="margin-left:30px;"value =<?php echo $address2; ?>></label>
           </div>
           <div class="label">
           <label for="" style="margin-left:30px;"><b>PHONE</b> <br>
           <input type="text" name="nokphone" id=""style="margin-left:30px;"value =<?php echo $nokphone; ?>></label><br>
           </div>
           </div>
           <div class="box">
           <div class="label">
           <label for=""><b>POSTAL CODE : <br></b>
           <input type="text" name="post2" id="" style ="margin-bottom:20px"value =<?php echo $post1; ?>>
           </label>
           </div>
           <div class="label">
            <label for="" style="margin-left:30px;"><b>STATE </b><br> 
            <select name="state2" id="" style="margin-left:30px;"value =<?php echo $state2; ?>>
                <option value="ABIA">ABIA</option>
                <option value="ADAMAWA">ADAMAWA</option>
                <option value="AKWA-IBOM">AKWA-IBOM</option>
                <option value="ANAMBRA">ANAMBRA</option>
                <option value="BAUCHI">BAUCHI</option>
                <option value="BAYELSA">BAYELSA</option>
                <option value="BENUE">BENUE</option>
                <option value="BORNO">BORNO</option>
                <option value="CROSS RIVER">CROSS RIVER</option>
                <option value="DELTA">DELTA</option>
                <option value="EBONYI">EBONYI</option>
                <option value="EDO">EDO</option>
                <option value="EKITI">EKITI</option>
                <option value="ENEGU">ENEGU</option>
                <option value="GOMBE">GOMBE</option>
                <option value="IMO">IMO</option>
                <option value="JIGAWA">JIGAWA</option>
                <option value="KADUNA">KADUNA</option>
                <option value="KANO">KANO</option>
                <option value="KATSINA">KATSINA</option>
                <option value="KEBBI">KEBBI</option>
                <option value="KOGI">KOGI</option>
                <option value="KWARA">KWARA</option>
                <option value="LAGOS">LAGOS</option>
                <option value="NASARAWA">NASARAWA</option>
                <option value="NIGER">NIGER</option>
                <option value="OGUN">OGUN</option>
                <option value="ONDO">ONDO</option>
                <option value="OSUN">OSUN</option>
                <option value="OYO">OYO</option>
                <option value="PLATEAU">PLATEAU</option>
                <option value="RIVERS">RIVERS</option>
                <option value="SOKOTO">SOKOTO</option>
                <option value="TARABA">TARABA</option>
                <option value="YOBE">YOBE</option>
                <option value="ZAMFARA">ZAMFARA</option>
            </select></label>
           </div>
           </div>
           <label style="font-size:20px"><u><b>PAYMENT<b></u></label><br>
           <div class="box">
           <div class="label">
            <label for="">PAYMENT :<br>
           <select name="payment" id=""value =<?php echo $payment; ?>>
                <option value="CASH">CASH</option>
                <option value="INSURANCE">INSURANCE</option>
            </select></label>
            </div>
            </div>
            <div class="submit">
            <div class="input_wrap">
  					<input type="submit" name="submit" value="UPDATE" class="submit_btn">
  				</div>
            </div>
           </form>
            </div>
            </div>
            </div>
           </div>
           </div>
  			</div>
            </div>
            </div>
           </div>
        </div>
    </div>
</body>
</html>