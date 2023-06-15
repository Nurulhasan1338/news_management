<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <style>
    body {
      background-color: #ffffff;
      margin: 0;
      padding: 0;
    }

    .login-block {
      background-color: #ffffff;
      border-radius: 5px;
      display: flex;
      align-items: center;
      height: 100vh;
    }

    .login-content {
      margin: auto;
    }

    .login-image {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
    }

    .input-lg {
      /* height: 50px; */
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-lg-4">
        <div class="login-block">
          <div class="login-content">
            <h3 class="text-center mb-4">Login</h3>
            <?php
            if (isset($_POST['submit'])) {
              // Check the entered email and password
              $email = $_POST['email'];
              $password = $_POST['password'];

              // Check if the password is incorrect
              $password_correct = false; // Replace with your password validation logic

              if (!$password_correct) {
                echo '<div class="alert alert-danger" role="alert">Incorrect password. Please try again.</div>';
              }
            }
            ?>
            <form method="POST" action="">
              <div class="form-group">
                <label for="email"><strong>Email Address</strong></label>
                <input type="email" class="form-control input-lg" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password"><strong>Password</strong></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i id="password-toggle" class="fa fa-eye-slash"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <a href="#">Forgot Password?</a>
              </div>
              <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-center">
        <img src="image/img.jpg" alt="Image" class="login-image">
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      // Show or hide the password
      $('#password-toggle').click(function() {
        var passwordInput = $('#password');
        var passwordIcon = $(this);

        if (passwordInput.attr('type') === 'password') {
          passwordInput.attr('type', 'text');
          passwordIcon.removeClass('fa-eye-slash');
          passwordIcon.addClass('fa-eye');
        } else {
          passwordInput.attr('type', 'password');
          passwordIcon.removeClass('fa-eye');
          passwordIcon.addClass('fa-eye-slash');
        }
      });
    });
  </script>
</body>
</html>
