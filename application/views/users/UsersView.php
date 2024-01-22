<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <?php if($this->session->flashdata('loginSuccess')) { ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('loginSuccess') ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>