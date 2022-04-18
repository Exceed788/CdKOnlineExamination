<?php 
session_start();

 include("../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$emailaddress' ");
$selExamineeCode = $conn->query("SELECT * FROM examineecode_tbl WHERE exmne_code='$code' AND code_status = 'Valid'");
$selExamineeCodeRow = $selExamineeCode->fetch(PDO::FETCH_ASSOC);
$newcodestatus = $selExamineeCodeRow['exmne_code'];

if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $emailaddress);
}
else
{
	$insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email) VALUES('$fullname','$course','$gender','$bdate','$year_level','$emailaddress') ");

	$codeData = $conn->query("UPDATE examineecode_tbl SET code_status='ALREADY USED' WHERE exmne_code='$code' ");
	
	if($insData)
	{
		if($codeData){
		$res = array("res" => "success", "msg" => $emailaddress);
		}
	}
	else
	{
		$res = array("res" => "failed");
	}

}


 ?>