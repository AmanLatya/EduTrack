<form action="/WebProject/login.php" method="POST">
    <div class="mb-3">
        <label for="AdminLoginEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="AdminLoginEmail" name="email" placeholder="name@example.com" required autocomplete="username">
    </div>
    <div class="mb-3">
        <label for="AdminLoginPassword" class="form-label">Password</label>
        <input type="password" id="AdminLoginPassword" class="form-control" name="password" required autocomplete="current-password">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>