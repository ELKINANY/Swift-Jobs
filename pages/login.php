<?php include "./navBar.php" ?>
<div class="background-image">
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-form">
      <h2 class="text-center mb-4">تسجيل الدخول</h2>
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="البريد الالكتروني">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="كلمة المرور">
        </div>
        <button type="submit" class="btn btn-primary w-100">دخول</button>
        <div class="text-center mt-3">
          <a href="#" class="forgot-password">هل نسيت كلمة المرور؟</a>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php include "./footer.php" ?>