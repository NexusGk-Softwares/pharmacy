
<!DOCTYPE HTML>
<html>
  <head>
      <title>HMS-Hospital management system</title>
      <link rel="icon" href="images/medical logo.jpg">
			<link rel="stylesheet" type="text/css" href="css/project.css"/>
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
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
   <a href=""><img src="images/search.png" alt="" style="width:76px;
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
        <a href="index.php" data-toggle="dropdown"><i class="fa-2x fa fa-home" aria-hidden="true" style="margin-right:10px;color:#00FFFF;"></i>HOME </a>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-user" aria-hidden="true" style="margin-right:10px;color:#FF00FF;"></i>Addministor <i class="icon-arrow"></i></a>
        <ul class="dropdown-menu">
        <li><a href="admin/admin.php">Admin login</a></li>
        
        </ul>
      </li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-child" aria-hidden="true" style="margin-right:10px;color:#00FF7F;"></i>Reception <i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="patient_info.php">Admition</a></li>
        <li><a href="release.php">Release</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-medkit" aria-hidden="true" style="margin-right:10px;color:#F0FFF0;"></i>Doctor<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="admin/reg_details.php"> Doctor list</a></li>
        <li><a href="pa_pricription.php">Patient-pricription</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ship" aria-hidden="true" style="margin-right:10px;color:#FFE4C4;"></i>Report Result<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
          <li><a href="admin/admin_pricription_details.php">pricription-details</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-balance-scale" aria-hidden="true" style="margin-right:10px;color:#FFFF00;"></i>Accountant<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
         <li><a href="total_cost.php" > Total Cost</a></li>
         <li><a href="all_users/Check_balence.php" > Check_balence</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ambulance" aria-hidden="true" style="margin-right:10px;color:#EE82EE;"></i>Pharmacy<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="pharmacy/pharmacy_pricription_details.php">pricription-details</a></li>
      </ul>
    </li>
  </ul>
  
</div>
    
        <script src="js/index.js"></script>
    
          <!--End dropdown menu-->
          <div class="MIDDLE" style="height: 612px;">
              <style >
                           .admin_profile{
                                      min-height:450px;
                                      padding:20px;
                                    }
                                    .section{
                                      width:70%;
                                      margin:10px;
                                    }
                                    .section h3{
                                      text-align:center;
                                    }
                                    .section ul{
                                      margin:0;
                                      padding:0;
                                      border:1px solid #ddd;
                                      list-style:none;
                                    }
                                    .section ul li{
                                      border:1px solid #ddd;
                                    }
                                    .section ul li a{
                                      display:block;
                                      padding:20px;
                                      color:#01C3AA;
                                      text-align:center;
                                      text-decoration:none;
                                      
                                    }
                                    .section ul li a:hover{
                                      background:#ddd;
                                    }
                         </style>
                              <center>          
                                    <div class="section">
                                      <h2>Admin View</h2>
                                      <ul>
                                        <li><a href="admin/register.php"><h2>Membership in Hospital</h2></a></li>
                                        <li><a href="admin/reg_details.php"><h2>Hospital All Member Information</h2></a></li>
                                        <li><a href="admin/patient_details_admin.php"><h2>Hospital Patient Information</h2></a></li>
                                        <li><a href="all_users/Check_balence.php"><h2>Patient Cost Information</h2></a></li>
                                        <li><a href="pharmacy/pharmacy_pricription_details.php"><h2>Patient prescription</h2></a></li>
                                        <li><img src="images/back-icon.png" style="width:100px;height: 100px;" /></a></a></li>
                                      </ul>
                                  </div>
                             </center> 
                <center><a href = "all_users/register.php"><input type = "button" value = "GO TO REGISTER" style="padding: 10px;margin-top: 20px;float: right;" /></a></center>                  
                   </div>

           
                <div class="back" style="float:right;overflow: hidden;display: block;">
                  <center>
                  <a href=""><img src="images/back-icon.png" style="width:100px;height: 100px;" /></a>
                  </center>
                </div>
          </div>    
        
       
        <div class="copyright">
        <center>
        &copy;Copyright 2018 (Shella May C. Dongcoy)
        </center>
        </div>
      </div>
  </body>
</html>
