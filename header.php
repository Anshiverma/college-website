<?php
// Detect current page for active menu
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($pageTitle) ? $pageTitle : 'SIWS College' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- 🔶 Top Notification Bar -->
<div class="top-bar">
  📢 Admissions Open Now! Contact us for details.
</div>

<!-- 🔷 Main Header -->
<header>
  <div class="header-container">
    <img src="images/siws-logo.png" alt="SIWS Logo" class="logo">
    <h1 class="college-name">SIWS College</h1>
  </div>

  <!-- 🔹 Navigation -->
  <nav>
    <a href="index.php" class="<?= $currentPage=='index.php' ? 'active' : '' ?>">Home</a>
    <a href="about.php" class="<?= $currentPage=='about.php' ? 'active' : '' ?>">About</a>
    <a href="/siwscollege/faculty.php" class="<?= $currentPage=='faculty.php' ? 'active' : '' ?>">Faculty</a>
    <a href="/siwscollege/admission.php" class="<?= $currentPage=='admission.php' ? 'active' : '' ?>">Admission</a>
    <a href="courses.php" class="<?= $currentPage=='courses.php' ? 'active' : '' ?>">Courses</a>
   <a href="/siwscollege/facilities.php" class="<?= $currentPage=='facilities.php' ? 'active' : '' ?>">Facilities</a>
    <a href="contact.php" class="<?= $currentPage=='contact.php' ? 'active' : '' ?>">Contact</a>
    

  </nav>
</header>

<main>
