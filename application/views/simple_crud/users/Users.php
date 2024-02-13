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
                <div id="liveToast"
                    class="toast showHide show overflow-hidden rounded-4 border-<?= $usersToast->toastStatus ?>"
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
                        class="toast-body bg-<?= $usersToast->toastStatus ?> <?= ($usersToast->toastStatus) ? "text-light" : ""; ?> p-3">
                        <?= $usersToast->toastMessage ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4">
            <div class="w-100 h-100 d-flex flex-column">

                <?php $this->load->view('simple_crud/components/NavBar'); ?>

                <div class="w-100 h-100 d-flex overflow-auto position-relative">

                    <?php $this->load->view('simple_crud/components/SideBar'); ?>

                    <main class="w-100 h-100 d-flex flex-column align-items-center overflow-auto">
                        <div class="col-12 p-4 border-bottom border-primary">
                            <div class="row gap-3 gap-lg-0">
                                <div class="col-lg-4 fs-5 d-flex align-items-center gap-3 text-primary ">
                                    <i class="fs-4 fa-solid fa-circle"></i>
                                    USERS LIST
                                </div>
                                <div class="col-lg-8 d-flex align-items-center gap-3">
                                    <div class="col-12">
                                    <form id="usersSearchForm" action="<?= base_url('simple_crud/users') ?>" method="GET" class="row gap-3 gap-lg-0 align-items-center" novalidate>
                                        <?php if($this->input->get('sortBy') && $this->input->get('orderBy')) { ?>
                                            <input type="hidden" value="<?= $sortBy ?>" name="sortBy">
                                            <input type="hidden" value="<?= $orderBy ?>" name="orderBy">
                                        <?php } ?>

                                        <div class="col-lg-4">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text px-4">
                                                    <i class="fa-solid fa-table-list"></i>
                                                </span>
                                                <div class="form-floating <?= form_error('rowFilter') ? "is-invalid" : (($this->input->post('rowFilter')) ? "is-valid" : ""); ?>">
                                                    <select id="rowFilter" name="rowFilter" class="usersFilter form-select <?= form_error('rowFilter') ? "is-invalid" : (($this->input->post('rowFilter')) ? "is-valid" : ""); ?>">
                                                        <option <?= ($this->input->get('rowFilter') == "0")? "selected" : "0" ?> value="0">Select A Filter</option>

                                                        <?php 
                                                            foreach($pageFilters as $rowFilter) {
                                                        ?>
                                                            <option <?= ($this->input->get('rowFilter') == $rowFilter)? "selected" : "" ?> value="<?= $rowFilter ?>"><?= $rowFilter ?></option>
                                                        <?php 
                                                            }
                                                        ?>

                                                    </select>
                                                    <label for="rowFilter">Filter</label>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= form_error('rowFilter'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-8">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text px-4">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <div
                                                    class="form-floating <?= form_error('searchFor') ? "is-invalid" : (($this->input->post('searchFor')) ? "is-valid" : ""); ?>">
                                                    <input 
                                                        value="<?= $this->input->get("searchFor") ?>" 
                                                        type="text"
                                                        aria-label="Search"
                                                        class="form-control <?= form_error('searchFor') ? "is-invalid" : (($this->input->post('searchFor')) ? "is-valid" : ""); ?>"
                                                        name="searchFor" id="searchFor"
                                                        placeholder="Search Here"
                                                    >
                                                    <label for="searchFor">Search Here</label>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= form_error('searchFor'); ?>
                                                </div>

                                                <button class="btn btn-primary px-5 focus-ring focus-ring-primary" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="p-0 w-100 h-100 flex-grow-1 flex-shrink-1 overflow-auto position-relative">
                            <div class="position-absolute tableLoader overflow-hidden w-100 h-100 bg-light z-3">
                                <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 text-primary">
                                    <div class="spinner-grow tableSpinner" role="status">
                                    </div>
                                    
                                    <p class="m-0 p-0 fs-2">LOADING</p>
                                </div>
                            </div>
                            <div class="w-100 h-100 d-flex justify-content-center align-items-center overflow-auto">
                                <div class="w-100 h-100 d-flex justify-content-center overflow-auto">
                                    <div class=" d-flex flex-column gap-4 w-100 h-100">
                                        
                                        <!-- <?php $this->load->view('simple_crud/components/Table', array("table" => $usersTable)); ?> -->

                                        <div class="overflow-auto w-100 h-100">
                                            <div class="overflow-auto w-100 h-100">

                                                <?php $this->load->view('simple_crud/components/Table', array("table" => $usersSeedsTable)); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-4 border-top border-primary text-primary">
                            <div class="row gap-3 gap-xl-0">
                                <div class="col-xl-8 d-flex align-items-center justify-content-xl-start justify-content-center gap-3">
                                    <?= $paginationLinks ?>
                                </div>
                                <div class="col-xl-4 d-flex align-items-center justify-content-end gap-3">
                                    <a href="#" class="col-xl-6 col-12 btn btn-primary p-3 px-5">Add an User</a>
                                </div>                                        
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>