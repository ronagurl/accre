<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Accreditation </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/index.css">
      <link rel="shortcut icon" href="img/cvsulogo.png" type="image/x-icon">
  </head>
  <body style="display:flex; align-items:center; justify-content:center;">
  <div class="login-page">
    <div class="form">
      <form class="register-form" method="POST">
        <h2><i class="fas fa-lock"></i> Register</h2>
        <input type="text" placeholder="Full Name *" required/>
        <input type="text" placeholder="Username *" required/>
        <input type="email" placeholder="Email *" required/>
        <input type="password" placeholder="Password *" required/>
        <button type="submit">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>


      <form class="login-form" method="post">
        <h2><i class="fas fa-lock"></i> Login</h2>
        <input type="text" placeholder="Username" required />
        <div class="password">
        <input type="password" placeholder="Password" id ="password" required/>
        <img src="img/closedeyes.png" onclick="pass()" class="pass-icon" id="pass-icon">
    </div>
        <button type="submit" name="send2">login</button>
      </form>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>