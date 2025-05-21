<?php 
require 'config/koneksi.php';

$query = "SELECT * FROM items";

$result = mysqli_query($con, $query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Uprak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#index.php">inventorydb</a>
        <a class="nav-link" href="logout.php">Logout</a>   
      </div>
    </div>
  </div>
</nav>
<br>
 <div class="card">
                <div class="card-body">
    <h1>DASHBOARD ITEMS</h1>

    <a href="tambah.php" class="text-decoration-none btn btn-md btn-primary">Tambah Data</a>
  
 <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Condition</th>
            <th>Actions</th>
           
        </tr>
    </thead>
    <tbody>

    <?php 
   if (mysqli_num_rows($result) > 0){
  $no = 1;
    while ($show = mysqli_fetch_assoc($result)){
         echo "
         <tr>
           <td>$no</td>
           <td>$show[name]</td>
           <td>$show[description]</td>
           <td>$show[stock]</td>
             <td>$show[status]</td>
           <td>
           <a href='edit.php?id=$show[id]' class='btn btn-warning'>edit</a>
           <form action='hapus.php' method='POST' class='d-inline'>
             <input type='hidden' name='id' value='$show[id]' />
             <button type='submit' class='btn btn-danger'>Delete</button>
           </form>
           </td>
         </tr
         ";
         $no++;
    }
   }else{
    echo "<div class='text-danger'>Data Tidak Ada</div>";
   }

    ?>
    </tbody>
 </table>
                </div>
 </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>