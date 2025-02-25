<form action="" method="POST" class="p-3 animated-form">
    <div class="mb-3">
        <label for="AdminLoginEmail" class="form-label fw-bold"><i class="fas fa-envelope text-primary"></i> Admin Email address</label>
        <input type="email" class="form-control input-animated" id="AdminLoginEmail" name="email" placeholder="name@example.com" required autocomplete="username">
    </div>
    <div class="mb-3">
        <label for="AdminPassword" class="form-label fw-bold"><i class="fas fa-lock text-primary"></i> Password</label>
        <!-- <input type="password" id="AdminPassword" class="form-control input-animated" name="password" required autocomplete="current-password"> -->
        <input type="password" id="AdminPassword" class="form-control input-animated" name="password" required autocomplete="current-password">
    </div>
    <div class="modal-footer">
        <span id="AdminLoginSuccessMsg" class="fs-5 text-success fw-bold"></span>
        <span id="AdminLoginFailedMsg" class="fs-5 text-danger fw-bold"></span>
        <button type="button" class="btn btn-primary animated-btn" id="AdminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary animated-btn" data-bs-dismiss="modal">Cancel</button>
    </div>
</form>