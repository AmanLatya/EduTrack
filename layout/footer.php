  <!-- Start footer -->
  <footer class="text-center fw-bold fs-5 py-1 shadow-top bg-secondary">
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
            <h1 class="modal-title fs-4 fw-bold" id="AdminLoginModalLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- AdminLogin form -->
              <?php include('./Forms/AdminLogin.php') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Admin Modal -->