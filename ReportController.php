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
			
			function AddReport($rep){
				$rep->getImage() = $_FILES["Image"]['name'];
				$output_dir = "uploads";//Path for file upload
				$fileCount = count($_FILES["Image"]['name']);
				$RandomNum = time();
				$ImageName = str_replace(' ','-',strtolower($_FILES['Image']['name'][$i]));
				$ImageType = $_FILES['Image']['type'][$i]; //"image/png", image/jpeg etc.
				$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
				$ImageExt = str_replace('.','',$ImageExt);
				$ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
				$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
				$ret[$NewImageName]= $output_dir.$NewImageName;
				move_uploaded_file($_FILES["Image"]["tmp_name"][$i],$output_dir."/".$NewImageName );
				$data = array(
				'image' =>$NewImageName
				);
				$sql = "INSERT INTO report (status, suspect_name, victim_name, latitude, longitude, image, video, witness_name, witness_email, witness_number) 
				                    VALUES ('".$rep->getStatus()."', '".$rep->getSuspect_name."', '".$rep->getVictim_name()."', '".$rep->getLatitude()."', '".$rep->getLongtitude()."', '".$rep->getLongitude()."', '".$data."', '".$rep->getVideo()."', '".$rep->getWitness_name()."', '".$rep->getWitness_email()."', '".$rep->getWitness_number()."', '".$rep->getMessages();
				
			}
			
			
				$this->$con->query($sql);
				$this->$con->close();
			}
			
		function RetrieveReport()
		{
			$sql = "SELECT * FROM report";
				
				$result=$this->con->query($sql);
				
				if($result->num_rows > 0)
				{
					$data = array();
					$ctr = 0;
					
					while($row = $result->fetch_assoc())
					{
						$data['report_id'][$ctr] = $row['report_id'];
						$data['suspect_name'][$ctr] = $row['suspect_name'];
						$data['victim_name'][$ctr] = $row['victim_name'];
						$data['latitude'][$ctr] = $row['latitude'];
						$data['longitude'][$ctr] = $row['longitude'];
						$data['image'][$ctr] = $row['image'];
						$data['video'][$ctr] = $row['video'];
						$data['witness_name'][$ctr] = $row['witness_name'];
						$data['witness_email'][$ctr] = $row['witness_email'];
						$data['witness_number'][$ctr] = $row['witness_number'];
						$data['messages'][$ctr] = $row['messages'];
						
						$ctr++;
						
						$data['count'] = $ctr;
					}
					return $data;
				}
				
				$this->con->close();
				
		function RetrieveReports($id)
		{
			$sql = "SELECT * FROM report WHERE report_id=$id";
				
				$result=$this->con->query($sql);
				
				if($result->num_rows > 0)
				{
					$data = array();
			
					while($row = $result->fetch_assoc())
					{
						$data['report_id'][$ctr] = $row['report_id'];
						$data['suspect_name'][$ctr] = $row['suspect_name'];
						$data['victim_name'][$ctr] = $row['victim_name'];
						$data['latitude'][$ctr] = $row['latitude'];
						$data['longitude'][$ctr] = $row['longitude'];
						$data['image'][$ctr] = $row['image'];
						$data['video'][$ctr] = $row['video'];
						$data['witness_name'][$ctr] = $row['witness_name'];
						$data['witness_email'][$ctr] = $row['witness_email'];
						$data['witness_number'][$ctr] = $row['witness_number'];
						$data['messages'][$ctr] = $row['messages'];
					}
					return $data;
				}
				
				$this->con->close();
			
		}
		}