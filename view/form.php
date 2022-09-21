<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width", initial-scale="1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">WELCOME PLEASE FILL THE FORM</a>
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
    <form action="../controller/upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2">
                <label>Name</label>
                <input type="text" class="col-md-2 form-control d-inline " name="Name" placeholder="Name">
            </div>
            
            <div class="col-md-2">
                <label>Date of birth</label>
                <input type="date" class="col-md-2 form-control d-inline " name="DOB" placeholder="DD-MM-YYYY">
            </div>
            <div class="col-md-2">
                <label>Photo</label>
            <input type="file" class="col-md-2 form-control d-inline " name="image">
            </div>
            <div class="col-md-2">
                <label>Email</label>
            <input type="email" class="col-md-2 form-control d-inline  " name="Email" placeholder="Email Id">
            </div>
            <div class="col-md-2">
                <label>Linkedin Profile</label>
            <input type="text" class="col-md-2 form-control d-inline  " name="Linkedin_Profile" placeholder="Linkedin Profile">
            </div>
        </div>
        
        <div class="main-form mt-3 border-bottom">
            <h4>School details</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-school">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>School Name</label>
                        <input type="text" name="schoolname[]" class="form-control"  placeholder="School name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Stream</label>
                        <input type="text" name="Stream[]" class="form-control"  placeholder="Stream">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Passing Year</label>
                        <input type="text" name="yop[]" class="form-control"  placeholder="Passing Year">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Marks</label>
                        <input type="text" name="school-marks[]" class="form-control"  placeholder="Marks">
                    </div>
                </div>
                
            </div>
        </div>
        <div class="paste-new-forms"></div>
        <div class="main-form-college mt-3 border-bottom">
            <h4>College details</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-college">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>College Name</label>
                        <input type="text" name="collegename[]" class="form-control" placeholder="School name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Stream</label>
                        <input type="text" name="col-Stream[]" class="form-control" placeholder="Stream">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Passing Year</label>
                        <input type="text" name="col-yop[]" class="form-control" placeholder="Passing Year">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Marks</label>
                        <input type="text" name="col-marks[]" class="form-control" placeholder="Marks">
                    </div>
                </div>
            </div>
        </div>
        <div class="paste-new-forms-college"></div>

        <div class="main-form-project mt-3 border-bottom">
            <h4>Project completed</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-project">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>Project Name</label>
                        <input type="text" name="proname[]" class="form-control" placeholder="Project Name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Description</label>
                        <input type="text" name="pro-des[]" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Completion Year</label>
                        <input type="text" name="yoc[]" class="form-control" placeholder="Completion Year">
                    </div>
                </div>
              
                
            </div>
        </div>
        <div class="paste-new-forms-project"></div>

        <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(document).on('click','.remove-btn-school',function(){
                $(this).closest('.main-form').remove();
            }
            );
            $(document).on('click','.add-more-form-school', function(){
                $('.paste-new-forms').append('<div class="row main-form">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>School Name</label>\
                        <input type="text" name="schoolname[]" class="form-control" required placeholder="School name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Stream</label>\
                        <input type="text" name="Stream[]" class="form-control" required placeholder="Stream">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Passing Year</label>\
                        <input type="text" name="yop[]" class="form-control" required placeholder="Passing Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Marks</label>\
                        <input type="text" name="school-marks[]" class="form-control" required placeholder="Marks">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-school btn btn-danger">Remove</button>\
                    </div>\
                </div>\
            </div>');
            });
       
 
            $(document).on('click','.remove-btn-college',function(){
                $(this).closest('.main-form-college').remove();
            }
            );
            $(document).on('click','.add-more-form-college', function(){
                $('.paste-new-forms-college').append('<div class="row main-form-college">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>College Name</label>\
                        <input type="text" name="collegename[]" class="form-control" required placeholder="College name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Stream</label>\
                        <input type="text" name="col-Stream[]" class="form-control" required placeholder="Stream">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Passing Year</label>\
                        <input type="text" name="col-yop[]" class="form-control" required placeholder="Passing Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Marks</label>\
                        <input type="text" name="col-marks[]" class="form-control" required placeholder="Marks">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-college btn btn-danger">Remove</button>\
                    </div>\
                </div>')});

            $(document).on('click','.remove-btn-project',function(){
                $(this).closest('.main-form-project').remove();
            }
            );
            $(document).on('click','.add-more-form-project', function(){
                $('.paste-new-forms-project').append('<div class="row main-form-project">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>Project Name</label>\
                        <input type="text" name="proname[]" class="form-control" required placeholder="Project Name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Description</label>\
                        <input type="text" name="pro-des[]" class="form-control" required placeholder="Description">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Completion Year</label>\
                        <input type="text" name="yoc[]" class="form-control" required placeholder="Completion Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-project btn btn-danger">Remove</button>\
                    </div>\
                </div>\
            </div>')});
        });
    </script>
    <form action="../controller/log-out.php">
        <br>
  <button type="submit" class="btn btn-primary">Log out</button>
</form>
</body>
</html>