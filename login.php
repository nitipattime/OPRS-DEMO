<?php 
  /**
   * Login Page
   *
   * @link https://appzstory.dev
   * @author Yothin Sapsamran (Jame AppzStory Studio)
   */  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
  <link rel="stylesheet" href="login/assets/css/adminlte.min.css">
  <link rel="stylesheet" href="login/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="login/assets/css/styles.css">
  <link rel="shortcut icon" href="assets/LOGO KMUTNB .png">
</head>
<body>
<header class="bg"></header>
<section class="d-flex align-items-center min-vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <section class="col-lg-6">
        <div class="card shadow p-3 p-md-4">
          <h1 class="text-center">
            <img src="assets/LOGO KMUTNB .png" width="120" height="120"  alt="LOGO KMUTNB">
          </h1>
          <h2 class="text-center font-weight-bold" style="color:#AC3520;">LOGIN <span style="color:black;">OPRS FAA</span> </h2>
          <!-- <h4 class="text-center">OPRS</h4>  -->
          <div class="card-body">

            <!-- HTML Form Login --> 
            <form action="check_login.php" method="post"
            //id="formLogin"
            >
              <div class="form-group col-sm-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text px-2">ชื่อผู้ใช้งาน</div>
                  </div>
                  <input type="text" class="form-control" name="username" placeholder="username" required>
                </div>
              </div>
              <div class="form-group col-sm-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text px-3">รหัสผ่าน</div>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
              </div>
              <button type="submit" class="btn btn-block" style="background-color: #AC3520; color:white;"> เข้าสู่ระบบ</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<!-- script -->
<script src="login/plugins/jquery/jquery.min.js"></script>
<!-- <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
<script src="login/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="plugins/"></script> -->
<script src="login/plugins/toastr/toastr.min.js"></script>
<!-- <script>
  $(function() {
    /** Ajax Submit Login */
    $("#formLogin").submit(function(e){
      e.preventDefault()
      $.ajax({
        type: "POST",
        url: "service/auth/login.php",
        data: $(this).serialize()
      }).done(function(resp) {
        toastr.success('เข้าสู่ระบบเรียบร้อย')
        setTimeout(() => {
          location.href = 'mm.php'
        }, 800)
      }).fail(function(resp) {
        toastr.error('ไม่สามารถเข้าสู่ระบบได้')
        // location.href = 'mm.php'
        location.href = 'check_login.php'
      })
    })
  })
</script> -->
</body>
</html>
