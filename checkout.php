<?php
include_once('connection.php');
session_start();

// Set up CSRF token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($conn === false) {
    die("Database connection failed: " . mysqli_connect_error());
}

$customerID = $_SESSION["customerID"];

$totalAmount = isset($_GET["totalAmount"]) ? $_GET["totalAmount"] : 0;

// Fetch customer information
$customerInfo = fetchCustomerInfo($conn, $customerID);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkout"]) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    $status = "Pending";
    $deliveryAddress = $_POST["deliveryAddress"];
    $deliveryCity = $_POST["deliveryCity"];
    $deliveryPostalCode = $_POST["deliveryPostalCode"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    // Update customer information in the database
    updateCustomerInfo($conn, $customerID, $firstName, $lastName, $email);

    $insertOrderQuery = "INSERT INTO Orders (CustomerID, OrderDate, TotalAmount, Status, DeliveryAddress, DeliveryCity, DeliveryPostalCode, FirstName, LastName, Email)
                        VALUES (?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertOrderQuery);
    $stmt->bind_param("sssssssss", $customerID, $totalAmount, $status, $deliveryAddress, $deliveryCity, $deliveryPostalCode, $firstName, $lastName, $email);

    if ($stmt->execute()) {
        // Place Order was successful, so destroy the session
        session_destroy();
        
        header("Location: confirm.html");
        exit;
    } else {
        echo "Error placing order: " . $stmt->error;
    }

    $stmt->close();
}

// Function to fetch customer information
function fetchCustomerInfo($conn, $customerID) {
    $sql = "SELECT FirstName, LastName, Email FROM Customer WHERE CustomerID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $customerID);
    $stmt->execute();
    $result = $stmt->get_result();
    $customerInfo = $result->fetch_assoc();
    $stmt->close();
    return $customerInfo;
}

// Function to update customer information
function updateCustomerInfo($conn, $customerID, $firstName, $lastName, $email) {
    $sql = "UPDATE Customer SET FirstName = ?, LastName = ?, Email = ? WHERE CustomerID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $customerID);
    $stmt->execute();
    $stmt->close();
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form method="POST" action="">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="firstName">First Name:</label>
<input type="text" name="firstName" required><br>

<label for="lastName">Last Name:</label>
<input type="text" name="lastName" required><br>

<label for="email">Email:</label>
<input type="email" name="email" required><br>
        <label for="deliveryAddress">Delivery Address:</label>
        <input type="text" name="deliveryAddress" required><br>
        <label for="deliveryCity">Delivery City:</label>
        <input type="text" name="deliveryCity" required><br>
        <label for="deliveryPostalCode">Delivery Postal Code:</label>
        <input type="text" name="deliveryPostalCode" required><br>
        
        <h2>Contact Information</h2>
        <p>Total Amount: <?php echo $totalAmount; ?></p>
        <button type="submit" name="checkout">Place Order</button>
    </form>
</body>
</html>
