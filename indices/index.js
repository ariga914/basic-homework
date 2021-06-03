function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
/*
href="javascript:void(0);" is a trick to prevent to page jump to
top if you're set href="#" and click on its tag.
its means attribute href will not works when <a> tag was clicked.
Because result of javascript:void(0) return false;
*/

function toggleScrollButton() {
    const lastPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');

    if (lastPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
}

window.addEventListener('scroll', function() {
    toggleScrollButton();
});

window.addEventListener('load', () => {
    toggleScrollButton();
});



document.addEventListener('click', (e) => {
    if (e.target.className === 'login') {
        document.getElementById('login-form').style.display = "inline-block";
    } else if (e.target.id === "login-form" || e.target.parentNode.id === "exhausting" || e.target.parentNode.id === "login-form") {
        document.getElementById('login-form').style.display = "inline-block";
    } else {
        document.getElementById('login-form').style.display = "none";
    }
});