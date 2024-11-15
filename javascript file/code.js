//Java script code for toggle menu$$

let closeButton = document.getElementById('close-icon');
let menuButton = document.getElementById('menu-icon');

menuButton.onclick =() => {
    document.getElementById('nav-link-js').style.right = '0px';
};

closeButton.onclick = () => {
    document.getElementById('nav-link-js').style.right = '-200px';
};

