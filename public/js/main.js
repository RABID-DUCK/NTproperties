let rentBtn = document.getElementById('rentBtn');
let saleBtn = document.getElementById('saleBtn');

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


var displayFlex = document.getElementById("fl");
var displayGrid = document.getElementById("gr");
var list = document.getElementById("list")
displayFlex.addEventListener("click", () =>  {
        list.classList.add("flex")
})
displayGrid.addEventListener("click", () => {
    list.classList.remove("flex")
})

