<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="border-end border-primary w-100 h-100 d-flex flex-column align-items-center">
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
    <div class="w-100 h-100 overflow-auto position-relative bg-light d-flex flex-column">
        <div class="d-flex align-items-center justify-content-center">
            <div class="w-100 position-relative profileBoard d-flex justify-content-center justify-content-md-start">
                <div class="w-100 h-100">
                    <?php if ($usersDetails['coverPhoto']) { ?>
                        <img src="" alt="coverPhoto"
                            class="d-flex align-items-center justify-content-center bg-primary bg-opacity-25 w-100 h-100">
                    <?php } else { ?>
                        <div class="d-flex align-items-center justify-content-center bg-primary bg-opacity-25 w-100 h-100">

                        </div>
                    <?php } ?>
                </div>

                <div class="position-absolute p-4 pt-5">

                    <?php if ($usersDetails['profilePicture']) { ?>
                        <img src="" alt="profilePicture"
                            class="d-flex align-items-center justify-content-center bg-light profileImage border border-2 border-primary">
                    <?php } else { ?>
                        <div
                            class="d-flex align-items-center justify-content-center bg-light profileImage border border-2 border-primary">
                            <span class="material-symbols-rounded">
                                person
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="w-100 p-4 pt-5 border-1 border-bottom border-primary text-md-start text-center">
            <h3>
                <?= $usersDetails['firstName'] . ($usersDetails['middleName'] ? " " . $usersDetails['middleName'] : "") . " " . $usersDetails['lastName'] . ($usersDetails['suffix'] ? " " . $usersDetails['suffix'] : ""); ?>
            </h3>
        </div>
        <div class="w-100 h-100 p-4">
            <div class="h-100 row m-0 row-gap-5">
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
</main>