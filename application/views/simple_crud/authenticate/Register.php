<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="d-flex flex-wrap w-100 h-100">
    <div class="w-100 d-flex align-items-center position-relative">
        <div class="position-fixed top-0 start-0 m-5 z-1">
            <div>
                <a href="<?= base_url('simple_crud/login'); ?>" class="d-flex align-items-center justify-content-center gap-2 rounded-5 btn btn-primary focus-ring focus-ring-primary px-5 py-3">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> LOGIN
                </a>
            </div>
        </div>

        <div class="p-5 w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 bg-primary-subtle p-auto">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10 col-sm-12">
                        <form action="#" id="registerForm" method="POST">
                            <div class="card shadow-lg border border-0 rounded-5 overflow-hidden">
                                <div class="card-header d-flex align-items-center gap-3 p-4">
                                    <i class="fs-3 text-primary fa-solid fa-circle"></i>

                                    <div class="d-flex gap flex-column text-center">
                                        <p class="fs-4 text-primary m-0 d-flex">USERS FORM</p>
                                        <p class="m-0 d-flex">(REGISTER AN USER)</p>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-3 p-5">
                                    <div class="d-grid gap-5 align-items-start w-100">
                                        <div class="row gap-3">
                                            <div class="col-12">
                                                <div class="row gap-3 gap-md-0">
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regFirstName" name="regFirstName" placeholder="First Name">
                                                                <label for="regFirstName">First Name</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regMiddleName" name="regMiddleName" placeholder="Middle Name (Optional)">
                                                                <label for="regMiddleName">Middle Name (Optional)</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row gap-3 gap-md-0">
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regLastName" name="regLastName" placeholder="Last Name">
                                                                <label for="regLastName">Last Name</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regSuffix" name="regSuffix" placeholder="Suffix (Optional)">
                                                                <label for="regSuffix">Suffix (Optional)</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text px-4">
                                                        <i class="fa-solid fa-venus-mars"></i>
                                                    </span>
                                                    <div class="form-floating">
                                                        <select id="regGender" name="regGender" class="form-select">
                                                            <option selected disabled value="">Select Your Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        <label for="regGender">Gender</label>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row gap-3 gap-md-0">
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="date" class="form-control" id="regBirthDate" name="regBirthDate" placeholder="Birth Date">
                                                                <label for="regBirthDate">Birth Date</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user-clock"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input readonly type="text" class="form-control" id="regAge" name="regAge" placeholder="Age">
                                                                <label for="regAge">Age</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gap-3">
                                            <div class="col-12">
                                                <div class="row gap-3 gap-md-0">
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-phone"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regContactNumber" name="regContactNumber" placeholder="Contact Number">
                                                                <label for="regContactNumber">Contact Number</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-envelope"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="regEmailAddress" name="regEmailAddress" placeholder="Email Address">
                                                                <label for="regEmailAddress">Email Address</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row gap-3 gap-md-0">
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-lock"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password">
                                                                <label for="regPassword">Password</label>
                                                            </div>
                                                            <span id="showPassword" class="input-group-text px-4 d-flex align-items-center justify-content-center">
                                                                <i class="fa-solid fa-eye-slash fs-5"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-lock"></i>
                                                            </span>
                                                            <div class="form-floating">
                                                                <input type="password" class="form-control" id="regConfirmPassword" name="regConfirmPassword" placeholder="Confirm Password">
                                                                <label for="regConfirmPassword">Confirm Password</label>
                                                            </div>
                                                            <span id="showPassword" class="input-group-text px-4 d-flex align-items-center justify-content-center">
                                                                <i class="fa-solid fa-eye-slash fs-5"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-end p-4">
                                    <button type="submit" class="rounded-5 btn btn-primary focus-ring focus-ring-primary px-5 py-3" name="registerBtn">
                                        REGISTER
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>