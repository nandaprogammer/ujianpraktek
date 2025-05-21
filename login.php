<?php 
session_start();

$error = $_SESSION['login-error'] ?? '';

?>

<!doctype html>
<html lang="en">
  <head>
<link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>


  <body>
  <br>
  <br>
 
            <div class="container">

           
                      
                   <h3>LOGIN</h3>
                    Welcome, please login

                <?php if ($error): ?>
                    <small class="text-danger"><?= $error ?></small>
                    <?php endif; ?>
                    <hr> <!-- Ini bikin garis horizontal -->
                  



            <form action="login_proses.php" method="POST" class="mt-3">
            <div class="mb-3">

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
            </div>



            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
           
                </div>

                <div class="d-grid gap-2">
                     <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
          


                    
       


 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>