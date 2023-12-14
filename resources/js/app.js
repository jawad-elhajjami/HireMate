require('./bootstrap');

// ----------------------------------- VARUABLES --------------------------------------------------------

// { VIEW: employer-home }
let offerDescription = document.getElementById('offer-description');
let icLike = document.querySelectorAll('.ic-heart');

// ----------------------------------- LISTNERS --------------------------------------------------------

// { VIEW: employer-home }
offerDescription.addEventListener("scroll", (e) => blurDev(e));
icLike.forEach(e => e.addEventListener("click", (e) => likeOffer(e)));


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