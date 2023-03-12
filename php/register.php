<?php

// get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// validate form data
if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
  $response = array('success' => false, 'message' => 'Please fill in all fields.');
} elseif ($password != $confirm_password) {
  $response = array('success' => false, 'message' => 'Passwords do not match.');
} else
 {
  // connect to database
  $conn =  mysqli_connect('localhost', 'root', '', 'sign_up');

  // prepare query
  $stmt = $conn->prepare("insert into register(username, email, password, confirm_password) values('$username', '$email', '$password', '$confirm_password')");
  

  // execute query
  if ($stmt->execute()) {
    $response = array('success' => true);
  } else {
    $response = array('success' => false, 'message' => 'Error inserting data into database.');
  }

  // close database connection
  $stmt->close();
  $conn->close();
}