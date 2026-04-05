<?php

echo "MCA Department <br> <br>";
   echo"NAME:Varsha Vishwas Patil <br><br>";
   echo"ROLL NO: 2025/MCA/105 <br><br>";

   echo"***OUTPUT***<br><br>";

   
// Create Cookie (valid for 1 hour)
setcookie("username", "Varsha", time() + 3600);
setcookie("course", "MCA", time() + 3600);
setcookie("city", "Pune", time() + 3600);

echo "<h2>Cookie Created Successfully!</h2>";
echo "<a href='view_cookie.php'>View Cookie</a>";
?>