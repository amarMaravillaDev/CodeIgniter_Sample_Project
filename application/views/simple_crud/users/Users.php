<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="d-flex flex-column w-100 h-100">
    <div class="w-100 h-100 d-flex overflow-auto position-relative">

        <?php
        if ($this->session->flashdata('usersToast')) {
            $usersToast = $this->session->flashdata('usersToast');

            $this->load->view('simple_crud/components/Toast', array("toast" => $usersToast));

            // echo '<script> console.log(`Toast: `, ' . json_encode($usersToast) . '); </script>';
        }
        ?>

        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4">
            <div class="w-100 h-100 d-flex flex-column">

                <?php $this->load->view('simple_crud/components/NavBar'); ?>

                <div class="container-xxl px-0 w-100 h-100 d-flex overflow-auto position-relative">

                    <?php $this->load->view('simple_crud/components/SideBar', array("sideBar" => $sideBar)); ?>

                    <div class="w-100 h-100 overflow-auto fadeIn">
                        <?php $this->load->view($viewsData['view']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>