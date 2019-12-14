<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require "common.php";
?>

<html>
    <head>
        <title>Sign up</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #row{
                padding-top:100px;
                padding-left:325px;
            }
            h2{
                padding-left:10px;
                   
            }
            #footer{
                 padding: 10px 0px;
                       background-color: #101010; 
                  color:#9d9d9d; 
                  bottom: 10px; 
                  width: 100%; 
                  padding-top:-60px;
            }
            #down{
                padding-top:267px;
            }
            #space{
                padding-top:5px;
                margin-top:-18px;
                margin-bottom:-10px;
            }
           
        </style>
    </head>
    <body>
         <?php
      require "header.php";
        ?>
        <div class="container">
           
                     <div class="row" id="row">

            <h2><strong>SIGN UP</strong></h2>
                      

            
                <div class="col-lg-6">
                    <div class="form-group">
            <form method="post" action="signup_script.php">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="email" placeholder="Email"><br>
                <input type="text" class="form-control" name="password" placeholder="Password"><br>
                <input type="number" class="form-control" name="contact" placeholder="Contact"><br>
                <input type="text" class="form-control" name="city" placeholder="City"><br>
                <input type="text" class="form-control" name="address" placeholder="Address"><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                    </div>
                </div>
        </div>
        </div>
        <div class="row" id="down">
             <footer>
                <div class="container" id="footer">
                    <center id="space" >
                        <h3>"Copyright@LifeStyle Store.All Rights Reserved and Contact us:+91 900000000"</h3>
                    </center>
                </div>        
           
        
    </footer>
        
        </div>
    </body>
</html>
