<?php
$username = "";
$servername   = "";
$password  = "";
$dbname        = "";

// establish connection
$conn = new mysqli ( $username, $servername, $password, $dbname);
 // check connection
 if ( $conn-> connect_error) {
    die ("connection failed: " .
    $conn->connect_error);
 }
// check if the form is sumbitted using post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST ["name"]);
    $days = mysqli_real_escape_string($conn, $_POST ["days"]);
}

// prepare statements 
$sqli = "INSERT INTO database name (NAME, DAYS MESSAGE) VALUES (?,?,?)"; 
$stmt = $conn->prpare($sql);
//bin paramaters to prevent sql injection
$stmt->bind_param("sss", $name,$days);
 if ($stmt->excute() == true) {
echo "message";//message you want to be displayed
 } else "error: " .$stmt->;


?>