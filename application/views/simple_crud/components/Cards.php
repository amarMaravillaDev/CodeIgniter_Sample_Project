<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col">
    <div class="fadeIn card border-0 shadow-sm rounded-4 p-4">
        <div class="card-body gap-3 flex-column flex-lg-row row justify-content-center align-items-center <?= $cards['cardTextColor'] ?>">
            <div class="col d-flex align-items-center justify-content-center">
                <span class="material-symbols-rounded tableDataIcon">
                    <?= $cards['cardIcon'] ?>
                </span>
            </div>
            <div class="col d-flex flex-column align-items-center align-items-lg-start">
                <div class="fw-bold fs-1"><?= $cards['cardTotalNumber'] ?></div>
                <?= $cards['cardTitle'] ?>
            </div>
        </div>
    </div>
</div>