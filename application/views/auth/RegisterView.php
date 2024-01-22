<?php 
    // 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container"></div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        <?php if($this->session->flashdata('status')) { ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('status') ?>
                        </div>
                        <?php } ?>
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('register') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regFirstName">First Name</label>
                                        <input value="<?= set_value('regFirstName'); ?>" type="text" name="regFirstName" id="regFirstName" class="form-control">
                                        <small><?= form_error('regFirstName') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regLastName">Last Name</label>
                                        <input value="<?= set_value('regLastName'); ?>" type="text" name="regLastName" id="regLastName" class="form-control">
                                        <small><?= form_error('regLastName') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="regEmailAddress">Email Address</label>
                                        <input value="<?= set_value('regEmailAddress'); ?>" type="text" name="regEmailAddress" id="regEmailAddress" class="form-control">
                                        <small><?= form_error('regEmailAddress') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regPassword">Password</label>
                                        <input type="password" name="regPassword" id="regPassword" class="form-control">
                                        <small><?= form_error('regPassword') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regConfirmPassword">Confirm Password</label>
                                        <input type="password" name="regConfirmPassword" id="regConfirmPassword" class="form-control">
                                        <small><?= form_error('regConfirmPassword') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary px-5">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>