<?php
$page = "manageChild";
require '../includes/config.php';
include("./includes/DBQ/chaaragar.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manage Children</title>
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
            <h1>Manage Children</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Actions</li>
                    <li class="breadcrumb-item active">Manage Children</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                <div class="card">
            <div class="card-body">
              <h5 class="card-title">Children Enrolled</h5>
              <!-- Table Variants -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"> Child ID</th>
                    <th scope="col"> Full Name </th>
                    <th scope="col"> Gender </th>
                    <th scope="col"> Registration Year </th>
                    <th scope="col"> Guide Contact </th>
                    <th scope="col"> DOB </th>
                    <th scope="col"> Class </th>
                    <th scope="col"> Action </th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                            $query = mysqli_query($con, "SELECT * FROM children");
                            while($row = mysqli_fetch_assoc($query)){

						?>
                        <tr>
                            <td><?php echo $row['child_id']; ?></td>
                            <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['regY']; ?></td>
                            <td><?php echo $row['guide']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['class_level']; ?></td>
                            <td>
                                <a title="Click to view the Student" href="viewchild.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button>
                                </a>
                                <a title="Click to edit the Student" href="editchild.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button>
                                </a>
                            </td>
                        </tr>
                        <?php
						}
					?>
                    </tbody>
              </table>
              <!-- End Table Variants -->

            </div>
          </div>
                
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include './includes/footer.php' ?>

</body>

</html>