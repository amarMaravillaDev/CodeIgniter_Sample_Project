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
                    space_dashboard
                </span>

                <h5>DASHBOARD</h5>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="w-100 h-100 overflow-auto position-relative p-4 bg-light">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

            <?php
            if (count($viewsData['cards'])) {
                foreach ($viewsData['cards'] as $card) {
                    $this->load->view('simple_crud/components/Cards', array("cards" => $card));
                }
            }
            ?>

        </div>
    </div>
</main>