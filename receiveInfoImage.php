<?php
include_once 'db-connect.php';
require_once 'imageDBHelper.php';
require_once 'executePython.php';

	$userObject = new firstprocess(); //retrieving data
	$secondprocess = new secondprocess(); //for image process 

	$data = file_get_contents('php://input');
	$json_data = json_decode($data,true);
	//$encodebalik = json_encode($json_data);

	//$path = dirname(__FILE__)."/json.json"; //--write to file 0
	//$filewrite = fopen($path,"w+");// ---write to file 1
	//fwrite($filewrite,$data);//-----write to file 2
	
	$strtest = $json_data['details'];
	$answer = $json_data['answer'];
	
	foreach($strtest as $infodetail){
			
			$imageuri = $infodetail['uri'];
			$strimgname = substr($infodetail['uri'],strrpos($imageuri,'/')+1);
			
			$userObject->insertrecord($infodetail['studentID'],$infodetail['subjectID'],$infodetail['examcode'],'lecturerid',$strimgname,'0'); 
							//(student_id, subject_id, exam_id, lecturer_id,image_uri,score) 
			
			$secondprocess->processimage($infodetail['subjectID'],$infodetail['examcode'],'lecturerid','ACBADCCADBDDDADDCCAD',$strimgname);
	
	}
	
	$userObject->insertexaminfo($json_data['details'][0]['subjectID'],$json_data['details'][0]['examcode'],$answer);
	
	
	//$secondprocess->processimage();
	
	//fclose($filewrite);//------write to file 3


	$userObject->destruct();

	


?>
