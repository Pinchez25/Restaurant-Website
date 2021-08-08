
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
$host = "localhost";
$DBusername = "root";
$DBpassword = "";
$db = "restaurant";
$conn = mysqli_connect($host, $DBusername, $DBpassword,$db) or die("Connection failed: " . mysqli_connect_error());

$name = "";
$password = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = filter_var($data, FILTER_SANITIZE_STRING);
  return $data;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = test_input($_POST['username']);
    $password =test_input($_POST['password']) ;
  
}

$query = "SELECT * FROM waiter WHERE name = '".$name."' AND password = '".$password."'";
$result = mysqli_query($conn,$query);
 $rows = mysqli_num_rows($result);   
?>
    <?php if($rows>0): $row = mysqli_fetch_assoc($result); ?>

    <label class="uname" style="color:green; font-family:arial; font-size:14pt;">You are logged in as <b><?php echo $row['name'] ?></b></label><br><br>
    <!--    <label id="">Password:<?php echo $row['password'] ?></label><br>-->
    <?php else: header('Location: index.html'); ?>
    <?php endif ?>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Breakfast</h5>
                    <img src="images/breakfast.jpg" class="card-image" />
                    <p class="card-text">Click the button below to order.</p>
                    <a href="Food_list.php" class="btn btn-primary" id="bre">Order Breakfast</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lunch</h5>
                    <img src="images/lunch.jpg" class="card-image" />
                    <p class="card-text">To order lunch click the below button</p>
                    <a href="Food_list.php" class="btn btn-primary" id="lun">Order Lunch</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Beverages</h5>
                    <img src="images/beverages.jpg" class="card-image" />
                    <p class="card-text">Use the button below to order a beverage</p>
                    <a href="Food_list.php" class="btn btn-primary" id="brv">Order beverage</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dinner</h5>
                    <img src="images/dinner.jpg" class="card-image" />
                    <p class="card-text">Click the button to order supper.</p>
                    <a href="Food_list.php" class="btn btn-primary" id="din">Order Supper</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
