<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <title>Document</title>
</head>
<body>
   
<?php 
session_start();
$flag=0;

  if($_SESSION['user']!="" && $_SESSION['pass'] !=""){

require('../../assignment5/fpdf184/fpdf.php');
require('../../assignment5/vendor/autoload.php');
$i=0;
    
        $img='';
        if(isset($_POST['submit'])){
            $name=$_POST['Name'];
            $date=$_POST['DOB'];
            $email=$_POST['Email'];
            $in=$_POST['Linkedin_Profile'];
            $scname=$_POST['schoolname'];
            $scstream=$_POST['Stream'];
            $scyear=$_POST['yop'];
            $scmarks=$_POST['school-marks'];
            $colname=$_POST['collegename'];
            $colstream=$_POST['col-Stream'];
            $colyear=$_POST['col-yop'];
            $colmarks=$_POST['col-marks'];
            $proname=$_POST['proname'];
            $prodes=$_POST['pro-des'];
            $pryear=$_POST['yoc'];
    
        if(isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];

            $extensions= array("jpeg","jpg","png","gif");

        
                move_uploaded_file($file_tmp,"../view/saved_image/".$file_name);
                $img="../view/saved_image/".$file_name;
                 }

                        if(isset($_POST["submit"])){
                            ob_start();
                                $pdf = new FPDF();
                                $pdf->AddPage();
                                $pdf->SetFont('Arial','B',32);
                                // $pdf->Multicell(10,10,'');
                                $pdf->Cell(0,0,'Resume',0,2,'C',);
                                $pdf->Image($img,160,30,30,30);
                                $pdf->Line(0,18,220,18);
                                $pdf->Line(0,19,220,19);

                                $pdf->SetFont('Arial','',16);

                                $pdf->Multicell(10,20,'');
                                $pdf->Cell(40,10,'Name:'.$name);
                                $pdf->Multicell(10,10,'');
                                $pdf->Cell(40,10,'Email Id:'.$email);
                                $pdf->Multicell(10,10,'');
                                $pdf->Cell(40,10,'Date of Birth: '.$date);
                                $pdf->Multicell(10,10,'');
                                $pdf->Cell(40,10,'Linkedin: '.$in);
                                $pdf->Multicell(10,10,'');
                                $pdf->Line(0,70,220,70);
                                $pdf->Line(0,71,220,71);
                                if($scname[0]!=''){
                                $pdf->Cell(40,20,'School details:');
                                $pdf->Multicell(10,20,'');
                                $pdf->Cell(45,10,'School Name',1); 
                                $pdf->Cell(45,10,'School Stream',1);
                                $pdf->Cell(45,10,'Passing year',1); 
                                $pdf->Cell(45,10,'Marks',1); 

                                $pdf->Multicell(40,10,'');

                                for($i=0 ; $i<count($scname) ;$i++){
                                        $pdf->Cell(45,10,$scname[$i],1); 
                                        $pdf->Cell(45,10,$scstream[$i],1); 
                                        $pdf->Cell(45,10,$scyear[$i],1); 
                                        $pdf->Cell(45,10,$scmarks[$i],1); 
                                        $pdf->Multicell(40,10,'');
                                }
                                }  
                                if($colname[0]!=''){
                                $pdf->Cell(45,10,'College details:');
                                $pdf->Multicell(10,10,'');
                                $pdf->Cell(45,10,'College Name',1); 
                                $pdf->Cell(45,10,'College Stream',1);
                                $pdf->Cell(45,10,'Passing year',1); 
                                $pdf->Cell(45,10,'Marks',1); 

                                $pdf->Multicell(40,10,'');
                            
                            

                                for($i=0 ; $i<count($colname) ;$i++){
                                        $pdf->Cell(45,10,$colname[$i],1); 
                                        $pdf->Cell(45,10,$colstream[$i],1); 
                                        $pdf->Cell(45,10,$colyear[$i],1); 
                                        $pdf->Cell(45,10,$colmarks[$i],1); 
                                        $pdf->Multicell(40,10,'');
                                }
                                }  
                                if($proname[0]!=''){
                                $pdf->Cell(50,10,'Project Details');
                                $pdf->Multicell(10,10,'');
                                $pdf->Cell(50,10,'Project Name',1); 
                                $pdf->Cell(50,10,'Description',1);
                                $pdf->Cell(50,10,'Completion year',1); 

                                $pdf->Multicell(40,10,'');

                                for($i=0 ; $i<count($proname) ;$i++){
                                        $pdf->Cell(50,10,$proname[$i],1); 
                                        $pdf->Cell(50,10,$prodes[$i],1); 
                                        $pdf->Cell(50,10,$pryear[$i],1); 
                                        $pdf->Multicell(40,10,'');
                                    
                                } 
                            }   
                            if (!file_exists('/var/www/html/phpassignment1/resume_builder/controller/save_pdf/'.$_SESSION['user'].$_SESSION['pass'])) {
                                mkdir('/var/www/html/phpassignment1/resume_builder/controller/save_pdf/'.$_SESSION['user'].$_SESSION['pass'], 0777, true);
                            }
                                $pdf->Output('F','save_pdf/'.$_SESSION['user'].$_SESSION['pass'].'/resume'.$flag.'.pdf');
                                $pdf->Output('I','resume'.$flag.'.pdf');
                                $flag++;
                            ob_end_flush();
                        }
                }
  } 
  else{
    header('Location:../view/log-in-page.php');
  }
?>


</body>
</html>
