<!DOCTYPE html>
<html lang="en">
<?php
include '_head.php';
?>

<body>
  <!-- ======= Top Bar ======= -->
  <?php
  include '_header.php';
  ?>

  <main id="main">
    <!-- ======= Breadcrumbs - Academic Calendar page ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/brc.jpg')">
      <div class="container position-relative d-flex flex-column align-items-center">
        <h2>Academic Calendar</h2>
        <ol>
          <li>
            <a href="index.html">
              <i class="bi bi-house-exclamation-fill"></i> Home</a>
          </li>
          <li>Academic Calendar</li>
        </ol>
      </div>
    </div>
    <!-- End Breadcrumbs - Academic Calendar page -->

    <!-- ======= Breadcrumbs - Academic Calendar page---Academic Calendar  ======= -->
    <section id="academicCalendar" class="academicCalendar">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="academicCalendar-tittle">
              <h4>Please Select Faculty, Department / Institute to get the Academic Calendar</h4>
              <div class="academicCalendar-select">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Department</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Institute</label>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="academicCalendar-concent">
          <h4 class="academic-department-name">Department of Biomedical Physics & Technology</h4>
          <div class="select-department">

            <form action="#" method="post" role="form" class="selectDepartment-form">
              <div class="row justify-content-between">
                <div class="col-md-4 selectDepartment-group mt-3">
                  <select name="Faculty" id="Faculty" class="form-select">
                    <option value=""> Select Faculty</option>
                    <option value="Faculty 1">
                      Faculty of Arts</option>
                    <option value="Faculty 2">
                      Faculty of Science</option>
                    <option value="Faculty 3">
                      Faculty of Law</option>
                    <option value="Faculty 4">

                      Faculty of Biological Sciences</option>
                    <option value="Faculty 5">

                      Faculty of Social Sciences</option>
                    <option value="Faculty 6">

                      Faculty of Business Studies</option>
                  </select>
                </div>
                <div class="col-md-4 selectDepartment-group mt-3">
                  <select name="Department" id="Department" class="form-select">
                    <option value="">Select Department</option>
                    <option value="Doctor 1">Department of Physics</option>
                    <option value="Doctor 2">Department of Mathematics</option>
                    <option value="Doctor 3">Department of Chemistry</option>
                    <option value="Doctor 4">Department of Statistics</option>
                    <option value="Doctor 5">Department of Theoretical Physics</option>
                    <option value="Doctor 6">Department of Biomedical Physics & Technology</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="academicCalendar-info">
                <div class="table-responsive">
                  <table class="table table-bordered academicCalendar-list-table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Exam. Name</th>
                        <th scope="col">Academic Year</th>
                        <th scope="col">Class Start Date</th>
                        <th scope="col">First Mid Term</th>
                        <th scope="col">Second Mid Term</th>
                        <th scope="col">Class Completion Date</th>
                        <th scope="col">Field Work Date</th>
                        <th scope="col">Final Exam Start Date</th>
                        <th scope="col">Final Exam End Date (Appox.)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1st Year B.S. (Hons)</th>
                        <td><a href="#">2021-2022</a></td>
                        <td>07-09-2022</td>
                        <td>
                          22-11-2022
                        </td>
                        <td>01-02-2023</td>
                        <td>23-03-2023</td>
                        <td></td>
                        <td>30-04-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">1st Year B.S (Minor)</th>
                        <td><a href="#">2021-2022</a></td>
                        <td>07-09-2022 </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>23-02-2023</td>
                        <td></td>
                        <td>03-04-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">2nd YearB.S (Hons)</th>
                        <td><a href="#">2021-2022</a></td>
                        <td>23-10-2022</td>
                        <td>
                          10-01-2023
                        </td>
                        <td>
                          12-03-2023
                        </td>
                        <td>04-05-2023</td>
                        <td></td>
                        <td>07-06-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">2nd Year B.S (Minor)</th>
                        <td>
                          <a href="#">2021-2022</a>
                        </td>
                        <td>10-10-2022</td>
                        <td>

                        </td>
                        <td></td>
                        <td>04-05-2023</td>
                        <td></td>
                        <td>07-06-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">3rd YearB.S (Hons)</th>
                        <td>
                          <a href="#">2021-2022</a>
                        </td>
                        <td>11-12-2022</td>
                        <td>
                          25-02-2023
                        </td>
                        <td>
                          25-04-2023
                        </td>
                        <td>15-06-2023</td>
                        <td></td>
                        <td>16-07-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">4th YearB.S (Hons)</th>
                        <td>
                          <a href="#"> 2021-2022</a>
                        </td>
                        <td>22-01-2023</td>
                        <td>
                          03-04-2023
                        </td>
                        <td>
                          10-06-2023
                        </td>
                        <td>10-08-2023</td>
                        <td></td>
                        <td>10-09-2023</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">M.S</th>
                        <td>
                          <a href="#"> 2020-2021</a>
                        </td>
                        <td>10-04-2022</td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>30-10-2022</td>
                        <td></td>
                        <td>17-12-2022</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">M.S</th>
                        <td>
                          <a href="#"> 2021-2022</a>
                        </td>
                        <td></td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs - Academic Calendar -->
  </main>

  <!-- Footers - Home Page -->
  <?php
  include '_footer.php';
  ?>
  <!-- Footers - Home Page -->
</body>

</html>