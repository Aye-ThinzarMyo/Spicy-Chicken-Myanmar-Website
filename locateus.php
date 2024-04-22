<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Links -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Frontend</title>
    <style>
       @import url("https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style-type: none;
  font-family: "Arimo", sans-serif;
}

.nav-bar {
  width: 100%;
  padding: 20px 90px 20px 90px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  z-index: 10;
  top: 0;
  background-color:black;
  height: 80px;
 
}

.food-bar ul {
  list-style-type: none; padding: 0; margin: 0; display: flex; justify-content: center;
}
.food-bar ul li {
  margin: 5px;
}
.food-bar ul li a{
  display: block;padding: 10px 20px;border-radius: 20px;background-color: red;color: white;text-decoration: none;
}

.food-bar ul li a:hover {
  background-color: black;
  color: white;
}

.logo-container img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-top:10px;
  margin-left:-70px;
}
.logo-container p{
  color:red;
  font-family: "Pacifico", cursive;
  font-weight: 400;
  font-style: normal;
  font-size: 25px;
}
.logo-container2 p{
  color:red;
  font-family: "Pacifico", cursive;
  font-weight: 400;
  font-style: normal;
  font-size: 25px;
}
.logo-container2 img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-top:10px;
  margin-left:-10px;
  justify-content: center;
}

.nav-bar-item ul li a::after {
  content: "";
  width: 0;
  height: 2px;
  background-color: red;
  position: absolute;
  left: 0;
  bottom: -4px;
  transition: 0.3s;
}

.nav-bar-item ul li a:hover::after,
.nav-bar-item ul li .active::after {
  width: 50%;
}

.nav-bar-item ul li a:hover,
.nav-bar-item ul li .active {
  color: red;
}

.nav-bar-item ul li a {
  text-decoration: none;
  color: white;
  padding-right: 50px;  
  position: relative;
  transition: 0.3s;
  font-size: 18px;
}

.nav-bar-item ul {
  display: flex;
  margin-bottom: 0;
}

.menu .menu-header h1 {
  font-size: 50px;
  font-weight: 700;
  color: red;
  text-align: center;
  margin-bottom: 30px;
}

.menu {
  margin-top: 1000px;
}

.menu .menu-header h1 span {
  color: rgb(0, 0, 0);
}

.card-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.card {
  width: 18rem;
  margin: 20px;
  transition: 0.5s;
}
.card:hover {
  transform: scale(1.03);
  box-shadow: 1px 1px 10px rgba(255, 0, 0, 0.426);
}

.card-body {
  text-align: center;
}
.card-wrapper .card-text {
  font-size: 16px;
  font-weight: bold;
}

#milo {
  height: 70vh;
  background-color: black;
  background-image: url(images/Poster/milo.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-color: black;
}
.text {
  color: rgb(255, 255, 255);
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.667);
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.text .text-header {
  font-size: 60px;
  margin-bottom: 30px;
}
.text .body-text {
  font-size: 16px;
  width: 75%;
}

#promotion {
  margin-top: 30px;
}
#promotion .promo-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
#promotion .promo-wrapper .card-text {
  font-size: 18px;
  font-weight: bold;
}

#promotion .promo-wrapper card {
  border-radius: 30px;
}
footer{
  background-color: black;
}

.facebook-icon i {
  color: white;
  font-size: 24px;
  transition: color 0.3s, transform 0.3s;
}

.facebook-icon:hover i {
  color: red;
  transform: scale(1.1);
}

.link-column ul li a:hover {
    color: red;
    transform: scale(1.1);
}

.link-column ul li a {
    color: white;
    transition: color 0.3s, transform 0.3s;
}

.link-column ul li a:hover {
    color: red;
    transform: scale(1.1);
}
.social-icons {
  display: flex;
  gap: 20px; /* Adjust the value to control the gap between icons */
}

.social-icons a {
  color: white;
  font-size: 24px;
  transition: color 0.3s, transform 0.3s;
}

.social-icons a:hover {
  color: red;
  transform: scale(1.1);
}

.menu-bar {
  background-color: red;
  color:white;
}

.custom-margin {
  margin-top: 150px;
}

.rounded-logo {
      border-radius: 50%;
      width: 80px; 
      height: 80px; 
      object-fit: cover;
    }
.coo{
  width:90px;
}
 
    </style>
</head>
<body>
<header class="nav-bar">
        <div class="logo-container">
       <p><a href='home.php'><img src="images/download.png" alt="" ></a>Spicy Chicken Myanmar</p>
        </div>
        <div class="nav-bar-item">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a  class="active" href="locateus.php">Locate Us</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </header>
    <div class='custom-margin'>
        <div class="text-black p-4 d-flex justify-content-center">
            <h1 style='font-size: 4em; font-weight:bolder;'>LOCATE US</h1>
        </div>
    
        <div class="container mt-4" style="max-width: 1200px;">
    <div class="row">
        <!-- d ka sa copy -->
        <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Junction Square</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>
            <!-- done -->

            <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Junction City</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Terminal M</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">City Mall</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Hledan</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                    <div class="card-body text-start pt-5">
                        <h4 class="card-title font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Star City</h4>
                    </div>
                </div>
                <p class="card-text">Phone Number: 09459136504</p>
                <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
            </div>
        </div>
            <div class="col-md-4 mb-4">
                <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display:flex;flex-direction:row;">
                        <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                        <div class="card-body text-start pt-5">
                            <h4 class="card-title font-weight-bold">Capital</h4>
                        </div>
                    </div>
                    <p class="card-text">Phone Number: 09459136504</p>
                    <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display:flex;flex-direction:row;">
                        <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                        <div class="card-body text-start pt-5">
                            <h4 class="card-title font-weight-bold">North Dagon</h4>
                        </div>
                    </div>
                    <p class="card-text">Phone Number: 09459136504</p>
                    <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card justify-content-start p-2" style="width: 18rem;">
                <div style="display:flex;flex-direction:row;">
                        <img src="images/download.png" class="rounded-circle rounded-logo mx-auto mt-3" alt="Logo Image">
                        <div class="card-body text-start pt-5">
                            <h4 class="card-title font-weight-bold">Time city</h4>
                        </div>
                    </div>
                    <p class="card-text">Phone Number: 09459136504</p>
                    <p class="card-text">Opening Hours: 9:30 AM - 8:00 PM</p>
                </div>
            </div>


        </div>
    </div>
</div>


        
      </div>
    </div>

    <!-- Add more cards as needed, following the same structure -->
    
  </div>
</div>
        
<footer class="bg-black text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- Logo -->
        <div class="logo-container2">
          <p><a href='home.php'><img src="images/download.png" alt="" ></a>Spicy Chicken Myanmar</p>
        </div>
        <div class="social-icons">
          <!-- Social icons -->
          <a href="https://www.facebook.com" class="facebook-icon" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com" class="facebook-icon" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.twitter.com" class="facebook-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <div class="col-md-4">
        <!-- Social media paragraph -->
        <p>We're always making noise on Instagram. For the latest and greatest news and updates, follow us <a href='home.php' style="color:red;">@SpicyChicken</a> on Instagram, Twitter, and Facebook.</p>
      </div>

      <div class="col-md-4">
  <!-- Links -->
  <div class="link-column bg-black" style="text-align: center;">
    <ul class="list-unstyled" style="padding-left: 0;">
      <li style="display: block; margin-bottom: 10px;"><a href="home.php">Home</a></li>
      <li style="display: block; margin-bottom: 10px;"><a href="menu.php">Menu</a></li>
      <li style="display: block; margin-bottom: 10px;"><a href="locateus.php">Locate Us</a></li>
      <li style="display: block; margin-bottom: 10px;"><a href="aboutus.php">About Us</a></li>
      <li style="display: block;"><a href="contactus.php">Contact Us</a></li>
    </ul>
  </div>
</div>


    </div>

    <hr>

    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="text-center">
          <p>&copy; <?php echo date("Y"); ?> MyWebsite. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- End of .container --></body>
</html>