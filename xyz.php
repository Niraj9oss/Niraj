
<?php

$name = $_POST['name'];
$EmailId = $_POST['EmailId'];
$mobileno = $_POST['mobileno'];

 if(!empty($name) || !empty($EmailId) || !empty($mobileno)) {
	 $host = "Localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "demo";
	 
	 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 
	 if(mysqli_connect_error()){
		 die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
	 
 } else{
	 $SELECT = "SELECT EmailId from demo where EmailId = ? Limit 1";
	 $INSERT = "INSERT into demo  (name, EmailId, mobileno) values (?, ?, ?)";
	 
	 $stmt = $conn-> prepare($SELECT);
	 $stmt-> bind_param("s", $EmailId);
	 $stmt-> execute();
	 $stmt-> bind_result($EmailId);
	 $stmt-> store_result();
	 $rnum = $stmt-> num_rows;
	 
	 if($rnum==0)
	 {
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssi", $name, $EmailId, $mobileno);
			$stmt->execute();
			echo "New record added";
			
	 }else{
		echo "Someone register by this emil";
	 }
	 $stmt->close();
	 $conn->close();
 }
 }
 else{
	 echo "All field are required";
	 die();
 }
?>

