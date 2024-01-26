<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        footer{
            position:sticky;
            text-align: center;
            background-color: #99A3A4;
            padding: 50px;
        }
        footer .logo{
            text-align: left;
            padding-right: 100%;
        }
        footer .contact{
            text-align:center ;
        }
        footer .contact h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer p{
            text-align: left;
        }
        footer .social{
            text-align: center;
        }
        footer .social h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer .social a{
            text-decoration: none;
            font-size: 30px;
            color: orange;
            margin: 10px;
        }
        footer .social a:hover{
            color: yellowgreen;
        }
        footer .contact{
            text-align: center;
        }
        footer .contact h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer .contact a{
            text-decoration: none;
            font-size: 30px;
            color: orange;
            margin: 10px;
        }
        footer .contact a:hover{
            color: yellowgreen;
        }
    </style>

    <title>Jobs Portal</title>
</head>
<body>

    <div class="careers">
        <div class="careerss">
            <h1>Jobs Portal</h1>
            <p>Choose a job you love, <br>and you will never have to work a day in your life.</p>
        </div>
    </div>
    <div class="row">
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
            $sql = "Select Company_Name, Position, Job_Description, Skills, CTC from post_job";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                    while($row =$result->fetch_assoc()){
                        echo'
                            <div class="col-md-4">
                                <div class="jobs">
                                    <h3 style="text-align: center;">'.$row['Position'].'</h3>
                                    <h4 style="text-align: center;">'.$row['Company_Name'].'</h4>
                                    <p style="color: black; text-align: justify;">'.$row['Job_Description'].'</p>
                                    <p style="color: black; text-align: justify;"><b>Skills Required:</b>'.$row['Skills'].'</p>
                                    <p style="color: black; text-align: justify;"><b>CTC:</b>'.$row['CTC'].'</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center;">
                                        Apply Now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Apply for Job</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="config.php" method="POST">
                                                        <div class="mb-3">
                                                            <label for="Name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="Name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Applying_for" class="form-label">Applying for</label>
                                                            <input type="text" class="form-control" id="exampleInputPosition" name="Applying_for">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Qualification" class="form-label">Qualification</label>
                                                            <input type="text" class="form-control" id="JobDesc" name="Qualification">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Year_Passout" class="form-label">Year Passout</label>
                                                            <input type="text" class="form-control" id="CTC" name="Year_Passout">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="apply">Apply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
            }
        ?>
    </div>   
    
    <footer>
        <div>
            <a href="career.php" style="text-decoration: none;">
                <h1 class="careers careerss" style="text-align:left;
                font-size: 55px;
                font-weight: bolder;
                color: rgb(20, 8, 8);
                text-shadow: 1px 1px gray;
                ">Jobs Portal</h1>
            </a>
        </div>
        <div class="social">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com"  target="_blank"><i class="fa-brands fa-facebook"></i></a>|
            <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>|
            <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>|
            <a href="https://twitter.com"  target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="tel: +919912120506"><i class="fa-brands fa-whatsapp"></i></a>|
            <a href="mailto: gamarnath_ece190470@mgit.ac.in"><i class='fa-solid fa-envelope'></i></a>
        </div>
        <hr>
        <p>Copyright &copy;2022 "We the Recruiters | Jobs Portal". All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>