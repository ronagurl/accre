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
  <body>
  <div class="login-page">
    <div class="form">
    <h2><i class="fas fa-lock"></i> Security Questions </h2>
  <select name="security_question">
  <option value="What is your favorite color?">What is your favorite color?</option>
  <option value="What is your favorite color?">In what city or town is your first job?</option>
  <option value="What is your pet's name?">What is your pet's name?</option>
  <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
  <option value="What is your mother's maiden name?">What elementary school did you attend?</option>
  <input type="text" placeholder="Answer" required />
  </select>

  <select name="security_question">
  <option value="What is your favorite color?">What is your favorite color?</option>
  <option value="What is your favorite color?">In what city or town is your first job?</option>
  <option value="What is your pet's name?">What is your pet's name?</option>
  <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
  <option value="What is your mother's maiden name?">What elementary school did you attend?</option>
  <input type="text" placeholder="Answer" required />
  </select>

  <select name="security_question">
  <option value="What is your favorite color?">What is your favorite color?</option>
  <option value="What is your favorite color?">In what city or town is your first job?</option>
  <option value="What is your pet's name?">What is your pet's name?</option>
  <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
  <option value="What is your mother's maiden name?">What elementary school did you attend?</option>
  <input type="text" placeholder="Answer" required />
  </select>

  <button type="submit">Done</button>
  </div>
  </div>


    <script>
      function validateSecurityQuestion() {
  var securityQuestion = document.getElementById("security_question").value;
  if (securityQuestion == "") {
    alert("Please select a security question.");
    return false;
  }
  return true;
}
      </script>
  </body>
</html>
