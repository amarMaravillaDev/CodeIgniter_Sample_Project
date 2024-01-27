<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 class="my-2">403 Forbidden</h4>
                    </div>
                    <div class="card-body">

                        <?php if($this->session->flashdata('adminFailed')) { ?>
                            <div class="alert alert-danger shadow-sm m-0">
                                <?= $this->session->flashdata('adminFailed') ?>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>