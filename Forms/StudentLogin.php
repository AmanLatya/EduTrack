<section>
    <div class="modal fade" id="StudentLoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="StudentLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 fw-bold" id="StudentLoginModalLabel">Student Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Login form -->
                    <form method="POST" class="p-3 animated-form" id="StudentLoginForm">
                        <div class="mb-3">
                            <label for="StudentLoginEmail" class="form-label fw-bold"><i class="fas fa-envelope text-primary"></i> Email address</label>
                            <input type="email" class="form-control input-animated" id="StudentLoginEmail" name="email" placeholder="name@example.com" required autocomplete="username">
                        </div>
                        <div class="mb-3">
                            <label for="StudentLoginPassword" class="form-label fw-bold"><i class="fas fa-lock text-primary"></i> Password</label>
                            <input type="password" id="StudentLoginPassword" class="form-control input-animated" name="password" required autocomplete="current-password">
                        </div>
                        <div class="modal-footer">
                            <span id="StudentLoginFailedMsg" class="fs-5 text-danger fw-bold"></span>
                            <span id="StudentLoginSuccessMsg" class="fs-5 text-success fw-bold"></span>
                            <button type="button" class="btn btn-primary animated-btn" id="StudentLoginBtn">Login</button>
                            <button type="button" class="btn btn-secondary animated-btn" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>