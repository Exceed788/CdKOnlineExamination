<?php
	include("../../../conn.php");

	
	$x = 5;
	for ($i = 0; $i < $x; $i++) {
		$uni = uniqid(substr(2, 4),true);
		$suffix = str_shuffle('abcdefghijklmnopqrstuvwxyz');
		$examineecode = strtoupper(substr($suffix , 0 ,2). substr(str_shuffle(strrev(str_replace(".","",$uni))),0 ,4));
		$conn->query("INSERT INTO examineecode_tbl(exmne_code) VALUES ('$examineecode')");

		$res = array("res" => "success");
	}

	echo json_encode($res);	
?>
	
	