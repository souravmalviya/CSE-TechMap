<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style2.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="jquery.convform.css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.convform.js"></script>
<script type="text/javascript" src="custom.js"></script>




  <title> CSE TECHMAP</title>
</head>
<style>

.button {
  background-color: #1d9bac ;
  
  color: white;
  padding: 9px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  
.counter {
    position: fixed;
    width: 125px;
    color:white;
    top: 10px;
    border: 3px solid #37635e;
    margin: 3px;
    padding: 3px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;


  }
   /*ChatBot*/
   .chat_icon{
	position: fixed;
	bottom: 0;
	right: 30px;
	z-index: 1000;
	padding: 0;
	font-size: 80px;
	color: #fff;
	cursor: pointer;
}
.chat_box{
	width: 400px;
	height: 80vh;
	position: fixed;
	bottom: 100px;
	right: 30px;
	background:#dedede;
	z-index: 1000;
	transition: all 0.3s ease-out;
	transform: scaleY(0);
}
.chat_box.active{
	transform: scaleY(1);
}
#messages{
	padding: 20px;
}
.my-conv-form-wrapper textarea{
	height: 30px;
	overflow: hidden;
	resize: none;
}
.hidden{
	display: none !important;
}

@keyframes scaleAnim{
	0%{transform: scaleY(0); opacity: 0;}
	100%{transform: scaleY(1); opacity: 1; }
}





  
  </style>

  

<body>

<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello There! I am TECHBOT and I'm here to help you out" name="category">
        <option value="WebDevelopment">Career Guidance ?</option>
        <option value="DigitalMarketing">CSE techmap ?</option>
      </select>

      
	  

      <!-- <div data-conv-fork="category">
        <div data-conv-case="WebDevelopment">
          <input type="text" name="domainName" data-conv-question="Please, tell me your domain name">    
        </div>
        <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
           <input type="text" name="companyName" data-conv-question="Please, enter your company name"> 
        </div>
      </div> -->

      <input type="text" name="name" data-conv-question="Please, Enter your name">

      <input type="text" data-conv-question="Hi {name}, <br>  It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Confirm, and visit CSE Techmap page for your career Guidance">
        <option value="Yes">Confirm</option>
      </select>

      

  	</form>
	</div>
</div>
<!-- ChatBot end -->

 


  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="logo-container">
          <!-- <img src="https://img.icons8.com/bubbles/50/000000/education.png"/> -->
          
          <div class="counter">

<div class="head"> Website Count</div>
<div class="count">00</div>

</div>

<script src='counter.js'></script>

        </div>
        <div class="brand">
          <a href="#hero">
            <h1><span>C</span>SE <span>T</span>ECH<span>M</span>AP</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Courses</a></li>
            <li><a href="#projects" data-after="Projects">Colleges</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Prepare</a></li>
            <li><a href="logout.php" data-after="Logout">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        
        <video autoplay muted loop id="myVideo">
          <source src="WhatsApp Video 2021-11-17 at 15.27.39.mp4" type="video/mp4">
        </video>
        

        <!-- Optional: some overlay text to describe the video -->
        <div class="content">
          
          <h1>HELLO!<span></span></h1>
          <h1>CSE Techmap Welcomes You,<span></span></h1>
          <h1>Learn and Lead<span></span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <div>
          <h1 class="section-title"><span>C</span>OURSES<span>F</span>OR YOU</h1>
        </div>
        <p>
        <H3>Code your Future!</H3>
        </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <a href=" https://www.javatpoint.com/c-programming-language-tutorial"><div class="icon"><img src="https://img.icons8.com/color/48/000000/c-programming.png" /></div></a>
          <h2>C PROGRAMMING</h2>
          <p>C is a procedural programming language.
            It was mainly developed as a system programming language to write an operating system. C language include
            low-level memory access,
            a simple set of keywords, and a clean style, these features make C language suitable for system programmings
            like an operating system or compiler development.
          </p>
          <br>
          <a href="quiz.html" class="button">QUIZ FOR YOU</a>
          
        </div>
        <div class="service-bottom">
          <div class="service-item">
            <a href=" https://www.w3schools.com/java/default.asp"><div class="icon"><img src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo--v2.png" /></div></a>
            <h2>JAVA</h2>
            <p>Java is a high-level, class-based, object-oriented programming language that is designed to have as few
              implementation dependencies as possible.Java applications are typically compiled to bytecode that can run
              on any Java virtual machine (JVM) regardless of the underlying computer architecture.</p>
              <br>
          <a href="quiz2.html" class="button">QUIZ FOR YOU</a>
          </div>
          <div class="service-item">
           <a href=" https://www.w3schools.com/python/"><div class="icon"><img src="https://img.icons8.com/color/48/000000/python--v2.png" /></div></a>
            <h2>PYTHON</h2>
            <p>Python is an interpreted high-level general-purpose programming language. It help programmers write
              clear, logical code for small and large-scale projects.Python is a high-level, general-purpose and a very
              popular programming language.used in web development, Machine Learning applications.  </p>
              <br>
          <a href="quiz3.html" class="button">QUIZ FOR YOU</a>
          </div>
          <div class="service-item">
            <a href=" https://www.w3schools.com/CPP/default.asp"><div class="icon"><img src="https://img.icons8.com/color/48/000000/c-plus-plus-logo.png"/></div></a>
             <h2>C++</h2>
             <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C
              programming language, or "C with Classes".C++ is a general purpose programming language and widely used
              now a days for competitive programming. It has imperative, object-oriented and generic programming
              features. </p>
              <br>
          <a href="quiz4.html" class="button">QUIZ FOR YOU</a>
           </div>
           <div class="service-item">
            <a href="https://www.w3schools.com/sql/"><div class="icon"><img src="https://img.icons8.com/color/48/000000/sql-database-administrators-group-skin-type-7.png"/></div></a>
             <h2>SQL</h2>
             <p>SQL (structured query language) is a language for specifying the organization of databases (collections
              of records). Databases organized with SQL are called relational, because SQL provides the ability to query
              a database for information that falls in a given relation.SQL is a domain-specific language

</p>
<br>
          <a href="#" class="button">QUIZ FOR YOU</a>
           </div>
          
        </div>
      
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"><span></span>COLLEGES</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>1. IIT BOMBAY</h1>
            <h2>Indian Institute of Technology Bombay </h2>
            <p>IIT Bombay is a public technical and research university located in Powai in Mumbai, Maharashtra, India. IIT Bombay was founded in 1958.
               In 1961, the Parliament decreed IITs as Institutes of National Importance
            </p>
          </div>
          <a href=" https://www.iitb.ac.in/"><div class="project-img">
            <img src="https://www.educationworld.in/wp-content/uploads/2021/07/Indian-Institute-of-Technology-Bombay-4.jpg" alt="img">
          </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>2. VJTI</h1>
            <h2>VEERMATA JIJABAI INSTITUTE OF TECHNOLOGY</h2>
            <p>VJTI is a state funded college located in Mumbai, Maharashtra, India, and one of the oldest engineering colleges in Asia. Founded in 1887 and formerly known as the Victoria Jubilee Technical Institute,
               it adopted its present name on 26 January 1997.</p>
          </div>
          <a href="https://vjti.ac.in/"><div class="project-img">
          <img src="https://img.collegepravesh.com/2016/01/VJTI.jpg" alt="img">
          </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>3. SPIT</h1>
            <h2>SARDAR PATEL INSTITUTE OF TECHNOLOGY</h2>
            <p>Sardar Patel College of Engineering is an government-aided autonomous engineering college located in Mumbai, India. It is affiliated to the University of Mumbai and offers undergraduate and graduate degrees in engineering.
              .</p>
          </div>
          <a href="https://www.spit.ac.in/"><div class="project-img">
            <img src="https://education.missionmentors.in/wp-content/uploads/listing-uploads/gallery/2021/01/Sadar-Patel-Institute-of-Engineering.missionmentors.in-2.jpeg" alt="img">
          </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>4. D. J. Sanghvi </h1>
            <h2>Dwarkadas J. Sanghvi College of Engineering</h2>
            <p>D. J. Sanghvi, is an engineering college in Vile Parle, Mumbai. The college was established by Shri Vile Parle Kelavani Mandal in 1994.The admissions are done on Merit basis, and there's a separate list for Gujarati linguistics minority, based on a lower merit criteria. </p>
          </div>
          <a href=" https://www.djsce.ac.in/"><div class="project-img">
            <img src="https://aniportalimages.s3.amazonaws.com/media/details/College_Building_photo_ob0p4o0.jpg" alt="img">
            </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>5. VESIT</h1>
            <h2>Vivekanand Education Society's Institute Of Technology</h2>
            <p>VESIT was established in 1984, with the aim of providing professional education in the field of Engineering. This institute is affiliated to the University of Mumbai and follows the rules and regulations laid down by government, AICTE, and University for admission; 51% reserved for Sindhi Linguistic minority and 49% through CAP test. 

            </p>
          </div>
          <a href=" https://vesit.ves.ac.in/"><div class="project-img">
            <img src="https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/2620/2019/5/28/College%20Building%20View%20of%20Vivekanand%20Education%20Societys%20Institute%20of%20Technology%20Chembur_Campus-View.jpg" alt="img">
          </div></a>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>6. KJSCE</h1>
            <h2>K. J. Somaiya College of Engineering</h2>
            <p>KJ Somaiya was established in 1983 at Somaiya Vidyavihar, and affiliated with the Somaiya Vidyavihar University.KJSCE is an autonomous college affiliated to the Somaiya Vidyavihar University spread across approx. 65 acres of posh land and stands among the top 3 engineering colleges in Mumbai.
            </p>
          </div>
          <a href=" https://kjsce.somaiya.edu/en"><div class="project-img">
            <img src="https://images.shiksha.com/mediadata/images/1499418924phpOpG948.jpeg" alt="img">
          </div></a>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>7. NMIMS</h1>
            <h2>Narsee Monjee Institute of Technology</h2>
            <p>Narsee Monjee Institute of Technology 
              NMIMS is a private deemed university located in Mumbai. The University also has campuses at Shirpur, Bangalore, Hyderabad, Indore and Navi Mumbai and two upcoming campuses in Dhule and Chandigarh.
            </p>
          </div>
          <a href="https://engineering.nmims.edu/#"><div class="project-img">
            <img src="https://images.static-collegedunia.com/public/college_data/images/campusimage/1473234944nmims..jpg" alt="img">
          </div></a>
        </div>
         
        <div class="project-item">
          <div class="project-info">
            <h1>8. RAIT</h1>
            <h2>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h2>
            <p>RAIT is a private engineering college located in Nerul, Navi Mumbai,
               India.NOW it is under DY PATIL UNIVERSITY i.e DEEMED TO BE UNIVERSITY,It was established in the year 1983 The institute is approved by 
               the Government of Maharashtra and is recognized by the All India Council
                for Technical Education.</p>
          </div>
          <a href=" http://www.dypatil.edu/mumbai/rait/?utm_source=google&utm_medium=cpc&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZYoFfs0-JYJCL9yfnVsrL4ObccFt2Gbl805KP0ed5M6FAmgkHEEpYgaAmW7EALw_wcB"><div class="project-img">
            <img src="https://content3.jdmagicbox.com/comp/navi-mumbai/85/022p8400885/catalogue/ramrao-adik-institute-of-technology-and-college-of-engineering-nerul-navi-mumbai-engineering-colleges-3ticxyc.jpg?clr=006600" alt="img">
          </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>9. TSIT</h1>
            <h2>Thadomal Shahani Engineering College</h2>
            <p>TSEC is a private engineering college in Mumbai, India. Founded in 1983, it is the first and the oldest private engineering institute affiliated with the University of Mumbai. TSEC was founded by the Hyderabad National Collegiate Board in the year 1983.
            </p>
          </div>
          <a href=" https://tsec.edu/"><div class="project-img">
            <img src="https://images.shiksha.com/mediadata/images/1566293783phpaBIo33.jpeg" alt="img">
          </div></a>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>10. THAKUR COLLEGE</h1>
            <h2>Thakur College of Engineering and Technology</h2>
            <p>TCET is an engineering college in Mumbai, India. It is located in Thakur village locality in Kandivali East, a post suburb of Mumbai, founded by the Thakur Education Group in 2001 by V.K. Singh.
            </p>
          </div>
          <a href="https://www.tcetmumbai.in/"><div class="project-img">
            <img src="https://images.shiksha.com/mediadata/images/1489300063phpA1CPrW.jpeg" alt="img">
          
        </div></a>
      </div>
        </div>
      </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          
          <img src="Cse techmap (1).png" alt="">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"><span>ABOUT </span>💻</h1>
        <h2>CSE TECHMAP</h2>
        <p>Considering online learning mode we have come to a conclusion that students are not able to get sufficient
          information due to a lot of sources available with different variables. Therefore, we have taken an initiative to
           create a suitable webpage for the same. The page contains information about CSE and the best part is everything 
           is provided in one place to get easy access
        </p>
        <a href="comment.php" class="cta">Discuss? Comment here..</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">INTERVIEW QUESTIONS</h1>
      </div>
      <I>
        <H2>TAP THE LOGO FOR QUESTIONS</H2>
      </I>
      <BR></BR>
      <div class="contact-items">
        <div class="contact-item">
          <a href="CP.html">
            <div class="icon"><img src=" https://img.icons8.com/color/48/000000/c-programming.png">
          </a>
        </div>
        <div class="contact-info">
          <h1>C PROGRAMMING</h1>

        </div>
      </div>
      <div class="contact-item">
        <a href="Java.html">
          <div class="icon"><img src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo--v2.png">
        </a>
      </div>
      <div class="contact-info">
        <h1>JAVA</h1>
        <h2> </h2>
      </div>
    </div>
    <div class="contact-item">
      <a href="Python.html">
        <div class="icon"><img src="https://img.icons8.com/color/48/000000/python--v2.png">
      </a>
    </div>
    <div class="contact-info">
      <h1>PYTHON</h1>

    </div>
    </div>

    </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="logo-container">
        <img src="Cse techmap (50 x 50 px) (60 x 60 px).png" alt="">

      </div>
      <br></br>
      <div class="brand">
        <h1>CSE TECHMAP</h1>
      </div>
      <h2>LEARN AND LEAD</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="/"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/accounts/emailsignup/"><img
              src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/i/flow/signup"><img
              src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>


      </div>
      <p>Copyright © 2021 -SE MINI PROJECT GROUP 5- All rights reserved
         (Lanchavi Patil,Vrushali Patil, Milind Jha,Sourav Malviya)
      </p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>  
</body>

</html>