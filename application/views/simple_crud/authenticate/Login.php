<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="d-flex flex-wrap w-100 h-100">
    <div class="w-100 d-flex align-items-center position-relative">
        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-4 bg-primary-subtle p-auto">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-7 col-sm-9 col">
                        <form action="">
                            <div class="card shadow-lg border border-0 rounded-4 overflow-hidden">
                                <div class="card-header d-flex align-items-center gap-3 px-4 py-3">
                                    <i class="fs-3 text-primary fa-solid fa-circle"></i>

                                    <div class="d-flex gap flex-column text-center">
                                        <p class="fs-4 text-primary m-0 d-flex">USERS FORM</p>
                                        <p class="m-0 d-flex">(LOG IN AN USER)</p>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-3 p-5">
                                    <div class="d-grid gap-4 align-items-start w-100">
                                        <div class="input-group">
                                            <span class="input-group-text px-4"><i class="fa-solid fa-envelope"></i></span>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="loginEmailAddress" placeholder="Email Address">
                                                <label for="loginEmailAddress">Email Address</label>

                                                <div class="invalid-feedback">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text px-4"><i class="fa-solid fa-lock"></i></span>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                                <label for="loginPassword">Password</label>

                                                <div class="invalid-feedback">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>