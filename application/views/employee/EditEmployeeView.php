<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        How to EDIT EMPLOYEE DATA into DATABASE
                    
                        <a href="<?= base_url('employee'); ?>" class="btn btn-danger float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <!-- First Name -->
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input value="<?= $employeeData->FIRST_NAME ?>" name="employeeFirstName" type="text" class="form-control">
                            <small><?= form_error('employeeFirstName') ?></small>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input value="<?= $employeeData->LAST_NAME ?>" name="employeeLastName" type="text" class="form-control">
                            <small><?= form_error('employeeLastName') ?></small>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input value="<?= $employeeData->PHONE_NUMBER ?>" name="employeePhoneNumber" type="text" class="form-control">
                            <small><?= form_error('employeePhoneNumber') ?></small>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input value="<?= $employeeData->EMAIL_ADDRESS ?>" name="employeeEmailAddress" type="text" class="form-control">
                            <small><?= form_error('employeeEmailAddress') ?></small>
                        </div>

                        <!-- Create -->
                        <div class="form-group">
                            <button name="createEmployee" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>