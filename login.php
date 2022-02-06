<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
</head>
<body>
<h3>
<?php 
    if(isset($_SESSION['msg'])):
    ?>
    <div>
      <?php 
      echo $_SESSION['msg'];
      ?>
     </div>
     <?php endif ?>
</h3>
<form method="post" action="auth.php">
    <div class="form-group">

        <label  class="form-label mt-4">Login :</label>
        <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="log">

        <label  class="form-label mt-4">Password</label>
        <input type="password" class="form-control"  placeholder="Password" name="pass">



    </div>
<br>
<br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>