<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>CrisonTech University | About</title>
  </head>
  <body>
   <nav class="navbar sticky">
      <a href="index.php" class="main-logo-link">
        <img
          src="./IMG/eduford_img/newly-logo-wite.png"
          class="main-logo"
          alt="An image of Logo"
        />
        <!-- <i class="fa fa-house fa-3x"></i> -->
      </a>
      <div class="nav-links">
        <ul class="menu-items" id="NavLinks">
          <i class="fas fa-times" onclick="hideMenu()"></i>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php" class="active">ABOUT</a></li>
          <li><a href="course.php">COURSE</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT</a></li>
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

    <section class="questions-section question-bg">
      <div class="question-container">
        <h2 class="FQA-header">Frequent Questions Asked</h2>
        <div class="accordion accordion-flush remove-bg" id="accordionFlushExample">
          <!-- First Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                What courses does CrisonTech University offer?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">CrisonTech is a Tech institution mainly established for offering and impacting Tech students with the knowledge and practical skills they might not easily aquire from most tertiary institutions or Universities.
                It offers and support every course in the Tech industry with real world practicals, scenarios, projects and Assesments.
                It was initially established in the early 90s and was one of the world most popular tertiary institutions as at them. But due to the inadequate level of Tech exposure those days, many wheren't aware or concern of it existence and function until in the early 2000s.
              </div>
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>1</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>1</small><i class="fa fa-share"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Second Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Can I obtain a degree certification from CrisonTech University?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              
              <div class="accordion-body">
                Ofcourse, yes. You can obtain a degree certificate after you have successfully completed your program of enrollment,
                you would be offered a certificate of completion.
              </div>
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>3</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>1</small><i class="fa fa-share"></i></span>
                </div>
              </div>
              
            </div>
          </div>

          <!-- Third Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How long do I have to study before graduating from CrisonTech University?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              
              <div class="accordion-body">
                It depend on course of enrollment or the program design, some courses takes 3 years, some 4 years, for Master's degree 2 years and 4-8 years for Ph.D.
                Basically depends on the program design.
              </div>
              
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>3</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>1</small><i class="fa fa-share"></i></span>
                </div>
              </div>
              
            </div>
          </div>

          <!-- Fourth Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Does CrisonTech offers free online courses and certifications?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              
              <div class="accordion-body">
                CrisonTech University offers free online courses and lessons for students who prefer learning from a distance on their own space.
                It also provides a free certification after the fully completion of the course undertaken. However, the free courses are limited to accessing live interactions lectures practicals e.t.c with lecturers and fellow class mates.
              </div>
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>5</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>4</small><i class="fa fa-share"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Fifth Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                How much is CrisonTech School fees for fresher students?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              
              <div class="accordion-body">Depending on the course you are studying, though the school fees is quite affordable, ranging from <b>$200.00 - $300.00</b> per section.
                Excluding the acceptance fees and other internal charges for fresher student. Differs from returning or direct entry students. For schoolarship student it also differs, for more inquiries 
                about our school policy, requirement and expenditures <a href="#">click here</a>

              </div>
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>4</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>8</small><i class="fa fa-share"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Sixth Question -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                What level of Academic Qualification does CrisonTech University offer?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">CrisonTech provides a high range of Academic Qualifications such as, <br>
                <ul>
                  <li>i. Diploma</li>
                  <li>ii. Bachelor's degree</li>
                  <li>iii. master's degree</li>
                  <li>iv. Ph.D's</li>
                </ul>
              </div>
              <div class="comments-icons">
                <p>lastest comments</p>
                <div class="comment-items">
                  <span><small>6</small><i class="fa fa-thumbs-up"></i></span>
                  <span><i class="fa fa-thumbs-down"></i></span>
                  <span><small>2</small><i class="fa fa-share"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <article>
        <div class="article-buttons">
          <h4>Find the above suggestions helpful?</h4>
          <span><button>YES</button><button>NO</button></span>
        </div>
      </article>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./JS/about.js"></script>
  </body>
</html>
