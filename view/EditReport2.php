<?php
	//This is AddPersonVersion2.php
	error_reporting(E_ALL & ~E_NOTICE);
	
	include("../model/reportmodel.php");
	include("../controller/ReportController.php");
if ($_GET['']) {

	$p = new report();
	$pcon = new ReportController();
	
	$p -> setStatus ($_GET['']);	
	$p -> setSuspect_Name ($_GET['']);
	$p -> setVictim_Name ($_GET['']);
	$p -> setLatitude ($_GET['']);
	$p -> setLongtitude ($_GET['']);	
	$p -> setImage ($_GET['']);		
	$p -> setWitness_Name ($_GET['']);
	$p -> setwitness_email ($_GET['']);
	$p -> setWitness_number ($_GET['']);


	
	$pcon->EditPerson($p);
	echo"<script>alert('One Record Was Successfully Updated')</script>";
		
		echo"<meta http-equiv='refresh' 
			content=0;url=viewreport.php>";

}
?>
