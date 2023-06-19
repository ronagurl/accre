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
      <form class="login-form" method="POST">
        <h2><i class="fas fa-lock"></i> Change Password </h2>
        <input type="text" placeholder="admin123" required/>
        <div class="password">
          <input type="password" placeholder="new password" id ="password" required/>
          <input type="password" placeholder="confirm password" id ="password-confirm" required/>
          <img src="img/closedeyes.png" onclick="pass()" class="pass-icon" id="pass-icon">
        </div>
        <button type="submit" onclick="validatePassword()">Change Password</button>
      </form>
    </div>
  </div>

  <script> 
  var a;
  function pass()
{
    if (a==1)
    {
        document.getElementById('password').type='password';
        document.getElementById('password-confirm').type='password';
        document.getElementById('pass-icon').src='img/closedeyes.png';
        a=0
    }
    else 
    {
        document.getElementById('password').type='text';
        document.getElementById('password-confirm').type='text';
        document.getElementById('pass-icon').src='img/openeyes.png';
        a=1
    }
}
</script>
  </body>
  </html>
