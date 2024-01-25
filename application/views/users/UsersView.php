<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <?php if($this->session->flashdata('loginSuccess')) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('loginSuccess') ?>
                    </div>
                <?php } ?>

                <div class="card">
                    <div class="card-header">
                        <h5>User's Page</h5>
                    </div>
                    <div class="card-body">
                        <h6>This is User's Page</h6>
                        <h5>First Name: <?= $this->session->userdata('usersDetails')['FIRST_NAME']; ?></h5>
                        <h5>Last Name: <?= $this->session->userdata('usersDetails')['LAST_NAME']; ?></h5>
                        <h5>Email Address: <?= $this->session->userdata('usersDetails')['EMAIL_ADDRESS']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>