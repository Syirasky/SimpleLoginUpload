<?php
/*
 * db-Data.php
 * 
 * Copyright 2018 User <User@DESKTOP-17Q7VC8>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
  include_once 'db-connect.php';
  
  class apitoDB{
		private $db;
		private $db_table = "student_score";
		
		public	function __construct(){
			$this->db = new DbConnect();
				  
		}
		
		public function getAllData(){
			$query = "select * from ".$this->db_table;
			$result = mysqli_query($this->db->getDb(),$query);
			$response = array();
			while($row=mysqli_fetch_array($result)){
				$data["studentID"]=$row["student_id"];
				$data["subject_id"]=$row["subject_id"];
				$data["examcode"]=$row["exam_id"];
				$data["userID"]=$row["lecturer_id"];
				$data["uri"]=$row["image_name"];
				$data["score"]=$row["score"];
				array_push($response,$data);
			}
			
			echo json_encode(array("data_result"=>$response));
		}	
		
	}
		

?>
