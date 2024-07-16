document.addEventListener("DOMContentLoaded", () => {
    $('#regionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#regionForm').attr('action', action)
    })

    $('#directionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#directionForm').attr('action', action)
    })

    $('#highWayModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#highWayForm').attr('action', action)
    })

    $('#summernote').summernote();

    $('#newModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#newForm').attr('action', action)
    })

    $('#reviewModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#reviewForm').attr('action', action)
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

function deleteImageRow_bd(routeName, type){
    let target = event.target;
    $.ajax({
        url: routeName,
        method: type,
        success: function (data){
            target.parentNode.remove()
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus)
        }
    })
}
