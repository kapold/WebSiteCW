// Burger

let burgerMenu = document.getElementsByClassName("burger_menu")[0];
let menu = document.getElementsByClassName('menu')[0];

burgerMenu.onclick = () => {
    burgerMenu.classList.toggle('active_burger')
    menu.classList.toggle("activeMenu");
}

let menuItems = document.getElementsByClassName("menu__item");
for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].onclick = () => {
        burgerMenu.classList.toggle('active_burger')
        menu.classList.toggle("activeMenu");
    }
}

// Footer donate

let donate = document.getElementsByClassName("footer_donate")[0];
let donationForm = document.getElementsByClassName("donation_form")[0];
let closeBtnDonate = document.getElementsByClassName("close_donate")[0];
let formBox = document.getElementsByClassName("form_box")[0];

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

// Hover

$(document).ready(function () {
    $(".marker.mk1").hover(function () {
        $(".f-panda").toggle();
    })
})
$(document).ready(function () {
    $(".marker.mk2").hover(function () {
        $(".f-eagle").toggle();
    })
})
$(document).ready(function () {
    $(".marker.mk3").hover(function () {
        $(".f-alligator").toggle();
    })
})
$(document).ready(function () {
    $(".marker.mk4").hover(function () {
        $(".f-gorilla").toggle();
    })
})


let markers = document.querySelectorAll(".marker");
markers.forEach(el => {
    el.addEventListener('mouseover', (e) => {
        document.querySelector(`.hov.${e.target.className.split(' ')[1]}`).classList.add('isMousemoveMarker')
    })
    el.addEventListener('mouseout', (e) => {
        document.querySelector(`.hov.${e.target.className.split(' ')[1]}`).classList.remove('isMousemoveMarker')
    })
})

let dropdownLink = document.getElementsByClassName('dropdownLink')[0];
let dropdown = document.getElementsByClassName('dropdown')[0];
dropdownLink.onclick = () => {
    dropdownLink.classList.toggle('activeDropdownLink');
    dropdown.classList.toggle('activeDropdown');
}