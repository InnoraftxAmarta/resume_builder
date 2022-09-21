
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">PROFILE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" d-flex" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact-us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about-us.php">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
session_start();

$path    = '../controller/save_pdf/'.$_SESSION['user'].$_SESSION['pass'];
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
    echo filemtime("./testfolder/".$file);
    echo "Content last changed: ".date("F d Y H:i:s.", fileatime($path.'/'.$file));
    echo "<a href=$path/$file>$file</a>";
    echo "<br>";
}

?>
<form action="../controller/log-out.php">
  <button type="submit" class="btn btn-danger">Log out</button>
</form>
</body>
</html>