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
	
			
	$rep -> setSuspect_Name ($_GET['Suspect_Name']);
	$rep -> setVictim_Name ($_GET['Victim_name']);	
	$rep -> setImage ($_GET['Image']);
	$rep -> setVideo ($_GET['Video']);		
	$rep -> setWitness_Name ($_GET['']);
	$rep -> setWitness_email ($_GET['Witness_email']);
	$rep -> setWitness_number ($_GET['Phone Number']);
	$rep -> setMessage ($_GET['Message']);



		$pcon->AddReport($rep);
		echo"<script>alert('One Record Was Successfully Added')</script>";
		
		echo"<meta http-equiv='refresh' 
			content=0;url=viewreport.php>";
	}


?>