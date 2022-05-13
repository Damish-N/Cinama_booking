let currentPossition = 0;
let scrollAmmount = 320;

const sCont = document.querySelector('.movies-container');
const hScroll = document.querySelector('.horizontal-scroll');
const btnSLeft = document.querySelector('#btn-scroll-left');
const btnSRight = document.querySelector('#btn-scroll-right');


btnSLeft.style.opacity = "0";


let maxScroll = -sCont.offsetWidth + hScroll.offsetWidth;

function scrollHorizontal(val) {
    currentPossition += (val * scrollAmmount);
    console.log(maxScroll);
    if (currentPossition > 0) {
        currentPossition = 0;
        btnSLeft.style.opacity = "0";

    } else {
        btnSLeft.style.opacity = "1";
    }
    if (currentPossition <= maxScroll) {
        currentPossition = maxScroll;
        btnSRight.style.opacity = "0";

    } else {
        btnSRight.style.opacity = "1";
    }

    sCont.style.left = currentPossition + "px";
}