<?php
   
   echo "MCA Department <br> <br>";
   echo"NAME:Varsha Vishwas Patil <br><br>";
   echo"ROLL NO: 2025/MCA/105 <br><br>";

   echo"***OUTPUT***<br><br>";

$conn = mysqli_connect("localhost", "root", "", "stu");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];
    
    // Hobbies (Checkbox array convert to string)
    $hobbies = implode(",", $_POST['hobbies']);

    $sql = "INSERT INTO student (name, age, gender, course, address, hobbies)
            VALUES ('$name', '$age', '$gender', '$course', '$address', '$hobbies')";

    if(mysqli_query($conn, $sql))
    {
        echo "Record Inserted Successfully!";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post">

Name: <input type="text" name="name" required><br><br>

Age: <input type="number" name="age" required><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

Course:
<select name="course">
    <option value="BCA">BCA</option>
    <option value="BBA">BBA</option>
    <option value="MCA">MCA</option>
     <option value="other">other</option>
</select>
<br><br>

Address:
<textarea name="address"></textarea>
<br><br>

Hobbies:
<input type="checkbox" name="hobbies[]" value="Reading"> Reading
<input type="checkbox" name="hobbies[]" value="Sports"> Sports
<input type="checkbox" name="hobbies[]" value="Music"> Music
<input type="checkbox" name="hobbies[]" value="other"> other
<br><br>

<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>