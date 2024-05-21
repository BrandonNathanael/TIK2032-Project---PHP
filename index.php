<?php
    include "database.php";

    if(isset($_POST['send'])) {
        $username = $_POST['username'];
        $review = $_POST['review'];

        $sql = "INSERT INTO revieww (username, review) VALUES 
        ('$username', '$review')";

        if($db->query($sql)) {
                echo "Thank For The Review :3"; 
        }else {
            echo "Error, We Can't Get Your Review :(";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Portofolio</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#Blog">Blog</a></li>
          <li><a href="#Gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Portfolio</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#Blog" onclick="toggleMenu()">Blog</a></li>
          <li><a href="#Gallery" onclick="toggleMenu()">Gallery</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/profile-pic.png" alt="Brandon profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Brandon Montong</h1>
        <p class="section__text__p2"> <span class="text"></span></p>
        <div class="btn-container">
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://linkedin.com/'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="./assets/about-pic.jpg"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
          
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>Teknik Prodi Informatika<br />
            </div>
          </div>
          <div class="text-container">
            <p>
              My name is Brandon Nathanael Montong. I am a second year student of the Faculty of Electrical Engineering, Informatics Study Program.
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#Blog'"
      />
    </section>
    <section id="Blog">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Blog</h1>
      <div class="Blog-details-container">
          <div class="details-container">
            <h2 class="Blog-sub-title"> Meningkatkan Produktivitas dengan Teknologi:</h2>
            <div class="article-container">
              <h4 class="blog-article">Dalam era digital ini, teknologi telah menjadi sekutu tak terpisahkan dalam meningkatkan produktivitas kita. Mulai dari aplikasi manajemen waktu hingga perangkat pintar, kemajuan teknologi telah memberikan kita alat untuk bekerja lebih efisien. Salah satu contohnya adalah aplikasi manajemen tugas yang memungkinkan kita untuk mengatur jadwal, membuat daftar tugas, dan mengingatkan deadline.</h4>
          <h2 class="Blog-sub-title">Seni Digital: Merintis Esensi Baru dalam Kreativitas</h2>
            <h4 class="blog-article">Seni telah berevolusi seiring dengan kemajuan teknologi, dan salah satu bentuknya adalah seni digital. Dengan menggunakan perangkat lunak khusus, seniman dapat menciptakan karya yang mengagumkan dengan berbagai teknik digital. Lukisan digital, ilustrasi vektor, dan seni 3D adalah beberapa contoh dari ragam seni digital yang menakjubkan. Seni digital tidak hanya memungkinkan ekspresi kreatif yang lebih luas, tetapi juga membuka pintu bagi kolaborasi global dan distribusi karya yang lebih mudah melalui internet. </h4>
            <h2 class="Blog-sub-title"> Olahraga dan Kesehatan Mental: Kaitannya yang Penting</h2>
            <div class="article-container">
                <h4 class="blog-article">Olahraga tidak hanya bermanfaat bagi kesehatan fisik kita, tetapi juga memiliki dampak positif pada kesehatan mental. Saat berolahraga, tubuh kita melepaskan endorfin, hormon yang dapat meningkatkan suasana hati dan mengurangi stres. Selain itu, olahraga juga dapat menjadi bentuk meditasi gerak, di mana kita dapat mengalihkan perhatian dari pikiran yang mengganggu dan fokus pada gerakan tubuh kita. Baik itu berlari, berenang, atau yoga, setiap jenis olahraga memiliki manfaatnya sendiri bagi kesehatan mental kita. </h4>
            </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#Gallery'"
      />
    </section>
    <section id="Gallery">
      <h1 class="title">Gallery</h1>
      <div class="Blog-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/gallery-1.jpg"
                alt="gallery 1"
                class="project-img"
              />
            </div>
            <h2 class="Blog-sub-title project-title">Photo One</h2>
            <div class="btn-container">
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/gallery-2.jpg"
                alt="gallery 2"
                class="project-img"
              />
            </div>
            <h2 class="Blog-sub-title project-title">Photo Two</h2>
            <div class="btn-container">
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/gallery-3.jpg"
                alt="gallery 3"
                class="project-img"
              />
            </div>
            <h2 class="Blog-sub-title project-title">Photo Three</h2>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:Brandonmontong01@gmail.com">Brandonmontong01@gmail.com</p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/in/brandon-montong-06a776304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a></p>
          <h3 id="review"></h3>
                <form class="review-form" action="index.php" method="POST">
                    <input type="text" placeholder="Your Email" name="username"/><br>
                    <textarea placeholder="Your review..." name="review"></textarea>
                    <button type="submit" name="send">Send</button>
                </form>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#Blog">Blog</a></li>
            <li><a href="#Gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2024 Brandon. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
