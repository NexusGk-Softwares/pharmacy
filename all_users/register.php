
 <link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload.css">
<link rel="stylesheet" href="admin/plugins/file-uploader/css/jquery.fileupload-ui.css">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>

 <script>
    function PreviewImage(upname, prv_id) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementsByName(upname)[0].files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById(prv_id).src = oFREvent.target.result;
        };
    };
  
</script>

<?php
require_once('../functions/dbconfig.php');        
  require_once('../functions/functions.php');                       
  $obj = new cls_func();
      session_start();



?>

<!DOCTYPE HTML>
<html>
  <head>
      <title>HMS-HOSPITAL MANAGEMENT SYSTEM</title>
      <link rel="icon" href="../images/medical logo.jpg">
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
        <li><a href="../pa_pricription.php"> patient-pricription </a></li>
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
        <li><a href="../Pharmacy/pharmacy_pricription_details.php">pricription-details</a></li>
      </ul>
    </li>
  </ul>
  
</div>
    
        <script src="../js/index.js"></script>

    
    
          <!--End dropdown menu-->
          <div class="MIDDLE" >
          
            <div class="header">
              <h2>Registation First</h2>
            </div>
            <div class="menu">
              <ul> 
                <li ><a href="../index.php">Login</a></li>
                <li style="float: right;"><a href="../index.php">Logout</a></li>
               
                
              </ul>
            
            </div>
            <div class="contain">
              <h3>Register</h3>
              
            </div>
              <p class="msg">
              <center>
          <?php
    
  if (isset($_POST['submit']))
  {

  function guid() {
     if (function_exists('com_create_guid')) {
                return com_create_guid();
            } else {
                mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
                $charid = strtoupper(md5(uniqid(rand(), true)));
                $hyphen = chr(45); // "-"
                $uuid = chr(123)// "{"
                        . substr($charid, 0, 8) . $hyphen
                        . substr($charid, 8, 4) . $hyphen
                        . substr($charid, 12, 4) . $hyphen
                        . substr($charid, 16, 4) . $hyphen
                        . substr($charid, 20, 12)
                        . chr(125); // "}"
                return $uuid;
            }
  }
    if($_FILES["personal_image"]["name"])
    {
          $path_parts = pathinfo($_FILES["personal_image"]["name"]);
                      $ext = $path_parts['extension'];
                      $fileName = trim(guid(), '{}') . '.' . $ext;
    }

move_uploaded_file($_FILES['personal_image']['tmp_name'], "../images/$fileName");



    $id = addslashes("$_POST[id]");
    $name = addslashes("$_POST[name]");
    $Cetagory = addslashes("$_POST[Cetagory]");
    $email = addslashes("$_POST[email]");
      $password = addslashes("$_POST[password]");

           $qry = $obj->data_insert($id,$name,$password,$Cetagory,$email,$fileName);
      
                 if ($qry){
        echo "<h2 style='color:#3399ff;'>Successfully Inserted </h2>".'</br><a href = "../index.php"><input type = "button" value = "View" ></a>';
         
      }
      else{
        echo "Not Inserted!";
        }
}
           ?>
             </center>         
              </p>
              <div class="login_reg">
                
                    <form enctype="multipart/form-data" method="post" class="form-horizontal">
                          <table style="width:50%">
                            <tr>
                          <center><h3>All  Information</h3></center>
                            </tr>
                            <tr>
                              <td>ID</td>
                              <td><input id="id" name="id" type="text"  placeholder="Enter Your Id" required=""></td>
                            </tr>
                            <tr>
                              <td>Full Name</td>
                              <td><input id="name" name="name" type="text" placeholder="Enter Your Name" required=""></td>
                            </tr>
                             <tr>
                              <td>password</td>
                             <td><input id="password" name="password" type="password"></td>
                            </tr>
                            <tr>
                              <td>Email</td>
                                <td><input id="email" name="email" type="text"></td>
                             
                            </tr>
                              <tr>
                              <td>Cetagory</td>
                                 <td>
                                    <select name="Cetagory" id="Cetagory" >
                                        <option value="">SELECT OPTION</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Naurse">Naurse</option>  
                                        <option value="other">other</option>  
                                      </select>
                                 </td>
                            </tr>

                          <tr>
                          <td>Picture</td>
                            <td>

                                              <img id="logo_preview" src="../images/no_image .png" style="height:150px; width:150px; border:2px green solid;"><br><br>                   
                                              <input type="file" name="personal_image" id="spic" onchange="PreviewImage('personal_image', 'logo_preview')">
                                              <br><br>
                                              

                                          </td>
                                          </tr>

                                            <tr>
                                  <td></td>
                                <td>
                                       <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                                     <a href = "../index.php"><input type = "button" value = "Cancel" ></a>
                                </td>
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