<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');
?>

<aside class="w-100 h-100 d-flex border-start border-end border-primary sideBar">
    <nav class="navbar w-100 h-100 p-0">
        <ul class="navbar-nav w-100 h-100 d-flex flex-column p-4 gap-3 overflow-y-auto">
            <li class="nav-item">
                <a href="<?= base_url('simple_crud/users') ?>"
                    class="sideBarBtn focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <!-- <i class="fa-solid fa-shapes"></i> -->
                    <!-- <span class="material-symbols-rounded">
                        dashboard
                    </span> -->
                    <span class="material-symbols-rounded">
                        space_dashboard
                    </span>
                    <!-- <span class="material-symbols-rounded">
                        grid_view
                    </span> -->
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('simple_crud/users/users_list') ?>"
                    class="sideBarBtn focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <span class="material-symbols-rounded">
                        user_attributes
                    </span>
                    Users List
                </a>
            </li>
            <li class="nav-item">
                <a href="#"
                    class="sideBarBtn focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <span class="material-symbols-rounded">
                        person
                    </span>
                    My Profile
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="#"
                    class="focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                    <i class="fa-solid fa-gear"></i>
                    Settings
                </a>
            </li> -->
            <li class="nav-item">
                <div class="accordion border-0" id="settingsBtn">
                    <div class="accordion-item border-0 text-primary">
                        <div class="accordion-header">
                            <button
                                class="sideBarBtn collapsed w-100 border-0 focus-ring focus-ring-primary accordionButton btn btn-outline-primary d-flex align-items-center gap-4 p-4"
                                type="button" data-bs-toggle="collapse" data-bs-target="#settingsItems"
                                aria-expanded="true" aria-controls="settingsItems">
                                <!-- <i class="fa-solid fa-gear"></i> -->
                                <span class="material-symbols-rounded">
                                    settings
                                </span>

                                Settings

                                <!-- <i class="fa-solid fa-angle-down ms-auto accordionIcon"></i> -->
                                <span class="material-symbols-rounded fs-2 ms-auto accordionIcon">
                                    keyboard_arrow_down
                                </span>
                            </button>
                        </div>
                        <div id="settingsItems" class="accordion-collapse collapse bg-primary bg-opacity-50"
                            data-bs-parent="#settingsBtn">
                            <div class="accordion-body d-flex align-items-center p-0">
                                <a href="#"
                                    class="w-100 text-light rounded-0 bg-opacity-75 focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                                    <!-- <i class="fa-solid fa-user-pen"></i> -->
                                    <span class="material-symbols-rounded">
                                    person_edit
                                </span>

                                    Update My Profile
                                </a>
                            </div>
                            <div class="accordion-body d-flex align-items-center p-0">
                                <a href="#"
                                    class="w-100 text-light bg-opacity-75 focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                                    <!-- <i class="fa-solid fa-key"></i> -->
                                    <span class="material-symbols-rounded">
                                    passkey
                                </span>

                                    Change My Password
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</aside>