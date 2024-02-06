<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="d-flex flex-wrap w-100 h-100">
    <div class="w-100 d-flex align-items-center position-relative">

        <?php if($this->session->flashdata('usersToast')) { 
            $usersToast = json_decode(json_encode($this->session->flashdata('usersToast')));

            // echo '<script> console.log(`Toast: `, ' . json_encode($usersToast->toastStatus) . '); </script>';
        ?>
            <div class="toast-container position-fixed top-0 end-0 p-5">
                <div id="liveToast" class="toast show showHide <?= $usersToast->toastStatus ?>Toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header p-3 d-flex justify-content-between align-items-center">
                        <div class="text-<?= $usersToast->toastStatus ?> d-flex align-items-center justify-content-center gap-2">
                            <i class="text-<?= $usersToast->toastStatus ?> fa-solid fa-circle"></i>
                            SIMPLE CRUD
                        </div>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body p-3">
                        <?= $usersToast->toastMessage ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4">
            <div class="w-100 h-100 d-flex flex-column">

                <?php $this->load->view('simple_crud/components/NavBar'); ?>

                <div class="w-100 h-100 d-flex">

                    <?php $this->load->view('simple_crud/components/SideBar'); ?>

                    <main class="w-100 h-100 d-flex p-5">
                        <div class="container p-0">
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
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>