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

        <?php if($this->session->flashdata('registerToast')) { 
            $registerToast = json_decode(json_encode($this->session->flashdata('registerToast')));

            // echo '<script> console.log(`Toast: `, ' . json_encode($registerToast->toastStatus) . '); </script>';
        ?>
            <div class="toast-container position-fixed top-0 end-0 p-5">
                <div id="liveToast" class="toast show showHide <?= $registerToast->toastStatus ?>Toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header p-3 d-flex justify-content-between align-items-center">
                        <div class="text-<?= $registerToast->toastStatus ?> d-flex align-items-center justify-content-center gap-2">
                            <i class="text-<?= $registerToast->toastStatus ?> fa-solid fa-circle"></i>
                            SIMPLE CRUD
                        </div>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body p-3">
                        <?= $registerToast->toastMessage ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="p-5 w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 bg-primary-subtle p-auto">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10 col-sm-12">
                        <form action="<?= base_url('simple_crud/register'); ?>" id="registerForm" method="POST" novalidate>
                        
                        <?php 
                            // echo '<script> console.log(`Token: ' . $this->security->get_csrf_hash() . '`); </script>';
                        ?>

                        <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"> -->
                        
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
                                                            <div class="form-floating <?= form_error('regFirstName') ? "is-invalid" : (($this->input->post('regFirstName')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regFirstName') ?>" type="text" class="form-control <?= form_error('regFirstName') ? "is-invalid" : (($this->input->post('regFirstName')) ? "is-valid" : ""); ?>" id="regFirstName" name="regFirstName" placeholder="First Name">
                                                                <label for="regFirstName">First Name</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regFirstName'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating <?= $this->session->flashdata('register') ? (form_error('regMiddleName') ? "is-invalid" : (($this->input->post('regMiddleName') || $this->input->post('regMiddleName') == "") ? "is-valid" : "")) : ""; ?>">
                                                                <input value="<?= set_value('regMiddleName') ?>" type="text" class="form-control <?= $this->session->flashdata('register') ? (form_error('regMiddleName') ? "is-invalid" : (($this->input->post('regMiddleName') || $this->input->post('regMiddleName') == "") ? "is-valid" : "")) : ""; ?>" id="regMiddleName" name="regMiddleName" placeholder="Middle Name (Optional)">
                                                                <label for="regMiddleName">Middle Name (Optional)</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regMiddleName'); ?>
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
                                                            <div class="form-floating <?= form_error('regLastName') ? "is-invalid" : (($this->input->post('regLastName')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regLastName') ?>" type="text" class="form-control <?= form_error('regLastName') ? "is-invalid" : (($this->input->post('regLastName')) ? "is-valid" : ""); ?>" id="regLastName" name="regLastName" placeholder="Last Name">
                                                                <label for="regLastName">Last Name</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regLastName'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                                            <div class="form-floating <?= $this->session->flashdata('register') ? (form_error('regSuffix') ? "is-invalid" : (($this->input->post('regSuffix') || $this->input->post('regSuffix') == "") ? "is-valid" : "")) : ""; ?>">
                                                                <input value="<?= set_value('regSuffix') ?>" type="text" class="form-control <?= $this->session->flashdata('register') ? (form_error('regSuffix') ? "is-invalid" : (($this->input->post('regSuffix') || $this->input->post('regSuffix') == "") ? "is-valid" : "")) : ""; ?>" id="regSuffix" name="regSuffix" placeholder="Suffix (Optional)">
                                                                <label for="regSuffix">Suffix (Optional)</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regSuffix'); ?>
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
                                                    <div class="form-floating <?= form_error('regGender') ? "is-invalid" : (($this->input->post('regGender')) ? "is-valid" : ""); ?>">
                                                        <select id="regGender" name="regGender" class="form-select <?= form_error('regGender') ? "is-invalid" : (($this->input->post('regGender')) ? "is-valid" : ""); ?>">
                                                            <?php 
                                                                $genders = ['Gender' => '', 'Male' => '', 'Female' => '']; 

                                                                foreach ($genders as $gender => $genderValue) {
                                                                    if(set_value('regGender')) {
                                                                        if($gender == set_value('regGender')) {
                                                                            $genders[$gender] = "selected";
                                                                            // echo '<script> console.log(`Gender: ' . json_encode($gender) . '`); </script>';
                                                                        }
                                                                    }
                                                                    else {
                                                                        $genders['Gender'] = "selected";
                                                                    }
                                                                }
                                                                // echo '<script> console.log(`All: ' . json_encode($genders) . '`); </script>';
                                                            ?>
                                                        
                                                            <option <?= $genders['Gender'] ?> disabled value="">Select Your Gender</option>
                                                            <option <?= $genders['Male'] ?> value="Male">Male</option>
                                                            <option <?= $genders['Female'] ?> value="Female">Female</option>
                                                        </select>
                                                        <label for="regGender">Gender</label>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        <?= form_error('regGender'); ?>
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
                                                            <div class="form-floating <?= form_error('regBirthDate') ? "is-invalid" : (($this->input->post('regBirthDate')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regBirthDate') ?>" type="date" class="form-control <?= form_error('regBirthDate') ? "is-invalid" : (($this->input->post('regBirthDate')) ? "is-valid" : ""); ?>" id="regBirthDate" name="regBirthDate" placeholder="Birth Date">
                                                                <label for="regBirthDate">Birth Date</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regBirthDate'); ?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-user-clock"></i>
                                                            </span>

                                                            <?php 
                                                                $today = new DateTime();
                                                                $birthDate = new DateTime(set_value('regBirthDate'));
                                                                $age = "";

                                                                // echo '<script> console.log(`Birth Date Object: `, ' . json_encode($birthDate) . '); </script>';
                                                                // echo '<script> console.log(`Today Object: `, ' . json_encode($today) . '); </script>';
                                                                // echo '<script> console.log(`Age Error Message: ' . form_error('regAge') . '`); </script>';

                                                                if($this->input->post('regBirthDate')) {
                                                                    $age = $today->diff($birthDate)->y;
                                                                }
                                                            ?>    

                                                            <div class="form-floating <?= $this->session->flashdata('register') || $age ? (form_error('regAge') ? "is-invalid" : (($this->input->post('regAge') || $age) ? "is-valid" : "")) : ""; ?>">
                                                                <input readonly value="<?= $age ?>" type="text" class="form-control <?= $this->session->flashdata('register') || $age ? (form_error('regAge') ? "is-invalid" : (($this->input->post('regAge') || $age) ? "is-valid" : "")) : ""; ?>" id="regAge" name="regAge" placeholder="Age">
                                                                <label for="regAge">Age</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regAge'); ?>
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
                                                            <div class="form-floating <?= form_error('regContactNumber') ? "is-invalid" : (($this->input->post('regContactNumber')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regContactNumber') ?>" type="text" class="form-control <?= form_error('regContactNumber') ? "is-invalid" : (($this->input->post('regContactNumber')) ? "is-valid" : ""); ?>" id="regContactNumber" name="regContactNumber" placeholder="Contact Number">
                                                                <label for="regContactNumber">Contact Number</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regContactNumber'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-envelope"></i>
                                                            </span>
                                                            <div class="form-floating <?= form_error('regEmailAddress') ? "is-invalid" : (($this->input->post('regEmailAddress')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regEmailAddress') ?>" type="text" class="form-control <?= form_error('regEmailAddress') ? "is-invalid" : (($this->input->post('regEmailAddress')) ? "is-valid" : ""); ?>" id="regEmailAddress" name="regEmailAddress" placeholder="Email Address">
                                                                <label for="regEmailAddress">Email Address</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regEmailAddress'); ?>
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
                                                            <div class="form-floating <?= form_error('regPassword') ? "is-invalid" : (($this->input->post('regPassword')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regPassword') ?>" type="password" class="form-control <?= form_error('regPassword') ? "is-invalid" : (($this->input->post('regPassword')) ? "is-valid" : ""); ?>" id="regPassword" name="regPassword" placeholder="Password">
                                                                <label for="regPassword">Password</label>
                                                            </div>
                                                            <span id="showPassword" class="input-group-text px-4 d-flex align-items-center justify-content-center">
                                                                <i class="fa-solid fa-eye-slash fs-5"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regPassword'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text px-4">
                                                                <i class="fa-solid fa-lock"></i>
                                                            </span>
                                                            <div class="form-floating <?= form_error('regConfirmPassword') ? "is-invalid" : (($this->input->post('regConfirmPassword')) ? "is-valid" : ""); ?>">
                                                                <input value="<?= set_value('regConfirmPassword') ?>" type="password" class="form-control <?= form_error('regConfirmPassword') ? "is-invalid" : (($this->input->post('regConfirmPassword')) ? "is-valid" : ""); ?>" id="regConfirmPassword" name="regConfirmPassword" placeholder="Confirm Password">
                                                                <label for="regConfirmPassword">Confirm Password</label>
                                                            </div>
                                                            <span id="showPassword" class="input-group-text px-4 d-flex align-items-center justify-content-center">
                                                                <i class="fa-solid fa-eye-slash fs-5"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                <?= form_error('regConfirmPassword'); ?>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-end p-4">
                                    <button type="submit" class="rounded-4 btn btn-primary focus-ring focus-ring-primary px-5 py-3" name="registerBtn">
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