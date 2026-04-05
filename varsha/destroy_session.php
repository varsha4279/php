<?php
session_start();  // Start session

session_unset();  // Remove session variables
session_destroy();  // Destroy session

echo "<h2>Session Destroyed Successfully!</h2>";
echo "<a href='view_session.php'>Check Session</a>";
?>