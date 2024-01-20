<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <?php if($this->session->flashdata('status')) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status') ?>
                    </div>
                    <?php } ?>
                    <h5>
                        How to FETCH EMPLOYEE DATA from DATABASE
                    
                        <a href="<?= base_url('employee/create'); ?>" class="btn btn-primary float-right">Create Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="employeeTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Actions</th>
                                <th>Actions with Message Box</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($employeeData as $employeeDetails) {
                            ?>
                            <tr>
                                <td><?= $employeeDetails->EMPLOYEE_ID ?></td>
                                <td><?= $employeeDetails->FIRST_NAME ?></td>
                                <td><?= $employeeDetails->LAST_NAME ?></td>
                                <td><?= $employeeDetails->PHONE_NUMBER ?></td>
                                <td><?= $employeeDetails->EMAIL_ADDRESS ?></td>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/' . $employeeDetails->EMPLOYEE_ID); ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url('employee/delete/' . $employeeDetails->EMPLOYEE_ID); ?>" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <button value="<?= $employeeDetails->EMPLOYEE_ID; ?>" class="btn btn-danger deleteEmployee" id="">Delete</button>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>