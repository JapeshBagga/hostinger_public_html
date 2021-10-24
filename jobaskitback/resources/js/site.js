// Trigger Modal to go Dashboard 
var modalId = document.querySelector('#modalDashboard');
if(modalId) $('#modalDashboard').modal('show')

// Fixed Navbar change background color
const navbar = document.querySelector('.nav-fixed');
window.onscroll = () => {
    if (window.scrollY > 50) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};

// Counters
$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 5000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});