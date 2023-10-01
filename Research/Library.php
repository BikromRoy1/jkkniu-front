<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "_rhead.php"
  ?>
</head>

<body>



  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between align-items-center">
      <div class="logo-info d-flex align-items-center">
        <div>
          <a href="../index.php">
            <img src="../assets/img/main-logo-white.png" alt="logo" loading="lazy" />
          </a>
        </div>
        <div>
          <h3 class="mb-0">
            <a class="central-library-title" href="../index.php"><span class="first-letter">C</span>ENTRAL <span class="first-letter">L</span>IBRARY</a>
          </h3>
          <h3 class="En-logo-name">
            <a href="../index.php">JATIYA KABI KAZI NAZRUL ISLAM UNIVERSITY</a>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- <div class="logo">
          <h1>
            <a href="index.php">Lo<span>gin</span></a>
          </h1>
        </div> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="nav-link scrollto active" href="../index.php"> Home JKKNIU</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#home">Home</a>
          </li>

          <li>
            <a class="nav-link scrollto" href="#E-books">
              E-Books
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#library-about">About
            </a>
          </li>
          <li><a class="nav-link scrollto" href="#viceContact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../assets/img/slide/library.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">
                  WELCOME TO UNIVERSITY CENTRAL LIBRARY
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!-- End Hero Section -->

  <main>

    <div class="container pb-3">
      <div class="row  justify-content-center">
        <div class="col-lg-11 col-md-12 col-sm-12 col-sm-12">
          <div class="library-search">
            <div class="row align-items-center">
              <div class="col-lg-9">
                <div class="library-catalog">
                  <h4>Library Catalog Search
                  </h4>
                  <div class="common-search-box" id="common-search-box">
                    <div class="row">
                      <div class="col-lg-12">
                        <form action="#" method="post" id="search-form">
                          <input type="text" name="search" id="search-box" placeholder="Search anything here...." />
                          <button type="submit" class="search-button">Search</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <h5>
                    Reading, Journal, Newspaper Section:
                    <span>Sunday - Thursday : 9.00 am - 8:30 pm || Saturday: 10.00 am - 5.00 pm</span>
                  </h5>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="library-hours">
                  <h3>Library Hour:</h3>
                  <p>
                    General Library: Sunday - Thursday : 9:00 am - 5.00 pm
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- LIBRARY E-books section -->
    <section id="E-books" class="E-books">
      <div class="container">
        <div class="container section-title">
          <h2>Subscribed E-Books</h2>
        </div>
        <div class="library-icons">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h4>SHOWING 1–9 OF 15 RESULTS</h4>
            </div>
            <div class="col-lg-4">
              <div class="common-search-box" id="common-search-box">
                <div class="row">
                  <div class="col-lg-12">
                    <form action="#" method="post" id="search-form">
                      <input type="text" name="search" id="search-box" placeholder="Search anything here...." />
                      <button type="submit" class="search-button">Search</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-2.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">McGraw-Hill, India</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-4.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">Taylor & Francis </a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-6.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">IOP Publishing</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-13.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">Wiley Online Books</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End LIBRARY E-books section -->

    <!-- About section -->
    <section id="library-about" class="library-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="library-about-message">
              <h4><span>Welcome to JKKNIU Central Library </span></h4>
              <p>
                JKKNIU Central Library is the first automated library and pioneer among the public university libraries in Bangladesh and plays the key role to provide the knowledge-based support to its faculty members, researchers, students and all kind of institutional users of South-Western part of Bangladesh. The automation project was implemented by the help of Higher Education Quality Enhancement Project (HEQEP) under University Grants Commission of Bangladesh (UGC,B). The Central Library is running successfully through KOHA-Integrated Library System (ILS), which is anInternational Standard Open-source Library Management System. Features include issue/circulation based on barcodes as well as other useful features. The most exciting part of the automaton is the web base. Students and faculty members can use the web module for OPAC Search, study and research purposes. Users can visit the Central Library from any part of the world.
              </p>
              <p>
                The Central Library has rich collection in the field of Science, Engineering and Technology. It is an open library system to students of JKKNIU, which provides rich collection of books, journals, newsletter, thesis works and CDs. At present the library has more than 50,000 books, 9,475 e-books and 4,51,511 e-journals. The sitting capacity of Central Library is more than 250.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About section -->


    <!-- LIBRARY E-Journals section -->
    <section id="E-books" class="E-books">
      <div class="container">
        <div class="container section-title">
          <h2>Subscribed E-Journals</h2>
        </div>
        <div class="library-icons">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h4>SHOWING 1–9 OF 15 RESULTS</h4>
            </div>
            <div class="col-lg-4">
              <div class="common-search-box" id="common-search-box">
                <div class="row">
                  <div class="col-lg-12">
                    <form action="#" method="post" id="search-form">
                      <input type="text" name="search" id="search-box" placeholder="Search anything here...." />
                      <button type="submit" class="search-button">Search</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-1.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">McGraw-Hill, India</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-11.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">Taylor & Francis </a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-9.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#">IOP Publishing</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-books h-100">
              <img src="../assets/img/books/shop-13.jpg" class="img-fluid" loading="lazy" alt="books">
              <div class="books-content">
                <h4><a href="#"> Emerald</a></h4>
                <a class="visit-btn" href="#">Visit Now <i class="ri-arrow-right-double-line"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End LIBRARY E-Journals section -->


    




  </main>

  <!-- Footer section -->
  <?php
  include "_rfooter.php"
  ?>
  <!-- End Footer section -->

</body>

</html>