<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<aside class="w-100 h-100 d-flex border-end border-primary sideBar overflow-y-auto">
    <nav class="navbar w-100 h-100 p-0">
        <ul class="navbar-nav w-100 h-100 d-flex flex-column p-1 gap-1">
            <li class="nav-item">
                <a href="<?= base_url('simple_crud/users') ?>" class="focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <i class="fa-solid fa-shapes"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <i class="fa-solid fa-user"></i>
                    My Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <i class="fa-solid fa-gear"></i>
                    Settings
                </a>
            </li>
        </ul>
    </nav>
</aside>