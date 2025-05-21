<?php 
require 'config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $stock = htmlspecialchars($_POST["stock"]);
    $status = htmlspecialchars($_POST["status"]);
}

$query = "INSERT INTO items(name, description, stock, status) VALUES ('$name','$description','$stock','$status')";
$result = mysqli_query($con, $query);

if($result){
echo "<meta http-equiv= 'refresh' content='1;url=index.php'>";
}else{
    echo mysqli_error($con);
}
mysqli_close($con);



?>