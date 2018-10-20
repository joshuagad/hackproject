<?php
$conn = mysqli_connect('localhost', 'root', '', 'hack');
$query = mysqli_query($conn, 'SELECT * FROM report');
while($row = mysqli_fetch_assoc($query)){
	$data[] = $row;	
}
echo '<pre>'; print json_encode($data); echo '<br><pre>';	
	
?>