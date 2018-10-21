<?php
	//This is AddPersonVersion2.php
	error_reporting(E_ALL & ~E_NOTICE);
	
	include("../model/reportmodel.php");
	include("../ReportController.php");
	
	if($_GET['submit1'])
	{
		
		
		$rep = new report();
		$pcon = new ReportController();
	
		
	$rep -> setStatus($_GET['Status']);
    $rep -> setSuspect_name($_GET['Suspect_name']);
	$rep -> setVictim_name($_GET['Victim_name']);
    $rep -> setLatitude($_GET['Latitude']);	
    $rep -> setLongitude($_GET['Longitude']);
	$rep -> setImage ($_GET['Image']);
	$rep -> setVideo ($_GET['Video']);		
	$rep -> setWitness_name ($_GET['Witness_name']);
	$rep -> setWitness_email ($_GET['Email']);
	$rep -> setWitness_number ($_GET['Phone']);
	$rep -> setMessage ($_GET['Message']);



		$pcon->AddReport($rep);
				echo"<script>alert('One Record Was Successfully Added')</script>";
		
		echo"<meta http-equiv='refresh' 
			content=0;url=../landingpage/index.php>";
		
	}      


?>
