// Burger

let burgerMenu = document.getElementsByClassName("burger_menu")[0];
let menu = document.getElementsByClassName('menu')[0];

burgerMenu.onclick = () => {
    burgerMenu.classList.toggle('active_burger');
    menu.classList.toggle("activeMenu");
}

// Accordion

let accordionButton = document.getElementsByClassName("accordionButton");
let accordionContainer = document.getElementsByClassName("accordionContainer");
let accordionRow = document.getElementsByClassName("accordionRow");


for(let i = 0; i < accordionButton.length; i++){
    accordionButton[i].onclick = () => {
        accordionContainer[i].classList.toggle("activeAccordionContainer");
        accordionRow[i].classList.toggle("activeAccordionRow");
        accordionButton[i].classList.toggle('activeAccordionButton');
        let accord = accordionContainer[i];
        if(accord.style.maxHeight){
            accord.style.maxHeight = null;
        }
        else{
            accord.style.maxHeight = accord.scrollHeight + "px";
        }
    }
}


// Donation form button

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
