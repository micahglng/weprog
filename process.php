<?php
$name = $_POST["fullname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$message = $_POST["message"];

echo"<h1>Student Registration Form</h1>";

echo "Name:$name<br>";
echo "Age:$age<br>";
echo "Gender:$gender<br>";
echo "Course:$course<br>";
echo "Message:$message<br>";

echo"<br>";

echo"Hobbies:<br>";
foreach($_POST["hobbies"]as $hobby){
    echo $hobby."<br>";
}


?>