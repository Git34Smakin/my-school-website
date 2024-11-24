<?php
//database confinguration
$host = 'localhost';
$dbname= 'school_registration'';
$username= 'root';//replace with your database username
$password='';//replace with your database password
//establish connection
$conn= new mysqli($host, $username, $password, $dbname);
//chech for connection error
if($comm->connect_error){
die("connection failed:".$conn->connect_error);
}
//handle form submission
if($_SERVER["REQUEST_METHOD"] == "post") {
$name = $conn->real_escape_string($_post['name']);
$email = $conn->real_escape_string($_post['email']);
$grade = $conn->real_escape_string($_post['grade']);
//check if the email already exists
$checkEmail = "SELECT* FROM srudents WHERE email= '$email'";
$result = $conn->query($checkEmail);
if($result->num_rows>0){
echo "<h1>Error: This is email is already registered.</h1>";
}else{
//insert data into the database
$sql = "INSERT INTO students(name,email,grade) VALUES('$name','$email','$grade')";
if($conn->query($sql)== TRUE){
echo "<h1>Registration successful!</h1>";
echo"<p>Thank you, $name, for registering for $grade. We will contact you at $email.</p>";
}else{
echo "Error:" . $conn->error;
}
}
}
$conn->close();
?>