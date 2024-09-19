<?php 
	  require_once('../functions/dbconfig.php');        
	  require_once('../functions/functions.php');           
	  $obj = new cls_func();
		session_start();
		if (!isset($_SESSION['id'])){
		header('location:../index.php');
		}	  
	  $i=0;
?>
<?php
		$query = $_GET['query'];
		$min_length = 1;
		if(strlen($query) >= $min_length){
		  $query = htmlspecialchars($query);
		  $query = $obj->con()->real_escape_string($query);
		  $qry = $obj->search($query);
		$res=$qry->num_rows;
		  if($res > 0){
?>

<!DOCTYPE HTML>
	<html>
	  <head>
	      <title>HMS-hospital management system</title>
	      <link rel="icon" href="images/medical logo.jpg">
	      <link rel="stylesheet" type="text/css" href="../css/project.css"/>
	      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
	      <!--dropdown menu-->
	      <link rel="stylesheet" href="../css/normalize.css">
	      <link rel="stylesheet" href="../css/dropdown.css">

	      <!--End dropdown menu-->
	  	</head>
		<body>
			<div class="all">     
				<div class="firsttwo">
					<div class="logo">
						<img src="../images/medical-logo.jpeg" style="width:250px;height:200px;"/>
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
								<a href=""><img src="../images/search.png" alt="" style="width:76px;height:68px;	background-color:#FFFAF0;margin:0px;"/></a>
							</div>
						</div>
					</div>
				</div>
        <div class="secondthree">
          <!--dropdown menu-->
				<div class="container">
				<ul>
				  <li class="dropdown">
					<a href="../index.php" data-toggle="dropdown"><i class="fa-2x fa fa-home" aria-hidden="true" style="margin-right:10px;color:#00FFFF;"></i>HOME </a>
				  </li>
				  <li class="dropdown">
					<a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-user" aria-hidden="true" style="margin-right:10px;color:#FF00FF;"></i>Addministor <i class="icon-arrow"></i></a>
					<ul class="dropdown-menu">
					<li><a href="admin.php">Admin login</a></li>
					
					</ul>
				  </li>
				<li class="dropdown">
				  <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-child" aria-hidden="true" style="margin-right:10px;color:#00FF7F;"></i>Reception <i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
					<li><a href="../patient_info.php">Admition</a></li>
					<li><a href="../release.php">Release</a></li>
				  </ul>
				</li><li class="dropdown">
				  <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-medkit" aria-hidden="true" style="margin-right:10px;color:#F0FFF0;"></i>Doctor<i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
					 <li><a href="../all_users/all_users_reg_details.php"> Doctor list</a></li>
       					<li><a href="../pa_pricription.php"> patient-pricription </a></li>
				  </ul>
				</li><li class="dropdown">
				  <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ship" aria-hidden="true" style="margin-right:10px;color:#FFE4C4;"></i>Report Result<i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
					 <li><a href="../all_users/pricription_details.php">pricription-details</a></li>
				  </ul>
				</li><li class="dropdown">
				  <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-balance-scale" aria-hidden="true" style="margin-right:10px;color:#FFFF00;"></i>Accountant<i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
					<li><a href="../total_cost.php" > Total Cost</a></li>
        			  <li><a href="../all_users/Check_balence.php" > Check Balence</a></li>
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
    
        <script src="../js/index.js"></script>
    
          <!--End dropdown menu-->
          <div class="MIDDLE" style="height: 612px;">
                                <style>
				                        table {
				                            font-family: arial, sans-serif;
				                            border-collapse: collapse;
				                            width: 100%;
				                        }

				                        td, th {
				                            border: 1px solid #dddddd;
				                            text-align: left;
				                            padding: 8px;
				                        }

				                        tr:nth-child(even) {
				                            background-color: #dddddd;
				                        }
                        		</style>                 
                          		<article>
                                      <form method="GET" action="search.php" style="float: right;">

                                                <input type="text" name="query" placeholder="Search ">

                                                <button type="submit">Search</button>
                                            </form>


                                            <center> <h1> Hospital All Staff Information</h1></center>
                                            <table>

                                          <tr>
                                            <th>ID</th>
                                            <th>Name</th> 
                                            <th>password</th>
                                            <th>Cetagory</th>
                                            <th>Email</th>
                                            <th>Picture</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                          <?php
                                          while($rec=$qry->fetch_assoc())             
                                                    {
                                          ?>
                                          <tr>
                                             <td><?php echo $rec['id']; ?></td>
                                            <td><?php echo $rec['name']; ?></td>
                                            <td><?php echo $rec['password']; ?></td>
                                            <td><?php echo $rec['Cetagory']; ?></td>
                                            <td><?php echo $rec['email']; ?></td>
                                             <td>
                                                   <img id="logo_preview" src="../images/<?php echo $rec['pic'];?>" style="height:50px; width:50px; border:1px green solid;"><br><br>
                                            </td>                                          
                                             <td><a href='update.php?id=<?php echo $rec['id']?>'> Edit</a></td>
                                            <td><a href='delete.php?id=<?php echo $rec['id']?>'> Delete</a></td>
                                          </tr>
                                        <?php
                                        $i++;
                                                    }
                                                     }
                                                      else 
                                                        {
                                                          echo "<h2>No results<h2>";
                                                        }
                                                      }
                                                      else
                                                        {
                                                          echo "Minimum length is ".$min_length;
                                                        }
                                                   ?>
                                        </table>
                                        </br>
                                        <a href = "../index.php"><input type = "button" value = "Back"></a>
                                          

                                                  
                                    <center><a href = "register.php"><input type = "button" value = "GO TO REGISTER" style="padding: 10px;margin-top: 20px;float: right;" /></a></center>
                         
                         </article>

                   </div>
            
		                <div class="back" style="float:right;">
		                  <center>
		                  <a href=""><img src="../images/back-icon.png" style="width:100px;height: 100px;" /></a>
		                  </center>
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
