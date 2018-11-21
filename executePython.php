<?php
include_once 'db-connect.php';
require_once 'imageDBHelper.php';

class secondprocess{
	
	public function processimage($subjectid,$examcode,$lecturerid,$answer,$imgname){
		

		$userObject = new firstprocess();

		
		$strdir = getcwd()."//uploads//";
		$_SortGrade = getcwd()."//pythonScript//_SortGrade_(main).py";
		$imgpath ="//uploads//".$imgname;
		
		print_r($imgpath);
		$newcmd = "python $_SortGrade $answer $imgname $imgpath $strdir";
		//print_r($newcmd);
		$output = shell_exec($newcmd);
		print_r("\r\n".$output);

		$userObject->updateScore("student_score",$imgname,$output);	
		
	
	}
	


}
/*
 * 
path D:\\Xampp\\htdocs\\TestLoginSaja2\\\uploads\\OMR_1542592967534.jpg
image None
path2 D:\\Xampp\\htdocs\\TestLoginSaja2\\\uploads\\OMR_1542592967534.jpg_2018-11-19_23-30-46

filename D:\Xampp\htdocs\TestLoginSaja2\uploads\OMR_1542592978749.jpg
mydir D:\Xampp\htdocs\TestLoginSaja2\uploads\OMR_1542592978749.jpg_2018-11-19_22-29-14
path D:\Xampp\htdocs\TestLoginSaja2\uploads\OMR_1542592978749.jpg_2018-11-19_22-29-14
*/

?>
