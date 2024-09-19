<?php
require_once('functions/dbconfig.php');       
  require_once('functions/functions.php');
  
  $obj = new cls_func();										
?>

<script>
	
function calaulation()
{
	var cost_1 = document.form.cost1.value;
	if(!cost_1)
		cost_1='0';
	var cost_2 = document.form.cost2.value;
	if(!cost_2)
		cost_2='0';
	var cost_3 = document.form.cost3.value;
	if(!cost_3)
		cost_3='0';
	var cost_4 = document.form.cost4.value;
	if(!cost_4)
		cost_4='0';
	var cost_5 = document.form.cost5.value;
	if(!cost_5)
		cost_5='0';
	var cost1 = parseFloat(cost_1);
	var cost2 = parseFloat(cost_2);
	var cost3 = parseFloat(cost_3);
	var cost4 = parseFloat(cost_4);
	var cost5 = parseFloat(cost_5);
	document.form.total.value = (cost1+cost2+cost3+cost4+cost5);

}
</script>


<!DOCTYPE HTML>
<html>
	<head>
			<title>HMS-HOSPITAL MANAGEMENT SYSTEM</title>
			<link rel="icon" href="images/medical logo.jpg">
			<link rel="stylesheet" type="text/css" href="css/project.css"/>
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
			<!--total cost-->
			<link rel="stylesheet" type="text/css" href="css/total_cost.css"/>
			<!--end total cost-->
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
         <li><a href="total_cost.php"> Total Cost</a></li>
          <li><a href="all_users/Check_balence.php" > Check_balence </a></li>
      </ul>
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
						<div class="all_patient">
		
							<div class="secondthree">

								<div class="cost">
									<h2><CENTER>TOTAL COST OF THE PATIENT</CENTER></h2>
								</div>
								<p class="msg" >
										<center>
												<?php
												
											if(isset($_POST['submit']))
										{
											$patient_id  = $_POST['patient_id'];
											$patient_name   = $_POST['patient_name'];
											$cost1     = $_POST['cost1'];
											$cost3        = $_POST['cost3'];
											$cost4    = $_POST['cost4'];
											$cost5    = $_POST['cost5'];
											$total   = $_POST['total'];
											

											if(empty($patient_id) or empty($patient_name) or empty($cost1)or empty($cost2) or empty($cost3) or empty($cost4)or empty($cost5)or empty($total))
											{
												echo "<h2 style='color:red;text-align:center;'> Field.......must not be empty.</h2>";
											}
											else{
												$mj = $obj->total_amount($patient_id,$patient_name,$cost1,$cost2,$cost3,$cost4,$cost5 ,$total);
												if($mj)
												{
													echo "<h2 style='color:#3399ff;'>Successfully Inserted";
												
												}
												else{
													echo "<h2 style='color:#3399ff;text-align:center;'>Data is not inserted</h2>";
												}
											}
										}


												?>

	
					
			</p>
			
			<div class="Total">
				<center>
					<form  name="form" method="post" action="">
		<table>
		<tr>
			<td>PATIENT ID:</td>
			<td><input type="text" name="patient_id" placeholder="Patient Id" style="height: 35px;width:100%"></td>
		</tr>
		<tr>
			<td>PATIENT NAME:</td>
			<td><input type="text" name="patient_name" placeholder="Patient Name" style="height: 35px;width:100%"></td>
		</tr>
		<tr>
			<td>Doctor Cost:</td>
     		<td> <input type="Text" name="cost1" size="4" onkeyup="calaulation()" style="height: 35px;width:100%">  </td>
     	</tr>
			
      	<tr>
			<td>Room Cost:</td>
      		<td> <input type="Text" name="cost3" size="4" onkeyup="calaulation()" style="height: 35px;width:100%"></td>
      	</tr>
      	<tr>
			<td>Medicine Cost:</td>
       		<td> <input type="Text" name="cost4" size="4" onkeyup="calaulation()"style="height: 35px;width:100%"></td>
       </tr>
       <tr>
			<td>Extra Cost:</td>
      		 <td>  <input type="Text" name="cost5" size="4" onkeyup="calaulation()"style="height: 35px;width:100%"></td>
     	</tr>
     	<tr>
			<td>TOTAL COST:</td>
     		 <td>	<input type="Text" name="total"  size="4"style="height: 35px;width:100%"> </td> 
      </tr>
       	<tr>
			<td></td>
     		 <td>	<input type="submit" name="submit"/> </td> 
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
				&copy;Copyright 2019 (SHELLA MAY C. DONGCOY)
				</center>
				</div>
			
		</div>
	</body>
</html>