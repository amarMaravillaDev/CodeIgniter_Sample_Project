<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="d-flex flex-wrap w-100 h-100">
    <div class="w-100 d-flex align-items-center position-relative">

        <?php if($this->session->flashdata('loginToast')) { 
            $loginToast = json_decode(json_encode($this->session->flashdata('loginToast')));

            // echo '<script> console.log(`Toast: `, ' . json_encode($loginToast->toastStatus) . '); </script>';
        ?>
            <div class="toast-container position-fixed top-0 end-0 p-5">
                <div id="liveToast" class="toast show showHide <?= $loginToast->toastStatus ?>Toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header p-3 d-flex justify-content-between align-items-center">
                        <div class="text-<?= $loginToast->toastStatus ?> d-flex align-items-center justify-content-center gap-2">
                            <i class="text-<?= $loginToast->toastStatus ?> fa-solid fa-circle"></i>
                            SIMPLE CRUD
                        </div>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body p-3">
                        <?= $loginToast->toastMessage ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="p-5 w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 bg-primary-subtle p-auto">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h5 class="my-2">User's Page</h5>
                            </div>
                            <div class="card-body">
                                <h6>This is User's Page</h6>
                                <h5>First Name: <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?></h5>
                                <h5>Last Name: <?= $this->session->userdata('usersDetails')['LAST_NAME']; ?></h5>
                                <h5 class="m-0">Email Address: <?= $this->session->userdata('usersDetails')['EMAIL_ADDRESS']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>