<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>:: ACFL ADMINS :: Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Lucid HR & Project Admin Dashboard Template with Bootstrap 5x">
  <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>

  <div id="layout" class="theme-cyan">
    <!-- WRAPPER -->
    <div id="wrapper">
      <div class="d-flex h100vh align-items-center auth-main w-100">
        <div class="auth-box">
          <div class="top mb-4">
            <div class="logo">
              <img src="<?php echo base_url('assets\images\logo\acfl-white-logo.png') ?>" width="120px;" />>
            </div>
          </div>
          <div class="card shadow p-lg-4">
            <div class="card-header">
              <p class="fs-5 mb-0">Login to your account</p>
            </div>
            <span style="color:red;"><?php echo $this->session->flashdata('error'); ?></span>
            <div class="card-body">
              <form class="form-body" method="post" action="<?php echo base_url() ?>login">
                <div class="form-floating mb-1">
                  <input name="email" type="email" class="form-control" placeholder="name@example.com">
                  <label>Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <label>Password</label>
                </div>
                <!-- <div class="form-check my-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div> -->
                <button type="submit" name="signin" value="signin" class="btn btn-primary w-100 px-3 py-2 mt-3">LOGIN</button>
              </form>
              <div class="mt-3 pt-3 border-top">
                <p class="mb-1"><a href="page-forgot-password.html"><i class="fa fa-lock me-2"></i>Forgot password?</a></p>
                <!-- <span>Don't have an account? <a href="page-register.html">Register</a></span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END WRAPPER -->
  </div>
</body>

</html>