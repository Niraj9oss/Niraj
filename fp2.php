<?php

$name = $_POST['name'];
$Birth_day = $_POST['Birth_day'];
$Birth_month = $_POST['Birth_month'];
$Birth_year = $_POST['Birth_year'];
$Emailid = $_POST['Emailid'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$aadhar_no = $_POST['aadhar_no'];
$bloodgroup = $_POST['bloodgroup'];
$curr_address = $_POST['curr_address'];
$per_address = $_POST['per_address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$tenth_tage = $_POST['tenth_tage'];
$tenth_school = $_POST['tenth_school'];
$tweth_tage = $_POST['tweth_tage'];
$tweth_tile = $_POST['tweth_tile'];
$tweth_school = $_POST['tweth_school'];
$GUJCET = $_POST['GUJCET'];
$GUJCET_tile = $_POST['GUJCET_tile'];
$father_name = $_POST['father_name'];
$father_education = $_POST['father_education'];
$father_occupation = $_POST['father_occupation'];
$father_mobileno = $_POST['father_mobileno'];
$mother_name = $_POST['mother_name'];
$mother_education = $_POST['mother_education'];
$mother_occupation = $_POST['mother_occupation'];
$mother_mobileno = $_POST['mother_mobileno'];
$yeary_family_income = $_POST['yeary_family_income'];

 if(!empty($name) || !empty($Birth_day) || !empty($Birth_month) || !empty($Birth_year) || !empty($Emailid) || !empty($gender) || !empty($mobile_no) || !empty($aadhar_no) || !empty($bloodgroup) || !empty($curr_address) || !empty($per_address) || !empty($city) ||!empty($pincode) || !empty($state) || !empty($tenth_tage) || !empty($tenth_school) ||  !empty($tweth_tage) || !empty($tweth_tile) || !empty($tweth_school) || !empty($GUJCET) || !empty($GUJCET_tile) || !empty($father_name) || !empty($father_education) || !empty($father_occupation) || !empty($father_mobileno) || !empty($mother_name) || !empty($mother_education) || !empty($mother_occupation) || !empty($mother_mobileno) || !empty($yeary_family_income)) {
 	
	 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "demo";
	 
	 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 
	 if(mysqli_connect_error()){
		 die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
	 
 } else{
	 $SELECT = "SELECT Emailid from demo where Emailid = ? Limit 1";
	 $INSERT = "INSERT into demo  (name, Birth_day, Birth_month, Birth_year, Emailid, gender, mobile_no, aadhar_no, bloodgroup, curr_address, per_address, city, pincode, state, tenth_tage, tenth_school, tweth_tage, tweth_tile, tweth_school, GUJCET, GUJCET_tile, father_name, father_education, father_occupation, father_mobileno, mother_name, mother_education, mother_occupation, mother_mobileno, yeary_family_income) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	 
	 $stmt = $conn-> prepare($SELECT);
	 $stmt-> bind_param("s", $Emailid);
	 $stmt-> execute();
	 $stmt-> bind_result($Emailid);
	 $stmt-> store_result();
	 $rnum = $stmt-> num_rows;
	 
	 if($rnum==0)
	 {
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("siiissiissssisdsddsidsssisssii", $name, $Birth_day, $Birth_month, $Birth_year, $Emailid, $gender, $mobile_no, $aadhar_no, $bloodgroup, $curr_address, $per_address, $city, $pincode, $state, $tenth_tage, $tenth_school, $tweth_tage, $tweth_tile, $tweth_school, $GUJCET, $GUJCET_tile, $father_name, $father_education, $father_occupation, $father_mobileno, $mother_name, $mother_education, $mother_occupation, $mother_mobileno, $yeary_family_income);
			$stmt->execute();
			echo "New Student's Details added";
			
	 }else{
		echo "Someone register by this Email-ID ";
	 }
	 $stmt->close();
	 $conn->close();
 }
 }
 else{
	 echo "All fields are required";
	 die();
 }
?>

