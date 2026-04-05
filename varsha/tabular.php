<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";

    $sql = "INSERT INTO students (name, age, gender, address, course, hobbies)
            VALUES ('$name', '$age', '$gender', '$address', '$course', '$hobbies')";

    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post">
Name: <input type="text" name="name" required><br><br>
Age: <input type="number" name="age" required><br><br>

Gender:
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

Address:
<textarea name="address" required></textarea><br><br>

Course:
<select name="course" required>
    <option value="BCA">BCA</option>
    <option value="BBA">BBA</option>
    <option value="BSc">BSc</option>
    <option value="MCA">MCA</option>
</select>
<br><br>

Hobbies:
<input type="checkbox" name="hobbies[]" value="Reading"> Reading
<input type="checkbox" name="hobbies[]" value="Sports"> Sports
<input type="checkbox" name="hobbies[]" value="Music"> Music
<br><br>

<input type="submit" name="submit" value="Save">
</form>

<hr>

<h2>Saved Student Records</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Course</th>
    <th>Hobbies</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>".$row['hobbies']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>