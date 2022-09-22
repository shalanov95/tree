// вывод модальных окон
let addModal = document.getElementById("addModal");
let updModal = document.getElementById("updModal");
let delModal = document.getElementById("delModal");

let addBtn = document.getElementById("addBtn");
let updBtn = document.getElementById("updBtn");
let delBtn = document.getElementById("delBtn");

let span = document.getElementsByClassName("close");

addBtn.onclick = function() {
    addModal.style.display = "block";
}
updBtn.onclick = function() {
    updModal.style.display = "block";
}
delBtn.onclick = function() {
    delModal.style.display = "block";
}
//Для кнопок закрытия
span[0].onclick =  function() { Close() };
span[1].onclick = function() { Close() };
span[2].onclick = function() { Close() };

function Close() {

    if (addModal.style.display == "block") {
        addModal.style.display = "none";
    }
    if (updModal.style.display == "block") {
        updModal.style.display = "none";
    }
    if (delModal.style.display == "block"){
        delModal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == addModal) {
        addModal.style.display = "none";
    }
    if (event.target == updModal) {
        updModal.style.display = "none";
    }
    if (event.target == delModal) {
        delModal.style.display = "none";
    }
}
// Вывод древа
for (let li of tree.querySelectorAll('li')) {
    let span = document.createElement('span');
    span.classList.add('hide');
    li.prepend(span);
    span.append(span.nextSibling);
}

tree.onclick = function(event){
    if(event.target.tagName != "SPAN") return;
    let childContainer = event.target.parentNode.querySelector('ul'); 
    if(!childContainer) return;
    childContainer.hidden = !childContainer.hidden;

    if(childContainer.hidden){
        event.target.classList.add('text-blue');
        event.target.classList.remove('text-black');
    } else {
        event.target.classList.add('text-blue');
        event.target.classList.remove('text-black');
    }
}