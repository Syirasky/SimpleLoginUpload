<?php



// Path to move uploaded files
$target_path = dirname(__FILE__).'/uploads/';

$description = $_POST['description'];
$size = $_POST['size'];



if (!empty($_FILES)) {
    for ($x = 0; $x < $size; $x++) {
        try {
        
            if($stringID!=null){
				echo fwrite($filewrite,$size."\r\n");
			}
	
			$filename = $_FILES['image'.$x]['name'];
            
            // Throws exception incase file is not being moved
            if (!move_uploaded_file($_FILES['image'.$x]['tmp_name'], $target_path .$filename)) {
                // make error flag true
                echo json_encode(array('status'=>'fail', 'message'=>'could not move file'));
            }
			//$str_id = $stud_id[$x];
			//$userObject->insertrecord($str_id,'testdlu','testhee','lectureridsini'); 
            
            // File successfully uploaded
            echo json_encode(array('status'=>'success', 'message'=>'success huhu'));
			
			
        } catch (Exception $e) {
            // Exception occurred. Make error flag true
            echo json_encode(array('status'=>'fail', 'message'=>$e->getMessage()));
        }
    }
} else {
    // File parameter is missing
    echo json_encode(array('status'=>'fail', 'message'=>'Not received any file'));

}

	
           
?>

