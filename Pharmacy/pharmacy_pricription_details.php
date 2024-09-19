
<?php 
  
  require_once('../functions/dbconfig.php');        
  require_once('../functions/functions.php');           
  $obj = new cls_func();
   
  $qry=$obj->view_priscription();

  
  $i=0;
?>
<!DOCTYPE HTML>
<html>
  <head>
      <title>HMS-HOSPITAL MANAGEMENT SYSTEM</title>
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
   <a href=""><img src="../images/search.png" alt="" style="width:76px;
   height:68px;
   background-color:#FFFAF0;
   margin:0px; 
  "/></a>
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
        <li><a href="../admin/admin.php">Admin login</a></li>
        
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
        <li><a href="Dr_and_Nurse_list.php"> Doctor list</a></li>
        <li><a href="../pa_pricription.php">Patient-pricription</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ship" aria-hidden="true" style="margin-right:10px;color:#FFE4C4;"></i>Report Result<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="pricription_details.php">pricription-details</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-balance-scale" aria-hidden="true" style="margin-right:10px;color:#FFFF00;"></i>Accountant<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="../total_cost.php" > Total Cost</a></li>
          <li><a href="Check_balence.php" > Check_balence</a></li>
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
                        th{
                          background-color: #E6E6FA;
                        }

                        td, th {
                            border: 1px solid #dddddd;
                            text-align: left;
                            padding: 8px;
                        }

                        tr:nth-child(even) {
                            background-color: #F5FFFA;
                        }
                        </style>                  
                         <article style="width:940px;margin:0px auto;">
                                                 

                                   

                                        <h2 ><center>PRESCRIPTIONS  FOR  PATIENT</center></h2>
                                         <div style="overflow-x:auto;">
                                           <a href = "pricription_details_pdf.php"><button style="float: right;margin-bottom: 10px;padding: 15px;color:green;">DOWNLOD</button></a>
                                            <table>

                                          <tr>
                                          
                                            <th>PATIENT ID</th>
                                            <th>PATIENT NAME</th> 
                                            <th>DATE</th>
                                            <th>GENDER</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            
                                            <th>Medicine</th>
                                            <th>ANY TEST</th>
                                            <th>DOCTOR ID</th>
                                            <th> DOCTOR NAME</th>
                                          
                                          </tr>
                                          
                                           <?php
                                  while($rec=$qry->fetch_assoc())             
                                            {
                                  ?>
                               <tr>
                                   <td><?php echo $rec['patient_id']; ?></td>
                                   <td><?php echo $rec['patient_name']; ?></td>
                                   <td><?php echo $rec['r_bday']; ?></td>
                                   <td><?php echo $rec['Gender']; ?></td>
                                   <td><?php echo $rec['Age']; ?></td>
                                   <td><?php echo $rec['address']; ?></td>
                                   <td><?php echo $rec['medicine']; ?></td>
                                   <td><?php echo $rec['test']; ?></td>
                                   <td><?php echo $rec['doctor_id']; ?></td>
                                   <td><?php echo $rec['doctor_name']; ?></td>
                                 
                                   
                                 </tr>
                                        <?php
                                        $i++;
                                              }
                                        ?>                         
                                 </table>  
                             </div>   
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
