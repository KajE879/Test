<?php

echo $_GET['name'];

echo $_POST['password'];

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$button = $_GET["button"];

if ($button == "Add") {
    $result = $num1 + $num2;
}

echo "<h2>Result: $result</h2>";

?>
