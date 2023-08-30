<?php
include_once('connection.php');

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION["customerID"])) {
    header("Location: index.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["cartID"])) {
    $cartID = $_GET["cartID"];

    // Perform a query to delete the cart item based on cartID
    $deleteQuery = "DELETE FROM Cart WHERE CartID = '$cartID'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Cart item deleted successfully!";
    } else {
        echo "Error deleting cart item: " . $conn->error;
        echo "<br>Query: " . $deleteQuery;
    }
}

$conn->close();
?>
