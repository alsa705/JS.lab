<?php

$conn = mysqli_connect("localhost","root","","studentdb");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validation

if(strlen($fullname) > 40)
{
    echo "Full Name should be less than 40 characters.";
}

elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "Invalid Email.";
}

elseif(!preg_match("/^[A-Za-z]+[0-9]+$/",$username))
{
    echo "Username must contain letters followed by numbers.";
}

elseif(strlen($password) <= 8)
{
    echo "Password must be more than 8 characters.";
}

else
{
    $sql = "INSERT INTO users(fullname,email,username,password)
    VALUES('$fullname','$email','$username','$password')";

    mysqli_query($conn,$sql);

    echo "Data Stored Successfully.";
}

?>