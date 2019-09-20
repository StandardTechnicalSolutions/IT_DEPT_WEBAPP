const input = document.querySelector("input");
const p = document.querySelector("p.description");
const button = document.querySelector("#submitInput");
const bodyElement = document.querySelector("body");
const divList = document.querySelector(".list");
const toggleButton = document.querySelector("#toggleList");
const addItemInput = document.querySelector("input.addItemInput");
const addItemButton = document.querySelector("button.addItemButton");
const divListChildNodes = divList.innerHTML;

const divListUl = document.querySelector(".list ul");
let listItems = document.getElementsByTagName("li");


//listItems = Array.from(listItems);



//for (let i = 0; i < listItems.length; i++){
//  listItems[i].addEventListener("mouseover", () => {
//      listItems[i].textContent = listItems[i].textContent.toUpperCase();                 
//  })
//  
//  listItems[i].addEventListener("mouseout", () => {
//     listItems[i].textContent = listItems[i].textContent.toLowerCase();                           
//  })
//}



divListUl.addEventListener("click",  (event) => {
  if (event.target.elementName == "BUTTON" && event.target.className == "button_up"){
    const parent = event.target.parentNode;
    const grandParentElement = parent.parentNode;
    console.log(grandParentElement);
    if (parent.previousElementSibling != null){
      const parentsSibling = parent.previousElementSibling;
      grandParentElement.insertBefore(parentsSibling, event.target);
    }
  }
});


let toggleSwitch = false;

button.addEventListener("click", () => {
   p.innerHTML = `${input.value}:`;
  const newHeading = document.createElement("h1");
  newHeading.textContent = "Hello how are you today !?";
  bodyElement.appendChild(newHeading);
})

toggleButton.addEventListener("click", () => {
    if (!toggleSwitch){
      divList.style.display = "none";
  } else {
      divList.style.display = "block";
      divList.innerHTML = divListChildNodes;
  }
  toggleSwitch = !toggleSwitch;
});

p.title = "List Description";


addItemButton.addEventListener("click", () => {
  let li = document.createElement("li");
  li.textContent = addItemInput.value;
  const inputItems = divList.removeChild(document.querySelector("#add-Item-Inputs"));
  divListUl.appendChild(li);
  divList.appendChild(inputItems);
  addItemInput.value = "";
})