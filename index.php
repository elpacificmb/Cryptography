<?php
  require_once 'action.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Fontawesome Free Css -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-div">
        <form action="index.php" method="post">
          <h3 class="text-center">Encryption and Decryption</h3>
          <hr>

          <div class="mb-3">
            <label for="text">Text:</label>
            <textarea name="text" id="" cols="30" rows="5" class="form-control form-control-lg"><?php echo $text; ?></textarea>
          </div>

          <div class="mb-3">
          <?php 
          if (isset($_POST['encrypt'])): ?> 
            <label for="text">Encrypted Data:</label>
            <textarea name="text" id="" cols="30" rows="5" class="form-control form-control-lg" disabled><?php echo $encryption; ?></textarea>

          <?php endif; ?>

          <?php
          if (isset($_POST['decrypt'])): ?> 
            <label for="text">Decrypted Data:</label>
            <textarea name="text" id="" cols="30" rows="5" class="form-control form-control-lg" disabled><?php echo $decryption; ?></textarea>

          <?php endif; ?>
          </div>

          <div class="mb-3 text-center">
            <button type="submit" name="encrypt" class="btn btn-primary btn-lg">Encrypt</button>
            <button type="submit" name="reset" class="btn btn-secondary btn-lg">Reset</button>
            <button type="submit" name="decrypt" class="btn btn-success btn-lg">Decrypt</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap Js and Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>