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

  <main id="main">
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
                  <a class="profile-button " href="TeacherProfile.php">
                    <i class="ri-dashboard-fill"></i> Dashboard
                  </a>
                  <a class="profile-button " href="TeacherProfile_Education.php">
                    <i class="ri-graduation-cap-fill"></i> Education
                  </a>
                  <a class="profile-button " href="TeacherProfile_Experience.php">

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
                  <a class="profile-button " href="TeacherProfile_Resource.php">

                    <i class="bi bi-folder-symlink-fill"></i> Resource
                  </a>
                  <a class="profile-button active" href="TeacherProfile_Social.php">

                    <i class="ri-share-forward-box-fill"></i> Social Info
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="profileDashboard-right">
                <div class="profileDashboard-bg">
                  <div class="Dashboard-title">
                    <h4>Social Info</h4>
                    <a href="#"><i class="bi bi-pencil-square"></i></a>
                  </div>
                  <div>
                    <form action="#" method="post" role="form" class="Dashboard-email-form">
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-label" for="Job">Facebook</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://www.facebook.com/" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-label" for="Job">Twitter</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://twitter.com/" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-label" for="Job">linkedin</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://in.linkedin.com/" required>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                          <label class="form-label" for="Job">Instagram</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://www.instagram.com/" required>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                          <label class="form-label" for="Job">Google Scholar</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://scholar.google.com/" required>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                          <label class="form-label" for="Job">ORCHID</label>
                          <input type="text" class="form-control" name="Job" id="Job" placeholder="https://orcid.org/" required>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                          <label class="form-label" for="Experience">
                            Research Gate</label>
                          <input type="text" name="Experience" class="form-control" id="Experience" placeholder="https://www.researchgate.net/" required>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                          <label class="form-label" for="Years">Experience Years End</label>
                          <input type="text" name="Years" class="form-control" id="Years" placeholder="2023-09-06" required>
                        </div>
                      </div>
                    </form>
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





  <!-- Footer section -->
  <?php

  include '_footer.php'

  ?>
  <!-- End Header section -->


</body>

</html>