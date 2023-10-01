<!DOCTYPE html>
<html lang="en">

<?php
include '_head.php'
?>

<body>

  <!-- Header section -->
  <?php

  include '_header.php'
  ?>
  <!-- End Header section -->

  <main id='main'>
    <!-- ======= Breadcrumbs - Profile page ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/brc.jpg')">
      <div class="container position-relative d-flex flex-column align-items-center">
        <h2>Teacher Profile</h2>
        <ol>
          <li>
            <a href="index.php">
              <i class="bi bi-house-exclamation-fill"></i> Home</a>
          </li>
          <li>Teacher Profile</li>
        </ol>
      </div>
    </div>
    <!-- End Breadcrumbs - Profile page -->


    <!-- ======= Breadcrumbs - DashBoard page ======= -->
    <section id="profileDashboard" class="profileDashboard">
      <div class="container">
        <div class="profileDashboard-info">
          <div class="row">
            <div class="col-lg-3">
              <div class="profileDashboard-left">
                <div class="profile-image">
                  <img src="assets/img/team/Faclty03.jpg" class="img-fluid" loading="lazy" alt="Profile-images">
                  <h4>SHAMSUDDIN CHOWDHURY</h4>
                  <h5>(Assistant Professor)</h5>
                </div>
                <div class="nav flex-column nav-pills">
                  <a class="profile-button active" href="TeacherProfile.php">
                    <i class="ri-dashboard-fill"></i> Dashboard
                  </a>
                  <a class="profile-button" href="TeacherProfile_Education.php">
                    <i class="ri-graduation-cap-fill"></i> Education
                  </a>
                  <a class="profile-button" href="TeacherProfile_Experience.php">

                    <i class="ri-briefcase-fill"></i> Experience
                  </a>
                  <a class="profile-button" href="TeacherProfile_Award.php">

                    <i class="ri-award-fill"></i> Award
                  </a>
                  <a class="profile-button" href="TeacherProfile_Publication.php">

                    <i class="ri-git-repository-fill"></i> Publication
                  </a>
                  <a class="profile-button" href="TeacherProfile_Research.php">

                    <i class="ri-book-2-line"></i> Research
                  </a>
                  <a class="profile-button" href="TeacherProfile_Teaching.php">

                    <i class="ri-checkbox-multiple-fill"></i> Teaching
                  </a>
                  <a class="profile-button" href="TeacherProfile_Resource.php">

                    <i class="bi bi-folder-symlink-fill"></i> Resource
                  </a>
                  <a class="profile-button" href="TeacherProfile_Social.php">

                    <i class="ri-share-forward-box-fill"></i> Social Info
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="profileDashboard-right">
                <div class="profileDashboard-bg active">
                  <div class="mb-3">
                    <div class="Dashboard-title">
                      <h4>Dashboard</h4>
                      <a href="#"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="Dashboard-items">
                      <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                          <div class="Dash-panel-default">
                            <div class="Dash-panel-body Dashboard-block-gradient">
                              <div class="Dash-icons-box">
                                <i class="ri-graduation-cap-fill"></i>
                                <h4>255</h4>
                              </div>
                              <div class="Dash-home-title">
                                <h5>Total Education</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                          <div class="Dash-panel-default">
                            <div class="Dash-panel-body Dashboard-block-gradient-2">
                              <div class="Dash-icons-box">
                                <i class="ri-briefcase-line"></i>
                                <h4>10</h4>
                              </div>
                              <div class="Dash-home-title">
                                <h5>Total Experience Years</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                          <div class="Dash-panel-default">
                            <div class="Dash-panel-body Dashboard-block-gradient-3">
                              <div class="Dash-icons-box">
                                <i class="ri-medal-line"></i>
                                <h4>30</h4>
                              </div>
                              <div class="Dash-home-title">
                                <h5>Total Award </h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                          <div class="Dash-panel-default">
                            <div class="Dash-panel-body Dashboard-block-gradient-4">
                              <div class="Dash-icons-box">
                                <i class="ri-book-2-line"></i>
                                <h4>28</h4>
                              </div>
                              <div class="Dash-home-title">
                                <h5>Total Publication </h5>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="Dashboard-title">
                      <h4>Basic information's</h4>
                      <a href="#"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="Dashboard-basic-info">
                      <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Name:</h4>
                            <span>SHAMSUDDIN CHOWDHURY</span>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Faculty:</h4>
                            <span>Faculty of Arts</span>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Faculty:</h4>
                            <span>Faculty of Arts</span>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Email Address:</h4>
                            <span>shamsuddin.wrc@demo.ac.bd</span>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Department:</h4>
                            <span>Department of World Religions and Culture</span>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="Dashboard-personal-info">
                            <h4>Contact Number:</h4>
                            <span>+8801727-736019, +8801795-654532</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs - DashBoard page -->


  </main>

  <!-- footer section -->
  <?php
  include '_footer.php'
  ?>
  <!-- end Footer section -->

</body>

</html>