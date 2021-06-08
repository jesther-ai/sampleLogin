<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Log in</title>
	
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Web Outsourcing Gateway Inc.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"#\">Profile Page</a>";
              echo "</li>";

              echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"include\logout.inc.php\">Logout</a>";
              echo "</li>";
            }
            else{
              echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"index.php\">Log in</a>";
              echo "</li>";

              echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"signup.php\">Sign up</a>";
              echo "</li>";
            }
            
          ?>

        </ul>
      </div>
    </div>
  </nav>