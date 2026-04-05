<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "stu");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Fetch students whose address contains 'Aurangabad'
$sql = "SELECT * FROM student WHERE address LIKE 'Aurangabad'";
$result = mysqli_query($conn, $sql);

echo "<h2>Students From Aurangabad City</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Address</th>
            <th>Hobbies</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['hobbies']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No Students Found From Aurangabad!";
}

mysqli_close($conn);
?>