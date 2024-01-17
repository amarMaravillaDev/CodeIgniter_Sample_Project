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
                        How to FETCH EMPLOYEE DATA from DATABASE
                    
                        <a href="<?= base_url('employee/create'); ?>" class="btn btn-primary float-right">Create Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Actions</th>
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
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
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