
 <?php
$result = "";

if(isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
}
elseif(isset($_POST['sub'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 - $num2;
}
elseif(isset($_POST['mul'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 * $num2;
}
elseif(isset($_POST['div'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($num2 != 0) {
        $result = $num1 / $num2;
    } else {
        $result = "Cannot divide by zero";
    }
}
?>

 
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple PHP Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="add" value="Add">
    <input type="submit" name="sub" value="Subtract">
    <input type="submit" name="mul" value="Multiply">
    <input type="submit" name="div" value="Divide">
</form>

<h3> Result: <?php echo $result; 
?> </h3>

</body>
</html>
