
<?php
include_once('connection.php');
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
session_start();

// Check if the customer ID is already set in the session
if (!isset($_SESSION["customerID"])) {
    $_SESSION["customerID"] = uniqid();

    // Store the session ID in the database
    $sessionID = session_id();
    $customerID = $_SESSION["customerID"];
    $data = '';  // You can store additional data here
    $expiration = time() + (24 * 60 * 60); // Set expiration to 24 hours from now

    $insertSessionQuery = "INSERT INTO SessionData (SessionID, CustomerID, Data, Expiration) VALUES ('$sessionID', '$customerID', '$data', '$expiration')";
    $conn->query($insertSessionQuery);
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<title>Grapes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Caveat&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ee835aba3.js" crossorigin="anonymous"></script>
           <link rel="icon" href="gayyer1.png" type="image/png">

    <style>


@media only screen and (min-width: 750px) {
  #cross,#menu{
    display: none;
  }
}
@media only screen and (max-width: 600px) {
    .navbar {
        display: block;
        font-size: 25px;
    }
    .navbar ul {
background: linear-gradient(to bottom, #C3D1C5, transparent);        top: 0;
        position: fixed;
        right: -200px;
        width: 200px;
        height: 100vh;
        padding-top: 50px;
        z-index: 2;
    }
    .navbar ul li {
        display: block;
        margin: 25px;
    }
    .navbar ul .fas {
        position: absolute;
        cursor: pointer;
        top: 25px;
        left: 25px;
        display: none;
    }
    .navbar ul.show {
        right: 0;
        display: block;
    }
    
}
    </style>

</head>
<body>
    <?php
    //implementing header
    include_once('header.php');
    ?>
    <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>›</span>
    <a href="fruits.php">Fruits</a>
    <span>›</span>
    <a href="grapes.php">Grapes</a>
</div>

<div class="item">
    <div class="row">
        <div class="col-12 col-sm-5">
            <div class="image">
            <img src="Media/grapes.png" class="img-fluid" alt="Grapes">
        </div>
        </div>
        <div class="col-12 col-sm-7">
            <div class="description">
            <h1 class="title">Grapes</h1>
            <p><br><br><br>
                Grown under the nurturing sun and tender care of our dedicated farmers, our farm-fresh grapes are a delightful treat for your taste buds. Bursting with natural sweetness and juiciness, each grape embodies the essence of nature's finest offerings. Our vineyards, nestled in picturesque landscapes, ensure that every grape is infused with the richness of the earth and the purity of the air, resulting in a flavor that's truly unparalleled.
Handpicked at the peak of ripeness, our grapes are a symbol of quality and freshness. With every bite, you'll experience a symphony of flavors, from the initial burst of sweetness to the subtle notes of tanginess that follow. Whether enjoyed as a standalone snack, a refreshing addition to a fruit salad, or a complement to your favorite cheese platter, our farm-fresh grapes promise an exquisite culinary experience that celebrates the beauty of nature's bounty.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
            <form method="post">
    <div class="form-group">
        <label for="quantitySelect">Quantity:</label>
        <select id="quantitySelect" class="form-control" name="quantity">
                                        <option value="0.5">0.5 kg</option>
                                        <option value="1">1 kg</option>
                                        <option value="2">2 kg</option>
                                        <option value="3">3 kg</option>
                                        <option value="4">4 kg</option>
                                        <option value="5">5 kg</option>
                                        <option value="6">6 kg</option>
                                        <option value="7">7 kg</option>
                                        <option value="8">8 kg</option>
                                        <option value="9">9 kg</option>
                                        <option value="10">10 kg</option>

                                        <!-- Add more options as needed -->
                             <input type="hidden" name="productID" value="1"> <!-- Replace with your product ID -->
                       
                            <button type="submit">Add to Cart</button>
                            </form>
                            <a href="cart.php" class="view-cart-button">View Cart</a>
        </div>
    </div>
</div>
</div>
  <center>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-3">
            <img src="Media/grapes.png" class="img-fluid">
            <h4>Juicy Farm fresh Grapes</h4>
            <p>50 rs</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
        </div>
        <div class="col-3">
            <img src="Media/apple.png" class="img-fluid">
            <h4>Juicy Farm fresh Apple</h4>
            <p>50 rs</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
        </div>
        <div class="col-3">
            <img src="Media/peach.png" class="img-fluid">
            <h4>Juicy Farm fresh Peach</h4>
            <p>50 rs</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
        </div>
         <div class="col-3">
            <img src="Media/peach.png" class="img-fluid">
            <h4>Juicy Farm fresh Peach</h4>
            <p>50 rs</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
        </div>

    </div>
</div>
    </center>

  
   
    <?php //implementing footer
 include_once('footer.php');
?>


 <script>
        // Your JavaScript code
        var sidemenu = document.getElementById("sidemenu");
        function openmenu() {
            sidemenu.style.right = "0";
        }
        function closemenu() {
            sidemenu.style.right = "-200px";
        }
    </script>

</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST["productID"];
    $quantity = $_POST["quantity"];

    // Fetch product price from Products table (Assuming your table structure has a 'Price' column)
    $productQuery = "SELECT Price FROM Products WHERE ProductID = '$productID'";
    $productResult = $conn->query($productQuery);

    if ($productResult->num_rows > 0) {
        $row = $productResult->fetch_assoc();
        $price = $row["Price"];

        // Check if the customer ID is already set in the session
        if (!isset($_SESSION["customerID"])) {
            // Generate a unique CustomerID only if it's not already set
            $_SESSION["customerID"] = uniqid();
        }

        // Get the CustomerID from the session
        $customerID = $_SESSION["customerID"];

        // Insert into Cart table (Assuming your table structure has columns like 'CustomerID', 'ProductID', 'Quantity', 'Price')
        $cartInsertQuery = "INSERT INTO Cart (CustomerID, ProductID, Quantity, Price) VALUES ('$customerID', '$productID', '$quantity', '$price')";
        
        if ($conn->query($cartInsertQuery) === TRUE) {
            echo "Item added to cart successfully!";
        } else {
            echo "Error: " . $cartInsertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Product not found.";
    }
}


$conn->close();
?>
