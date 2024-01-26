<?php include 'header.php'?>

<br>
<br>
<br>
    <div class="w3-sidebar w3-bar-block w3-white sidebar" style="width:20%; margin-top:8px; z-index: auto;">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="jobs.php" class="w3-bar-item w3-button active">Candidates Applied</a>
        <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
    </div>

    <h1 style="text-align: center; margin-left: 17%; color: rgb(71, 5, 66); margin-top:10px;">Applications</h1>

    <table class="table table-success table-striped" style="margin-left:23% ; width:77%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Qualification</th>
                <th scope="col">Year Passout</th>
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

            $sql = "Select Name, Applying_for, Qualification, Year_Passout from apply_job";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows > 0){
                while($row =$result->fetch_assoc()){
                    echo" 
                        <tbody>
                            <tr>
                                <td>".++$i."</td>
                                <td>".$row['Name']."</td>
                                <td>".$row['Applying_for']."</td>
                                <td>".$row['Qualification']."</td>
                                <td>".$row['Year_Passout']."</td>
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