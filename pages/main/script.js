// Burger

let burgerMenu = document.getElementsByClassName("burger_menu")[0];
let menu = document.getElementsByClassName('menu')[0];

burgerMenu.onclick = () => {
    burgerMenu.classList.toggle('active_burger')
    menu.classList.toggle("activeMenu");
}

let menuItems = document.getElementsByClassName("menu__item");
for(let i = 0; i < menuItems.length; i++){
    menuItems[i].onclick = () => {
        burgerMenu.classList.toggle('active_burger')
        menu.classList.toggle("activeMenu");
    }
}

// Form button

let feedback = document.getElementsByClassName('test_leave_feedback')[0];
let closeBtn = document.getElementsByClassName("close")[0];
let formBox = document.getElementsByClassName("form_box")[0];
let feedbackForm = document.getElementsByClassName("form1")[0];

feedback.onclick = () => {
    formBox.classList.add('activeFeedback');
    feedbackForm.classList.add('activeFeedbackForm');
}

closeBtn.onclick = () => {
    formBox.classList.remove('activeFeedback');
    feedbackForm.classList.remove('activeFeedbackForm');
    feedbackForm.reset();
}

// Donation form button

let donate = document.getElementsByClassName("footer_donate")[0];
let donationForm = document.getElementsByClassName("donation_form")[0];
let closeBtnDonate = document.getElementsByClassName("close_donate")[0];

donate.onclick = () => {
    formBox.classList.add('activeFeedback');
    donationForm.classList.add('activeDonateForm');
}

closeBtnDonate.onclick = () => {
    formBox.classList.remove('activeFeedback');
    donationForm.classList.remove('activeDonateForm');
    infoContainer.classList.remove("activeInfoContainer");
    cardContainer.classList.remove("activeCardContainer");
    donationForm.reset();
}

let donateSubmit = document.getElementsByClassName("donateSubmit")[0];
let paySubmit = document.getElementsByClassName("paySubmit")[0];
let infoContainer = document.getElementsByClassName("infoContainer")[0];
let cardContainer = document.getElementsByClassName("cardContainer")[0];

donateSubmit.onclick = () => {
    infoContainer.classList.add("activeInfoContainer");
    cardContainer.classList.add("activeCardContainer");
}



// Swiper-Reviews

const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is <= 499px
        400: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        600: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetweenSlides: 40
        },
        1000: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetweenSlides: 50
        }
    }
});

// Swiper-Animals

const swiper2 = new Swiper('.myPets', {
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is <= 499px
        400: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        600: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetweenSlides: 40
        },
        1000: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetweenSlides: 50
        }
    }
});

// Scroll

ScrollReveal(
    {
        delay: 0,
        distance: '0px',
        duration: 2000,
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        interval: 0,
        opacity: 0,
        origin: 'bottom',
        rotate: {
            x: 0,
            y: 0,
            z: 0,
        },
        scale: 1,
        cleanup: false,
        container: document.documentElement,
        desktop: true,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.0,
        viewOffset: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0,
        },
        afterReset: function (el) {},
        afterReveal: function (el) {},
        beforeReset: function (el) {},
        beforeReveal: function (el) {},
    }
);

ScrollReveal().reveal('.reveal1', {
    delay: 300
});
ScrollReveal().reveal('.reveal7', {
    delay: 450
})
ScrollReveal().reveal('.reveal2', {
    delay: 600
})
ScrollReveal().reveal('.reveal8', {
    delay: 750
})
ScrollReveal().reveal('.reveal3', {
    delay: 900
})
ScrollReveal().reveal('.reveal4', {
    delay: 1200
})
ScrollReveal().reveal('.reveal5', {
    delay: 450
})
ScrollReveal().reveal('.reveal6', {
    delay: 750
})
