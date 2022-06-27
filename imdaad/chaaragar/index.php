<?php
  $page = "index";
  require '../includes/config.php';
  include("./includes/DBQ/chaaragar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Imdaad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include './includes/header.php' ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include './views/nav-head.php' ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include './views/sidebar.php' ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <?php  include './views/cards.php' ?>

            <?php //include './views/reports.php' ?>

            <?php //include './views/donations.php' ?>

          </div>
        </div>
        <!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <?php  //include './views/activity.php' ?>
          <!-- End Recent Activity -->

          <!-- Budget Report -->
          <?php // include './views/b_report.php' ?>
          <!-- End Budget Report -->

          <!-- News & Updates Traffic -->
          <?php // include './views/news.php' ?>
          <!-- End News & Updates -->

        </div>
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php include './includes/footer.php' ?>

</body>

</html>