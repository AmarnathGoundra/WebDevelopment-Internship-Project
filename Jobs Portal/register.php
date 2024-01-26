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
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: 20em;
        margin-right: 20em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      form h2{
        text-align: center;
      }
    </style>

    <title>Job Givers | Sign Up</title>
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

  <form onsubmit="return validation()" action="config.php" method="POST">
    <h5>Welcome!!!</h5>
    <h2>Create My Account</h2>
    <div class="mb-3 row">
      <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
      <input type="text" class="form-control" id="username" name="Full_Name">
      <span id="errorname" style="color: red;"></span>
    </div>
    <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="email@example.com" name="Email">
      <span id="erroremail" style="color: red;"></span>
      <div id="emailHelp" class="form-text">We'll not share your email with anyone else.</div>
    </div>
    <div class="mb-3 row">
        <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <input type="number" class="form-control" id="number" name="Phone_Number">
        <span id="errornumber" style="color: red;"></span>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="password" name="Password" required>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword2" class="col-form-label">Confirm Password</label>
      <input type="password" class="form-control" id="c-password">
      <span id="message" style="color: red;"></span>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <br>
    <br>
    Already Registered? <a href="login.php">Login</a>
  </form>

  <script>
        function validation(){
            var username =document.getElementById('username').value;
            var email= document.getElementById('email').value;
            var number = document.getElementById('number').value;

            var usercheck = /^[A-Za-z\s]{3,30}$/;
            var emailcheck = /^[A-Za-z_0-9.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,9}$/;
            var checknumber = /^[9876][0-9]{9}$/;

            if(usercheck.test(username)){
                document.getElementById('errorname').innerHTML  = " ";
            }
            else{
                document.getElementById('errorname').innerHTML  = "** Invalid Name **";
                return false;
            }
            if(emailcheck.test(email)){
                document.getElementById('erroremail').innerHTML  = " ";
            }
            else{
                document.getElementById('erroremail').innerHTML  = "** Invalid Email **";
                return false;
            }
            if(checknumber.test(number)){
                document.getElementById('errornumber').innerHTML  = " ";
            }
            else{
                document.getElementById('errornumber').innerHTML  = "** Invalid Number **";
                return false;
            }

            var password = document.getElementById("password").value;
            var cPassword = document.getElementById("c-password").value;
            var message = document.getElementById("message");
            if (password == cPassword) {
              document.getElementById('message').innerHTML  = " ";
            } else {
              document.getElementById('message').innerHTML  = "** Password Not Matched **";
              return false;
            }
        }
    </script>

    <footer style="color: white;">
      <hr>
      <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
    </footer>


</body>
</html>