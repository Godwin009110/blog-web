<?php
$message = "fname";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    if (!empty($fname)) {
        $message = "Hello, " . htmlspecialchars($fname) . "!";
    } else {
        $message = "Please enter a valid name.";
    }
}
?>