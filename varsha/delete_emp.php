<?php

$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])) {

    $emp_id = $_POST['emp_id'];

    // Step 1: Display Employee Record
    $select_query = "SELECT * FROM employee WHERE emp_id = $emp_id";
    $result = mysqli_query($conn, $select_query);

    if(mysqli_num_rows($result) > 0) {

        echo "<h2>Employee Record Before Deletion</h2>";
        echo "<table border='1'>
                <tr>
                    <th>EMP ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Department</th>
                </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['emp_id']."</td>
                    <td>".$row['emp_name']."</td>
                    <td>".$row['salary']."</td>
                    <td>".$row['department']."</td>
                  </tr>";
        }

        echo "</table>";

        // Step 2: Delete Employee
        $delete_query = "DELETE FROM employee WHERE emp_id = $emp_id";
        
        if(mysqli_query($conn, $delete_query)) {
            echo "<h3 style='color:red;'>Employee Deleted Successfully!</h3>";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    } else {
        echo "<h3>No Employee Found with this ID</h3>";
    }
}

mysqli_close($conn);

?>