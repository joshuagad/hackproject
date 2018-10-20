<?php 
	class report{
		var $report_id;
		var $status;
		var $suspect_name;
		var $victims_name;
		var $latitude;
		var $longitude;
		var $image;
		var $video;
		var $witness_name;
		var $witness_email;
		var $witness_number;
		var $message;
	
	function __construct(){
		$this->report_id = 0001;
		$this->status = 1;
		$this->suspect_name = "Mang Kanor";
		$this->victim_name = "Cardo";
		$this->latitude = 14.609054;
		$this->longitude = 121.022255;
		$this->image = "image.jpeg";
		$this->video = "Cardo.mp4";
		$this->witness_name = "MayMo";
		$this->witness_email = "maymo@gmail.com";
		$this->witness_number = 0910030302;
		$this->message = "Sadadsa"
	}

	function setId($report_id)
	{
		$this->report_id = $report_id;
	}
	function getId()
	{
		return $this->report_id;
	}
	function setStatus($status)
	{
		$this->status = $status;
	}
	function getStatus(){
		return $this->status;
	}
	function setSuspect_name($suspect_name)
	{
		$this->suspect_name = $suspect_name;
	}
	function getSuspect_name(){
		return $this->suspect_name;
	}
	function setVictim_name($victim_name)
	{
		$this->victim_name = $victim_name;
	}
	function getVictim_name(){
		return $this->victim_name;
	}
	function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}
	function getLatitude(){
		return $this->latitude;
	}
	function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}
	function getLongitude(){
		return $this->longitude;
	}
	function setImage($image)
	{
		$this->image = $image;
	}
	function getImage(){
		return $this->image;
	}
	function setVideo($video)
	{
		$this->video = $video;
	}
	function getVideo(){
		return $this->video;
	}
	function setWitness_name($witness_name)
	{
		$this->witness_name = $witness_name;
	}
	function getWitness_name(){
		return $this->witness_name;
	}
	function setWitness_email($witness_email)
	{
		$this->witness_email = $witness_email;
	}	
	function getWitness_email(){
		return $this->witness_email;
	}
	function setWitness_number($witness_number)
	{
		$this->witness_number = $witness_number;
	}
	function getWitness_number(){
		return $this->witness_number;
	}
	function setMessage($message){
		$this->message = $message;
	}
	function getMessage()
	{
		return $this->message;
	}
	}
 ?>