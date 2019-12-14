  <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//require "common.php";
require "checkifadded.php";
session_start();
//if(!isset($_SESSION['email']))

  // header('location:login.php');

//setcookie("id1","1",time()+(86400*2000),"/");
//setcookie("id2","2",time()+(86400*2000),"/");
//setcookie("id3","3",time()+(86400*2000),"/");
//setcookie("id4","4",time()+(86400*
  //      2000),"/");

?>
<?php
if(isset($_GET['$error']))
{
    echo "order successfully inserted";
}
?>
<html>
    <head>
        <title>Product page</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #jumbo{
                margin-top:50px;
                padding-top:20px;
            }
             #footer{
                 padding: 10px 0px;
                       background-color: #101010; 
                  color:#9d9d9d; 
                  bottom: 10px; 
                  width: 100%; 
                  padding-top:0px;
                  padding-bottom: 0px;
            }
            #down{
                padding-top:0px;
                margin-top:10px;
            }
             #space{
                padding-top:5px;
                margin-top:-18px;
                margin-bottom:-10px;
            }
          
        </style>
        
    </head>
    <body>
        
        <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="header">
            <div class="container" >
                <div class="navbar-header">
                    <a href="#" target="_self" class="navbar-brand" id="logo">
                        LifeStyle Store
                    </a>
                </div>
                <div>
                    <ul class="nav navbar-nav  navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" ></span>Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
                    </ul>
                </div>
            </div>
            
        </nav>
       
            <div class="row" id="jumbo">
            <div class="jumbotron" >
                <h1>"Welcome to our LifeStyle Store!"</h1>
                <p>"We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place"</p>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="thumbnail">
                    <img src="img/2 - copy.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(1))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=1" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button>
                        -->
                    </div>
                        
                </div>
                </div>
                     <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/5.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(2))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=2" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                <div class="col-xs-3">
                   <div class="thumbnail">
                       <img src="img/6.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(3))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=3" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                     <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/3.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(4))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=4" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/21.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(5))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=5" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/19.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(6))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=6" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/20.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(7))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=7" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/18.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(8))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=8" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                    <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/24.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(9))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=9" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                    <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/22.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(10))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=10" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                    <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/25.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(11))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=11" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button> 
                        -->
                    </div>
                </div>  
                     </div>
                   
                    <div class="col-xs-3">
                   <div class="thumbnail">
                    <img src="img/23.jpg">
                    <div class="caption">
                        <center>
                        <h2>Canoono EOS</h2>
                        
                        <p>price:Rs.36000.00</p>
                        </center>
                        <?php 
                        if(!isset($_SESSION['email']))
                                
                        {
                         echo ' <a href="login.php"><button type ="submit" class="btn btn-primary btn-block">Buy Now</button></a>';
                        }
                        else{
                            if (check_if_added_to_cart(12))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled
                                       > Add to cart </a>';
                                
                                
                            }
                            else{
                              
                               
                                echo  '<a href="cart-add.php?id=12" role="button" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                     // $cookie_name="id1";
                                      //cookie_value="1";
                                      
                            }
                        }
                        ?>
                        <!--
                        <button type="submit" class="btn btn-primary btn-block"><a href="cart.php">Add to cart</a></button>
                        -->
                </div>  
                     </div>
        </div>
        </div>
            <div class="row" id="down">
             <footer>
                <div id="footer">
                    <center id="space" >
                        <h3>"Copyright@LifeStyle Store.All Rights Reserved" and Contact us:+91 900000000"</h3>
                    </center>
                </div>        
           
        
    </footer>
        
        </div>
       
    </body>
</html>
