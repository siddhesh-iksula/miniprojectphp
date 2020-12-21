<?php
include('dbconnection.php');
session_start();
?>


<html>
<head>
    <link rel="stylesheet" href="../assignmentphp/main.css">
</head>

<body id="container">

        <div class="login1">
            <h1>LOGIN</h1>
        </div>
        
        <form action="login.php" method="post" class="form1" enctype="multipart/form-data">
            <input type="email" placeholder="EMAIL ADDRESS" name="emailid"><br><br>
            <input  type="password" name="pwd" placeholder="PASSWORD" ><br><br>
            <input type="submit" value="SUBMIT" id="loginbutton" name="submit"><br><br>
        </form>


</body>
</html>

<?php
$email1=$_POST['emailid'];
$pwd1=$_POST['pwd'];
$_SESSION["favcolor"] = $email1;
$_SESSION["favcolor"] = $pwd1;

$sql0 = "SELECT EmailID,Password from miniproject2";
$result0 = $conn->query($sql0);
if ($result0->num_rows == 0){
    $sqlA="INSERT INTO miniproject2 (EmailID,Password) VALUES ('$email1','$pwd1')";
    $result = $conn->query($sqlA);
}
else{
    $sqlB="DELETE from miniproject2";
    $result = $conn->query($sqlB);
    $sqlA="INSERT INTO miniproject2 (EmailID,Password) VALUES ('$email1','$pwd1')";
    $result = $conn->query($sqlA);

}


$sql2 = "SELECT FirstName,LastName,Password from miniproject where EmailID='$email1' and Password='$pwd1'";
$result1 = $conn->query($sql2);
if ($result1->num_rows > 0) {
    // $row=$result1->fetch_assoc();
    header("Location: display.php"); 
}

mysqli_close($conn);
?>
