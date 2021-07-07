<?php
include("config.php");

if(isset($_POST['upload'])){
 
  $name = $_FILES['file1,file2,file3,file4,file5,file6,file7,file8']['name1,name2,name3,name4,name5,name6,name7,name8'];

  $target_dir = "picture/";
  $target_file = $target_dir .basename($_FILES['file1,file2,file3,file4,file5,file6,file7,file8']['name1,name2,name3,name4,name5,name6,name7,name8']);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if(in_array($imageFileType,$extensions_arr)){
 
     // Insert record
     $query = "insert into images(name1, name2, name3, name4, name5, name6, name7, name8) values('".$name1.", ".$name2.", ".$name3.", ".$name4.", ".$name5.", ".$name6.", ".$name7.", ".$name8."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file1,file2,file3,file4,file5,file6,file7,file8']['tmp_name'],$target_dir.$name);

  }
 
}

?>

