<?php include 'header.php'?>

<br>
<br>
<br>
    <div class="w3-sidebar w3-bar-block w3-white sidebar" style="width:20%; margin-top:8px; z-index:auto;">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="jobs.php" class="w3-bar-item w3-button">Candidates Applied</a>
        <a href="contact.php" class="w3-bar-item w3-button active">Contact</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
    </div>
    
    <section class="contact" style="margin-top: 25px; margin-left:22%; width:77%; margin-bottom:30px; background-color: #d8baed; padding: 15px;">
        <div class="content">
            <h1 style="text-align: center;">Contact Us</h1>
            <p>Whenever you need us, we are here for you.....
                We would love to here from you.....</p>
        </div>
        <div class="container" style="width: 100%;
        display:flex;
        align-items:center;">
            <div class="contactInfo" style="width: 50%;">
                <div class="box" style="width: 100%;
                display:flex; 
                margin-right:50px;">
                    <div class="icon"><i class='fa-solid fa-address-card fa-3x  fa-fade' style='color:#e83e8c'></i></div>
                    <div class="text" style="flex-direction: column;
                    margin-left:3px;">
                        <h3 style="color: blue;"> Address</h3>
                        <p><b>Mahatma Gandhi Institute of Technology</b>, 
                        <br>Gandipet, Hyderabad, 500075</p>
                    </div>
                </div>
                <div class="box" style="width: 100%;
                display:flex;">
                    <div class="icon"><i class='fa-solid fa-square-envelope fa-3x  fa-fade' style='color:#6610f2'></i></div>
                    <div class="text"  style="flex-direction: column;
                    margin-left:3px;">
                        <h3 style="color: blue;"> Email</h3>
                        <p>gamarnath_ece190470@mgit.ac.in</p>
                    </div>
                </div>
                <div class="box" style="width: 100%;
                display:flex;">
                    <div class="icon"><i class='fa-solid fa-square-phone fa-3x  fa-fade' style='color:#d9230f'></i></div>
                    <div class="text" style="flex-direction: column;
                    margin-left:3px;">
                        <h3 style="color: blue;"> Phone</h3>
                        <p>+91 9912120506</p>
                    </div>
                </div>
            </div>
            <div style="width: 50%;">
                <form style="width: 100%;
                padding-right:0%;
                margin-right:0%;"> 
                    <h2>Send Message</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id=" " required="required">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  required="required">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Type your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Message" required="required"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    
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

</body>
</html>