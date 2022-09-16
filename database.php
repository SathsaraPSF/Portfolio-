<?php

$name = $_POST["name"];
$email = $_POST["email"];
$comment= $_POST["comment"];

//var_dump($name,$email,$comment);

if(!$name && !$email){
    die("Name and email must be added");
}

$host = "localhost";
$username = "root";
$password = "199931310403";
$db_name= "comment_db";


$conn = mysqli_connect($host,$username,$password,$db_name);

if(mysqli_connect_errno()){
    die("Connection error".mysqli_connect_error());

}

$sql = "INSERT INTO table_01(Name,email,comment)
        VALUES(?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss",
                        $name,
                        $email,
                        $comment);

mysqli_stmt_execute($stmt);

echo "<h1 style='color:blue;text-align: center; font-family: Arial, Helvetica, sans-serif;margin-top: 10%;'>";
echo("Thank you for your comment...");
echo "</h1>";

echo "<a href='http://localhost/Portfolio/' 
      style='color:blue;
      margin-left: 45%;
      text-decoration: none; 
      padding: 20px;
      font-weight: 800;
      background-color: #b7c045;
      border-radius: 10px;'>";
echo "Go Back";
echo "</a>"


?>
