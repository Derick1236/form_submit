
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='conusstyle.css' />
    <link rel="shortcut icon" href="img\logo\Garcia Tavern-logos.jpeg" />
   

    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>homepage</title>
</head>
<body>


    <!--  animated nav bar -->
    <div class="navBar" id="nv">
        <nav>
            <i class="bi bi-justify" onclick="alert('heelo')" id="hamMenu"></i>
            <ul>
                <!-- main nav section -->
                <li><a href='homepage.php'>HOME </a></li>
                <li><a href='gallery.php'>GALLERY </a></li>
                <li><a href='aboutus.php'>ABOUT US  </a></li>
                <li><a href='contactus.php'>CONTACT US </a></li>
                <!-- icons social and phone -->
                <li class="socialIcon"><a href="call:111-111-111"><i class="bi bi-telephone-forward"></i></a></li>
                <li class="socialIcon"><a href="instgram.com/example"><i class="bi bi-instagram"></i></a></li>
                <li class="socialIcon"><a href="mailto:example@example.com"><i class="bi bi-envelope-fill"></i></a></li>
            </ul>
        </nav>
    </div>  

    <div class="formcarry-container">
      <form action="delivermsg.php" method="POST" class="formcarry-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="fullName" required />

        <label for="email">Your Email Address</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <button type="submit">Send</button>
      </form>
    </div>
  <footer class="background">
        <p class="text-footer">
            Copyright ©-All rights are reserved
        </p>
 
 
    </footer>

</body>
</html>