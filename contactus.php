<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />     
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
  
        
    <style>
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

 
</style>
</head>
<body>
<?php

// Step 1: Choose an API endpoint
$apiUrl = "http://localhost:8000/api/contactApiCall.php";

// Step 2: Make HTTP Request
$response = file_get_contents($apiUrl);

// Step 3: Parse the Response (assuming JSON)
$data = json_decode($response, true);

// Step 4: Check if data is not null before binding
?>
      <header class="nav-bar">
        <div class="logo-container">
       <p><a href='home.php'><img src="images/download.png" alt="" ></a>Spicy Chicken Myanmar</p>
        </div>
        <div class="nav-bar-item">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="locateus.php">Locate Us</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a class="active" href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </header>
    <div class='custom-margin'>
        <div class="text-black p-4 d-flex justify-content-center">
            <h1 style='font-size: 4em; font-weight:bolder;'>CONTACT US</h1>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: center;padding-left: 6%;padding-right: 6%;">
    <div style="display: flex; flex-direction: column; width: 50%;">
        <div style="display: flex; flex-direction: row; margin-bottom:10px;">
            <div style='width: 20%;'>Head Office</div>
            <span style='width: 10%;'>:</span>
            <div style='width: 70%;'><?php echo $data[0]['address']; ?></div>
        </div>

        <div style="display: flex; flex-direction: row; margin-bottom: 10px;">
            <div style='width: 20%;'>Email</div>
            <span style='width: 10%;'>:</span>
            <div style='width: 70%;'><?php echo $data[0]['email']; ?></div>
        </div>
        
        <div style="display: flex; flex-direction: row; margin-bottom: 10px;">
            <div style='width: 20%;'>Phone</div>
            <span style='width: 10%;'>:</span>
            <div style='width: 70%;'><?php echo $data[0]['phone']; ?></div>
        </div>

        <div style="display: flex; flex-direction: row; border: 1px solid black;margin-top: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1878736016506!2d96.12895417323072!3d16.817033318989083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb4a76909a67%3A0xccac1422d12886ba!2sKFC%20Junction%20Square!5e0!3m2!1sen!2smm!4v1708195508193!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>       

    <?php if (!empty($message)): ?>
        <div style="margin-left: 20px;"><?php echo $message; ?></div>
    <?php else: ?>
        <div style="display: flex; flex-direction: column; width: 50%; height: 600px; padding: 20px;margin-left: 20px; background-color: #f0f0f0; margin-bottom: 30px;">
<?php

$message = '';

// Establish database connection
$dsn = 'mysql:host=localhost;dbname=spicy_chicken';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

$nameError = $emailError = $phoneError = $subjectError = $messageError = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

     // Validate Name
     if (empty($_POST["name"])) {
      $nameError = "Name is required";
  }

  // Validate Email
  if (empty($_POST["email"])) {
      $emailError = "Email is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
  }

  // Validate Phone
  if (empty($_POST["phone"])) {
      $phoneError = "Phone is required";
  } elseif (!preg_match("/^09\d{9,11}$/", $_POST["phone"])) {
      $phoneError = "Invalid phone number format (Must start with 09 and be 9 to 11 digits)";
  }

  // Validate Subject
  if (empty($_POST["subject"])) {
      $subjectError = "Subject is required";
  }

  // Validate Message
  if (empty($_POST["message"])) {
      $messageError = "Message is required";
  }

  // If all fields are filled, perform further actions like sending email or saving to database
  if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($subjectError) && empty($messageError)) {
     // Step 1: Retrieve form data from $_POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    // Step 2: Prepare SQL INSERT statement
    $sql = "INSERT INTO submissions (customer_name, email, phone, subject, message, created_at) VALUES (:name, :email, :phone, :subject, :message, NOW())";
    $stmt = $pdo->prepare($sql);

    // Step 3: Bind parameters to the prepared statement
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Show JavaScript alert
        echo '<script>alert("Successfully submitted");</script>';
        // Clear form fields
        $_POST = array();
    } else {
        $message = "Error sending message.";
    }
  }
}
?>

<form action='' method='post' autocomplete='off' enctype='multipart/form-data' style="display: flex; flex-direction: column; gap: 12px;">
    <input type='text' placeholder='Name' id='name' name='name' style="padding: 0.5rem; width: 100%; height: 40px; border: 1px solid #ccc; border-radius: 5px;" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" />
    <?php if (!empty($nameError)) echo "<span style='color: red; font-size: 13px;'>$nameError</span>"; ?>

    <input type='email' placeholder='Email' id='email' name='email' style="padding: 0.5rem; width: 100%; height: 40px; border: 1px solid #ccc; border-radius: 5px;" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" />
    <?php if (!empty($emailError)) echo "<span style='color: red; font-size: 13px;'>$emailError</span>"; ?>

    <input type='text' placeholder='Phone' id='phone' name='phone' style="padding: 0.5rem; width: 100%; height: 40px; border: 1px solid #ccc; border-radius: 5px;" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>" />
    <?php if (!empty($phoneError)) echo "<span style='color: red; font-size: 13px;'>$phoneError</span>"; ?>

    <input type='text' placeholder='Subject' id='subject' name='subject' style="padding: 0.5rem; width: 100%; height: 40px; border: 1px solid #ccc; border-radius: 5px;" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>" />
    <?php if (!empty($subjectError)) echo "<span style='color: red; font-size: 13px;'>$subjectError</span>"; ?>

    <textarea placeholder='Message' id='message' name='message' style="padding: 0.5rem; width: 100%; border: 1px solid #ccc; border-radius: 5px; height: 160px;"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
    <?php if (!empty($messageError)) echo "<span style='color: red; font-size: 13px;'>$messageError</span>"; ?>

    <button type='submit' style="border: 1px solid #ccc; border-radius: 10px; background-color: #ff0000; color: #fff; font-weight: bold; padding: 0.5rem; height: 40px; width: 120px; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='#ff0000'">
        Submit
    </button>
</form>



        </div>
        <?php endif; ?>
    </div>
 
  <!-- Footer -->
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
  <!-- Footer -->
</body>
</html>