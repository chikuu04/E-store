<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our E-Store!</h1>
                <p>We have all kinds of footwear for you. No need to hunt around, we have all in one place.</p>
            </div>
            <hr>
            <div class="row text-center" id="mens">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="img">
                        <div class="caption">
                            <h3>Levis</h3>
                            <p>Price: Rs. 1500.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                   
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Engrp </h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Nike</h3>
                            <p>Price: Rs. 1700.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Engrp</h3>
                            <p>Price: Rs. 500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Nike </h3>
                            <p>Price: Rs. 1300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="">
                        <div class="caption">
                            <h3>Levis</h3>
                            <p>Price: Rs. 1600.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/7.jpg" alt="">
                        <div class="caption">
                            <h3>Nike</h3>
                            <p>Price: Rs. 1900.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="">
                        <div class="caption">
                            <h3>Wood Land</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="">
                        <div class="caption">
                            <h3> Nike</h3>
                            <p>Price: Rs. 1450.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Nike</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="">
                        <div class="caption">
                            <h3>Reebok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                            <h3>Notrum</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>    
            </div>
            <hr >

            <div class="row text-center" id="womens">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="img">
                        <div class="caption">
                            <h3>Liberty</h3>
                            <p>Price: Rs. 1500.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            <h3>Clark</h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/15.jpg" alt="">
                        <div class="caption">
                            <h3>Mochi</h3>
                            <p>Price: Rs. 1700.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/16.jpg" alt="">
                        <div class="caption">
                            <h3>Cat Walk</h3>
                            <p>Price: Rs. 500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/17.jpg" alt="">
                        <div class="caption">
                            <h3>Regal</h3>
                            <p>Price: Rs. 1300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Haute Curry</h3>
                            <p>Price: Rs. 1600.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Regal</h3>
                            <p>Price: Rs. 1900.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>Cat Walk</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                         </div>
                     </div>
                 </div>
             </div>

            <hr  style="  border: 10px solid green;
  border-radius: 5px;">

        
            <div class="row text-center" id="kids">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="img">
                        <div class="caption">
                            <h3>Hush Puppies</h3>
                            <p>Price: Rs. 500.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>Bata</h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Mochi</h3>
                            <p>Price: Rs. 700.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>First Walk</h3>
                            <p>Price: Rs. 500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Shree</h3>
                            <p>Price: Rs. 1300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(25)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/26.jpg" alt="">
                        <div class="caption">
                            <h3>Leathers</h3>
                            <p>Price: Rs. 1600.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(26)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/27.jpg" alt="">
                        <div class="caption">
                            <h3>Puppies</h3>
                            <p>Price: Rs. 1900.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(27)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/28.jpg" alt="">
                        <div class="caption">
                            <h3>Cry Walk</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a data-toggle="modal" data-target="#pz" role="button" class="btn btn-success btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(28)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <hr >
        </div>
        <?php include("includes/footer.php"); ?>
    </body>

</html>
