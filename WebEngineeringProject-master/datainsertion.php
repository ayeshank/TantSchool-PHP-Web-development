<?php

$servername = "sql209.epizy.com";
    $username = "epiz_26484414";
    $password = "v7LaC4oyfg";
    $dbname = "epiz_26484414_quiz";
	$conn = new mysqli($servername, $username, $password, $dbname);

 
function python($name, $no)
{
	
	$quizname = 'Python';
	$totalmarks = 25;
	global $conn;
	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)
VALUES ('$name', '$quizname', '$totalmarks', '$no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

function php($name, $no)
{
	global $conn;
	$quizname = 'PHP';
	$totalmarks = 25;
	
	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)
VALUES ('$name', '$quizname', '$totalmarks', '$no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

function html($name, $no)
{
	global $conn;
	$quizname = 'HTML';
	$totalmarks = 25;
	
	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)
VALUES ('$name', '$quizname', '$totalmarks', '$no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

function css($name, $no)
{
	global $conn;
	$quizname = 'CSS';
	$totalmarks = 25;
	
	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)
VALUES ('$name', '$quizname', '$totalmarks', '$no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>