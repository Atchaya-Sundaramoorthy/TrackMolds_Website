<?php

	$region=$_GET["region"];
	$branch=$_GET["branch"];
	$office=$_GET["office"];
	$moldid=$_GET["moldid"];
	$fromdate=$_GET["from"];
	$todate=$_GET["to"];
	
	
	//echo $region;
	//echo $branch;
	//echo $office;
	//echo $moldid;
	//echo $fromdate;
	//echo $todate;
	
	
	//Database Connection
	
	$servername="localhost";
	$username="id11905254_report";
	$password="report";
	$db_name="id11905254_report";
	
	$con=mysqli_connect($servername,$username,$password,$db_name);
	
	if(!$con)
	{
		die("Error" .mysqli_connect_error());
	}
	
	$sql="INSERT INTO `report`(`region`, `branch`, `office`, `moldid`, `fromdate`, `todate`) VALUES ('$region','$branch','$office','$moldid','$fromdate','$todate');";
	
	if(mysqli_query($con,$sql))
	{
		echo "Report has been sent successfully...<a href='report.html'>Click here</a> to send another report";
	}
	else
	{
		echo "Something went wrong...<a href='report.html'>Click here</a> to try again";
	}
	
	mysqli_close($con);
	
	
	//echo "Report has been sent successfully...<a href='report.html'>Click here</a> to send another report";

?>