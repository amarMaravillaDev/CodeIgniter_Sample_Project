<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<nav class="navbar navbar-expand-lg bg-primary bg-gradient p-0">
    <div class="px-5 py-4 d-flex justify-content-between align-items-center w-100">
        <div class="d-flex align-items-center gap-3">
            <i class="fs-3 text-light fa-solid fa-circle"></i>

            <div class="d-flex gap flex-column text-center">
                <p class="fs-4 text-light m-0 d-flex">SIMPLE CRUD</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="text-light">
                Hello, <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?>
            </div>
            <div class="position-relative shadow bg-light borderRadiusFull d-flex align-items-center justify-content-center p-4">
                <i class="fs-5 fa-solid fa-user text-primary"></i>

                <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="focus-ring focus-ring-primary border-1 border border-light bg-primary position-absolute end-0 bottom-0 p-1 borderRadiusFull">
                    <div class="d-flex align-items-center justify-content-center squareXSm">
                        <i class="fa-solid fa-caret-down d-flex align-items-center justify-content-center text-light"></i>
                    </div>
                </button>

                <ul class="dropdown-menu dropDownLogout p-1 border-0 shadow rounded-3">
                    <li class="dropdown-item p-0 rounded">
                        <a class="focus-ring focus-ring-primary rounded-1 px-5 py-3 btn btn-outline-primary border-0 border d-flex align-items-center justify-content-center gap-3" href="<?= base_url('simple_crud/logout') ?>">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>