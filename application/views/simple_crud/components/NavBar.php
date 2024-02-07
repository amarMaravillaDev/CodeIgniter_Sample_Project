<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<nav class="navbar navbar-expand-lg bg-primary bg-gradient p-0">
    <div class="px-5 py-2 d-flex justify-content-between align-items-center w-100">
        <div class="d-flex align-items-center gap-3 p-4 px-5">
            <i class="fs-3 text-light fa-solid fa-circle"></i>

            <div class="d-flex gap flex-column text-center">
                <p class="fs-4 text-light m-0 d-flex">SIMPLE CRUD</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3 p-4 px-5">
            <div class="text-light">
                Hello, <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?>
            </div>
            <div class="position-relative shadow bg-light borderRadiusFull d-flex align-items-center justify-content-center p-4">
                <i class="fs-5 fa-solid fa-user text-primary d-flex align-items-center justify-content-center"></i>

                <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="border-0 bg-primary shadow position-absolute end-0 bottom-0 p-1 borderRadiusFull">
                    <div class="d-flex align-items-center justify-content-center squareXSm">
                        <i class="fa-solid fa-caret-down d-flex align-items-center justify-content-center text-light"></i>
                    </div>
                </button>

                <ul class="dropdown-menu dropDownLogout">
                    <li class="">
                        <a class="dropdown-item d-flex align-items-center justify-content-center gap-3" href="<?= base_url('simple_crud/logout') ?>">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>