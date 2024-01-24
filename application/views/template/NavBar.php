<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark px-5">
    <a class="navbar-brand" href="#">Code Igniter Sample Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('users'); ?>">User Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admins'); ?>">Admin Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('register'); ?>">Register</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
        </ul>
    </div>
</nav>