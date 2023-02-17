var NavLinks = document.getElementById('NavLinks')
function showMenu() {
  NavLinks.style.right = '0px'
}

function hideMenu() {
  NavLinks.style.right = '-200px'
}

// Fetch Posted Date for First User
let postDate1 = (document.querySelector('#get-post-date-1').innerHTML = Date())
let get_result = `Posted on ${postDate1}`

// Fetch Posted Date for Second User
let postDate2 = (document.querySelector('#get-post-date-2').innerHTML = Date())
let fetch_result = `Posted on ${postDate2}`

// Fetch Posted Date
let postDate3 = (document.querySelector('#get-post-date-3').innerHTML = Date())
let set_result = `Posted on ${postDate3}`

/*===== Resize Navbar on Scroll =====*/
var navbar = document.querySelector('.navbar')
//when the scroll is higher than 20 viewport height, add the sticky class to the tag with a class navbar
window.onscroll = () => {
  this.scrollY > 20
    ? navbar.classList.add('sticky')
    : navbar.classList.remove('sticky')
}
