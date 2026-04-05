<?php
// Set expiry time in past to delete cookie
setcookie("username", "", time() - 3600);
setcookie("course", "", time() - 3600);
setcookie("city", "", time() - 3600);

echo "<h2>Cookie Closed Successfully!</h2>";
echo "<a href='view_cookie.php'>Check Cookie</a>";
?>