<?php
    include('dbconnection.php');
    error_reporting(0);
?>
<html>
<head>
    <link rel="stylesheet" href="../assignmentphp/main.css">

<body id="display1">
<div class="header1">
    
        
<?php
        $sql_header="SELECT EmailID,Password FROM miniproject2";
        $resultA = $conn->query($sql_header);
        if ($resultA->num_rows > 0) {
            $row=$resultA->fetch_assoc();
        }

        $temp1=$row['EmailID'];
        $temp2=$row['Password'];
        $sql_header="SELECT FirstName,LastName,Image FROM miniproject where EmailID='$temp1'and Password='$temp2'";
        $data=mysqli_query($conn,$sql_header);
        $resultA=mysqli_fetch_assoc($data);
        $temp1=$resultA['FirstName'];
        $temp2=$resultA['LastName'];

        
        echo "<div class='header3'><img src='".$resultA['Image']."' height='100' width='100'</td></div>";
        echo "<div class='header2'><h2>Welcome</h2><p>$temp1&nbsp;$temp2</p></div>";

    ?>
    <button class="logoutButton" name="logout1" onclick="location.href='login.php'">Sign out</button>

</div>
<?php

    $sql_display="SELECT FirstName,LastName,EmailID,ContactNumber,Age,Image FROM miniproject";
    $data=mysqli_query($conn,$sql_display);
    $count=mysqli_num_rows($data);
?>

<h2 id="details1">Details of Registered users:</h2>
<table>
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>EmailID</th>
        <th>ContactNumber</th>
        <th>Age</th>
        <th>Image</th>
    </tr>

    <?php
        while($result1=mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td >".$result1['FirstName']."</td>
                    <td>".$result1['LastName']."</td>
                    <td >".$result1['EmailID']."</td>
                    <td>".$result1['ContactNumber']."</td>
                    <td >".$result1['Age']."</td>
                    <td ><img src='".$result1['Image']."' height='100' width='100'</td>
                </tr>";
        }
    
    ?>
   
    </table>

</body>
</html>
