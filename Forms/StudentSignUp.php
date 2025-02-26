<section>
    <div class="modal fade" id="StudentSignUpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="StudentSignUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 fw-bold" id="StudentSignUpModalLabel">Student Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- SignUp form -->
                    <form method="POST" class="p-3 animated-form" id="SignUpForm">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="StudentSignUpName" class="form-label fw-bold">
                                <i class="fas fa-user text-primary"></i> Name
                            </label>
                            <input type="text" class="form-control input-animated" id="StudentSignUpName" name="name" placeholder="Enter your name" required>
                            <small class="text-danger error-msg" id="nameMsg"></small>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="StudentSignUpEmail" class="form-label fw-bold">
                                <i class="fas fa-envelope text-primary"></i> Email Address
                            </label>
                            <input type="email" class="form-control input-animated" id="StudentSignUpEmail" name="email" placeholder="name@example.com" required autocomplete="username">
                            <small class="text-danger error-msg" id="mailMsg"></small>
                        </div>

                        <!-- Guardian Email -->
                        <div class="mb-3">
                            <label for="GaurdianEmail" class="form-label fw-bold">
                                <i class="fas fa-envelope-open text-primary"></i> Guardian Email
                            </label>
                            <input type="email" class="form-control input-animated" id="GaurdianEmail" name="email" placeholder="Alternate email" required autocomplete="username">
                            <small class="text-danger error-msg" id="gaurdianMailMsg"></small>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="StudentSignUpPassword" class="form-label fw-bold">
                                <i class="fas fa-lock text-primary"></i> Password
                            </label>
                            <input type="password" id="StudentSignUpPassword" class="form-control input-animated" name="password" required autocomplete="new-password">
                            <small class="text-danger error-msg" id="passMsg"></small>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="StudentCnfPassword" class="form-label fw-bold">
                                <i class="fas fa-lock text-primary"></i> Confirm Password
                            </label>
                            <input type="password" id="StudentCnfPassword" class="form-control input-animated" name="confirm_password" required autocomplete="new-password">
                            <small class="text-danger error-msg" id="cnfPassMsg"></small>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer d-flex justify-content-between align-items-center">
                            <span id="successMsg" class="fs-5 text-success fw-bold"></span>
                            <div>
                                <button type="button" class="btn btn-primary px-4 py-2 shadow-sm animated-btn" id="SignUpSubmitBtn">
                                    <i class="fas fa-user-plus"></i> Sign Up
                                </button>
                                <button type="reset" class="btn btn-secondary px-4 py-2 shadow-sm animated-btn" data-bs-dismiss="modal">
                                    <i class="fas fa-times"></i> Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>