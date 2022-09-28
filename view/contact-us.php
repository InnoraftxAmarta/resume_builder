<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="fillcon">  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">CONTACT US</a>
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
<div class="container">
<h2>Contact us</h2>
<p>Email: amartarocks3@gmail.com</p>
<form action="../controller/log-out.php">
  <button type="submit" class="btn btn-danger">Log out</button>
</form>
</div>
</div>
<?php
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://resume.com/Contactus");
?>
</body>
</html>