<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item <?php if ($page == "index") echo 'active'; ?>">
            <a class="nav-link " href="./index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="nav-item">
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Actions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="add_child.php" class="<?php if ($page == "addChild") echo 'active'; ?>">
                        <i class="bi bi-circle"></i><span>Add a Child</span>
                    </a>
                </li>
                <li>
                    <a href="manage.php" class="<?php if ($page == "manageChild") echo 'active'; ?>">
                        <i class="bi bi-circle"></i><span>Manage Children</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item <?php if ($page == "profile") echo 'active'; ?>">
            <a class="nav-link collapsed" href="./profile.php">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        
    </ul>

</aside>
<!-- End Sidebar-->