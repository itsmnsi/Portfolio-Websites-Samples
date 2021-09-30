<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manasi's Portfolio</title>
    <script src="https://kit.fontawesome.com/81c2c05f29.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--animate CSS-->
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="body_class">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Manasi Patil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutme">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#artwork">Art Work</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <section id="home" class="home">
    <div class="uppercolor text-center">
      <img src="DSC_0118.JPG" data-aos="fade-down"
      data-aos-duration="3000" height="200px" width="220px" style="margin-top: 100px; border-radius: 50%; box-shadow: 0 8px 16px 0 rgba(22, 160, 137, 0.19), 0 6px 20px 0 rgba(50, 150, 25, 0.19)">
    </div>
    <div class="outer text-center" >
      <h1 style="margin-top: 100px; font-size: 60px; color: white" data-aos="fade-up" data-aos-duration="1000">Hello, I'm Manasi Patil.</h1>
      <div style="color:white;font-size:35px;margin-top: 10px;">
        <div id="typed-strings">
          <p>I am a Web Devoloper.</p>
          <p>I love to code.</p>
          <p>I am ready to hire.</p>
        </div> 
        <span id="typed"></span>
      </div>
      <a class="button button--colorful button--margin" href="manasi resume.pdf">Download Resume</a>
    </div>
  </section>
  
  <section id="aboutme">
    <div class="container-fluid active" style="padding-top:70px; padding-bottom:70px">
      <h1 id="headingabout" class="text-center" data-aos="flip-left" data-aos-duration="1000">
        <b>About Me</b>
      </h1>
      <div class="row justify-content-center align-items-center">
        <div class="about col-12 col-md-6">
          <div class="container" data-aos="fade-up"
          data-aos-anchor-placement="top-center" id="detailinfo">
            I am Manasi Patil. I am pursuing B.E. in Computer Engineering. I have interest in Web-Development and made several Projects and Websites using various Frameworks and Libraries. 
            I am strong in desgin and integration with problem solving skills and passionate about implementing and launching new project ideas.
          </div>
        </div>
      </div>
     
    </div>
  </section>
    
  <section id="skills">
    <div class="container-fluid " style="padding-top:70px;padding-bottom:70px">
      <h1 id="headingskill" class="text-center" data-aos="flip-left" data-aos-duration="1000">
        <b>
          <img class="p-10" src="https://img.icons8.com/color/48/000000/verified-account.png"/> 
          Skills 
        </b>
      </h1>
      <div class="row justify-content-center align-items-center">
        <div class="row container text-center skilll">
          <div class="icn col-12 col-md-6 skill" data-aos="zoom-in-right" data-aos-duration="1000">
            <h3  class="text-center" style="font-size:22px">
              Programming Languages
            </h3>
            <div class="icn">
              <img data-toggle="tooltip" data-placement="top" title="C++"src="https://img.icons8.com/color/48/000000/c-plus-plus-logo.png"/>
              <img data-toggle="tooltip" data-placement="top" title="C"src="https://img.icons8.com/color/48/000000/c-programming.png"/>
              <img data-toggle="tooltip" data-placement="top" title="Java"src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo.png"/>
              <img data-toggle="tooltip" data-placement="top" title="Python"src="https://img.icons8.com/color/48/000000/python.png"/>
            </div>
            <div class="icn">
              <img data-toggle="tooltip" data-placement="top" title="HTML5" src="https://img.icons8.com/color/48/000000/html-5.png">
              <img data-toggle="tooltip" data-placement="top" title="CSS3" src="https://img.icons8.com/color/48/000000/css3.png"/>
            </div>
          </div>
          <div class="icn col-12 col-md-6 skill" data-aos="zoom-in-left" data-aos-duration="1000">
            <h3  class="text-center" style="font-size:22px">
              Database
            </h3>
            <div class="icn">
              <img data-toggle="tooltip" data-placement="top" title="SQL"src="https://img.icons8.com/color/48/000000/sql.png">
            </div>
          </div>
        </div>
        <div class="row container text-center skilll">
          <div class="icn col-12 col-md-6 skill" data-aos="zoom-in-right" data-aos-duration="1000">
            <h3  class="text-center" style="font-size:22px">
              Frameworks/Libraries
            </h3>
            <div class="icn">
              <img data-toggle="tooltip" data-placement="top" title="Bootstrap 4" src="https://img.icons8.com/color/48/000000/bootstrap.png"/>
            </div>  
          </div>
          <div class="icn col-12 col-md-6 skill" data-aos="zoom-in-left" data-aos-duration="1000">
            <h3  class="text-center" style="font-size:22px">
              Web Tools
            </h3>
            <div class="icn" >
              <i><img data-toggle="tooltip" data-placement="top" title="GIT Tool" src="https://img.icons8.com/color/48/000000/git.png"/></i>
              <i data-toggle="tooltip" data-placement="top" title="Github" class="fa fa-github" style="font-size:36px;color: white;"></i>
            </div>  
          </div>
        </div>
      </div>
    </div> 
  </section>
  
  <section id="experience">
    <div class="container-fluid active" style="padding-top:70px;padding-bottom:70px">
      <h1 class="text-center" data-aos="flip-left" data-aos-duration="1000">
        <b>
          <img src="https://img.icons8.com/color/48/000000/working-with-a-laptop.png"/>
          Experience
        </b>
      </h1>
      <div class="row justify-content-around">
        <div class="col-lg-3 col-md-4 text-center" data-aos="zoom-in-down" data-aos-duration="1000">
          <img src="icon-1.png" alt="icon">
          <p class="mb-0">Oct 2020 - Oct 2020</p>
          <h4>Frontend Designing</h4>
          <h6 class="text-primary">Suven Consultants and Technology pvt.Ltd.</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center" data-aos="zoom-in-down" data-aos-duration="1000">
          <img src="icon-2.png" alt="icon">
          <p class="mb-0">Jan 2021 - Jan 2021</p>
          <h4>Wed Development & Designing</h4>
          <h6 class="text-primary">The Spark Foundation</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center" data-aos="zoom-in-down" data-aos-duration="1000">
          <img src="icon-3.png" alt="icon">
          <p class="mb-0">Feb 2021 - April 2021</p>
          <h4>Web Developer</h4>
          <h6 class="text-primary">EduBild Technologies LLP</h6>
        </div>
      </div>
    </div>
  </section>
  
  <!--Art Gallery Section-->  
  <section id="artwork">
  <div class="container-fluid active" style="padding-top:70px;padding-bottom:70px">
    <h1 class="text-center" data-aos="flip-left" data-aos-duration="1000">
      <b>
        <img src="https://img.icons8.com/color/48/000000/paint-palette.png"/>
        Hobbies & Art Work
      </b>
    </h1>
    <div class="row justify-content-center align-items-center">
     <div class="artt gallerys">
      <div class="row">
        <div class="column">
          <a href="img2.jpg" target="_blank">
            <img class="img-fluid" data-aos="flip-up" data-aos-duration="3000" src="img2.jpg">
          </a>
          <a href="img3.jpg" target="_blank">
            <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img3.jpg">
          </a>
          <a href="img1.jpg" target="_blank">
            <img class="img-fluid" data-aos="flip-up"  data-aos-duration="3000" src="img1.jpg"> 
          </a>                    
        </div>
        <div class="column">
          <a href="img5.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img5.jpg">
          </a>
          <a href="img7.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-up"  data-aos-duration="3000" src="img7.jpg">
          </a>
          <a href="img8.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img8.jpg">
         </a>
        </div>
        <div class="column">
          <a href="img9.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-up"  data-aos-duration="3000" src="img9.jpg">
        </a>
        <a href="img10.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img10.jpg">
          </a>
          <a href="img11.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-up"  data-aos-duration="3000" src="img11.jpg">
          </a>
          <a href="img6.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down" data-aos-duration="3000" src="img6.jpg">
          </a>
        </div>
        <div class="column">
          <a href="img12.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img12.jpg">
          </a>
          <a href="img13.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img13.jpg">
          </a>
          <a href="img14.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img14.jpg">
          </a>
          <a href="img4.jpg" target="_blank">
          <img class="img-fluid" data-aos="flip-down"  data-aos-duration="3000" src="img4.jpg">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div id="icon-set" class="row justify-content-center align-items-center">
  <a href="https://www.linkedin.com/in/itsmnsi0204" target="_blank"><img data-toggle="tooltip" data-placement="top" title="Linkedin" id="ic" src="https://img.icons8.com/color/48/000000/linkedin.png" /></a>
  <a href="https://www.github.com/itsmnsi" target="_blank"><img data-toggle="tooltip" data-placement="top" title="GitHub" id="ic" src="https://img.icons8.com/color/48/000000/github--v1.png"/></a>
  <a href="mailto:pmanasi02@gmail.com" target="_blank"><img data-toggle="tooltip" data-placement="top" title="Gmail" id="ic" src="https://img.icons8.com/color/48/000000/gmail.png" /></a>
  <a href="https://www.instagram.com/mnsi021999" target="_blank" ><img data-toggle="tooltip" data-placement="top" title="Instagram" id="ic" src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>
</div>

  <!-- Footer section begins from here... -->
  <div class="footer">
    <div class="text-center">
      <p style="margin-bottom: 0px;font-family: Encode Sans Expanded;">
        <b>Designed with <i class="fas fa-heart"></i> by Manasi Patil</b>
      </p>
      <p style="font-family: Encode Sans Expanded;">
        <b><i class="far fa-copyright"></i> 2021</b>
      </p>
    </div>
  </div>       
    
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <script type="text/javascript">
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
      backSpeed:40,
      typeSpeed:40,
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        var positiontop=$(document).scrollTop();
        if(positiontop>262 && positiontop<653){
          $('#animate').addClass('animated zoomIn delay(10000)');
        }
        if(positiontop>1055 && positiontop<1235){
          $('#l1').addClass('animated fadeInLeft');
          $('#r1').addClass('animated fadeInRight');
        };
        if(positiontop>1235 && positiontop<1645){
          $('#l2').addClass('animated fadeInLeft');
          $('#r2').addClass('animated fadeInRight');
        }
      }); 
    });
  </script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>


    
  <!-- jQuery and Bootstrap Bundle -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="aos.js"></script>
  <script type="text/javascript">
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js" integrity="sha512-C1zvdb9R55RAkl6xCLTPt+Wmcz6s+ccOvcr6G57lbm8M2fbgn2SUjUJbQ13fEyjuLViwe97uJvwa1EUf4F1Akw==" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $('.gallerys').magnificPopup({
          type : 'image',
          delegate : 'a',
          gallery:{enabled:true}
      });
    });
  </script>
</body>
</html>
