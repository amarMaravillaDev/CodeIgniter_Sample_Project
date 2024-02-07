<?php 
    // 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container"></div>
        <div class="row m-0 justify-content-center">
            <div class="col-10 col-lg-6">

                <?php if($this->session->flashdata('registerSuccess')) { ?>
                    <div class="alert alert-success shadow-sm">
                        <?= $this->session->flashdata('registerSuccess') ?>
                    </div>
                <?php } ?>

                <?php if($this->session->flashdata('registerFailed')) { ?>
                    <div class="alert alert-danger shadow-sm">
                        <?= $this->session->flashdata('registerFailed') ?>
                    </div>
                <?php } ?>

                <div class="card shadow-sm">
                    <!-- <?php 
                        $attributes = array("role" => "form");
                        echo form_open('', $attributes);
                    ?> -->
                    <form action="<?= base_url('register') ?>" method="POST">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="card-header">
                            <h5 class="my-2">Registration Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regFirstName">First Name</label>
                                        <input value="<?= set_value('regFirstName'); ?>" type="text" name="regFirstName" id="regFirstName" class="form-control <?php $formError = ($this->session->flashdata('register')) ? ((form_error('regFirstName')) ? "is-invalid" : (($this->input->post('regFirstName') != "") ? "is-valid" : "")) : ""; echo $formError ?>">
                                        <small class="invalid-feedback"><?= form_error('regFirstName') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regLastName">Last Name</label>
                                        <input value="<?= set_value('regLastName'); ?>" type="text" name="regLastName" id="regLastName" class="form-control <?php $formError = ($this->session->flashdata('register')) ? ((form_error('regLastName')) ? "is-invalid" : (($this->input->post('regLastName') != "") ? "is-valid" : "")) : ""; echo $formError ?>">
                                        <small class="invalid-feedback"><?= form_error('regLastName') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="regEmailAddress">Email Address</label>
                                        <input value="<?= set_value('regEmailAddress'); ?>" type="text" name="regEmailAddress" id="regEmailAddress" class="form-control <?php $formError = ($this->session->flashdata('register')) ? ((form_error('regEmailAddress')) ? "is-invalid" : (($this->input->post('regEmailAddress') != "") ? "is-valid" : "")) : ""; echo $formError ?>">
                                        <small class="invalid-feedback"><?= form_error('regEmailAddress') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regPassword">Password</label>
                                        <input type="password" name="regPassword" id="regPassword" class="form-control <?php $formError = (form_error('regPassword')) ? "is-invalid" : ""; echo $formError ?>">
                                        <small class="invalid-feedback"><?= form_error('regPassword') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regConfirmPassword">Confirm Password</label>
                                        <input type="password" name="regConfirmPassword" id="regConfirmPassword" class="form-control <?php $formError = (form_error('regConfirmPassword')) ? "is-invalid" : ""; echo $formError ?>">
                                        <small class="invalid-feedback"><?= form_error('regConfirmPassword') ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group m-0 justify-content-end d-flex">
                                <button type="submit" class="btn btn-primary px-4">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>