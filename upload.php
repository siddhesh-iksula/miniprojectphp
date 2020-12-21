<?php
include('dbconnection.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assignmentphp/main.css"> 
</head>

<body id="container1">

  <div class="registration1">
    <h2>REGISTER</h2>
  </div>
  <br><br>


  <form action="upload.php" method="post" class="form2" enctype="multipart/form-data">
    <input type="text" name="firstname" placeholder="First name" pattern="[A-Za-z]+" title="Use letters only"><br><br>
    <input type="text" placeholder="Last name" name="lastname" pattern="[A-Za-z]+" title="Use letters only"><br><br>
    <input type="email" placeholder="Email address" name="emailid"><br><br>
    <input type="text" name="contact" placeholder="Contact Number" title="10-digit mobile number" pattern="[1-9]{1}[0-9]{9}"><br><br>
    <input type="number" name="age" placeholder="AGE" min="18" max="60"> <br><br>
    <input type="password" placeholder="Password" name="pwd"><br><br>
    <input type="password" placeholder="Confirm Password" name="cpwd"><br><br>
    <input type="file" id="image1" class="hidden" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" id="registerButton" value="SUBMIT" name="submit"><br>
    <input type="submit" id="registerButton2"value="Already a user? click to login" name="submit1"><br><br>
  </form>

</body>
</html>

<?php
if(isset($_POST['submit1'])){
  header("Location: login.php"); 
}


if($_POST['pwd']==$_POST['cpwd']){

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // if(isset($_POST["submit"])) {
  //   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  //   if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  //   } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  //   }
  // }


// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

}
else{
  echo "Password and Confirm Password fields don't match. ";
}

//data into database


$firstname1=$_POST['firstname'];
$lastname1=$_POST['lastname'];
$emailid1=$_POST['emailid'];
$contact1=$_POST['contact'];
$age1=$_POST['age'];
$pwd1=$_POST['pwd'];
$cpwd1=$_POST['cpwd'];




if($_POST['firstname']!="" && $_POST['lastname']!="" && $_POST['emailid']!=""){
  if($_POST['contact']!="" && $_POST['age']!="" && $_POST['pwd']!=""){
    if($_POST['cpwd']!="" && $target_file!=""){

      $sql="SELECT * from miniproject where EmailID='$emailid1'";
      $result=$conn->query($sql);
      if($result->num_rows>0){
        echo "<script>alert('Email ID already registered');</script>";
        exit();
      }


      $sql="INSERT INTO miniproject (FirstName,LastName,EmailID,ContactNumber,Age,Image,Password) VALUES ('$firstname1','$lastname1','$emailid1','$contact1','$age1','$target_file','$pwd1')";
      if (mysqli_query($conn, $sql)) {
          echo "<script>alert('DATA INSERTED SUCCESSFULLY');</script>";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

  } 
} 
else{
  alert("Hello! I am an alert box!");
}
mysqli_close($conn);
?>

