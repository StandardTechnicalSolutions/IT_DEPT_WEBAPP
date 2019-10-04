const hamburgerNavigation = document.querySelector("#item1");
const hamburgerATag = document.querySelector("a[href='#item1']");

const item1 = "item1";
const close = "close";


let showMenu = false;


hamburgerATag.addEventListener("click", (event) => {
    if (!showMenu) {
        hamburgerNavigation.id = close;
        hamburgerATag.href = `#${close}`;
    } else {
        hamburgerNavigation.id = item1;
        hamburgerATag.href = `#${item1}`;
    }

    showMenu = !showMenu;
    console.log(hamburgerNavigation.id);
})

console.log(hamburgerNavigation.id);
console.log(hamburgerNavigation.id);