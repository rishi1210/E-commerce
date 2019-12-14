<?php
require "common.php";
if(!isset($_SESSION['email']))
{
    header("index.php");
}
?>
<?php
if(isset($_GET['error']))
{
$message=$_GET['error'];
echo "Password updated";
}
?>
<!DOCUMENT html>
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #body{
                padding-top:100px;
                padding-left:300px;
            }
            #footer{
                padding:  10px 0px;
                       background-color: #101010; 
                  color:#9d9d9d; 
                  bottom: 0; 
                  width: 100%; 
                  font-size:20px;
            } 

            #down{
                padding-top:405px;
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
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart" ></span>Cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
                    </ul>
                </div>
            </div>
            
        </nav>
            <div class="row" id ="body">
                <div class="col-md-6">
                    <div class="form-group">
                    <form method="post" action="settings_script">
                        <h2><strong>Update Your Password</strong></h2><br>
                    <input type="text" class="form-control" name="oldpassword" placeholder="Old password"><br>
                    <input type="text" class="form-control" name="newpassword" placeholder="New password"><br>
                    <input type="text" class="form-control" name="retype" placeholder="Re-type password"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
             </form>
                    </div>
                </div>
            </div>
        </div>
            <?php require "footer.php";?>
 


        </div>
    </body>
</html>