<?php
 $name = $_POST["name"];
 $branch = $_POST["branch"];
 $sem = $_POST["sem"];
 $rollNumber = $_POST["rollNumber"];
 $phoneNumber = $_POST["phoneNumber"];
 $email = $_POST["email"];


 //database connection
 $conn = new mysqli("localhost","root","fcrit@123","tripreg");
 if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
 }
 else{
   $stmt = $conn->prepare("insert into users(name, branch, sem, rollNumber, phoneNumber, email)
   values(?,?,?,?,?,?)");

  $stmt->bind_param("ssiiis",$name,$branch,$sem,$rollNumber,$phoneNumber,$email);

  $stmt->execute();
  echo"Registration Successfully....";

  $stmt->close();
  $conn->close();
 }

?>