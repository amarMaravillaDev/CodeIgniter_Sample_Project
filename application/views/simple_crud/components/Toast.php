<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="toast-container position-absolute top-0 end-0 p-5">
    <div id="liveToast" class="toast  overflow-hidden rounded-4 border-<?= $toast['toastStatus'] ?>" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div
            class="toast-header border-<?= $toast['toastStatus'] ?> p-3 d-flex justify-content-between align-items-center">
            <div class="text-<?= $toast['toastStatus'] ?> d-flex align-items-center justify-content-center gap-2">
                <!-- <i class="text-<?= $toast['toastStatus'] ?> fa-solid fa-circle"></i> -->
                <span class="material-symbols-rounded">
                    circle
                </span>
                <h6>SIMPLE CRUD</h6>
            </div>
            <button type="button" class="btn-close m-0" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div
            class="toast-body d-flex align-items-center gap-2 bg-<?= $toast['toastStatus'] ?> <?= ($toast['toastStatus']) ? "text-light" : ""; ?> p-3">
            <span class="material-symbols-rounded">
                <?= $toast['toastIcon'] ?>
            </span>

            <?= $toast['toastMessage'] ?>
        </div>
    </div>
</div>