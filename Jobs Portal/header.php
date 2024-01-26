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
        nav{
            position: fixed;
            height:75px;
            background-image:linear-gradient(to top right, blue, white);
            width:100%
        }
        nav .navbar{
            position: fixed;
        }
        nav li{
            display: inline;
        }
        nav li a{
            color: black;
            text-decoration: none;
            padding: 30px;
            font-weight: bolder;
            font-size: 18px;
        }
        
        .About-us {
            margin-left: 22%;
            width: 76%;
            text-align: center;
            background-color: #ccc;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        img {
        border-radius: 50%;
        }            
        p {
        font-size: 20px;
        } 


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

    <title>We the Recruiters</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" style="position: fixed;">
        <div>
            <a href="index.php" style="text-decoration: none;">
                <h1 style="padding-top: 10px; 
                padding-left: 10px;
                color: yellow;">We the Recruiters</h1>
            </a>
        </div>
        <div style="margin-left: 50%;">
            <li class="divider-vertical"></li>
            <li><a>Hello, USER!!!!</a></li>|
            <li><a href="login.php">Log Out</a></li>
        </div>
    </nav>

