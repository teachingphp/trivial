var contra = document.getElementById("Contra")
, ConfirmContra = document.getElementById("ConfirmContra");

function validarCon(){
    if(contra.value != ConfirmContra.value) {
        ConfirmContra.setCustomValidity("Las contraseñas no coinciden !");
    } else {
        ConfirmContra.setCustomValidity('');

    }
}

contra.onchange = validarCon;
ConfirmContra.onkeyup= validarCon;

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#Contra');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#ConfirmContra');
 
  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});