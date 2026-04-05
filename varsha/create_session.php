<?php

echo "MCA Department <br> <br>";
   echo"NAME:Varsha Vishwas Patil <br><br>";
   echo"ROLL NO: 2025/MCA/105 <br><br>";

   echo"***OUTPUT***<br><br>";

   
session_start();  // Start session

$_SESSION["username"] = "Varsha";
$_SESSION["course"] = "MCA";
$_SESSION["city"] = "Pune";

echo "<h2>Session Created Successfully!</h2>";
echo "<a href='view_session.php'>View Session</a>";
?>