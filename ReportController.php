<?php
	error_reporting(E_ALL & ~E_NOTICE);
		class ReportController
		{
			var $con;
			function __construct()
			{
				define("DB_SERVER", "localhost");
				define("DB_USER", "root");
				define("DB_PASSWORD", "");
				define("DB_DATABASE", "hack");
				
				$this->con= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
				
				if($this->con->connect_error)
				{
					die("Connection Failed". $this->con->connect_error);
				}
		
			}
			
			function AddReport($rep)
			{
			$sql = "INSERT into report (status, suspect_name, victim_name, latitude, longitude, image, video, witness_name, witness_email, witness_number, message)
				VALUES('".$rep->getStatus()."', '".$rep->getSuspect_name()."', '".$rep->getVictim_name()."', '".$rep->getLatitude()."', '".$rep->getLongitude()."', '".$rep->getImage()."', '".$rep->getVideo()."', '".$rep->getWitness_name()."', '".$rep->getWitness_email()."', '".$rep->getWitness_number()."', '".$rep->getMessage()."')";
				
				$this->con->query($sql);
				$this->con->close();
			}
			
		}
		?>