

var inputSearch = document.getElementById("search")
var blockSearch = document.querySelector(".search")

inputSearch.addEventListener("click", () => {
    blockSearch.classList.toggle("show")
})

var inputSearchMobile = document.getElementById("search_mobile")
var blockSearchMobile = document.querySelector(".search_mobile")

inputSearchMobile.addEventListener("click", () => {
    blockSearchMobile.classList.toggle("show")
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

// let email = document.getElementById('email_mailling');
// let button = document.getElementById('sub_mail');
// let modal = document.getElementById('send_email_info');
// let modalMessage = modal.querySelector('span');
//
// button.addEventListener('click', function() {
//     let emailValue = email.value;
//
//     fetch("{{ route('mailling') }}", {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify({ email: emailValue })
//     })
//         .then(response => response.json())
//         .then(data => {
//             if (data.message) {
//                 email.style.display = 'none';
//                 button.style.display = 'none';
//
//                 modal.classList.remove('d-none');
//                 modalMessage.textContent = data.message;
//
//                 setTimeout(function() {
//                     modal.classList.add('d-none');
//                     modalMessage.textContent = '';
//                 }, 2000);
//             } else {
//                 modal.classList.remove('d-none');
//                 modalMessage.textContent = data.error;
//
//                 setTimeout(function() {
//                     modal.classList.add('d-none');
//                     modalMessage.textContent = '';
//                 }, 2000);
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error);
//         });
// });
