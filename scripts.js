
function animateOnLoad() {
    const container = document.querySelector('.container');
    container.classList.add('animate-fadeInUp');
}


window.addEventListener('load', animateOnLoad);

function animateButton(button) {
    button.classList.add('button-click-animation');
    setTimeout(() => {
        button.classList.remove('button-click-animation');
    }, 300); 
}

const submitButton = document.querySelector('button[type="submit"]');
submitButton.addEventListener('click', function (event) {
    animateButton(this);
});
