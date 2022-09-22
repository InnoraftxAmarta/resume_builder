<?php
session_start();

  if($_SESSION['user']!="" && $_SESSION['pass'] !=""){

?>
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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">WELCOME TO RESUME BUILDER HOME PAGE</a>
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
<div class="fillcon">
<div class="container ">
<div class="justify-content-md-center">
  <h2>
    HELLO AND WELCOME TO RESUME BUILDER'S HOME PAGE 
  </h2>
  <p>
    &nbsp; We all know that making resume is easy but making a good and proper resume is 
    very difficult and there we came with an idea of making this app so that people 
    can just login and fill there details and we will make the pdf for them and save 
    time for them and this is absolutely free.
    <br><br>
    Thanks for Using this app.
  </p>

<form action="form.php">
  <button type="submit" class="btn btn-primary ">Start building resume</button>
</form>
<form action="../controller/log-out.php">
  <button type="submit" class="btn btn-danger">Log out</button>
</form>
<?php
}

else{
  header("Location:log-in-page.php");
}
?>

</div>
</div>
</div>
</body>
</html>