<?php
	//This is AddPersonVersion2.php
	error_reporting(E_ALL & ~E_NOTICE);
	
	include("../model/reportmodel.php");
	include("../controller/ReportController.php");
	
	if($_GET['submit1'])
	{
		//echo "na-click ang add button";
		
		$rep = new Person();
		$pcon = new PersonController();
	
		
	$rep -> setStatus ($_GET['']);	
	$rep -> setSuspect_Name ($_GET['']);
	$rep -> setVictim_Name ($_GET['']);
	$rep -> setLatitude ($_GET['']);
	$rep -> setLongtitude ($_GET['']);	
	$rep -> setImage ($_GET['']);		
	$rep -> setWitness_Name ($_GET['']);
	$rep -> setWitness_email ($_GET['']);
	$rep -> setWitness_number ($_GET['']);
	$rep -> setMessage ($_GET['']);



		$pcon->AddReport($rep);
		echo"<script>alert('One Record Was Successfully Added')</script>";
		
		echo"<meta http-equiv='refresh' 
			content=0;url=viewreport.php>";
	}


?>