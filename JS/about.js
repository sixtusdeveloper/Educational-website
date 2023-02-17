const registerBtn = document.querySelector('#redirect-register')
let registration_url = 'register.php'

function reg_init(event) {
  event.preventDefault()
  window.location.replace(registration_url)
}

registerBtn.addEventListener('click', function (event) {
  reg_init(event)
})

var NavLinks = document.getElementById('NavLinks')
function showMenu() {
  NavLinks.style.right = '0px'
}

function hideMenu() {
  NavLinks.style.right = '-200px'
}
