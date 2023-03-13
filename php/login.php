<?php

// get form data
$username = $_POST['username'];

$password = $_POST['password'];


// validate form data
// if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
//   $response = array('success' => false, 'message' => 'Please fill in all fields.');
// } elseif ($password != $confirm_password) {
//   $response = array('success' => false, 'message' => 'Passwords do not match.');
// } else
//  {
  // connect to database
  $conn =  mysqli_connect('localhost', 'root', '', 'sign_up');

  // prepare query
  $stmt = $conn->query("SELECT email,password FROM register WHERE email='$username' AND password ='$password'");
  

  // execute query
  if ($stmt->num_rows>0) {
    $response = array('success' => true);
  } else {
    header("HTTP/1.1 400 Bad Requst");
  }

  // close database connection
  $stmt->close();
  $conn->close();
// }

