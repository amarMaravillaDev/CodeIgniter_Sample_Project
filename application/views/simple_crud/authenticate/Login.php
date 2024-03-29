<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="d-flex flex-wrap w-100 h-100">
    <div class="w-100 d-flex align-items-center position-relative">

        <?php
        if ($this->session->flashdata('loginToast')) {
            $loginToast = $this->session->flashdata('loginToast');

            $this->load->view('simple_crud/components/Toast', array("toast" => $loginToast));

            // echo '<script> console.log(`Toast: `, ' . json_encode($loginToast) . '); </script>';
        }
        ?>

        <div
            class="p-5 w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 bg-primary-subtle p-auto">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-7 col-sm-9">
                        <form action="<?= base_url('simple_crud/login') ?>" id="loginForm" method="POST" novalidate>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">

                            <div class="card shadow-lg border border-0 rounded-5 overflow-hidden">
                                <div class="card-header d-flex align-items-center gap-3 p-4">
                                    <!-- <i class="fs-3 text-primary fa-solid fa-circle"></i> -->
                                    <span class="fs-1 material-symbols-rounded text-primary">
                                        circle
                                    </span>

                                    <div class="d-flex gap flex-column text-center">
                                        <h4 class="text-primary m-0 d-flex">USERS FORM</h4>
                                        <p class="m-0 d-flex">(LOGIN AN USER)</p>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-3 p-5">
                                    <div class="d-grid gap-4 align-items-start w-100">
                                        <div class="input-group has-validation">
                                            <span class="input-group-text px-4">
                                                <!-- <i class="fa-solid fa-envelope"></i> -->
                                                <span class="material-symbols-rounded">
                                                    mail
                                                </span>
                                            </span>
                                            <div
                                                class="form-floating <?= form_error('loginEmailAddress') ? "is-invalid" : (($this->input->post('loginEmailAddress')) ? "is-valid" : ""); ?>">
                                                <input value="<?= set_value('loginEmailAddress') ?>" type="text"
                                                    class="form-control <?= form_error('loginEmailAddress') ? "is-invalid" : (($this->input->post('loginEmailAddress')) ? "is-valid" : ""); ?>"
                                                    name="loginEmailAddress" id="loginEmailAddress"
                                                    placeholder="Email Address">
                                                <label for="loginEmailAddress">Email Address</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?= form_error('loginEmailAddress'); ?>
                                            </div>
                                        </div>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text px-4">
                                                <!-- <i class="fa-solid fa-lock"></i> -->
                                                <span class="material-symbols-rounded">
                                                    key
                                                </span>
                                            </span>
                                            <div
                                                class="form-floating password <?= form_error('loginPassword') ? "is-invalid" : (($this->input->post('loginPassword')) ? "is-valid" : ""); ?>">
                                                <input type="password"
                                                    class="form-control password <?= form_error('loginPassword') ? "is-invalid" : (($this->input->post('loginPassword')) ? "is-valid" : ""); ?>"
                                                    name="loginPassword" id="loginPassword" placeholder="Password">
                                                <label for="loginPassword">Password</label>
                                            </div>
                                            <button id="loginShowPassword" type="button"
                                                class="showPassword input-group-text focus-ring focus-ring-primary px-4 d-flex align-items-center justify-content-center">
                                                <!-- <i class="fa-solid fa-eye fs-5"></i> -->
                                                <span class="material-symbols-rounded">
                                                    visibility
                                                </span>
                                            </button>
                                            <div class="invalid-feedback">
                                                <?= form_error('loginPassword'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card-footer d-flex align-items-center flex-wrap justify-content-between gap-4 p-4">
                                    <div
                                        class="d-flex gap-2 flex-grow-1 text-center align-items-center justify-content-center">
                                        No Account Yet?
                                        <a href="<?= base_url('simple_crud/register') ?>" id="registerLink"
                                            class="primary text-decoration-none">Register Here.</a>
                                    </div>

                                    <button type="submit"
                                        class="rounded-4 btn flex-grow-1 btn-primary focus-ring focus-ring-primary px-5 py-3"
                                        name="loginBtn">
                                        LOGIN
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