<?php
require 'includes/common.php';
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | E-Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
<body style="padding-top: 50px; background-color:black;" >
        <?php
        include 'includes/header.php';
        ?>
<div id="content">
    
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Footwears For All</h1>
                            <p>Flat 40% OFF on All </p>
                            <br/>
                            <a  href="products.php" class="btn btn-success btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>


                 <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#mens" >
                            <div class="thumbnail">
                                <img src="img/mens.jpg" alt="mens footwear">
                                <div class="caption">
                                    <h3>Mens</h3>
                                
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#womens" >
                            <div class="thumbnail">
                                <img src="img/womens.jpg" alt="womens footwear">
                                <div class="caption">
                                    <h3>Womens</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#kids" >
                            <div class="thumbnail">
                                <img src="img/kids.jpg" alt="kids footwear">
                                <div class="caption">
                                    <h3>Kids</h3>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>

        <?php
        include 'includes/footer.php';
        ?>
</body>
</html>        