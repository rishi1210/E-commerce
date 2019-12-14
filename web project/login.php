<?php
require "common.php";
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
             #head{
                margin-top:100px;
                padding-top:0px;
                margin-bottom:- 5px;
              
            }
             #bid{
                padding-left:450px;
                padding-bottom: 5px;
               
            }
             #panelfoot{
                margin-bottom:-1px;
            }
            h2{
                padding-right:65px;
            }
            #p1{
                padding-bottom:15px;
                padding-right: 20px;
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
                padding-top:185px;
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
            <div class="row">
                <div class="col-sd-6">
                    <div id="head">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>
                                <h2><p><b>LOGIN</b></p></h2>
                        
                            </center>
                        </div>
                        <div class="panel-body" id="head">
                            <center id="logo">
                            <p id="p1"><strong>LOGIN TO MAKE PURCHASE</strong></p>
                            </center>
                            <div class="row" id="bid">
                                <div class="col-xs-4">
                                    
                            <div class="form-group">
                              
                            <form  method="post" action="login_script.php">
                                <label for="email">Email</label>
                               
                                <input type="text" class="form-control" name="email" id="box">
                               
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password"><br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                               
                    </div>
                                    
                            </div>
                            </div>
                            
            </div>
                        <div class="panel panel-footer"id="panelfoot" >
                            <center>
                            <h4>Don't have an account?Register"</h4>
                            </center>
                        </div>
                    </div>
            
        </div>
            </div>
            </div>
             <?php
             require "footer.php";
             ?>
        </div>
    </body>
</html>

