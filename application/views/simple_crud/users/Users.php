<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="d-flex flex-column w-100 h-100">
    <div class="w-100 h-100 d-flex overflow-auto position-relative">

        <?php if ($this->session->flashdata('usersToast')) {
            $usersToast = json_decode(json_encode($this->session->flashdata('usersToast')));

            // echo '<script> console.log(`Toast: `, ' . json_encode($usersToast->toastStatus) . '); </script>';
            ?>
            <div class="toast-container position-fixed top-0 end-0 p-5">
                <div id="liveToast" class="toast overflow-hidden rounded-4 border-<?= $usersToast->toastStatus ?>"
                    role="alert" aria-live="assertive" aria-atomic="true">
                    <div
                        class="toast-header border-<?= $usersToast->toastStatus ?> p-3 d-flex justify-content-between align-items-center">
                        <div
                            class="text-<?= $usersToast->toastStatus ?> d-flex align-items-center justify-content-center gap-2">
                            <i class="text-<?= $usersToast->toastStatus ?> fa-solid fa-circle"></i>
                            SIMPLE CRUD
                        </div>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div
                        class="toast-body d-flex align-items-center gap-2 bg-<?= $usersToast->toastStatus ?> <?= ($usersToast->toastStatus) ? "text-light" : ""; ?> p-3">
                        <span class="material-symbols-rounded">
                            <?= $usersToast->toastIcon ?>
                        </span>

                        <?= $usersToast->toastMessage ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4">
            <div class="w-100 h-100 d-flex flex-column">

                <?php $this->load->view('simple_crud/components/NavBar'); ?>

                <div class="container-xxl px-0 w-100 h-100 d-flex overflow-auto position-relative">

                    <?php $this->load->view('simple_crud/components/SideBar'); ?>

                    <?php $this->load->view($viewsData['view']); ?>
                </div>
            </div>
        </div>
    </div>
</div>