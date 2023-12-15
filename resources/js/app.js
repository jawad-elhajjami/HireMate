require('./bootstrap');

// ----------------------------------- VARUABLES --------------------------------------------------------

// { VIEW: employer-home }
let offerDescription = document.getElementById('offer-description');
let icLike = document.querySelectorAll('.ic-heart');
let listOffers = document.querySelectorAll('li');
let filtersCard = document.getElementById('filters-card');
let btnFilters = document.getElementById('btn-filters');
let btnCloseFiltersCard = document.getElementById('btn-close-filters-card');
let rangeSalary = document.getElementById('range-salary');
let valueRangeSalary = document.getElementById('value-range-salary');
let rangeExperience = document.getElementById('range-experience');
let valueExperienceSalary = document.getElementById('value-range-experience');

// ----------------------------------- LISTNERS --------------------------------------------------------

// { VIEW: employer-home }
offerDescription.addEventListener("scroll", (e) => blurDev(e));
icLike.forEach(e => e.addEventListener("click", (e) => likeOffer(e)));
listOffers.forEach(element => element.addEventListener("click", (e) => showOfferDetails(e)));
window.addEventListener("scroll", () => fixDetailsSection());
btnFilters.addEventListener("click", () => toggleFiltersCard());
btnCloseFiltersCard.addEventListener("click", () => toggleFiltersCard());
rangeSalary.addEventListener('input', () => valueRangeSalary.innerHTML = "$" + rangeSalary.value + " +");
rangeExperience.addEventListener('input', () => valueExperienceSalary.innerHTML =  rangeExperience.value + "+ years");

// ----------------------------------- FUNCTIONS --------------------------------------------------------

// { VIEW: employer-home }
let blurDev = (e) => {
    scrollPos = offerDescription.scrollTop;
    if (scrollPos == 0) {
        e.target.classList.replace("not-blur-dev", "blur-dev");
    } else if (scrollPos <= 0) {
        e.target.classList.replace("not-blur-dev", "blur-dev");
    } else {
        e.target.classList.replace("blur-dev", "not-blur-dev");
    }
}

// { VIEW: employer-home }
let likeOffer = (e) => {
    e.target.getAttribute('src') == "images/ic-empty-heart.png" ? e.target.src = "images/ic-full-heart.png" : e.target.src = "images/ic-empty-heart.png";
}

// { VIEW: employer-home }
let showOfferDetails = (e) => {
    if (e.target.tagName.toLowerCase() != 'img') {
        listOffers.forEach((element) => {
            element.classList.remove("checked");
        });
        if(e.target.tagName.toLowerCase() === 'li') {
            e.target.classList.add("checked");
        } else if (e.target.parentElement.tagName.toLowerCase() === "li") {
            e.target.parentElement.classList.add("checked");
        } else if (e.target.parentElement.parentElement.tagName.toLowerCase() === "li") {
            e.target.parentElement.parentElement.classList.add("checked");
        } else if (e.target.parentElement.parentElement.parentElement.tagName.toLowerCase() === "li") {
            e.target.parentElement.parentElement.parentElement.classList.add("checked");
        }
    }
}

// { VIEW: employer-home }
let fixDetailsSection = () => {
    // if (window.scrollY >= 656) {
    //     console.log(window.scrollY)
    //     offerDescription.style.position = "absolute";
    //     offerDescription.style.top = "0";
    //     offerDescription.style.bottom = "auto";
    //     offerDescription.style.right = "0";
    //     offerDescription.style.left = "auto";
    // } else if (window.scrollY <= 656) {
    //     offerDescription.style.position = "static";
    // }
}

// { VIEW: employer-home }
let toggleFiltersCard = () => {
    filtersCard.classList.contains("hidden") ? 
    filtersCard.classList.replace("hidden", "block") : 
    filtersCard.classList.replace("block", "hidden");
}