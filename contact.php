<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/form.css">
    <link rel="stylesheet" href="./CSS/form.css" />

    <title>CrisonTech University | Contact</title>
  </head>
  <body>
    <nav class="navbar sticky">
      <a href="index.php" class="main-logo-link">
      <img
      src="./IMG/eduford_img/newly-logo-wite.png"
      class="main-logo"
      alt="An image of Logo"
      />
      </a>
      <div class="nav-links" >
        <ul class="menu-items" id="NavLinks">
        <i class="fas fa-times" onclick="hideMenu()"></i>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="course.php">COURSE</a></li>
        <li><a href="blog.php">BLOG</a></li>
        <li><a href="contact.php"class="active">CONTACT</a></li>
        </ul>
      </div>

      <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>

    <section class="about-wrapper">
      <div class="text-box">
        <h1>About Our Tech Community</h1>
        <p>
        We believe quality Education is the key to success,
        that's why we've invested all we have for the best achievement.
        <br />
        Not just for studies but to give life a meaning, 
        everyone deserve the chance to live their lives to the fullness. <br> Get the quality but affordable knowledge that can shape the world.
        </p>
        <a class="First-btn" href="" id="redirect-register">Join the ruling tech Community today</a>
      </div>
    </section>

      
    <section class="about-container">
      <div class="about-row">
        <div class="about-col-1">
          <h2>Expereince why Tech industry is booming.</h2>
          <p>
          Tech industries are the muscle and growth of the Economy globally.
          As Technology grows everyday, new skills are introduced as well.
          And without leaving anyone out, we've trained and are massively training people especially
          young people who have the drive and ethusiasm to reaching this destination.
          </p>
          <a href="course.php" class="course-btn">Find a Course</a>
        </div>

        <div class="about-col-2">
          <img src="./IMG/eduford_img/code-sample-2.png" alt="An image of code sample one" class="col-1-img">
        </div>
      </div>
    </section>

    <section class="about-option">
      <div class="option-wrapper">
        <h2>Start planning your future today!</h2>
        <h5>Why choose CrisonTech Univerty Among many others?</h5>
        <div class="flex-items">
          <div class="col-one">
            <img src="./IMG/eduford_img/medal-1.png" alt="An image of award one" class="award-img">
            <h3>Top 10 <i class="fas fa-star"></i></h3>
            <p>Ranked among the top 10 best Universities in the world.</p>
          </div>
          <div class="col-one">
            <img src="./IMG/eduford_img/medal-2.png" alt="An image of award two" class="award-img">
            <h3>Awarded top 20 <i class="fas fa-star"></i></h3>
            <p>Awarded among the top 5 high quality and Acredited institution.</p>
          </div>
          <div class="col-one">
            <img src="./IMG/eduford_img/medal-3.png" alt="An image of award three" class="award-img">
            <h3>Over 10,000 +<i class="fas fa-star"></i></h3>
            <p>Admitted adn Freshers students seeking admission every year.</p>
          </div>
        </div>
        <div class="flex-children">
          <a href="index.php" class="btn-bottom">Choose a career</a>
          <small>*plus quality and affordable Education from <br>
            the world most recognized University*</small>
        </div>
      </div>
    </section>

 
    <section class="admission-container">
      <div class="about-row">
        <div class="about-col-1">
          <h2>Obtain a degree certificate and Get a Job.</h2>
          <p>Get admission into the one of the most well known and respected University.
            Obtain your Bachelor or Masters degree within few years and get a Job.
            Every company wants employees that knows what they are doing, that have something to offer.
            Acquire the knowledge you won't be rejected by no recognized company.
          </p>
          <a href="course.php" class="course-btn">Start your career</a>
        </div>

        <div class="about-col-2">
          <img src="./IMG/eduford_img/graduation-cap.png" alt="An image of graduation cap" class="col-1-img">
        </div>
      </div>
    </section>

    <section class="student-section">
      <div class="about-row student-row">
        <div class="about-col-1 student-col">
          <h2>Find the prefect place to <br> study with millions all over the world!</h2>
          <p>Do you know that studying isn't just about having the required materials, 
            it's basically about how much you would understand. And we have all it takes to get you that person you wish to be.
          Studying with us wouldn't just give you the knowledge but also the exposure, you would be exposed to so many real world challenges as well as how to tackle them. 

        </p>
        <a href="" class="student-btn">Get in touch with a professional</a>
        </div>
        <div class="about-col-2">
          <img src="./IMG/eduford_img/campus-material.jpg" class="student-img" alt="An image of students">
        </div>
      </div>
    </section>

     <div class="container">
      <form class="form form-hidden" id="login">
        <h1 class="form-title">Login</h1>
        <div class="form-message form-message-error">
          Incorrect Username/password combination
        </div>
        <div class="form-input-wrapper">
          <input
            type="text"
            class="input-item"
            autofocus
            placeholder="Username or email"
          />
          <div class="form_input-error__message"></div>
        </div>
        <!-- This is an error message! -->
        <div class="form-input-wrapper">
          <input
            type="password"
            class="input-item"
            autofocus
            placeholder="Password"
          />
          <div class="form-input-error-message"></div>
        </div>

        <button class="form-btn" type="" submit>Continue</button>

        <p class="form-text">
          <a href="" class="form-link">Forgot your password?</a>
        </p>

        <p class="form-text">
          Dont't have an account?
          <a href="" id="linkCreateAccount" class="form-link">
            Ceate account
          </a>
        </p>
      </form>
      <!------------------------- SECOND FORM ---------------------------->

      <form class="form" id="createAccount">
        <h1 class="form-title">Create Account</h1>
        <div class="form-message form-message-error"></div>
        <div class="form-input-wrapper">
          <input
            type="text"
            class="input-item"
            autofocus
            placeholder="Username"
          />
          <div class="form_input-error__message"></div>
        </div>

        <div class="form-input-wrapper">
          <input
            type="email"
            class="input-item"
            autofocus
            placeholder="Email Address"
          />
          <div class="form_input-error__message"></div>
        </div>

        <!---------------------- This is an error message! ---------------------->
        <div class="form-input-wrapper">
          <input
            type="password"
            class="input-item"
            autofocus
            placeholder="Password"
          />
          <div class="form-input-error-message"></div>
        </div>

        <div class="form-input-wrapper">
          <input
            type="password"
            class="input-item"
            autofocus
            placeholder="Comfirm password"
          />
          <div class="form-input-error-message"></div>
        </div>

        <button class="form-btn" type="" submit>Continue</button>

        <p class="form-text">
          Already have an Account?
          <a href="" id="linkLogin" class="form-link">
            Login in
          </a>
        </p>
      </form>
    </div>

    <!-- Footer section -->
    <footer class="footer-container">
      <div class="footer-logo">
        <a href="./index.html">
          <img
            src="./IMG/eduford_img/newly-logo-wite.png"
            class="resized-logo"
            alt="An image of Logo"
          />
        </a>
      </div>
      <div class="footer-row">
        <a
          class="social-link"
          target="_blank"
          href="https://www.facebook.com/sixtusushrey"
        >
          <i class="fab fa-facebook social-icons"></i>
        </a>
        <a
          class="social-link"
          target="_blank"
          href="https://www.instagram.com/sixtusushrey"
        >
          <i class="fab fa-instagram social-icons"></i>
        </a>
        <a
          class="social-link"
          target="_blank"
          href="https://twitter.com/SixtusUshahemba"
        >
          <i class="fab fa-twitter social-icons"></i>
        </a>
        <a
          class="social-link"
          target="_blank"
          href="https://github.com/Sixtus-Developer"
        >
          <i class="fab fa-github social-icons"></i>
        </a>
        <a
          class="social-link"
          target="_blank"
          href="https://www.linkedin.com/in/sixtusushrey"
        >
          <i class="fab fa-linkedin social-icons"></i>
        </a>
        <a
          class="social-link"
          target="_blank"
          href="https://www.pinterest.com/sixtusushrey"
        >
          <i class="fab fa-pinterest social-icons"></i>
        </a>
      </div>

      <div class="copyright">
        <div class="flex-copyright"><span><i class="fas fa-globe"></i></span><img src="./IMG/eduford_img/nigerian-flag.png" alt="Flag image" class="flag">
       | Copyright&copy; - 2022 Created By&nbsp;
        <span style="color: #ff004f;">Sixtus.Developer</span>&nbsp;|
        &nbsp;All Rights Reserved | Terms & Policy</div>
      </div>
    </footer>
    <script src="./JS/about.js"></script>

   

    <script src="./JS/form.js"></script>
  </body>
</html>
