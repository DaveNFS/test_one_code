<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dave";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

for ($i=0; $i<100; $i++)
{
  $sql = "INSERT INTO test_one (id) VALUES ($i)";

  if ($conn->query($sql) === TRUE)
  {
      echo "New record created successfully: $i";
  }
  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}


$conn->close();
?>
