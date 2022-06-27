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
                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputName5" class="form-label">First Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputName5" name="fname" value="<?php echo $row['fname']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputName5" class="form-label">Last Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputName5" name="lname" value="<?php echo $row['lname']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputCity" class="form-label">Hobbies</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputCity" name="hobbies" value="<?php echo $row['interests']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputRel" class="form-label">Guide/Relative Phone Number</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputRel" name="guide" value="<?php echo $row['guide']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputClass" class="form-label">Class / Standard</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputClass" name="class" value="<?php echo $row['class_level']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputSchool" class="form-label">School</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" id="inputSchool" name="school" value="<?php echo $row['school_name']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputBio" class="form-label">Bio</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control" id="inputBio" name="bio" rows="3"><?php echo $row['bio']; ?></textarea>
                                            </div>
                                        </div>

                                        

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->

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