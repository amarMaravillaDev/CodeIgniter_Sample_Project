<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');
?>

<nav class="navbar navbar-expand-lg bg-primary bg-gradient p-0">
    <div class="p-4 justify-content-center align-items-center container-xxl">
        <div class="row row-gap-4 w-100">
            <div
                class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-start align-items-center gap-3 text-light">
                <!-- <i class="fs-3 text-light fa-solid fa-circle"></i> -->
                <span class="material-symbols-rounded fs-2">
                    circle
                </span>

                <h4>SIMPLE CRUD</h4>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center gap-3">
                <div class="text-light">
                    Hello,
                    <?= $usersDetails['firstName']; ?>
                </div>
                <div
                    class="navBarProfile position-relative dropdown shadow bg-light borderRadiusFull d-flex align-items-center justify-content-center p-4">
                    <span class="material-symbols-rounded text-primary fs-2">
                        person
                    </span>

                    <button type="button" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        class="focus-ring focus-ring-primary border-1 border border-light bg-primary position-absolute end-0 bottom-0 p-1 borderRadiusFull">
                        <div class="d-flex align-items-center justify-content-center squareXSm">
                            <span class="material-symbols-rounded fs-4 text-light">
                                arrow_drop_down
                            </span>
                        </div>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end mt-2 p-1 border-0 shadow rounded-3">
                        <li class="dropdown-item p-0 rounded">
                            <a class="focus-ring focus-ring-primary rounded-1 px-5 py-3 btn btn-outline-primary border-0 border d-flex align-items-center justify-content-center gap-3"
                                href="<?= base_url('simple_crud/logout') ?>">
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
    </div>
</nav>