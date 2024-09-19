<?php
require_once('../functions/dbconfig.php');       
  require_once('../functions/functions.php');
  
  $obj = new cls_func();

      if (isset($_POST['submit'])) 
      {
      $UserName=$_POST['username'];
      $Password=$_POST['password'];
      $result=$obj->user_login($UserName,$Password);
      $count = $result->num_rows;
      $row = $result->fetch_array();
      
      
    
      if ($count > 0){
      session_start();
      $_SESSION['id']=$row['id'];
      $_SESSION['username']=$row['username'];
      $level=$row['level'];
      switch($level)
      {
        case 1:
        header('location:../all_information.php?id='.$row['id'].'');
        break;
        case 2:
        header('location:user/reg_details.php?id='.$row['id'].'');
        break;

      }
      
      }
      else
      {
       echo "Invalid Username or Password! Please Try again..!";
        ;
        
      }
    }
  ?>  

<?php 
require_once('../functions/dbconfig.php');       
  require_once('../functions/functions.php');            
  $obj = new cls_func();						
	$obj = new cls_func();	
	$qry=$obj->view_st_info();

	
	$i=0;
?>

<!DOCTYPE HTML>
<html>
  <head>
      <title>HMS-Hospital management system</title>
      <link rel="icon" href="images/medical logo.jpg">
      <link rel="stylesheet" type="text/css" href="../css/login.css"/>
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
        <li><a href="admin.php">Admin login</a></li>
        
        </ul>
      </li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-child" aria-hidden="true" style="margin-right:10px;color:#00FF7F;"></i>Reception <i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="#">Admition</a></li>
        <li><a href="#">Release</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-medkit" aria-hidden="true" style="margin-right:10px;color:#F0FFF0;"></i>Doctor<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="#"> Doctor list</a></li>
       <li><a href="#"> patient-pricription </a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-ship" aria-hidden="true" style="margin-right:10px;color:#FFE4C4;"></i>Report Result<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
        <li><a href="#">pricription-details</a></li>
      </ul>
    </li><li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-balance-scale" aria-hidden="true" style="margin-right:10px;color:#FFFF00;"></i>Accountant<i class="icon-arrow"></i></a>
      <ul class="dropdown-menu">
         <li><a href="#" > Total Cost</a></li>
          <li><a href="#" > Check Balence</a></li>
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
          
            <div class="header">
              <h2>Admin Login Form</h2>
            </div>
            <div class="menu">
              <ul> 
                
                <li style="float: left;margin-left: 20px;"><a href="../index.php">LogIn</a></li>
                <li style="float: left;margin-left: 20px;width:700px;color:red;"><marquee><h1>WELCOME TO MEDICAL MANAGEMENT SYSTEM</h1></marquee></li>
                <li style="float: right;margin-right: 20px;"><a href="../all_users/register.php">Doctor</a></li>
                
              </ul>
            
            </div>
            <div class="contain">
              <h3>LOGIN</h3>
              
            </div>
              <p class="msg">
               
                
              </p>
              <div class="login_reg">
                <form method='post' action='admin.php'>
                  <table width='400' border='5' align='center'> 
                      <tr>  
                        <td align='center' colspan='5'><h1>Admin Login</h1></td>
                      </tr>
                      
                      <tr>  
                        <td align='center'>Admin Name:</td>
                        <td><input type='text' name='username' /></td>
                      </tr>
                      
                      <tr>  
                        <td align='center'>Admin Password:</td>
                        <td><input type='password' name='password' /></td>
                      </tr>
                      
                      <tr>  
                        <td colspan='5' align='center'><input type='submit' name='submit' value='Login' /></td>
                      </tr>


                  </table>
                </form>
                </div>
            
                <div class="back">
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
<?php 
//mysql_connect("localhost","root","");
//mysql_select_db("medical_management_system");
$con = mysqli_connect("localhost","root","","hospital_management_system");

if(isset($_POST['login'])){

  $password = $_POST['pass'];
  $email = $_POST['email'];
  
  $check_user = "select * from h_m_info where password='$password' AND email='$email'";
  $result = $con->query($check_user);
 // $run = mysql_query($check_user);
  
   if($result->num_rows > 0){
  
  $_SESSION['email']=$email;
  
  echo "<script>window.open('all_users/doctor_view.php','_self')</script>";
  }
  else {
  echo "<script>alert('Email or password is incorrect!')</script>";
  }
}
?>