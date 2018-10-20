<?php  
	error_reporting(E_ALL & ~E_NOTICE);
	
	include("../model/reportmodel.php");
	include("../controller/ReportController.php");
		$id=$_GET['report_id'];
	

	$pcon= new ReportController();
	
	$data=$pcon->RetrievePersons($id);		
?>