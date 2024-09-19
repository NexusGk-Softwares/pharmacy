<?php
require_once('functions/dbconfig.php');       
  require_once('functions/functions.php');
  
  $obj = new cls_func();										
?>
    
<!DOCTYPE HTML>
<html>
	<head>
			<title>HMS-HOSPITAL MANAGEMENT SYSTEM</title>
			<link rel="icon" href="images/medical logo.jpg">
			<link rel="stylesheet" type="text/css" href="css/project.css"/>
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
			<!--dropdown menu-->
			 <link rel="stylesheet" href="css/normalize.css">
       	 <link rel="stylesheet" href="css/style2.css">
          <link rel="stylesheet" href="css/dropdown.css">
			<!--End dropdown menu-->
	</head>
	<body>
			<div class="all">
			
				<div class="firsttwo">
					<div class="logo">
						<img src="images/medical-logo.jpeg" style="width:250px;height:200px;"/>
					</div>
					<div class="title">
						<center>
						<h1>HOSPITAL MANAGEMENT SYSTEM</h1>
						</center>
					</div>
					<div class="search">
					
						<div class="box">
  <div class="container-1">
      <input type="search" id="search" placeholder="Search..." />
	 <a href=""><img src="images/search.png" alt="" style="width:76px;height:72px;background-color:#FFFAF0;margin:0px;vertical-align: middle;
  white-space: nowrap;
  position: relative;"/></a>
  </div>
</div>
					</div>
				</div>
				<div class="secondthree">
					<!--dropdown menu-->
		<div class="container">
		<ul>
			<li class="dropdown">
				<a href="index.php" data-toggle="dropdown"><i class="fa-2x fa fa-home" aria-hidden="true" style="margin-right:10px;color:#00FFFF;"></i>HOME </a>
			</li>
			<li class="dropdown">
				<a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-user" aria-hidden="true" style="margin-right:10px;color:#FF00FF;"></i>Addministor <i class="icon-arrow"></i></a>
				<ul class="dropdown-menu">
				<li><a href="admin/admin.php" >Admin login</a></li>
        
				</ul>
			</li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-child" aria-hidden="true" style="margin-right:10px;color:#00FF7F;"></i>Reception <i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="patient_info.php" >Admition</a></li>
        <li><a href="release.php"   >Release</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-medkit" aria-hidden="true" style="margin-right:10px;color:#F0FFF0;"></i>Doctor<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="all_users/Dr_and_Nurse_list.php"> Doctor list</a></li>
       <li><a href="pa_pricription.php">Patient-pricription</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ship" aria-hidden="true" style="margin-right:10px;color:#FFE4C4;"></i>Report Result<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
       <li><a href="all_users/pricription_details.php">pricription-details</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-balance-scale" aria-hidden="true" style="margin-right:10px;color:#FFFF00;"></i>Accountant<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
         <li><a href="total_cost.php" > Total Cost</a></li>
          <li><a href="all_users/Check_balence.php"> Check_balence</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ambulance" aria-hidden="true" style="margin-right:10px;color:#EE82EE;"></i>Pharmacy<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="#">pricription-details</a></li>
      </ul>
    </li>
  </ul>
  
</div>
    
        <script src="js/index.js"></script>

    
    
					<!--End dropdown menu-->
					<div class="MIDDLE" style="width:740px;margin: 0px auto;display: block;overflow: hidden;">
									<p class="msg" >
											<center>
												<?php
												$patient_id  = "";
												$full_Name   = "";
												$address     = "";
												$gender      = "";
												$t_bday      = "";
												$usr_time    = "";
												$emp_name    = ""; 
												$emp_phone   = "";
												$emp_address =  "";
												$gender      = "";
												$emp_age     = "";
												
										if(isset($_POST['submit']))
										{
											$patient_id  = $_POST['patient_id'];
											$full_Name   = $_POST['full_Name'];
											$address     = $_POST['address'];
											$gender      = $_POST['gender'];
											$t_bday        = $_POST['t_bday'];
											$usr_time    = $_POST['usr_time'];
											$emp_name    = $_POST['emp_name'];
											$emp_phone   = $_POST['emp_phone'];
											$emp_address = $_POST['emp_address'];
											
											$emp_age     = $_POST['emp_age'];
											$set_Category= $_POST['set_Category'];
											$set_usr_time= $_POST['set_usr_time'];
											$folor_no    = $_POST['folor_no'];
											$room_no     = $_POST['room_no'];
											$set_no      = $_POST['set_no'];
											$Doctor_id   = $_POST['Doctor_id'];
											$Doctor_name = $_POST['Doctor_name'];

											if(empty($patient_id) or empty($full_Name) or empty($address)or empty($gender) or empty($t_bday) or empty($usr_time)or empty($emp_name)or empty($emp_phone)or empty($emp_address)or empty($emp_age ) or empty($set_Category) or empty($set_usr_time )or empty($folor_no )or empty($room_no )or empty($set_no )or empty($Doctor_id )or empty($Doctor_name))
											{
												echo "<h2 style='color:red;text-align:center;'> Field.......must not be empty.</h2>";
											}else{
												$hk = $obj->patient_data_con($patient_id,$full_Name,$address,$gender,$t_bday,$usr_time,$emp_name ,$emp_phone,$emp_address,$emp_age,$set_Category,$set_usr_time,$folor_no ,$room_no,$set_no,$Doctor_id,$Doctor_name);
												if($hk)
												{
													echo "<h2 style='color:#3399ff;'>Successfully Inserted";
												
												}
												else{
													echo "<h2 style='color:#3399ff;text-align:center;'>Data is not inserted</h2>";
												}
											}
										}


												?>
										</center>
									</p>
					<div class="all_ad">
					

							<h2 style="text-align: center;font-size:30px;">PATIENT ADMITION FORM</h2>
							
				
									<h2 style="font-size: 23px;">PATIENT INFORMATION</h2>
										

						
							<form action="patient_info.php" method="post">
								<table>
								
									<tr>
										<td>PATIENT ID:</td>
										<td ><input type="text" name="patient_id" placeholder="Id no" style="height: 25px;width:230px;"></td>
										
									</tr>
									<tr>
										<td>Full Name:</td>
										<td><input type="text" name="full_Name" placeholder="full_Name" style="height: 25px;width:230px;" ></td>
									</tr>
									<tr>
										<td> Address:</td>
										<td><input type="text" name="address" style="height: 25px;width:230px;"></td>
									
									</tr>
									<tr>
										<td>Gender:</td>
										<td>
											<input type="radio" name="gender" value="male" checked> Male
											  <input type="radio" name="gender" value="female"> Female
											
										  </td>
 
									</tr>
									<tr>
										<td>Date of Birth:</td>
										<td><input type="date" name="t_bday" style="height: 25px;width:230px;"></td>
									</tr>
									<tr>
										<td>Appointment Time:</td>
										<td><input type="time" name="usr_time" style="height: 25px;width:230px;" ></td>
									</tr>
									
							<tr>
								<td>FOLOR NO:</td>
											<td >
												<select name="folor_no" style="height: 25px;width:230px;">
													<option value="">SELECT OPTION</option>
													<option value="1st_folor">1st FOLOR</option>
													<option value="2nd_folor">2nd FOLOR</option>	
												</select>
											</td>

							</tr>
							<tr>
								<td>#ROOM NO:</td>
											<td ><select name="room_no" style="height: 25px;width:230px;">
											<option value=>SELECT OPTION</option>
											<option value="Room#101">Room#1</option>
											<option value="Room#102">Room#2</option>
											<option value="Room#103">Room#3</option>
											<option value="Room#104">Room#4</option>
											<option value="Room#105">Room#5</option>	
											<option value="Room#106">Room#6</option>
											
											</select></td>

								</tr>
								
							<td><h2>DOCTOR</h2></td>
					
								<tr>
									<td>DOCTOR ID</td>
										<td><input type="text" name="Doctor_id" placeholder="id no" style="height: 25px;width:230px;"></td>
								</tr>
								<tr>
									<td>DOCTOR NAME</td>
									<td><input type="text" name="Doctor_name" placeholder="name" style="height: 25px;width:230px;"></td>
								</tr>
					
								<td>
									<center>
											<input type="submit" name="submit" value="submit"/>
									</center>
							</td>
								</table>
					</form>
				
			
		</div>
					</div>		
					
				
				<div class="copyright">
				<center>
				&copy;Copyright 2019 (SHELLA MAY C. DONGCOY)
				</center>
				</div>
			</div>
	</body>
</html>