// gets a reference to the mainContent section of 
// the equipment page on the IT-DEPT web page
const mainContent = document.querySelector("#main-content");
// Select the various equipment links
const opScan = document.querySelector("#Scan");
const omr = document.querySelector("#OMR");
const eliteDesk = document.querySelector("#EliteDesk");
const windows10 = document.querySelector("#Windows");

const image = document.createElement("img");

// Add on click event listeners to each of the equipment links
opScan.addEventListener("click", (event) => {
    image.src = "https://www.scantron.com/wp-content/uploads/2018/08/OpScan-6.jpg";
    image.alt = "Scantron Opscan6";
    mainContent.innerHTML = image;
});


omr.addEventListener("click", (event) => {
    image.src ="https://cdn0.capterra-static.com/screenshots/2024562/19424.png";
    image.alt ="Remark Classic OMR";
    mainContent.innerHTML = image;
});

eliteDesk.addEventListener("click", (event) => {
    image.src = "https://images-na.ssl-images-amazon.com/images/I/71J61IOgdJL._SX425_.jpg";
    image.alt = "HP EliteDesk 8080 GL";
    mainContent.innerHTML = image;
});

windows10.addEventListener("click", (event) => {
    image.src = "https://mysoftwarekeys.com/wp-content/uploads/2018/12/Windows-10-Education-Product-Key.jpg";
    image.alt = "Microsoft Windows 10 Education";
    equipmentBox.innerHTML = image;
});