<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['Full_Name'];
    $email=$_POST['Email'];
    $number=$_POST['Phone_Number'];
    $password=$_POST['Password'];

    $sql = "INSERT INTO `register`(`Full Name`, `Email`, `Phone Number`, `Password`) VALUES ('$name','$email','$number','$password')";
    if(mysqli_query($conn,$sql)){
        header("location: login.php");
    }
    else{
        echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
    }
}

?>



<?php
    $server='localhost';
    $username='root';
    $paswd='';
    $database='jobs';

    $conn= mysqli_connect($server,$username,$paswd,$database);

    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    echo"";


    if(isset($_POST['jobs'])){
        $cname=$_POST['Company_Name'];
        $pos=$_POST['Position'];
        $jdesc=$_POST['Job_Description'];
        $skills=$_POST['Skills'];
        $CTC=$_POST['CTC'];

        $sql= "INSERT INTO `post_job`(`Company_Name`, `Position`, `Job_Description`, `Skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
        if(mysqli_query($conn,$sql)){
            header("location: index.php");
        }
        else{
            echo "ERROR: Failed to Post the Job $sql.".mysqli_error($conn);
        }
    }
    if(isset($_POST['apply'])){
        $name=$_POST['Name'];
        $applying=$_POST['Applying_for'];
        $qualification=$_POST['Qualification'];
        $year=$_POST['Year_Passout'];

        $sql= "INSERT INTO `apply_job`(`Name`, `applying_for`, `Qualification`, `Year_Passout`) VALUES ('$name','$applying','$qualification','$year')";
        if(mysqli_query($conn,$sql)){
            header("location: career.php");
        }
        else{
            echo "ERROR: Failed to Post the Job $sql.".mysqli_error($conn);
        }
    }
?>

