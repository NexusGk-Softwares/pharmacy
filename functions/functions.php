<?php
class cls_func{
	
	public function con(){
		$connect = new dbconfig();
		return $connect->connection();
	}

	//Admin Login
	public function user_login($UserName,$Password){
		$result = $this->con()->query("select * from admin where username='$UserName' and password='$Password'");
		return $result;
	}

//Admin Logout Session
		public function user_logout_session($session_id){
		$result = $this->con()->query("select * from admin where id = '$session_id'");
		return $result;
	}
	public function view_st_info(){
		$result = $this->con()->query("Select * from registration");
		return $result;
	}
	public function data_insert($id,$name,$password,$Cetagory,$email,$fileName){

		       if ($fileName == '') {
               $fileName = "no_image.png";
            }
		
		$result = $this->con()->query("INSERT INTO registration(id, name,password, Cetagory, email, pic) VALUES('$id','$name','$password','$Cetagory','$email','$fileName')");
		return $result;
	}




	public function data_update($id,$name,$password,$Cetagory,$email,$fileName){
		$result = $this->con()->query("UPDATE registration set name='$name',password='$password', Cetagory='$Cetagory', email='$email', pic='$fileName' where id='$id'");
		return $result;
	}

public function edit_st_info($id){
		$result = $this->con()->query("Select * from registration where id='$id'");
		return $result;
	}

	public function delete_st_info($id){
		$result = $this->con()->query("delete from registration where id='$id'");
		return $result;
	}

//Search Query
		public function search($query){
		$result = $this->con()->query("SELECT * FROM registration WHERE (id LIKE '%".$query."%'
							OR `name` LIKE '%".$query."%'
								OR `Cetagory` LIKE '%".$query."%'
									OR `email` LIKE '%".$query."%') order by id");
		return $result;
	}
public function search_patient($query){
		$result = $this->con()->query("SELECT * FROM  patient_info WHERE (patient_id LIKE '%".$query."%'
							OR `full_Name` LIKE '%".$query."%'
								OR `emp_name` LIKE '%".$query."%'
									OR `Doctor_id` LIKE '%".$query."%') order by id");
		return $result;
	}
	public function account_patient($query){
		$result = $this->con()->query("SELECT * FROM  account_of_patient WHERE (patient_id LIKE '%".$query."%'
							OR `patient_name` LIKE '%".$query."%') order by id");
		return $result;
	}
//patient query
	public function patient_data_con($patient_id,$full_Name,$address,$gender,$t_bday,$usr_time,$emp_name ,$emp_phone,$emp_address,$emp_age,$set_Category,$set_usr_time,$folor_no ,$room_no,$set_no,$Doctor_id,$Doctor_name)

	{
		$result = $this->con()->query("INSERT INTO patient_info (patient_id,full_Name,address,gender,t_bday,usr_time,emp_name,emp_phone,emp_address,emp_age,set_Category,set_usr_time,folor_no,room_no,set_no,Doctor_id,Doctor_name) VALUES ('$patient_id','$full_Name','$address','$gender','$t_bday','$usr_time','$emp_name ','$emp_phone','$emp_address','$emp_age','$set_Category','$set_usr_time','$folor_no' ,'$room_no','$set_no','$Doctor_id','$Doctor_name')");
		return $result;
	}
	//patient delete quary
	public function delete_patient($id){
		$result = $this->con()->query("delete from patient_info where id='$id'");
		return $result;
	}
	//patient edit

	//patient view details
	public function view_patient_info(){
		$result = $this->con()->query("Select * from patient_info");
		return $result;
	}
	//release peper
	public function release_paper($patient_id,$patient_name,$r_bday,$release_time,$gender,$Age,$cost,$doctor_id,$doctor_name,$Permition_result)
	{
		$result = $this->con()->query("INSERT INTO release_peper(patient_id,patient_name,r_bday,release_time,gender,Age,cost,doctor_id,doctor_name,Permition_result) VALUES ('$patient_id','$patient_name','$r_bday','$release_time','$gender','$Age','$cost','$doctor_id','$doctor_name','$Permition_result')");
		return $result;
	}
	//view_patient_release_paper();
	public function view_patient_release_paper(){
		$result = $this->con()->query("Select * from release_peper");
		return $result;
	}
	//total amount
	public function total_amount($patient_id,$patient_name,$cost1,$cost2,$cost3,$cost4,$cost5 ,$total)
	{
		$result = $this->con()->query("INSERT INTO account_of_patient(patient_id,patient_name,Doctor_Cost,Nurse_Cost,Room_Cost,Medicine_Cost,Extra_Cost,Total) VALUES ('$patient_id','$patient_name','$cost1','$cost2','$cost3','$cost4','$cost5','$total')");
			return $result;
	}
	public function view_account_info(){
		$result = $this->con()->query("Select * from account_of_patient");
		return $result;
	}
	//account delete quary
	public function delete_account($id){
		$result = $this->con()->query("delete from  account_of_patient where id='$id'");
		return $result;
	}
	public function priscription_insert($patient_id,$patient_name,$r_bday,$Gender,$Age,$address,$medicine,$test,$doctor_id,$doctor_name)
	{
	$result = $this->con()->query("INSERT INTO priscription_page(patient_id,patient_name,r_bday,Gender,Age,address,medicine,test,doctor_id,doctor_name) VALUES ('$patient_id','$patient_name','$r_bday','$Gender','$Age','$address','$medicine','$test','$doctor_id','$doctor_name')");
	  return $result;

	}
	public function view_priscription(){
		$result = $this->con()->query("Select * from priscription_page");
		return $result;
	}
	}
	?>