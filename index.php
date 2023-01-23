<?php

$conn = new PDO("mysql:host=sql103.epizy.com; dbname=epiz_31498616_contact_form", 'epiz_31498616','VuXFvAWIyz') or die('connection failed');

if(isset($_POST['send'])){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $number = $_POST["number"];
   $msg = $_POST["message"];
   
   
   $sql = "INSERT INTO contact_form(contact_form.name, contact_form.email, contact_form.number, contact_form.message) VALUES (:name,:email,:number,:message)";
   $stmt= $conn->prepare($sql);
   $stmt->execute(array(":name"=>$name,":email"=>$email, ":number"=>$number, ":message"=>$msg));
   
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>C.V | Gurpreet Singh</title>
   <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3135/3135800.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($msg)){
   foreach($msg as $message){
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
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img1.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Gurpreet Singh</h3>
      <span data-aos="fade-up">web developer</span>
      <p data-aos="fade-up">Estudiante de Ciclo formativo de grado superior en Desarrollo de Aplicaciones Web.Mi objetivo es obtener experiencia en el
área de desarrollo de aplicaciones web y generar proyectos funcionales que superen las expectativas de los clientes de la empresa. Poseo conocimientos de varios
softwares y deseo replicar y mejorar estos.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Gurpreet Singh </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> <a href = "mailto: gur.coder@gmail.com"> gur.coder@gmail.com </a> </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Barcelona, Spain </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span><a href="tel:+34678567876"> +34 602 11 32 76 </a></h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
      </div>

      <a href="cv.pdf" class="btn" data-aos="fade-up" download>download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>web designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2021 )</span>
               <h3>web developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>front-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>back-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>full-stack developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="Send message" name="send" class="btn">
   </form>

  <div class="box-container">
    <a href="tel:+34678567876">
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+34 602 11 32 76</p>
      </div>
    </a>  
    <a href = "mailto: gur.coder@gmail.com">    
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>gur.coder@gmail.com</p>
      </div>
    </a>
    <a href="https://goo.gl/maps/2MNWyCbsMgoktgd36" target="_blank"> 
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Barcelona, Spain - 08901</p>
        </div>
    </a>
   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr.Gurpreet Singh, web developer</span> </div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>