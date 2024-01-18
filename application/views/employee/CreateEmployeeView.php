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
                        How to CREATE EMPLOYEE DATA into DATABASE
                    
                        <a href="<?= base_url('employee'); ?>" class="btn btn-danger float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/store'); ?>" method="POST">
                        <!-- First Name -->
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input name="employeeFirstName" type="text" class="form-control">
                            <small><?= form_error('employeeFirstName') ?></small>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input name="employeeLastName" type="text" class="form-control">
                            <small><?= form_error('employeeLastName') ?></small>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input name="employeePhoneNumber" type="text" class="form-control">
                            <small><?= form_error('employeePhoneNumber') ?></small>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input name="employeeEmailAddress" type="text" class="form-control">
                            <small><?= form_error('employeeEmailAddress') ?></small>
                        </div>

                        <!-- Create -->
                        <div class="form-group">
                            <button name="createEmployee" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>