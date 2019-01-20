<?php
include_once 'db-connect.php';
require_once 'imageDBHelper.php';
require_once 'executePython.php';

	$userObject = new firstprocess(); //retrieving data
	$secondprocess = new secondprocess(); //for image process 
//php://input
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
			$strimgname = substr($infodetail['uri'],strrpos($imageuri,'/')+1);//get the filename
			
			$userObject->insertrecord($infodetail['studentID'],$infodetail['subjectID'],$infodetail['examcode'],'lecturerid',$strimgname,'0'); 
							//(student_id, subject_id, exam_id, lecturer_id,image_uri,score) 
			
			$secondprocess->processimage($infodetail['subjectID'],$infodetail['examcode'],'lecturerid',$answer,$strimgname);
										//$subjectid,$examcode,$lecturerid,$answer,$imgname
	}
	
	$userObject->insertexaminfo($json_data['details'][0]['subjectID'],$json_data['details'][0]['examcode'],$answer);
	
	/*{
  "answer": "ACBADCCADBDDDADDCCAD",
  "details": [
    {
      "examcode": "Sept18",
      "studentID": "12012",
      "uri": "file:///storage/emulated/0/Pictures/OMR/OMR_1543517306516.jpg",
      "subjectID": "IOT"
    },
    {
      "examcode": "Sept18",
      "studentID": "8338",
      "uri": "file:///storage/emulated/0/Pictures/OMR/OMR_1543517333596.jpg",
      "subjectID": "IOT"
    }
  ]
}*/

	//$secondprocess->processimage();
	
	//fclose($filewrite);//------write to file 3


	$userObject->destruct();

	


?>
