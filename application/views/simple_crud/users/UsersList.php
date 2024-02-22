<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="border-end border-primary w-100 h-100 d-flex flex-column align-items-center overflow-auto">
    <!-- Top Navigations -->
    <div class="col-12 p-4 border-bottom border-primary">
        <div class="row gap-3 gap-lg-0">
            <div class="col-lg-4 fs-5 d-flex align-items-center gap-3 text-primary ">
                <!-- <i class="fs-4 fa-solid fa-circle"></i> -->
                <span class="material-symbols-rounded">
                    circle
                </span>

                USERS LIST
            </div>
            <div class="col-lg-8 d-flex align-items-center gap-3">
                <div class="col-12">
                    <form id="usersSearchForm" action="<?= base_url('simple_crud/users/users_list') ?>" method="GET"
                        class="tableForm row gap-3 gap-lg-0 align-items-center" novalidate>
                        <?php if ($this->input->get('sortBy') && $this->input->get('orderBy')) { ?>
                            <input type="hidden" value="<?= $viewsData['sortBy'] ?>" name="sortBy">
                            <input type="hidden" value="<?= $viewsData['orderBy'] ?>" name="orderBy">
                        <?php } ?>

                        <div class="col-lg-4">
                            <div class="input-group has-validation">
                                <span class="input-group-text px-4">
                                    <!-- <i class="fa-solid fa-filter"></i> -->
                                    <!-- <i class="fa-solid fa-table-list"></i> -->
                                    <span class="material-symbols-rounded">
                                        filter_list
                                    </span>
                                </span>
                                <div
                                    class="form-floating <?= form_error('rowFilter') ? "is-invalid" : (($this->input->post('rowFilter')) ? "is-valid" : ""); ?>">
                                    <select id="rowFilter" name="rowFilter"
                                        class="usersFilter form-select <?= form_error('rowFilter') ? "is-invalid" : (($this->input->post('rowFilter')) ? "is-valid" : ""); ?>">
                                        <option <?= ($this->input->get('rowFilter') == "0") ? "selected" : "0" ?>
                                            value="0">Select a Filter</option>

                                        <?php
                                        foreach ($viewsData['pageFilters'] as $rowFilter) {
                                            ?>
                                            <option <?= ($this->input->get('rowFilter') == $rowFilter) ? "selected" : "" ?>
                                                value="<?= $rowFilter ?>">
                                                <?= $rowFilter ?>
                                            </option>
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
                                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                    <span class="material-symbols-rounded">
                                        search
                                    </span>
                                </span>
                                <div
                                    class="form-floating <?= form_error('searchFor') ? "is-invalid" : (($this->input->post('searchFor')) ? "is-valid" : ""); ?>">
                                    <input value="<?= $this->input->get("searchFor") ?>" type="text" aria-label="Search"
                                        class="form-control <?= form_error('searchFor') ? "is-invalid" : (($this->input->post('searchFor')) ? "is-valid" : ""); ?>"
                                        name="searchFor" id="searchFor" placeholder="Search Here">
                                    <label for="searchFor">Search Here</label>
                                </div>
                                <button class="btn btn-primary px-5 focus-ring focus-ring-primary" type="submit">
                                    Search
                                </button>
                                <div class="invalid-feedback">
                                    <?= form_error('searchFor'); ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="p-0 w-100 h-100 overflow-auto position-relative">
        <!-- Table Loader -->
        <div
            class="position-absolute tableLoader flex-column align-items-center justify-content-center gap-4 overflow-hidden w-100 h-100 bg-light z-3">
            <div class="text-primary d-flex flex-column align-items-center justify-content-center gap-4">
                <div class="spinner-grow tableSpinner" role="status">
                </div>

                <!-- <p class="m-0 p-0 fs-2">LOADING</p> -->
            </div>
        </div>

        <!-- Table -->
        <?php if ($viewsData['dbTotalRows']) { ?>

            <?php $this->load->view('simple_crud/components/Table', array("table" => $viewsData['usersSeedsTable'])); ?>

        <?php } else { ?>

            <div
                class="fs-5 overflow-hidden text-primary w-100 h-100 d-flex flex-column gap-3 justify-content-center align-items-center">
                <!-- <i class="fa-solid fa-file-circle-xmark tableDataIcon"></i> -->
                <!-- <i class="fa-solid fa-clipboard-question tableDataIcon"></i> -->
                <span class="material-symbols-rounded tableDataIcon">
                    playlist_remove
                </span>

                No Records Yet.
            </div>

        <?php } ?>
    </div>

    <!-- Bottom Navigations -->
    <div class="col-12 p-4 border-top border-primary text-primary">
        <div class="row gap-3 gap-xl-0">
            <div
                class="paginationLinks col-xl-8 d-flex align-items-center justify-content-xl-start justify-content-center gap-3">
                <?= $viewsData['paginationLinks'] ?>
            </div>
            <div class="col-xl-4 d-flex align-items-center justify-content-end gap-3">
                <a href="#" class="col-xl-6 col-12 btn btn-primary p-3 px-5">Add an User</a>
            </div>
        </div>
    </div>
</main>