<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="bg-light border-end border-primary w-100 h-100 d-flex flex-column align-items-center">
    <!-- Top Navigations -->
    <div class="col-12 p-4 border-bottom border-primary">
        <div class="row">
            <div class="col-lg-4 fs-5 d-flex align-items-center gap-3 text-primary ">
                <!-- <i class="fs-4 fa-solid fa-circle"></i> -->
                <span class="material-symbols-rounded">
                    person_edit
                </span>

                <h5>EDIT MY PROFILE</h5>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <form action="" class="w-100 h-100 overflow-auto position-relative d-flex flex-column">
        <div class="w-100 h-100 overflow-auto">
            <div class="w-100 d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="w-100 p-4 row m-0 row-gap-5">
                    <div class="col-lg-6 col-12 p-0 d-flex flex-column gap-3">
                        <div>
                            <h5>Other Personal Information</h5>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="material-symbols-rounded">
                                <?= $usersDetails['gender'] ?>
                            </span>
                            <p>
                                <?= $usersDetails['gender'] ?>
                            </p>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="material-symbols-rounded">
                                event
                            </span>
                            <p>
                                <?= $usersDetails['birthDate'] ?>
                            </p>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="material-symbols-rounded">
                                calendar_clock
                            </span>
                            <p>
                                <?= $usersDetails['age'] ?> Years Old
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 p-0 d-flex flex-column gap-3">
                        <div>
                            <h5>Contact Information</h5>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="material-symbols-rounded">
                                phone
                            </span>
                            <p>
                                <?= $usersDetails['contactNumber'] ?>
                            </p>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="material-symbols-rounded">
                                mail
                            </span>
                            <p>
                                <?= $usersDetails['emailAddress'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigations -->
        <div class="col-12 p-4 border-top border-primary text-primary">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-end gap-3">
                <a href="#" class="text-nowrap btn btn-primary p-3 px-5">Add an User</a>
            </div>
        </div>
    </form>
</main>