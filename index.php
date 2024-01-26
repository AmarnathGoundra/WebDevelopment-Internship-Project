<?php include 'header.php'?>

    <br>
    <br>
    <br>
    <div class="w3-sidebar w3-bar-block w3-white sidebar" style="width:20%; margin-top:8px; z-index:auto;">
        <a href="index.php" class="w3-bar-item w3-button active">Home</a>
        <a href="jobs.php" class="w3-bar-item w3-button">Candidates Applied</a>
        <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
    </div>

    <div style="margin-left:23% ; margin-top:1%;">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Post a Job
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="config.php" method="POST">
                    <div class="mb-3">
                        <label for="Company Name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="Company_Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="exampleInputPosition" name="Position">
                    </div>
                    <div class="mb-3">
                        <label for="JobDesc" class="form-label">Job Description</label>
                        <input type="text" class="form-control" id="JobDesc" name="Job_Description">
                    </div>
                    <div class="mb-3">
                        <label for="Skills" class="form-label">Skills Required</label>
                        <input type="text" class="form-control" id="CTC" name="Skills">
                    </div>
                    <div class="mb-3">
                        <label for="CTC" class="form-label">CTC</label>
                        <input type="text" class="form-control" id="CTC" name="CTC">
                    </div>
                    <button type="submit" class="btn btn-primary" name="jobs">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <h1 style="text-align: center; margin-left: 17%; color: rgb(71, 5, 66);">Recruitments</h1>

    <table class="table table-success table-striped-columns table-hover" style="margin-left:23% ; width:77%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
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

            $sql = "Select Company_Name, Position, CTC from post_job";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows > 0){
                while($row =$result->fetch_assoc()){
                    echo" 
                        <tbody>
                            <tr>
                                <td>".++$i."</td>
                                <td>".$row['Company_Name']."</td>
                                <td>".$row['Position']."</td>
                                <td>".$row['CTC']."</td>
                            </tr>;
                        </tbody>";
                }
            }
            else{
                echo"";
            }
        ?>
    </table>

    <footer>
        <div>
            <a href="index.php" style="text-decoration: none;">
                <h1 style="color: yellow; text-align:left;">We the Recruiters</h1>
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
        <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>