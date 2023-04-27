<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      body{
        background-image:url('dash.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100%;
        background-position:center;
        background-color:#155977;
      }
    </style>

  </head>

  <body>
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

    <div class="navbar">
        <input type="checkbox" id="navbar-check">
        <div class="navbar-header">
          <div class="navbar-title">
            SPMS 4.0
          </div>
        </div>
        <div class="navbar-btn">
          <label for="navbar-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="navbar-links">
            <ul>
          <li><a href="#" target="_self">Dashboard</a></li>
          <li><a href="ploAnalysis.php" target="_self">PLO Analysis</a></li>
          <li><a href="ploAchievementStats.php" target="_self">PLO Achievement Stats</a></li>
          <li><a href="spiderChart.php" target="_self">Spider Chart Analysis</a></li>
          <li><a href="dataEntry.php" target="_self">Data Entry</a></li>
          <li><a href="viewCourseOutline.php" target="_self">View course Outline</a></li>
          <li><a href="enrollmentStatistics.php" target="_self">Enrollment Stats</a></li>
          <li><a href="performanceStats.php" target="_self">GPA Analysis</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
      </div>

  </body>

</html>