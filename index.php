<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>CrisonTech University | home</title>
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
      <div class="nav-links">
        <ul class="menu-items" id="NavLinks">
          <i class="fas fa-times" onclick="hideMenu()"></i>
          <li><a href="index.php" class="active">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="course.php">COURSE</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
      <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>
    
    <section class="header-wrapper">
      <div class="text-box" id="header-inner-wrapper">
        <h1>World's Biggest University</h1>
        <p>
          Making Website is now the easiest thing in the world. You just need to
          Learn HTML, CSS,
          <br />
          Javascript and you are good to go.
        </p>
        <a class="First-btn" href="about.php">Visit Us To Know More</a>
      </div>
    </section>

    <section class="content-sec">
      <div class="text-center-container">
        <div class="elements-container">
          <h2 class="header-center">Quality Education at Affordable cost!</h2>
          <p class="text-para">
            We offer the kind of Education that students need for their next level
            at Affordable cost. On top of providing Massive lectures, Practicals
            and Professional skills. Students who graduates here doesn't
            necessarily need any forward education, because, all is being covered
            here.
          </p>
          <a href="course.php" class="enroll-btn">
            Enroll for a course today
          </a>
        </div>
      </div>

      <div class="items-container">
        <div class="flex-col-1">
          <i class="fas fa-graduation-cap red-cap"></i>
          <h3 class="study-title">Bachelor's Degree</h3>
          <p class="study-text">
            Study with the best and recognized University in the world. Very
            affordable and accessible for all qualified student. Become a
            Bachelor's degree holder.
          </p>
          <a href="#"  class="apply-btn">
            Apply today
          </a>
        </div>

        <div class="flex-col-2">
          <i class="fas fa-graduation-cap green-cap"></i>
          <h3 class="study-title">Diploma</h3>
          <p class="study-text">
            Study with the best and recognized University in the world. Very
            affordable and accessible for all qualified student. Become a
            Diploma holder with incredible real world experience.
          </p>
          <a href="#"  class="apply-btn">
            Apply today
          </a>
        </div>

        <div class="flex-col-3">
          <i class="fas fa-graduation-cap yellow-cap"></i>
          <h3 class="study-title">Master's Degree</h3>
          <p class="study-text">
            Study with the best and recognized University in the world. Very
            affordable and accessible for all qualified student. Become a
            Master's degree holder.
          </p>
          <a href="#"  class="apply-btn">
            Apply today
          </a>
        </div>
      </div>
    </section>

    <section class="recommendation">
      <div class="get-help">
        <h1 class="help-header">Apply For Instant Scholarship Offer!</h1>
        <p class="help-para">
          Isn't it Amazing, that student can also pursue their career into World
          top Universities with Scholarship? If you're looking for this kind of
          opportunity, then what are you waiting for?
        </p>
        <a href="" class="help-btn">
          Get in touch with a professional
        </a>
      </div>
    </section>

    <section class="testimonial-container">
      <div class="testi-inner-wrapper">
        <h2 class="header-center">
          What People Say
          <span style="color: orangered;">About</span>
          &nbsp;Us!
        </h2>
        <div class="testi-content">
          <div class="testi-col-1">
            <span class="quote"><i class="fas fa-quote-left"></i></span>
            <p class="testi-text">
              The perfect place to study, for any course of your choice.
              Provides its students with every necessary equipment for study.
              Such an Amazing place.
            </p>
            <span class="stars-icon">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </span>
            <img
              src="./IMG/eduford_img/user1.jpg"
              alt="An iamge of user-one"
              class="testi-img"
            />
            <h4 class="user-name">Sandra Anderson</h4>
            <h5 class="country">Germany</h5>
            <span id="get-post-date-1" class="post-date"></span>
          </div>

          <div class="testi-col-2">
            <span class="quote"><i class="fas fa-quote-left"></i></span>
            <p class="testi-text">
              The perfect place to study, for any course of your choice.
              Provides its students with every necessary equipment for study.
              Such an Amazing place.
            </p>
            <span class="stars-icon">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </span>
            <img
              src="./IMG/eduford_img/user2.jpg"
              alt="An iamge of user-two"
              class="testi-img"
            />
            <h4 class="user-name">Prince Ferdenard</h4>
            <h5 class="country">Virginia</h5>
            <span id="get-post-date-2" class="post-date"></span>
          </div>

          <div class="testi-col-3">
            <span class="quote"><i class="fas fa-quote-left"></i></span>
            <p class="testi-text">
              The perfect place to study, for any course of your choice.
              Provides its students with every necessary equipment for study.
              Such an Amazing place.
            </p>
            <span class="stars-icon">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </span>
            <img
              src="./IMG/eduford_img/user-3.png"
              alt="An iamge of user-three"
              class="testi-img"
            />
            <h4 class="user-name">Precious Thompson</h4>
            <h5 class="country">Australia</h5>
            <span id="get-post-date-3" class="post-date"></span>
          </div>
        </div>
      </div>
    </section>

    <section class="form-container">
      <h2 class="header-center">
        Be the first to
        <span style="color: orangered;">comment!</span>
      </h2>
      <div class="form-row">
        <div class="content-left">
          <img
            src="../Assets/IMG/eduford_img/graduate-student.avif"
            class="student-img"
            alt="An image of a student"
          />
        </div>

        <form action="#" class="form-right" id="formRight">
          <div class="form-groups">
            <input
              type="text"
              class="input-field"
              name="fullName"
              id="fullName"
              placeholder="Fullname"
            />
            <input
              type="email"
              class="input-field"
              name="email"
              id="email"
              placeholder="Email"
            />
          </div>

          <div class="form-groups">
            <input
              type="tel"
              class="input-field"
              name="number"
              id="number"
              placeholder="Phone"
            />
            <input
              type="address"
              class="input-field"
              name="address"
              id="address"
              placeholder="Address"
            />
          </div>

          <textarea
            name="texarea"
            id="texarea"
            class="textarea"
            cols="30"
            rows="10"
            placeholder="Comment"
          ></textarea>

          <input
            type="submit"
            value="Post Comment"
            class="submit-btn"
            id="submitBtn"
          />
        </form>
      </div>
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

    <script src="./JS/index.js"></script>
  </body>
</html>
