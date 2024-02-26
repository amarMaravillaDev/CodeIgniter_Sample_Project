<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="border-end border-primary w-100 h-100 d-flex flex-column align-items-center overflow-auto">
    <!-- Top Navigations -->
    <div class="col-12 p-4 border-bottom border-primary">
        <div class="row">
            <div class="col-lg-4 fs-5 d-flex align-items-center gap-3 text-primary ">
                <!-- <i class="fs-4 fa-solid fa-circle"></i> -->
                <span class="material-symbols-rounded">
                    person
                </span>

                <h5>MY PROFILE</h5>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="w-100 h-100 overflow-auto position-relative bg-light">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative profileBoard d-flex justify-content-center justify-content-md-start bg-primary bg-opacity-25 rounded-2">
                        <div class="w-100 h-100">
                            <img src="" alt="coverPhoto" class="d-flex align-items-center justify-content-center bg-primary bg-opacity-25 w-100 h-100 rounded-2">
                        </div>
                    
                        <div class="position-absolute p-5">
                            <img src="" alt="profilePicture" class="d-flex align-items-center justify-content-center bg-light profileImage border border-2 border-primary">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="p-5 rounded-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>