let open = document.getElementById("open"),
    close = document.getElementById("close"),
    menu = document.getElementById("menu")

function common(x, y, z) {
    x.addEventListener("click", () => {
        x.classList.toggle("hide");
        y.classList.toggle("hide");

        if (z == "slide-in" || z == 'slide-out') {
            menu.classList.toggle("slide");
        }
    })
}

common(open, close, "slide-in");
common(close, open, "slide-out");

navLink = document.querySelectorAll('.header__link');

function linkAction() {
    navLink.forEach(n => n.classList.remove('active'));
    this.classList.add('active');
    menu.classList.remove('slide');
}

navLink.forEach(n => n.addEventListener('click', linkAction));
document.getElementById('open').addEventListener('click', function() {
  document.querySelector('.image-home').classList.add('menu-open');
});

document.getElementById('close').addEventListener('click', function() {
  document.querySelector('.image-home').classList.remove('menu-open');
});





