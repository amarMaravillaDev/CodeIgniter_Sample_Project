<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');
?>

<nav class="navbar navbar-expand-lg bg-primary bg-gradient p-0">
    <div class="p-4 d-flex justify-content-between align-items-center w-100 container-xxl">
        <div class="d-flex align-items-center gap-3">
            <!-- <i class="fs-3 text-light fa-solid fa-circle"></i> -->
            <span class="material-symbols-rounded text-light fs-2">
                circle
            </span>

            <div class="d-flex gap flex-column text-center">
                <p class="fs-4 text-light m-0 d-flex">SIMPLE CRUD</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="text-light">
                Hello,
                <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?>
            </div>
            <div
                class="navBarProfile position-relative dropdown shadow bg-light borderRadiusFull d-flex align-items-center justify-content-center p-4">
                <!-- <i class="fs-5 fa-solid fa-user text-primary"></i> -->
                <span class="material-symbols-rounded text-primary fs-2">
                    person
                </span>

                <button type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    class="focus-ring focus-ring-primary border-1 border border-light bg-primary position-absolute end-0 bottom-0 p-1 borderRadiusFull">
                    <div class="d-flex align-items-center justify-content-center squareXSm">
                        <!-- <i
                            class="fa-solid fa-caret-down d-flex align-items-center justify-content-center text-light"></i> -->

                        <span class="material-symbols-rounded fs-4 text-light">
                            arrow_drop_down
                        </span>
                    </div>
                </button>

                <ul class="dropdown-menu dropDownLogout p-1 border-0 shadow rounded-3">
                    <li class="dropdown-item p-0 rounded">
                        <a class="focus-ring focus-ring-primary rounded-1 px-5 py-3 btn btn-outline-primary border-0 border d-flex align-items-center justify-content-center gap-3"
                            href="<?= base_url('simple_crud/logout') ?>">
                            <!-- <i class="fa-solid fa-arrow-right-from-bracket"></i> -->
                            <span class="material-symbols-rounded">
                                logout
                            </span>

                            LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>