<?php
if(isset($_POST['save'])) {
    $FirstName ="name1";
    $Surname ="name2";
    $DateOfBirth="dob";
    $Gender ="gender";
    $Email ="email";
    $Password ="pwd1";
}


$sqlquery = "INSERT INTO table users
//    ($FirstName, $Surname, $DateOfBirth, $Gender, $Email, $Password)";

if ($conn->query($conn) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $conn . "<br>" . $conn->error;
}
