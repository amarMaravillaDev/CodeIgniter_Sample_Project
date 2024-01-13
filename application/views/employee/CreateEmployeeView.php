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
                        How to INSERT EMPLOYEE DATA into DATABASE
                    
                        <a href="<?= base_url('employee'); ?>" class="btn btn-danger float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="">
                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Create -->
                        <div class="form-group">
                            <button class="btn btn-primary">
                                Create Employee
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>