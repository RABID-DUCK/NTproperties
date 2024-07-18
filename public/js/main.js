

var inputSearch = document.getElementById("search")
var blockSearch = document.querySelector(".search")

inputSearch.addEventListener("click", () => {
    blockSearch.classList.toggle("show")
})



var displayFlex = document.getElementById("fl");
var displayGrid = document.getElementById("gr");
var list = document.getElementById("list")

if (displayFlex){
    displayFlex.addEventListener("click", () =>  {
        list.classList.add("flex")
    })
}

if(displayGrid){
    displayGrid.addEventListener("click", () => {
        list.classList.remove("flex")
    })
}

