<?php 
require  'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD']== "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
   $description = $_POST['description'];
   $stock = $_POST['stock'];
   $status = $_POST['status'];
 
    
$query = "UPDATE items SET name='$name', description='$description', stock=$stock, status='$status' WHERE id = $id";


if (mysqli_query($con, $query)){
  echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}else{
echo mysqli_error($con);
echo "<meta http-equiv='refresh' content='5;url=update.php?id=$id'>";
}

}
mysqli_close($con);

?>
