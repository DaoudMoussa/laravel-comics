require('./bootstrap');
console.log(window);

let lastScrollDirectionChange = window.scrollY;
let scrolledDown = true;
let lastScrollY = 0;
document.onscroll = function() {
    const bHeader = document.getElementsByClassName('bottom-header')[0];
    const main = document.getElementsByTagName('main')[0];

    if (window.scrollY > 32) {
        bHeader.classList.add('fixed')
        main.classList.add('header-padding')

    } else {
        bHeader.classList.remove('fixed')
        main.classList.remove('header-padding')
    }

    let scrollDifference = window.scrollY - lastScrollDirectionChange;
    console.log(scrollDifference);
    if (scrollDifference >= 70) {
        bHeader.classList.add('hidden');

    } else if (scrollDifference < -70) {
        bHeader.classList.remove('hidden');
    }

    if (window.scrollY > lastScrollY && !scrolledDown) {
        lastScrollDirectionChange = window.scrollY;
        scrolledDown = true;
    } else if (window.scrollY < lastScrollY && scrolledDown) {
        lastScrollDirectionChange = window.scrollY;
        scrolledDown = false;
    }

    lastScrollY = window.scrollY;
}
