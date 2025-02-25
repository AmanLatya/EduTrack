  <!-- Start footer -->
  <footer class="text-center fw-bold fs-5 py-1 shadow bg-white">
    <div class="row p-0 m-0">
      <div class="row p-0 m-0">
        <p>&copy; 2025 | All Rights Reserved</p>
        <a href="#" class="admin-link" data-bs-toggle="modal" data-bs-target="#AdminLoginModal">
          <i class="fas fa-user-shield"></i> Admin Login
        </a>
      </div>
    </div>
  </footer>
  <!-- End footer -->
  <!-- Start Admin Modal -->
  <section>
    <div class="modal fade" id="AdminLoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="AdminLoginModalLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/EduTrack/admin-login.php" method="POST">
              <div class="mb-3">
                <label for="AdminLoginEmail" class="form-label">Admin Email address</label>
                <input type="email" class="form-control" id="AdminLoginEmail" name="email" placeholder="name@example.com" required autocomplete="username">
              </div>
              <div class="mb-3">
                <label for="AdminPassword5" class="form-label">Password</label>
                <input type="password" id="AdminPassword5" class="form-control" name="password" required autocomplete="current-password">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Admin Modal -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="/EduTrack/js/popper.min.js"></script>
  <!-- Font Awesome -->
  <script src="/EduTrack/js/all.min.js"></script>
  <!-- jQuery -->
  <script src="/EduTrack/js/jQuery.min.js"></script>
  <!--Student Ajax Call Request -->
  <script src="/EduTrack/js/AjaxRequest.js"></script>

  <!-- Custom JS -->
   <script src="/EduTrack/js/EduScript.js"></script>