document.addEventListener("DOMContentLoaded", () => {
    $('#regionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#regionForm').attr('action', action)
    })

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function deleteRow_bd(routeName, type){
    let target = event.target;
    $.ajax({
        url: routeName,
        method: type,
        success: function (data){
            target.parentNode.parentNode.remove()
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus)
        }
    })
}
