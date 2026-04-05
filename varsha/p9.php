<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Details Form</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    
    Age: <input type="number" name="age" required><br><br>
    
    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>
    
    Address:<br>
    <textarea name="address" required></textarea><br><br>
    
    Course:
    <select name="course">
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MCA">MCA</option>
    </select>
    <br><br>
    
    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    
    $hobbies = "";
    if(isset($_POST['hobbies']))
    {
        $hobbies = implode(", ", $_POST['hobbies']);
    }

    echo "<h3>Entered Details:</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Address: $address <br>";
    echo "Course: $course <br>";
    echo "Hobbies: $hobbies <br>";
}
?>

</body>
</html>