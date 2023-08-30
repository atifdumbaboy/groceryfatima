<title>Eggplant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
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
    <span>›</span>
    <a href="eggplant.php">Eggplant</a>
</div>

<div class="item">
    <div class="row">
        <div class="col-12 col-sm-5">
            <div class="image">
            <img src="Media/eggplant.png" class="img-fluid" alt="Grapes">
        </div>
        </div>
        <div class="col-12 col-sm-7">
            <div class="description">
            <h1 class="title">Eggplant</h1>
            <p><br><br><br>
              Indulge in the exquisite taste of our farm-fresh Eggplants, a true testament to our commitment to quality and authenticity. Grown with passion and precision on our own fields, these Eggplants carry the essence of nature's goodness straight to your table.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-solid fa-star" style="color: #fcd303;"></i>
                <i class="fa-regular fa-star" style="color: #fcd303;"></i>
            </div>
             <form>
                                <div class="form-group">
                                    <label for="quantitySelect">Quantity:</label>
                                    <select id="quantitySelect" class="form-control">
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
                                    </select>
                                </div>
                                <button type="submit">Add to Cart</button>
                            </form>
        </div>
    </div>
</div>
</div>
 <center>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-3">
            <img src="Media/mushroom.png" class="img-fluid">
            <h4>Mushroom</h4>
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
            <img src="Media/parsley.png" class="img-fluid">
            <h4>Parsley</h4>
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
            <img src="Media/gobi.png" class="img-fluid">
            <h4>Cauli Flower</h4>
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
            <img src="Media/leaves.png" class="img-fluid">
            <h4>Lettuce</h4>
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