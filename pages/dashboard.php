<?php 
//   // make sure the user is logged in
//   if ( !UserIsAdmin() ) {
//     // if is not logged in, redirect to /login page
//     header("Location: /login");
//     exit;
//   }
require "parts/header.php"; 
require "parts/navbar.php";?>
  <div class="container mx-auto my-5" style="max-width: 800px">
    <h1 class="h1 mb-4 text-center">Dashboard</h1>
    <?php require "parts/message_success.php"; ?>
    <div class="row">
   
      <!-- manage posts -->
      <div class="col">
        <div class="card mb-2">
          <div class="card-body">
            <h5 class="card-title text-center">
              <div class="mb-1">
                <i class="bi bi-pencil-square" style="font-size: 3rem"></i>
              </div>
              Manage Products
            </h5>
            <div class="text-center mt-3">
              <a href="/manage-products" class="btn btn-primary btn-sm"
                >Access</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- manage users -->


      <div class="col">
        <div class="card mb-2">
          <div class="card-body">
            <h5 class="card-title text-center">
              <div class="mb-1">
                <i class="bi bi-people" style="font-size: 3rem"></i>
              </div>
              Manage Users
            </h5>
            <div class="text-center mt-3">
              <a href="/manage-users" class="btn btn-primary btn-sm"
                >Access</a
              >
            </div>
          </div>
        </div>
      </div><!-- .col -->

    </div>
    <div class="mt-4 text-center">
      <a href="/" class="btn btn-link btn-sm"
        ><i class="bi bi-arrow-left"></i> Back</a
      >
    </div>
  </div>

<?php require "parts/footer.php"; ?>