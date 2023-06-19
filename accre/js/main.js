$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });
 
var a;
function pass()
{
    if (a==1)
    {
        document.getElementById('password').type='password';
        document.getElementById('pass-icon').src='img/closedeyes.png';
        a=0
    }
    else 
    {
        document.getElementById('password').type='text';
        document.getElementById('pass-icon').src='img/openeyes.png';
        a=1
    }
}


function validatePassword() {
    var passwordInput = document.getElementById("password");
    var passwordConfirmInput = document.getElementById("password-confirm");
    if (passwordInput.value !== passwordConfirmInput.value) {
      alert("The passwords do not match.");
      return false;
    }
    return true;
  }
  