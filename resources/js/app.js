require('./bootstrap');

// ----------------------------------- VARIABLES --------------------------------------------------------

// { VIEW: employer-home }
let offerDescription = document.getElementById('offer-description');


// ----------------------------------- LISTNERS --------------------------------------------------------

// { VIEW: employer-home }
offerDescription.addEventListener("scroll", (e) => blurDev(e));


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
