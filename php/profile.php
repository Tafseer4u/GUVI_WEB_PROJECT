<?php 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


mongodb+srv://Tafseer1:Tafseermongo@tafseer.pzvwck6.mongodb.net/?retryWrites=true&w=majority


   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
	
   echo "Database mydb selected";

   
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
   // connect to mongodb
    $m = new MongoClient();
   echo "Connection to database successfully";
 
    // select a database
$db = $m->mydb;
echo "Database mydb selected";
$collection = $db->mycol;
echo "Collection selected succsessfully";
 
$document = array( 
   "title" => "MongoDB", 
   "description" => "database", 
   "likes" => 100,
   "url" => "http://www.tutorialspoint.com/mongodb/",
   "by" => "tutorials point"
);
 
$collection->insert($document);
echo "Document inserted successfully";



if ($stmt->execute()) {
    $response = array('success' => true);
  } else {
    $response = array('success' => false, 'message' => 'Error inserting data into database.');
  }

  // close database connection
  $stmt->close();
  $conn->close();