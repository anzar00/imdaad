<?php
$page = "view";
require '../includes/config.php';
include("./includes/DBQ/chaaragar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users Profile - Imdaad</title>
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
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <?php
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM children WHERE id= '$id'");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="./uploads/<?php echo $row['photo']; ?>" alt="Profile" class="rounded-circle">
                                <h2><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h2>
                            </div>
                        </div>




                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">About</h5>
                                        <p class="small fst-italic"><?php echo $row['bio']; ?></p>

                                        <h5 class="card-title">Profile Details</h5>
                                        
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Child ID</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['child_id']; ?></div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Gender</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['gender']; ?></div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">School Name</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['school_name']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Class / Standard</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['class_level']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Date of Registration</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['regY']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Guide Contact</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['guide']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">DOB</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['dob']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Hobbies</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row['interests']; ?></div>
                                        </div>

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <?php
        }
        ?>

    </main><!-- End #main -->

    <?php include './includes/footer.php' ?>

</body>

</html>