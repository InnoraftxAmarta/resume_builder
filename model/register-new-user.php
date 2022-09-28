<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
        class resume {
            private $servername = "localhost";
            private $username = "root";
            private $password = "Amarta@070";
            private $database = "resume";
            public $con;
        

        public function connect() {
            $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
                if (mysqli_connect_error()) {
                    trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
                }            
            }
            public function saveData($fname,$lname,$uname,$pass) {
                $query = "insert into RB (First_name,Last_name,User_name,password) values ($fname,$lname,$uname,$pass);";
                $this->con->query($query);
            }
            public function checkData($uname){
                $query1 = "select password from RB where User_name = '$uname'";
                $paass = $this->con->query($query1);
                $data = array();

                if ($paass->num_rows > 0) {
                    while ($row = $paass->fetch_assoc()) {
                           $data[] = $row;
                    }
                    return $data;
                    }
                   
            }
            public function regData($fname,$lname,$uname,$pass){
                $query2 = "select password from RB where User_name = '$uname'";
                $result1 = $this->con->query($query2);
                if($result1->num_rows != 0){
                    return "Already exist";
                }
                else {
                    $query3 = "insert into RB (First_name,Last_name,User_name,password) values ('$fname','$lname','$uname','$pass')";
                    $result3 = $this->con->query($query3);
                    return "Registered successfully";
                }
            }
            
        }
    ?>
</body>
</html>