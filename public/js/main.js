let rentBtn = document.getElementById('rentBtn');
let saleBtn = document.getElementById('saleBtn');

if(rentBtn  && saleBtn){
    rentBtn.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> Аренда';
        saleBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> Продажа';
        let but = document.getElementById('price_type');
        but.setAttribute('value', '1')
        this.classList.add('active');
        saleBtn.classList.remove('active');
    });

    saleBtn.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> Продажа';
        rentBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> Аренда';
        let but = document.getElementById('price_type');
        but.setAttribute('value', '2')
        this.classList.add('active');
        rentBtn.classList.remove('active');
    });
}

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

