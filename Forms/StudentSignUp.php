<form method="POST" class="p-3" id="SignUpForm">
    <!-- Name Field -->
    <div class="mb-3">
        <label for="StudentSignUpName" class="form-label fw-bold">
            <i class="fas fa-user text-primary"></i> Name
        </label>
        <input type="text" class="form-control shadow-sm" id="StudentSignUpName" name="name" placeholder="Enter your name" required>
        <small class="text-danger d-block mt-1" id="nameMsg"></small>
    </div>

    <!-- Email Field -->
    <div class="mb-3">
        <label for="StudentSignUpEmail" class="form-label fw-bold">
            <i class="fas fa-envelope text-primary"></i> Email Address
        </label>
        <input type="email" class="form-control shadow-sm" id="StudentSignUpEmail" name="email" placeholder="name@example.com" required autocomplete="username">
        <small class="text-danger d-block mt-1" id="mailMsg"></small>
    </div>

    <!-- Alternate Email -->
    <div class="mb-3">
        <label for="AlternateEmail" class="form-label fw-bold">
            <i class="fas fa-envelope-open text-primary"></i> Additional Email
        </label>
        <input type="email" class="form-control shadow-sm" id="AlternateEmail" name="email" placeholder="Alternate email" required autocomplete="username">
        <small class="text-danger d-block mt-1" id="alterMailMsg"></small>
    </div>

    <!-- Password Field -->
    <div class="mb-3">
        <label for="StudentSignUpPassword" class="form-label fw-bold">
            <i class="fas fa-lock text-primary"></i> Password
        </label>
        <input type="password" id="StudentSignUpPassword" class="form-control shadow-sm" name="password" required autocomplete="new-password">
        <small class="text-danger d-block mt-1" id="passMsg"></small>
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <label for="StudentCnfPassword" class="form-label fw-bold">
            <i class="fas fa-lock text-primary"></i> Confirm Password
        </label>
        <input type="password" id="StudentCnfPassword" class="form-control shadow-sm" name="confirm_password" required autocomplete="new-password">
        <small class="text-danger d-block mt-1" id="cnfPassMsg"></small>
    </div>

    <!-- Modal Footer -->
    <div class="modal-footer d-flex justify-content-between align-items-center">
        <span id="successMsg" class="fs-5 text-success fw-bold"></span>
        <div>
            <button type="button" class="btn btn-primary px-4 py-2 shadow-sm" id="SignUpSubmitBtn">
                <i class="fas fa-user-plus"></i> Sign Up
            </button>
            <button type="reset" class="btn btn-secondary px-4 py-2 shadow-sm" data-bs-dismiss="modal">
                <i class="fas fa-times"></i> Cancel
            </button>
        </div>
    </div>
</form>
