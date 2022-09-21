<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">     
<title>Document</title>
</head>
<body> 
    <section class="login py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="../view/image/loginpagelogo.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 text-center py-5 rightdiv">
                    <h1 class="animate__animated animate__backInDown">REGISTER YOURSELF</h1>
                    <form action="../controller/register.php" method="post">

                        <div class="form-row py-4 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" class="inp px-3" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="form-row py-4">
                            <div class="offset-1 col-lg-10">
                                <input type="text" class="inp px-3" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row py-4">
                            <div class="offset-1 col-lg-10">
                                <input type="text" class="inp px-3" name="username" placeholder="UserName" required>
                            </div>
                        </div>
                        <div class="form-row py-4">
                            <div class="offset-1 col-lg-10">
                                <input type="password" class="inp px-3" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="offset-1 py-3 col-lg-10">
                                <button class="btn1" name="registerbutton">Register Now</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
