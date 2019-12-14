<?php
require "common.php";
if (!isset($_SESSION['email'])) {
   header('location: index.php');
}
?>
<?php
if(isset($_GET['er']))
{
    echo "item removed from cart";
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .tab{
                padding-top:150px;
            }
            #foot{
                
                padding-top:300px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <div class="tab">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS price, items.id, items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Add to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        
                        
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="foot" class="container">
        <?php include"footer.php"; ?>
        </div>
    </body>
</html>