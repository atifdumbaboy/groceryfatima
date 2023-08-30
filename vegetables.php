<title>Vegetables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
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
         <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>›</span>
    <a href="vegetables.php">Vegetables</a>
</div>
     <center>
<div class="big-container">
    <h2 class="title">Shop All Vegetables</h2>
    
    <?php
    include_once('allvegetables.php');
    ?>
</div>
</center>
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