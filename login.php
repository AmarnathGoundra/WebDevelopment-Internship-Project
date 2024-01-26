<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
      body{
        background-image: url('Images/img01.jpg');
        background-size: cover;
      }
      form{
        background-color: white;
        background: rgba(255,255,255,0.8);
        margin-top: 6em;
        margin-left: 20em;
        margin-right: 20em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      form h1{
        text-align: center;
      }
    </style>

    <title>Job Givers | Sign In</title>
</head>
<body>

  <nav>
    <div>
        <a href="#" style="text-decoration: none;">
            <h1 style="padding-top: 10px; 
            padding-left: 10px;
            color: yellow;">We the Recruiters</h1>
        </a>
    </div>
  </nav>

  <form action="login.php" method="POST">
    <h5>Welcome!!!</h5>
    <h1>Sign In</h1>
    <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <input type="email" class="form-control" id="staticEmail" placeholder="email@example.com" name="email">
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <br>
    <br>
    <p style="text-align: center;"> New User? <br> Create Account <a href="register.php">Sign Up </a> </p>
  </form>

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

    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $stmt = $conn->prepare("select * from register where Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            if($data['Password'] === $password){
                header("location: index.php");
            }
            else{
              echo '<script type="text/javascript">';
              echo 'alert("Username doesnot exist")';
              echo  '</script>';
            }
        }
        else{
            echo '<script type="text/javascript">';
            echo 'alert("Username doesnot exist")';
            echo  '</script>';
        }
    }
  ?>

<footer style="color: white; margin-bottom:0%;">
    <hr>
    <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
</footer>

</body>
</html>