const btnPrev = document.getElementById('prev');
const btnNext = document.getElementById('next');
let clickCounter = 0;
const itemcount = document.querySelectorAll('.home-item').length;
const width = window.innerWidth;
console.log(Math.floor(width / 180));
btnPrev.addEventListener("click", () => {
    const targetElement = document.getElementById("toscroll");
    if (clickCounter != 0 && clickCounter > 0) {
        clickCounter--;
        targetElement.style.transform = `translatex(${
            targetElement.computedStyleMap().get("transform")[0].x.value + 187}px)`;

    }


})


btnNext.addEventListener("click", () => {
    clickCounter++;
    const targetElement = document.getElementById("toscroll");
    const x = Math.floor(width / 180);

    if (itemcount - (x + clickCounter) >= 0) {
        targetElement.style.transform = `translatex(${
            targetElement.computedStyleMap().get("transform")[0].x.value - 187}px)`;
    } else {
        targetElement.style.transform = 'translateX(0)';
        clickCounter = 0;
    }
})