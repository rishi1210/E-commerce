<!DOCUMENT html>\
<?php
require "common.php";
if (isset($_SESSION['email']))
{
    header('location:products.php');
}
?>
<html>
    <head>
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
              #banner{
                  padding-top: 210px;  
                  padding-bottom: 100px; 
                  text-align: center; 
                  font-weight:bold;
                  color: #f8f8f8; 
                  background: url(img/intro-bg_1.jpg) no-repeat center center; 
                  background-size: cover; 
            }
            a {
                font-size: 20px;
            }
            
            #content{
                position: relative; 
                padding-top: 8%; 
                padding-bottom: 8%; 
                margin-top: 11%; 
                margin-bottom: 11%; 
                background-color: rgba(0, 0, 0, 0.7); 
                max-width: 670px;
                overflow:hidden;
                font-size:25px;
            }
                        .identify1{
                padding-top:5px;
                margin-top:10px;
                width:80%;
               margin-right:190px;
               
 
            }
            .identify2{
                margin-right:30%;
                width:80%;
                padding-top:5px;
                margin-top:10px;
            
            }
            .identify3{
                margin-right:30%;
                width:80%;
                padding-top:5px;
                margin-top:10px;
            }
            #entire{
         
                width:100%;
                margin-left:5%;
            }
            #footer{
                padding:  10px 0px;
                       background-color: #101010; 
                  color:#9d9d9d; 
                  bottom: 0; 
                  width: 100%; 
                  font-size:20px;
            } 

            
        </style>
        
    </head>
    <body>
        
        <?php
        require "header.php";
        ?>
         <div id="banner">
           <div class="container">
               <center>
                <div id="content">
                    <h1><strong>"We Sell LifeStyle"</strong></h1>
                    <p>flat 40% off on premium brands</p>
                    <a href="login.php" class="btn btn-danger btn-lg active">ShopNow</a>
                </div>
               </center>
           </div>
                </div>
        <div class="container-fluid">
            <div class="row" id="entire">
                <div class="col-md-4">
                    <div class="thumbnail identify1">
                        <a href="#" > <img src="img/camera.jpg" class="image-responsive"></a>
                    <div class="caption">
                        <center>
                            <h3><strong>Cameras</strong></h3>
                            <p><strong>Choose among the best available in the world</strong></p>
                        </center>
                    </div>
                </div>
                </div>
           
            
                    <div class="col-md-4">
                    <div class="thumbnail identify2">
                        <a href="#"><img src="img/watch - copy.jpg"></a>
                        <div class="caption">
                            <center>
                                <h3><strong>Watches</strong></h3>
                                <p><strong>Original watches from the best brands</strong></p>
                            </center>
                        </div>
                    </div>
            </div>
                <div class="col-md-4">
                    <div class="thumbnail identify3">
                        <a href="#"><img src="img/shirt.jpg"></a>
                        <div class="caption">
                            <center>
                                <h3><strong>Shirts</strong></h3>
                                <p><strong>Our exquisite collection of shirts</strong></p>
                            </center>
                        </div>
                    </div>
                </div>
        </div>
        
        </div>
        
        
        <?php
        require "footer.php"
        ?>
          
    </body>
</html>    
        
    </body>
</html>


