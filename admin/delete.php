<?php
require_once('../functions/dbconfig.php');        
  require_once('../functions/functions.php');                       
  $obj = new cls_func();


$qry=$obj->delete_st_info($_GET['id']);
if($qry)
{
	echo"Delete Successful";
	header('refresh:2; url=reg_details.php');
}
$qry=$obj->delete_patient($_GET['id']);
if($qry)
{
	echo"Delete Successful";
	header('refresh:2; url=patient_details_admin.php');
}
$qry=$obj->delete_account($_GET['id']);
if($qry)
{
	echo"Delete Successful";
	header('refresh:2; url=Check_balence.php');
}
?>

