<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');
?>
<!-- User -->
<div class="nav-item navbar-dropdown dropdown-user dropdown">
<a class="nav-link hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="avatar">
    <!-- <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
    <?php 
        $username = $_SESSION['username'];
        $sql = "SELECT firstname,lastname,role FROM user WHERE username = '$username' OR email='$username';";
        $result = $db->query($sql);
        $row = $result -> fetch_assoc();

        $role = $row['role'];
        $name = $row['firstname'] . " " . $row['lastname'];

        echo'<span class="fw-bold d-block text-center mt-2 username">' . $name . '</span>';   
    ?>
    </div>
</a>
<ul id="usermenu" class="dropdown-menu dropdown-menu-end">
    <li>
    <a class="dropdown-item" href="#">
        <div class="d-flex">
        <div class="flex-grow-1">
            <span class="fw-semibold d-block"><?php echo $name; ?></span>
            <small class="text-muted"><?php echo $role; ?></small>
        </div>
        </div>
    </a>
    </li>
    <li>
    <div class="dropdown-divider"></div>
    </li>
    <li>
    <a class="dropdown-item" href="#">
        <i class="bx bx-user me-2"></i>
        <span class="align-middle">My Profile</span>
    </a>
    </li>
    <li>
    <a class="dropdown-item" href="#">
        <i class="bx bx-cog me-2"></i>
        <span class="align-middle">Settings</span>
    </a>
    </li>
    <li>
    <a class="dropdown-item" href="#">
        <span class="d-flex align-items-center align-middle">
        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
        <span class="flex-grow-1 align-middle">Billing</span>
        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
        </span>
    </a>
    </li>
    <li>
    <div class="dropdown-divider"></div>
    </li>
    <li>
    <a class="dropdown-item" href="/demo/logout.php">
        <!-- <a class="nav-link logout d-flex" href="logout.php">Log out</a> -->
        <i class="bx bx-power-off me-2"></i>
        <span class="align-middle">Log Out</span>
    </a>
    </li>
</ul>
</div>
<!--/ User -->