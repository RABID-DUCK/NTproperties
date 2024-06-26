let rentBtn = document.getElementById('rentBtn');
let saleBtn = document.getElementById('saleBtn');

rentBtn.addEventListener('click', function() {
    this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> Аренда';
    saleBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> Продажа';
    this.classList.add('active');
    saleBtn.classList.remove('active');
});

saleBtn.addEventListener('click', function() {
    this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> Продажа';
    rentBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> Аренда';
    this.classList.add('active');
    rentBtn.classList.remove('active');
});
