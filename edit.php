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

    // Retrieve cart item based on cartID
    $cartQuery = "SELECT CartID, ProductID, Quantity, Price FROM Cart WHERE CartID = '$cartID'";
    $cartResult = $conn->query($cartQuery);

    if ($cartResult->num_rows == 1) {
        $cartItem = $cartResult->fetch_assoc();
    } else {
        echo "Cart item not found.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $newQuantity = $_POST["quantity"];
    $cartID = $_POST["cartID"];

    // Update cart item quantity
    $updateQuery = "UPDATE Cart SET Quantity = '$newQuantity' WHERE CartID = '$cartID'";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Cart item updated successfully!";
        // Redirect back to cart or wherever you want
        header("Location: cart.php"); // Assuming cart.php is your cart page
        exit;
    } else {
        echo "Error updating cart item: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Cart Item</title>
</head>
<body>
    <h1>Edit Cart Item</h1>
    <form method="POST" action="">
        <input type="hidden" name="cartID" value="<?php echo $cartItem['CartID']; ?>">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="<?php echo $cartItem['Quantity']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
