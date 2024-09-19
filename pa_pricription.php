<?php
	require_once('functions/dbconfig.php');       
  	require_once('functions/functions.php');
  
  $obj = new cls_func();										
?>
<!DOCTYPE HTML>
<html>
	<head>
			<title>HMS-Hospital management system</title>
			<link rel="icon" href="images/medical logo.jpg">
			<link rel="stylesheet" type="text/css" href="css/project.css"/>
			<link rel="stylesheet" type="text/css" href="css/login.css"/>
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
			<!--total cost-->
			<link rel="stylesheet" type="text/css" href="css/total_cost.css"/>
			<!--end total cost-->
			<!--dropdown menu-->
			    <link rel="stylesheet" href="css/normalize.css">
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
         <li><a href="total_cost.php" target=""> Total Cost</a></li>
         <li><a href="all_users/Check_balence.php" target="">Check_balence</a></li>
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
					<div class="MIDDLE" style="height: 612px;">
						<p class="msg" >
										<center>
											<?php
												if(isset($_POST['submit']))
												{
													$patient_id  	  = $_POST['patient_id'];
													$patient_name	  = $_POST['patient_name'];
													$r_bday	          = $_POST['r_bday'];
													$Gender 		  = $_POST['gender'];
													$Age			  = $_POST['Age'];
													$address 		  = $_POST['address'];
													$medicine 		  = $_POST['medicine'];
													$test 		  = $_POST['test'];
													$doctor_id	 	  = $_POST['doctor_id'];
													$doctor_name  	  = $_POST['doctor_name'];
													

													if(empty($patient_id ) or empty($patient_name )or empty($r_bday )or empty($Gender ) or empty($Age ) or empty($address ) or empty($medicine )or empty($test )or empty($doctor_id ) or empty($doctor_name ))
													{
														echo "Field must not be empty......";
													}
													else{
														$mj = $obj->priscription_insert($patient_id,$patient_name,$r_bday,$Gender,$Age,$address,$medicine,$test,$doctor_id,$doctor_name);
														if($mj)
														{
															echo "data inserted";
														}else
														{
															echo "data is not inserted";
														}
													}

												}



											?>
											
										</center>
									</p>
					<div class="all_patient" style="">
		
							<div class="secondthree">
								<div class="cost">
									<h2 ><center>PRESCRIPTIONS  FOR  PATIENT</center></h2>
								</div>
								<div class="patient" >
								<center>
									<form  action="" method="post">
										<table>
												<tr>
												<td>PATIENT ID:</td>
												<td><input type="text" name="patient_id" placeholder="Patient Id" style="height: 25px;width:100%;"></td>
										</tr>
										<tr>
											<td>PATIENT NAME:</td>
											<td><input type="text" name="patient_name" placeholder="Patient Name" style="height: 25px;width:100%;"></td>
										</tr>
										<tr>
											<td> DATE:</td>
											<td><input type="date" name="r_bday" placeholder="Patient Name" style="height: 33px; width:106%;margin-left: 5px;"></td>
										</tr>
										
										<tr>
											<td>Gender:</td>
											<td>
										 		<input type="radio" name="gender" value="male" checked> Male
												<input type="radio" name="gender" value="female"> Female
												
											</td>
									</tr>
									<tr>
										<td>Age</td>
										<td><input type="text" name="Age" style="height: 25px; width:100%;"></td>
									</tr>
									<tr>
											<td>ADDRESS:</td>
											<td><input type="text" name="address" placeholder="Patient address" style="height: 25px;width:100%;"></td>
									</tr>
									<tr>
											<td>MEDICINE NAME:</td>
											<td><input type="text" name="medicine" style="height: 25px;width:100%;"></td>
									</tr>
									<tr>
											<td>ANY TEST:</td>
											<td><input type="text" name="test"  style="height: 25px;width:100%;"></td>
									</tr>
									<tr>
										<td>Doctor Id:</td>
										<td><input type="text" name="doctor_id" style="height: 25px;width:100%;"></td>
									</tr>
									<tr>
										<td>Doctor Name:</td>
										<td><input type="text" name="doctor_name" style="height: 25px;width:100%;"></td>
									</tr>
									
									<tr>
										<td></td>
										<td><input type="submit" name="submit"></td>
									</tr>
									
										</table>
									</form>
								</center>
								</div>
							</div>
												
					</div>
				</div>
				
				<div class="copyright">
				<center>
				&copy;Copyright 2019 (Shella May C. Dongcoy)
				</center>
				</div>
			</div>
	</body>
</html>