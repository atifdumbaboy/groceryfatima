<?php
include_once('connection.php');
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<title>Granny's Organic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Caveat&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ee835aba3.js" crossorigin="anonymous"></script>
        <link rel="icon" href="Media/gayyer1.png" type="image/png">
   
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
    <div class="content">
            <h1>ONE STOP GROCERY SOLUTION</h1>
            <p>Get fresh fruits and vegetables from the comfort of your own home<br>anywhere and everywhere!</p>
            <div>
                <button type="button">SHOP NOW<span></span></button>
                <button type="button">NEW PRODUCE<span></span></button>
            </div>
        </div>
<center>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="grapes.php">
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
        </a>
        </div>
        <div class="col-4">
            <a href="apple.php">
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
        </a>
        </div>
        <div class="col-4">
                        <a href="peaches.php"> 

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
        </a>
        </div>
    </div>
</div>
    </center>

    <?php
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


<?php //implementing footer
 include_once('footer.php');
?>



</body>
</html>
<?php
include_once('connection.php');

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    $timestamp = date("Y-m-d H:i:s"); // Current timestamp

    $sql = "INSERT INTO NewsletterSubscriptions (Email, Time) VALUES ('$email', '$timestamp')";

    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
