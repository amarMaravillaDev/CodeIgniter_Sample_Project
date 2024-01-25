<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                <?php if($this->session->flashdata('loginFailed')) { ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('loginFailed') ?>
                    </div>
                <?php } ?>

                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login Form</h5>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('login') ?>" method="POST">
                        <div class="form-group">
                            <label for="loginEmailAddress">Email Address</label>
                            <input value="<?= set_value('loginEmailAddress'); ?>" type="text" name="loginEmailAddress" id="loginEmailAddress" class="form-control" placeholder="Enter Your Email Address">
                            <small><?= form_error('loginEmailAddress') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" name="loginPassword" id="loginPassword" class="form-control" placeholder="Enter Your Password">
                            <small><?= form_error('loginPassword') ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>