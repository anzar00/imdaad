<?php
$page = "addChild";
require '../includes/config.php';
include("./includes/DBQ/chaaragar.php");

// Declaring variables to prevent errors

$cid = ""; // Variable for storing child id
$fname = ""; // Variable for storing name
$lname = ""; // Variable for storing name
$hobbies = ""; // Variable for storing email
$dob = ""; // Variable for storing sign up date 
$gender = ""; // Variable for storing role
$reg = "" ; // Variable for registration year
$guide = "";
$class = "";
$school = "";
$bio = "";
$file_name = "";
$error_array = array(); // Variable that holds error messages


if (isset($_POST['Submit'])) {

    // Registration form values

    // cid

    $cid = strip_tags($_POST['child_id']); // For removing html tags from input

    // fname

    $fname = strip_tags($_POST['fname']); // For removing html tags from input

    // lname

    $lname = strip_tags($_POST['lname']); // For removing html tags from input

    //hobbies

    $hobbies = strip_tags($_POST['hobbies']); // For removing html tags from input

    //Role

    $gender = strip_tags($_POST['gender']); // For removing html tags from input

    // DOB

    $dob = $_POST['dob'];

    // Registration Year
    $reg = strip_tags($_POST['regY']);

    $guide = strip_tags($_POST['guide_phn']);

    $class = strip_tags($_POST['class']);

    $school = strip_tags($_POST['school']);

    $bio = strip_tags($_POST['bio']);

    $file_name  = strtolower($_FILES['file']['name']);
    $file_ext = substr($file_name, strrpos($file_name, '.'));
    $prefix = 'imdaad_'.md5(time()*rand(1, 9999));
    $file_name_new = $prefix.$file_ext;
    $path = './uploads/'.$file_name_new;



    // Triggers when no errors in $error_array

    if (empty($error_array)) {

        if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            
            // Inserting values into the database after all succesfull validations

            $query = mysqli_query($con, "INSERT INTO children VALUES ('', '$cid','$fname', '$lname','$bio','$school','$class','$reg','$guide', '$dob', '$hobbies', '$gender','$file_name_new')");
        }
        

        array_push($error_array, "<span style='color: #14C800;'>Child Details Added</span><br>");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Add Child</title>
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
            <h1>Add a Child</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Actions</li>
                    <li class="breadcrumb-item active">Add a Child</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Child Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" name="registration" action="" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="inputChildID" class="form-label">Child ID</label>
                                    <input type="text" class="form-control" id="inputName5" value="IM-<?php $prefix = md5(time() * rand(1, 2));
                                                                                                        echo strip_tags(substr($prefix, 0, 4)); ?>" name="child_id" readonly required />
                                </div>
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="inputName5" name="fname" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="inputName5" name="lname" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Hobbies</label>
                                    <input type="text" class="form-control" id="inputCity" name="hobbies" required />
                                </div>
                                <div class="col-md-4">
                                    <label for="inputZip" class="form-label">DOB</label>
                                    <input type="date" class="form-control" id="inputZip" name="dob" required />
                                </div>
                                <div class="col-md-2">
                                    <label for="inputGender" class="form-label">Gender</label>
                                    <select id="inputGender" class="form-select" name="gender" required>
                                        <option selected>Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputRY" class="form-label">Registration Year</label>
                                    <select id="inputRY" class="form-select" name="regY" required>
                                        <?php
                                        $yr = 2010;
                                        for ($yr; $yr <= date('Y'); $yr++) {
                                        ?>
                                            <option> <?php echo $yr; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputRel" class="form-label">Guide/Relative Phone Number</label>
                                    <input type="number" class="form-control" id="inputRel" name="guide_phn" required placeholder="Please Provide a valid phone number" />
                                </div>
                                <div class="col-md-4">
                                    <label for="inputClass" class="form-label">Class / Standard</label>
                                    <input type="text" class="form-control" id="inputClass" name="class" required placeholder="Current Class / Standard" />
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSchool" class="form-label">School</label>
                                    <input type="text" class="form-control" id="inputSchool" name="school" required placeholder="School Name" />
                                </div>
                                <div class="col-md-8">
                                    <label for="inputBio" class="form-label">Bio</label>
                                    <input type="text" class="form-control" id="inputBio" name="bio" required placeholder="Short Bio" />
                                </div>
                                <div class="col-md-4">
                                    <label for="file" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="file" id="file" required />
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button><br>
                                    <?php if (in_array("<span style='color: #14C800;'>Child Details Added</span><br>", $error_array)) echo "<span style='color: #14C800;'>Child Details Added</span><br>"; ?>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>



                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <?php include './includes/footer.php' ?>

</body>

</html>