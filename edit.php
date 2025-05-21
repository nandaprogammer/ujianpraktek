<?php
require 'config/koneksi.php';

$id = $_GET ['id'];

$query = "SELECT * FROM items WHERE id = $id";

$result = mysqli_query($con, $query);

$show = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
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
    <h1>Edit Data</h1>

    <form action="edit_proses.php" method="POST">
        <input type="hidden" name="id" value="<?= $show['id'] ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required value="<?= $show['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required value="<?= $show['description'] ?>">
   </div>
   <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" class="form-control" required value="<?= $show['stock'] ?>">
   </div>
   <div class="mb-3">
            <label for="status" class="form-label">Condition</label>
            <select name="status" class="form-select" required>
                <option value="">Select Condition</option>
                <option value="used" <?= $show['status'] === "used" ? "selected" : "" ?>>Used</option>
                <option value="not used" <?= $show['status'] === "not used" ? "selected" : "" ?>>Not Used</option>
            </select>
        </div>
        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>