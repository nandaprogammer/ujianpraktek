<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
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
                <div class="card-body ">
    <h3>Add item</h3>
<form action="tambah_proses.php" method="POST">
   <div class="mb-3">
     <label for="name" class="form-label">Name</label>
     <input type="text" name="name" class="form-control" required>
   </div>
   <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" required>
   </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" required>
   </div>

   <div class="mb-3">
    <label for="status" class="form-label">Condition</label>
    <select name="status" class="form-select" required>
          <option value="">Select Condition</option>
        <option value="Used">Used</option>
        <option value="Not Used">Not Used</option>
        </select>
   </div>
   <button type="submit" class="btn btn-md btn-primary">Save</button>
</form>
         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>