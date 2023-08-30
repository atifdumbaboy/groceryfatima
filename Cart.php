<?php
include_once('connection.php');

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();

if (!isset($_SESSION["customerID"])) {
    header("Location: index.php");
    exit;
}

$customerID = $_SESSION["customerID"];

// Retrieve cart items for the customer from the Cart table
$cartQuery = "SELECT CartID, ProductID, Quantity, Price FROM Cart WHERE CustomerID = '$customerID'";
$cartResult = $conn->query($cartQuery);

$totalCost = 0; // Initialize total cost

echo "<h1>Your Cart</h1>";

if ($cartResult->num_rows > 0) {
    echo "<table border='1'>
          <tr>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>";

    while ($row = $cartResult->fetch_assoc()) {
        echo "<tr>
                <td>".$row["ProductID"]."</td>
                <td>".$row["Quantity"]."</td>
                <td>".$row["Price"]."</td>

                <td>
                <a href='edit.php?cartID=".$row["CartID"]."'>Edit</a> 
                <a href='delete.php?cartID=".$row["CartID"]."'>Delete</a>
                </td>
              </tr>";
        
        // Calculate and add item cost to total
        $totalCost += ($row["Quantity"] * $row["Price"]);
    }

    echo "</table>";

    // Display total cost
    echo "<p>Total Cost: ".$totalCost." Rs</p>";

    // Add the checkout button
    echo "<a href='checkout.php?totalAmount=".$totalCost."' class='checkout-button'>Checkout</a>";
} else {
    echo "Your cart is empty.";
}

$conn->close();
?>
