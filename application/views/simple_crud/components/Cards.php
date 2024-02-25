<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col fadeIn">
    <div class="d-flex align-items-center justify-content-center dashBoardCard card border-0 shadow-sm rounded-4 py-5">
        <div class="card-body p-0 gap-3 gap-lg-0 w-100 flex-column flex-lg-row row justify-content-center align-items-center <?= $cards['cardTextColor'] ?>">
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <span class="material-symbols-rounded tableDataIcon">
                    <?= $cards['cardIcon'] ?>
                </span>
            </div>
            <div class="col-12 col-lg-6 row align-items-center align-items-lg-start">
                <div class="col-12 fw-bold fs-1 d-flex justify-content-center justify-content-lg-start">
                    <?= $cards['cardTotalNumber'] ?>
                </div>
                <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                    <?= $cards['cardTitle'] ?>
                </div>
            </div>
        </div>
    </div>
</div>