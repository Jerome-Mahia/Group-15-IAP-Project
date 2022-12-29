<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!--  Administrator Functionalities
  1. Register A Student,
  2. Delete A User,
  3. View Users. -->

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Intergrated School System - Administrator Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

<style type="text/css">
        
tbody th {
  background-color: #36c;
  color: #fff;
  text-align: left;
  padding: 25px;
  border: black 2px solid;
}

tbody tr:nth-child(even) th {
  background-color: #25c;
  padding: 25px;
}
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData5()
{
   var divToPrint=document.getElementById("printTable5");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData6()
{
   var divToPrint=document.getElementById("printTable6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<script type="text/javascript">
  function text(x){
    if(x == 0){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }else  if(x == 1){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }else  if(x == 2){
      document.getElementById('course').style.display = 'block';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'block';
    }else  if(x == 3){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'block';
      document.getElementById('unit').style.display = 'none';
    }else{
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }
    }
</script>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>Intergrated School<span> System</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">Database</a></li>
              <li class="scroll-to-section"><x-app-layout></x-app-layout></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#act">Administrator Actions</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to the Intergrated School System</h6>
                <h2><em>Welcome</em>, <br> <span>Administrator</span></h2>
                <p>Education is Wealth!</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/home.jpg" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
            <h4>View Database</h4>
            <br>
             <p>School Administrators</p>
              <br>
                <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `phone_number`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type`='1'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'assets/images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData();" class="call_to-btn btn_white-border">
                  Print School Administrators
                </a>
              </div>
              <br>
              <p>Students</p>
              <br>
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                  <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `phone_number`, `course`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '0'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["course"] . "</td><td><a class='none' href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a></td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'assets/images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData1();" class="call_to-btn btn_white-border">
                  Print Students
                </a>
              </div>
              <br>
              <p>Lecturers</p>
              <br>
               <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                  <th style="text-align: left;
                  padding: 8px;">Course</th>
                  <th style="text-align: left;
                  padding: 8px;">Unit</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `course`, `unit`, `phone_number`, `user_type`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '2'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["course"] . "</td><td>" . $row["unit"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'assets/images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData2();" class="call_to-btn btn_white-border">
                Print Lecturers
                </a>
              </div>
              <br>
              <p>Staff</p>
              <br>
                <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Department</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `phone_number`, `department`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '3' ORDER BY `department`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["department"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'assets/images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData3();" class="call_to-btn btn_white-border">
                  Print Staff
                </a>
              </div>
              <br>
              <p>Courses</p>
              <br>
              <table id="printTable4">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Course ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Course Code</th>
                <th style="text-align: left;
                  padding: 8px;">Year</th>
                   <th style="text-align: left;
                  padding: 8px;">Status</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `code`, `year`, `status`, `created_at`, `updated_at` FROM `courses`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["code"] . "</td><td>" . $row["year"] . "</td><td>" . $row["status"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData4();" class="call_to-btn btn_white-border">
                  Print Courses
                </a>
              </div>
              <br>
              <p>Graduations</p>
              <br>
               <table id="printTable5">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Graduation ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Student ID</th>
                <th style="text-align: left;
                  padding: 8px;">Status </th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `course`, `student`, `status`, `created_at`, `updated_at` FROM `graduations`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["student"] . "</td><td>" . $row["status"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData5();" class="call_to-btn btn_white-border">
                  Print Graduations
                </a>
              </div>
              <br>
              <p>Timetables</p>
              <br>
              <table id="printTable6">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Timetable ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Lecturer</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                   <th style="text-align: left;
                  padding: 8px;">Day</th>
                   <th style="text-align: left;
                  padding: 8px;">Finish Time</th>
                  <th style="text-align: left;
                  padding: 8px;">Start Time</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "intergrated_school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `course`, `lec`, `unit`, `day`, `start_time`, `finish_time`, `created_at`, `updated_at` FROM `timetables`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["lec"] . "</td><td>" . $row["unit"] . "</td><td>" . $row["day"] . "</td><td>" . $row["start_time"] . "</td><td>" . $row["finish_time"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData6();" class="call_to-btn btn_white-border">
                  Print Timetable
                </a>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Contact Us About Your Application Needs</h2>
            <div class="phone-info">
              <h4>Call Us: <span><i class="fa fa-phone"></i> <a href="#">+254 756 459 9202</a></span></h4>
              <br>
              <br>
              <h4>Mail Us: <span><i class="fa fa-envelope"></i> <a href="mailto:intergrated.school@gmail.com">intergrated.school@gmail.com</a></span></h4>
            </div>
          </div>
        </div>
        <div id="act" class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <h4>Register A User</h4>
          <br>
          <form id="contact" action="{{ url('add_user') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <input type="file" required name="image" id = "image" value="" accept=".jpg, .jpeg, .png">
              </fieldset>
            </div>
            <div class="col-lg-6">
                <fieldset>
               <label for="user_type" />User Type
                <input id="user_type" type="radio" name="user_type" :value="old('user_type')" autofocus autocomplete="user_type" value="0" onclick="text(0)"/>Student
                <input id="user_type" type="radio" name="user_type" :value="old('user_type')" autofocus autocomplete="user_type" value="1" onclick="text(1)"/>Administrator
                <input id="user_type" type="radio" name="user_type" :value="old('user_type')" autofocus autocomplete="user_type" value="2" onclick="text(2)"/>Lecturer
                <input id="user_type" type="radio" name="user_type" :value="old('user_type')" autofocus autocomplete="user_type" value="3" onclick="text(3)"/>Staff
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <select style="display: none;" id="department"  type="text" name="department" :value="old('department')" autofocus autocomplete="department">
                    <option value="" selected disabled>Select Department</option>
                    <option value="Finance">Finance</option>
                    <option value="IT">IT</option>
                    <option value="Lab Technician">Lab Technician</option>
                    <option value="Cleaning Staff">Cleaning Staff</option>
                </select>
              </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <select style="display: none;" id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" autofocus autocomplete="course">
                  <option value="" selected disabled>Select A Course</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `courses`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
              <input style="display: none;" id="unit"  type="text" name="unit" :value="old('unit')" autofocus autocomplete="unit" placeholder="Unit" />
            </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Password" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Register</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/assets/images/contact-decoration.png" alt="">
            </div>
          </form>
          <br>
          <h4>Add A Course</h4>
          <br>
                    <form id="contact" action="{{ url('add_course') }}" method="post" enctype="multipart/form-data">
                      @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <input id="code"  type="text" name="code" :value="old('code')" required  placeholder="Code" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <input id="year"  type="text" name="year" :value="old('year')" required autofocus autocomplete="year" placeholder="Year" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <select id="status"  type="text" name="status" :value="old('status')" required autofocus autocomplete="status">
                    <option value="" selected disabled>Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Pending">Pending</option>
                </select>
              </fieldset>
            </div>
              <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Add</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/assets/images/contact-decoration.png" alt="">
            </div>
          </form>
          <br>
          <h4>Add A Timetable</h4>
          <br>
                    <form id="contact" action="{{ url('add_timetable') }}" method="post" enctype="multipart/form-data">
                      @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <select required id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" autofocus autocomplete="course">
                  <option value="" selected disabled>Select A Course</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `courses`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <select id="lec"  type="text" name="lec" :value="old('lec')" required autofocus autocomplete="lec">
                  <option value="" selected disabled>Select A Lecturer</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `users` WHERE `user_type` = '2'";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
               <select id="day"  type="text" name="day" :value="old('day')" required autofocus autocomplete="day">
                    <option value="" selected disabled>Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
             </fieldset>
            </div>
              <div class="col-lg-6">
              <input id="unit"  type="text" name="unit" :value="old('unit')" required autofocus autocomplete="unit" placeholder="Unit" />
              </div>
              <div class="col-lg-6">
                <fieldset>
                 <input id="start_time"  type="time" name="start_time" :value="old('start_time')" required autofocus autocomplete="start_time" placeholder="Start Time" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input id="finish_time"  type="time" name="finish_time" :value="old('finish_time')" required autofocus autocomplete="finish_time" placeholder="Finish Time" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Add</button>
                </fieldset>
              </div>

            </div>
            <div class="contact-dec">
              <img src="assets/assets/images/contact-decoration.png" alt="">
            </div>
          </form>
          <br>
          <h4>Delete A User</h4>
          <br>
          <form id="contact" action="{{ url('delete_user') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <select required id="uid" class="block mt-1 w-full" type="text" name="uid" :value="old('uid')" autofocus autocomplete="uid">
                  <option value="" selected disabled>Select A User</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `users`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["id"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
             <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Delete</button>
                </fieldset>
              </div>

            </div>
          </form>
          <br>
          <h4>Delete A Timetable</h4>
          <br>
          <form id="contact" action="{{ url('delete_timetable') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <select required id="uid" class="block mt-1 w-full" type="text" name="uid" :value="old('uid')" autofocus autocomplete="uid">
                  <option value="" selected disabled>Select A Timetable</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `timetables`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["id"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
             <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Delete</button>
                </fieldset>
              </div>
            </div>
          </form>
              <br>
          <h4>Delete A Graduation</h4>
          <br>
          <form id="contact" action="{{ url('delete_graduation') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <select required id="uid" class="block mt-1 w-full" type="text" name="uid" :value="old('uid')" autofocus autocomplete="uid">
                  <option value="" selected disabled>Select A Graduation</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `graduations`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["id"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                </fieldset>
              </div>
             <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Delete</button>
                </fieldset>
              </div>
            </div>
          </form>
              <br>
          <h4>Update A Graduation</h4>
          <br>
          <form id="contact" action="{{ url('update_graduation') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <select required id="uid" class="block mt-1 w-full" type="text" name="uid" :value="old('uid')" autofocus autocomplete="uid">
                  <option value="" selected disabled>Select A Graduation</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `graduations`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["id"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
                <input id="status" type="hidden" name="status" value="Completed" required/>
                </fieldset>
              </div>
             <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Update</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2022 Intergrated School System All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/assets/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>