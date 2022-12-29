<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--   Lecturer Functionalities
  1. Add A Resource,
  2. Delete A Resource,
  3. View Course,
  4. Send Message,
  5. View/Edit Profile Details. -->

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Intergrated School System - Lecturer Homepage</title>

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
              <li class="scroll-to-section"><div class="main-red-button"><a href="#act">Lecturer Actions</a></div></li> 
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
                <h2><em>Welcome</em>, <br> <span>Lecturer</span></h2>
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
              <h4>Courses</h4>
              <br>
                 <table id="printTable">
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
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["code"] . "</td><td>" . $row["year"] . "</td><td>" . $row["status"] . "</td><td>" . $row["created_at"] . "</td><td><td>" . $row["updated_at"] . "</td></tr>";
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
                  Print Courses
                </a>
              </div>
              <br>
              <h4>Resources</h4>
              <br>
              <p>Click on a PDF File to download.</p>
              <br>
              <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Resource ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">PDF File</th>
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

                $sql = "SELECT `id`, `course`, `name`, `pdf_path`, `created_at`, `updated_at` FROM `resources`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["name"] . "</td><td><a href='assets/images/" . $row["pdf_path"] . "' download>Download</a></td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
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
                  Print Resources
                </a>
              </div>
              <br>
              <h4>Lecturers</h4>
              <br>
                <table id="printTable2">
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

                $sql = "SELECT `id`, `name`, `phone_number`, `user_type`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '2'";
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
                <a href="" onclick="printData2();" class="call_to-btn btn_white-border">
                  Print Lecturers
                </a>
              </div>
              <br>
              <h4>Messages</h4>
              <br>
               <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Message ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Title</th>
                <th style="text-align: left;
                  padding: 8px;">Message</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
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

                $sql = "SELECT `id`, `name`, `title`, `message`, `course`, `created_at`, `updated_at` FROM `message_classes`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["title"] . "</td><td>" . $row["message"] . "</td><td>" . $row["course"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
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
                  Print Messages
                </a>
              </div>
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
          <h4>Add A Resource</h4>
          <br>
          <form id="contact" action="{{ url('add_resource') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                 <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                   <select required id="course" type="text" name="course" :value="old('course')" autofocus autocomplete="course">
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
                    <select id="status" type="text" name="status" :value="old('status')" required autofocus autocomplete="status">
                    <option value="" selected disabled>Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Pending">Pending</option>
                </select>
                                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                 <label for="pdf_path" value="" />PDF File
                <input type="file" required name="pdf_path" id = "pdf_path" value="" accept=".pdf">
              </fieldset>
            </div>
              <div class="col-lg-6">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Add</button>
                </fieldset>
              </div>
            </div>
          </form>
          <br>
          <h4>Send A Message</h4>
          <br>
                    <form id="contact" action="{{ url('send_message') }}" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <input id="title" type="text" name="title" :value="old('title')" required placeholder="Title" />
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
               <textarea name="message" rows="20" required placeholder="Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <select id="course" type="text" name="course" :value="old('course')" required autofocus autocomplete="course">
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
                  <button type="submit" id="form-submit" class="main-button ">Send</button>
                </fieldset>
              </div>
            </div>
          </form>
          <br>
          <h4>Delete A Resource</h4>
          <br>
                    <form id="contact" action="{{ url('delete_resource') }}" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                <select id="uid" type="text" name="uid" :value="old('uid')" required autofocus autocomplete="uid">
                  <option value="" selected disabled>Select A Resource</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `resources`";
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
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>