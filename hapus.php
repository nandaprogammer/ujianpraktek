<?php 
require 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD']== "POST"){
    $id = $_POST['id'];

    $query = "DELETE FROM items WHERE id = $id";

    if(mysqli_query($con,$query)){
        echo "<meta http-equiv= 'refresh' content='1;url=index.php'>";
    }else{
        echo mysqli_error($con);
        echo "<meta http-equiv= 'refresh' content='5;url=index.php'>";
    }
}
mysqli_close($con);
?>