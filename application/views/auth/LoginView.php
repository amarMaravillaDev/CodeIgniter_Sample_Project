<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">

                <?php if($this->session->flashdata('loginFailed')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                        <?= $this->session->flashdata('loginFailed') ?>
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                <?php } ?>

                <?php if($this->session->flashdata('logoutSuccess')) { ?>
                    <div class="alert alert-success shadow-sm">
                        <?= $this->session->flashdata('logoutSuccess') ?>
                    </div>
                <?php } ?>

                <?php if($this->session->flashdata('notLogin')) { ?>
                    <div class="alert alert-primary shadow-sm">
                        <?= $this->session->flashdata('notLogin') ?>
                    </div>
                <?php } ?>

                <div class="card shadow-sm">
                    <form action="<?= base_url('login') ?>" method="POST">
                        <div class="card-header">
                            <h5 class="my-2">Login Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="loginEmailAddress">Email Address</label>
                                <input value="<?= set_value('loginEmailAddress'); ?>" type="text" name="loginEmailAddress" id="loginEmailAddress" class="form-control <?php $formError = ($this->session->flashdata('login')) ? ((form_error('loginEmailAddress')) ? "is-invalid" : (($this->input->post('loginEmailAddress') != "") ? "is-valid" : "")) : ""; echo $formError ?>" placeholder="">
                                <small class="invalid-feedback"><?= form_error('loginEmailAddress') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" name="loginPassword" id="loginPassword" class="form-control <?php $formError = (form_error('loginPassword')) ? "is-invalid" : ""; echo $formError ?>" placeholder="">
                                <small class="invalid-feedback"><?= form_error('loginPassword') ?></small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group m-0 justify-content-end d-flex">
                                <button type="submit" class="btn btn-success px-4">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>