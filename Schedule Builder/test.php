<?php 
$con = mysqli_connect("localhost","root","groupproject","CSV_DB");
if(mysqli_connect_errno())
{
	echo "failed to connect" . mysqli_connect_error();
}
else
{
	$query="SELECT * FROM CS_Classes";
	$results = $con->query($query); 
	$array[] = array();
	
	while ($row = mysqli_fetch_array($results))
	{	
		
		$myClass->CRN= $row['CRN'];
		$myClass->Course= $row['Course'];
		$myClass->Title= $row['Title'];
		$myClass->Hrs= $row['Hrs'];
		$array[x]= json_encode($myClass);
	}
		echo json_encode($array[]);
}
$con->close();
?>
  