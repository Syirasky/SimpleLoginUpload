<?php
    
    include_once 'db-connect.php';
    
    class firstprocess{
        
        private $db;
        
        private $candidate_table = "student_score";
        private $info_table = "examinfo";
        
        public function __construct(){
            $this->db = new DbConnect();
        }
        
        
        public function insertrecord($studentID,$subjID,$examID,$lecturerID,$imagename){
			  $query = "insert into ".$this->candidate_table." (student_id, subject_id, exam_id, lecturer_id,image_name,score) values ('$studentID', '$subjID', '$examID','$lecturerID','$imagename', '0')";
              $inserted = mysqli_query($this->db->getDb(), $query);
               
		}
		public function insertexaminfo($subjID,$examID,$answer){
			  $query = "insert into ".$this->info_table." (subject_id, exam_code, answer) values ('$subjID', '$examID','$answer')";
              $inserted = mysqli_query($this->db->getDb(), $query);
               
		}
       public function selectmulti($selecttype,$table_name)  
        {  
           $array = array();  
           $query = "SELECT ".$selecttype." FROM ".$table_name."";  
           $result = mysqli_query($this->db->getDb(), $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
        }

        public function updateScore($tablename,$imgname,$score){
            $query = "UPDATE ".$tablename." SET score ='".$score.
            "' WHERE image_name = '".$imgname."'";
            $result = mysqli_query($this->db->getDb(),$query);
            return $result;
        }
        function destruct()
{
			//try to close the MySql connection
			$closeResults = mysqli_close($this->db->getDb());

			//make sure it closed
			if($closeResults === false)
			{
				echo "Could not close MySQL connection.";
			}
		}
			

    }
        
?>
