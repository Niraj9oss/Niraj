<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>

	<table border="2">
		<tr>
			<th>name</th>
			<th>Birth_day</th>
			<th>Birth_month</th>
			<th>Birth_year</th>
			<th>Emailid</th>
			<th>gender</th>
			<th>mobile_no</th>
			<th>aadhar_no</th>
			<th>bloodgroup</th>
			<th>curr_address</th>
			<th>per_address</th>
			<th>city</th>
			<th>pincode</th>
			<th>state</th>
			<th>tenth_tage</th>
			<th>tenth_school</th>
			<th>tweth_tage</th>
			<th>tweth_tile </th>
			<th>tweth_school</th>
			<th>GUJCET</th>
			<th>GUJCET_tile </th>
			<th>father_name</th>
			<th>father_education</th>
			<th>father_occupation </th>
			<th>father_mobileno </th>
			<th>mother_name </th>
			<th>mother_education</th>
			<th>mother_occupation </th>
			<th>mother_mobileno </th>
			<th>yeary_family_income</th>
			
		</tr>
	
<?php

     $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "demo";
	 
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$query = "select * from demo";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

//echo $total;

if ($total!=0) {
	while ($result = mysqli_fetch_assoc($data)) {
		echo "
		<tr>
		<td>".$result['name']."</td>
		<td>".$result['Birth_day']."</td>
		<td>".$result['Birth_month']."</td>
		<td>".$result['Birth_year']."</td>
		<td>".$result['Emailid']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['mobile_no']."</td>
		<td>".$result['aadhar_no']."</td>
		<td>".$result['bloodgroup']."</td>
		<td>".$result['curr_address']."</td>
		<td>".$result['per_address']."</td>
		<td>".$result['city']."</td>

		<td>".$result['pincode']."</td>
		<td>".$result['state']."</td>
		<td>".$result['tenth_tage']."</td>
		<td>".$result['tenth_school']."</td>

		<td>".$result['tweth_tage']."</td>
		<td>".$result['tweth_tile']."</td>
		<td>".$result['tweth_school']."</td>
		<td>".$result['GUJCET']."</td>
		<td>".$result['GUJCET_tile']."</td>
		<td>".$result['father_name']."</td>
		<td>".$result['father_education']."</td>
		<td>".$result['father_occupation']."</td>

		<td>".$result['father_mobileno']."</td>
		<td>".$result['mother_name']."</td>
		<td>".$result['mother_education']."</td>
		<td>".$result['mother_occupation']."</td>
		<td>".$result['mother_mobileno']."</td>
		<td>".$result['yeary_family_income']."</td>

		";
	}

}else
{
	echo "No recored in Table ";
}
?>

</table>
</body>
</html>

