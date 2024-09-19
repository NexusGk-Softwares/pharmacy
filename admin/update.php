
 <link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload.css">
<link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload-ui.css">
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
    if (!isset($_SESSION['id'])){
    header('location:../index.php');
    }
  
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
    $password = addslashes("$_POST[password]");
    $Cetagory = addslashes("$_POST[Cetagory]");
    $email = addslashes("$_POST[email]");

    

    $qry = $obj->data_update($id,$name, $password,$Cetagory,$email,$fileName);
      if ($qry){
        echo "Successfully Updated";
          header('refresh:2; url=reg_details.php');
      }
      else{
        echo "not posted!";
        }
  }
?>

<!DOCTYPE HTML>
<html>
  <head>
      <title>MMS-Medical management system</title>
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
        <li><a href="admin.php">Admin login</a></li>
        
        </ul>
      </li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown"><i class="fa-2x fa fa-child" aria-hidden="true" style="margin-right:10px;color:#00FF7F;"></i>Reciption <i class="icon-arrow"></i></a>
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
        <li><a href="../Pharmacy/pharmacy_pricription_details.php">patient-pricription</a></li>
      </ul>
    </li>
  </ul>
  
</div>
    
        <script src="../js/index.js"></script>

    
    
          <!--End dropdown menu-->
          <div class="MIDDLE" style="height: 612px;">
      
           
            <div class="contain">
              <h3>Update Information</h3>
              
            </div>
              <p class="msg" >
                  <center>
                 <?php
                     $qry1=$obj->edit_st_info($_GET['id']);
                     $rec=$qry1->fetch_assoc();

                  ?>
                </center>
              </p>
              
              <div class="login_reg">
                <form enctype="multipart/form-data" method="post" class="form-horizontal">
                <table style="width:30%">
                  <tr>
                <h3>Staf Information</h3>
                  </tr>
                  <tr>
                   <td>ID</td>
                    <td><input id="id" name="id" type="text" value="<?php echo $rec['id']; ?>" placeholder="Enter Your Id" readonly></td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td><input id="name" name="name" type="text" value="<?php echo $rec['name']; ?>" placeholder="Enter Your Name" required=""></td>
                  </tr>
                             <tr>
                                    <td>password</td>
                                    <td><input id="password" name="password" type="password" value="<?php echo $rec['password']; ?>"></td>
                                  </tr>
                  <tr>
                     <td>Cetagory</td>
                     
                      <td><input type="text" id="Cetagory" name="Cetagory" value="<?php echo $rec['Cetagory']; ?>" placeholder=" Enter your Cetagory"/></td>
                    
                            </tr>
                              <tr>
                              <td>Email</td>
                              <td><input id="email" name="email" value="<?php echo $rec['email']; ?>" type="text"></td>
                            </tr>
                            <tr>
                          <td>Picture</td>
                            <td>
                                <img id="logo_preview" src="../images/<?php echo $rec['pic']?>" style="height:150px; width:150px; border:2px green solid;"><br><br>                   
                                <input type="file" name="personal_image" id="spic" onchange="PreviewImage('personal_image', 'logo_preview')">
                          <br><br>
                    </td>
                      </tr>
                       <tr>
                            <td></td>
                            <td>
                                   <button id="submit" name="submit" class="btn btn-primary">Update</button>
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

