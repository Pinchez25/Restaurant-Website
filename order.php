<?php
$host = "localhost";
$user = "root";
$password = "";
$database  = "restaurant";

$conn = mysqli_connect($host, $user, $password,$database) or die("Connection failed: " . mysqli_connect_error());

function Order($item){
    global $conn;
    
    $query = "SELECT cost FROM breakfast WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["cost"];
    
    
    //$rows = mysqli_num_rows($result);
}
function Quantity($item){
    global $conn;
    $query = "SELECT quantity FROM breakfast WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["quantity"];
    
    
}
function orderBeverages($item){
    global $conn;
    
    $query = "SELECT cost FROM beverages WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["cost"];

}
function quantityBev($item){
    global $conn;
    $query = "SELECT quantity FROM beverages WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["quantity"];
}
function orderFood($item){
    global $conn;
    
    $query = "SELECT cost FROM lunch WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["cost"];

}
function quantityFood($item){
    global $conn;
    $query = "SELECT quantity FROM lunch WHERE name = '".$item."'";
    
    $result = mysqli_query($conn,$query);
    
    $rows = mysqli_num_rows($result);   
    if($rows>0){
        $row = mysqli_fetch_assoc($result);
    } 
    
    echo $row["quantity"];
}



?>

