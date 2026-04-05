<?php
$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// DELETE RECORD WHEN CLICKED
if(isset($_GET['delete'])) {

    $id = intval($_GET['delete']);

    $delete = "DELETE FROM employee WHERE emp_id = $id";
    mysqli_query($conn, $delete);

    echo "<p style='color:red; font-weight:bold;'>Record Deleted Successfully!</p>";
}
?>

<h2>Employee Table</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    <th>City</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM employee");

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['emp_id']."</td>";
    echo "<td>".$row['emp_name']."</td>";
    echo "<td>".$row['salary']."</td>";
    echo "<td>".$row['city']."</td>";
    
    // Blue link delete button
    echo "<td>
            <a href='q15.php?delete=".$row['emp_id']."' 
               style='color:blue; text-decoration:underline;'>
               Delete
            </a>
          </td>";
    echo "</tr>";
}

mysqli_close($conn);
?>

</table>