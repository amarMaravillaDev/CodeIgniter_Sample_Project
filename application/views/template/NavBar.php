<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Code Igniter Sample Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('users'); ?>">User Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admins'); ?>">Admin Page</a>
                </li>

                <?php if (!$this->session->has_userdata('userType')) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('register'); ?>">Register</a>
                    </li>
                <?php
                } else {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?>
                            <?= $this->session->userdata('usersDetails')['LAST_NAME']; ?>
                        </a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="<?= base_url('logout'); ?>">Log Out</a>
                        </div>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>