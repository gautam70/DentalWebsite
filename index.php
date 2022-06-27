<?php
if(isset($_POST['name'])){

    $con = mysqli_connect('localhost','root','','dental_website'); 

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Successfully connected to db";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
   
    $sql = "INSERT INTO `dental`(`name`, `email`, `number`, `date`, `dt`) VALUES ('$name', '$email','$number','$date', current_timestamp());";
    // echo $sql;
    
    if($con->query($sql) == TRUE){
        // echo "";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>

     <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section start -->
<div class="navbar">
    <div class="container">
        <a class="logo" href="#home">Tooth<span>-care</span></a>

        <img id="open-menu" class="mobile-menu" src="images/menu.svg" alt="Open Navigation">
        
        <nav>
            <img id="exit-menu" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation">
            
            <ul class="first-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#contact" class="appointment">Make Appointment</a>
        </nav>
    </div>
</div>        
<!-- header section end -->

<!-- home section start -->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sunt ab quasi atque obcaecati optio!</p>
                <a href="#contact" class="appointment">Make Appointment</a>
            </div>

        </div>
    </div>
</section>
<!-- home section end -->

<!-- about section start -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images/about.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque reprehenderit voluptatem quisquam. Fugit mollitia dolorum amet rem voluptatum recusandae dolorem voluptate, aspernatur corrupti commodi officiis quae, quisquam maiores ea unde.</p>
                <a href="#contact" class="appointment">Make Appointment</a>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- services section start -->
<section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">
        <div class="box">
            <img src="" alt="">
            <h3>alignment specialist</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>cavity inspection</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>root canal Specialist</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>live dental advisory</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
        <div class="box">
            <img src="" alt="">
            <h3>oral hygiene experts</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, ullam.</p>
        </div>
    </div>
</section>
<!-- service section end -->

<!-- process section start -->
<section class="process">
    <h1 class="heading">work process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="process.webp" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, numquam.</p>
        </div>
        <div class="box">
            <img src="process1.webp" alt="">
            <h3>pediatric dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, numquam.</p>
        </div>
        <div class="box">
            <img src="process2.jpg" alt="">
            <h3>dental implants</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, numquam.</p>
        </div>
    </div>
</section>
<!-- process section end -->

<!-- reviews section start -->
<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/person.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nobis minima natus iusto nihil eaque totam id iure odio explicabo!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Raju</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/person2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nobis minima natus iusto nihil eaque totam id iure odio explicabo!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Radhe</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/person3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nobis minima natus iusto nihil eaque totam id iure odio explicabo!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Ravi</h3>
            <span>satisfied client</span>
        </div>
    </div>
</section>
<!-- reviews section end -->

<!-- contact section start -->
<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="index.php" method="post" name="makeappointment" onsubmit="return validate()">
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box">
        <input type="submit" value="make appointment" name="submit" class="appointment">
    </form>
</section>
<!-- contact section end -->
<!-- footer section start -->
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+121-262-1719</p>
        </div>
        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>noida, india - 201301</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>09am to 10:00pm</p>
        </div>
        <div class="box">
            <i class="fas fa-envelop"></i>
            <h3>email address</h3>
            <p>abcd12@gmail.com</p>
            <p>jsdh13@gmail.com</p>
        </div>
    </div>
    <div class="credit"> &copy; copyright @ 2022 <span>Mr.Gautam Mishra</span> </div>
</section>
<!-- footer section end -->
 

    <!-- Java script -->
    <script>
        function validate() {
    let n = document.forms["makeappointment"]["name"].value;
    if (n == "") {
      alert("Please provide your Name!");
      return false;
    } 
    let E = document.forms["makeappointment"]["email"].value;
    if(E=="")
    {
        alert("Please provide your Email-Id!");
        return false;
    }
    let m = document.forms["makeappointment"]["number"].value;
    if(m=="")
    {
        alert("Please provide your Mobile No.!");
        return false;
    }
    let d = document.forms["makeappointment"]["date"].value;
    if(d=="")
    {
        alert("Please select the date!");
        return false;
    }
}
// Menu bar
const mobileBtn = document.getElementById('open-menu')
      nav = document.querySelector('nav')
      mobileBtnExit = document.getElementById('exit-menu');
      
      mobileBtn.addEventListener('click', () => {
          nav.classList.add('menu-btn');
        })   
        
        mobileBtnExit.addEventListener('click', () => {
            nav.classList.remove('menu-btn');
        })
    </script>
</body>
</html>