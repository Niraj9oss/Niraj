<?php
include("config.php");

if(isset($_POST['upload'])){
 
  $name1 = $_FILES['file1']['name'];
  
  $target_dir = "image/";
  $target_file = $target_dir . basename($_FILES["file1"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Select file type
  //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(name1) values('".$name1."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
     

  }

  $name2 = $_FILES['file2']['name'];
  $target_file = $target_dir . basename($_FILES["file2"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert images set name2='".$name2."'";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
     

  }

  

  $name3 = $_FILES['file3']['name'];
  $target_file = $target_dir . basename($_FILES["file3"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert images set name3='".$name3."'";
      mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name3);
     

  }
  

  $name4 = $_FILES['file4']['name'];
  $target_file = $target_dir . basename($_FILES["file4"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert images set name4='".$name4."'";
          mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$name4);
     

  }

  
  $name5 = $_FILES['file5']['name'];
  $target_file = $target_dir . basename($_FILES["file5"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert images set name5='".$name5."'";
          mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file5']['tmp_name'],$target_dir.$name5);
     

  }

  
  $name6 = $_FILES['file6']['name'];
  $target_file = $target_dir . basename($_FILES["file6"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
   $query = "insert images set name6='".$name6."'";
         mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file6']['tmp_name'],$target_dir.$name6);
     

  }


  $name7 = $_FILES['file7']['name'];
  $target_file = $target_dir . basename($_FILES["file7"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert images set name7='".$name7."'";
        mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file7']['tmp_name'],$target_dir.$name7);
     

  }

  $name8 = $_FILES['file8']['name'];
  $target_file = $target_dir . basename($_FILES["file8"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
   $query = "insert images set name8='".$name8."'";
       mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file8']['tmp_name'],$target_dir.$name8);     

  }

  //$query="insert into images(name1,name2,name3,name4,name5,name6,name7,name8) values('".$name1.",".$name2.",".$name3.",".$name4.",".$name5.",".$name6.",".$name7.",".$name8."')";
     
  $query="insert into images(name1,name2,name3,name4,name5,name6,name7,name8) values($name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8)";

  mysqli_query($con,$query);
     
 
}
?> 

<!--form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form-->

<!DOCTYPE html>
<html>
<head>
	<title>Uploadation</title>
	<style>
		
		.between{
			height: 1050px;
			font-style: oblique;
			font-size: 33px;
			background-color: grey;
		}

	</style>
</head>
<body>

	<form method="post" action="" enctype='multipart/form-data'>

	<div class="upper" style="text-align: center; font-size: 35px; color: white; background-color: black;">
		
		<p> Every Image must be in size of less than 700KB. </p>
	</div>

	<div class="between">

      <tr>
      	<td> <b> 12th Board Mark-sheet : </b></td>
      	<td><input type="file" name="file1" style="font-size: 16px;"></td>
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> 12th GUJ-CET Mark-sheet : </b></td>
      	<td><input type="file" name="file2" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> 12th School Living Certificate : </b></td>
      	<td><input type="file" name="file3" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> Student's Aadhar Card : </b></td>
      	<td><input type="file" name="file4" style="font-size: 16px;"></td>
      	</tr>
      <br><br><br>

      <tr>
      	<td> <b> Student's Passport Size Photo : </b></td>
      	<td><input type="file" name="file5" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> Student's Signature : </b></td>
      	<td><input type="file" name="file6" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> Annual Income Certificate : </b></td>
      	<td><input type="file" name="file7" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <tr>
      	<td> <b> One Residency Proof : </b></td>
      	<td><input type="file" name="file8" style="font-size: 16px;"></td>
      	
      </tr>
      <br><br><br>

      <input type="submit" name="upload" value="Upload Image" style="width: 244px;
      margin-left: 634px; margin-top: 30px; font-size: 30px; display: inline-block; border: 3px solid black; 
      border-radius: 4px; box-shadow: 5px 10px black;">

    </div>

    </form>

</body>
</html>