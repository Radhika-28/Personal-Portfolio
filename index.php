<?php

$conn = mysqli_connect('localhost','root','','portfolio') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Projects</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      
      <a href="https://twitter.com/Radhika_Kumbar?t=hGhSh5IDzM0wpz6Fo3gzNA&s=09" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com/radhika_r_k/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/radhika-kumbar-5847611ba" class="fab fa-linkedin"></a>
      <a href="https://github.com/Radhika-28" class="fab fa-github"></a>
   </div>

</header>
<section class="home" id="home">

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Radhika Kumbar</h3>
    
      <p data-aos="fade-up">As a Computer Science student and IT developer always finding best out of me. 
         Wanted to contribute all my good and dream to become a Qualiity Software Engineer.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>About me</span> </h1>

   <div class="biography">

      <p data-aos="fade-up"></p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Radhika Kumbar </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> radhikakumbar28@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Belagavi, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 9089786756</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
        
      </div>

      <a href="Radhika Kumbar.pdf" class="btn" data-aos="fade-up">RESUME <i class="fa fa-download"></i></a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML,CSS,JavaScript</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Java</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>DSA</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>ML</span> <span>60%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education </span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2017 )</span>
               <h3>SSLC</h3>
               <p>school Name : CK High School Examba.
                  <br>
                  Percentage : 86.88%
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 )</span>
               <h3>PUC</h3>
               <p>College Name:CLE's PU College Chikodi.  
                  <br>
                  Percentage : 89.67%
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>(2023 )</span>
               <h3>BE</h3>
               <p>College Name : KLS Gogte Institute of Technology,Belagavi.
                  <br>
                  Percentage : 8.5 CGPA Till 5th sem
               </p>

            </div>

         </div>
         <div class="box-container">

            <h3 class="title" data-aos="fade-right">experience</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>Software Developer(intern)</h3>
               <p>Interned as software developer at stige and explored the JavaScript frameworks and NoSQL using MongoDB. <br>
                And build some mini projects and one major project based on the knowledge gained.
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>Data Analytics(intern)</h3>
               <p>
                  Interned at Reputus Business solution and worked on excel,   tableau for data visualization and data analysis.
               </p>
            </div>

           

            </div>

         </div>


      </div>

   </div>
   

</div>

</div>

</section>



<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-film"></i>
         <h3>Online Movie Ticket Booking System</h3>
         <p> It is website used to book the movie tickets. It is designed and developed by using these following <br>
            Frontend :   HTML,CSS,JavaScript <br>
            Backend Language :  PHP <br>
            Database : MySQL</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <i class=" fas fa-pencil-alt"></i>
         <h3>Learning Management System</h3>
         <p>It is Learning Management System designed and developed by using these following <br>
             Frontend :  HTML,CSS,JavaScript <br>
             Backend Language :  React & NodeJS <br>
             Database :  MongoDB</p>
         </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-cloud-sun"></i>
         <h3>Weather App</h3>
         <p>This is weather app which gives the weather forecast of particular city whatever we enter over there this's designed and developed by using these following.
         <br>
              
             
         Frontend : HTML,CSS,JavaScript <br>
               API:Open Weather Map API
         </p>
      </div>

   

   </div>

</section>


<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>9089786756</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>radhikakumbar28@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Belagavi, india - 590008</p>
      </div>

   </div>

</section>


<script src="js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>