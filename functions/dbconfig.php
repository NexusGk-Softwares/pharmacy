<?php
	class dbconfig{
		public function connection(){
			$conn = new mysqli("127.0.0.1","root","","hospital_management_system");
			return $conn;
		}
	}
?>