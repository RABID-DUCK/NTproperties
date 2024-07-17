document.addEventListener("DOMContentLoaded", () => {
    $('#regionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var action = button.data('action');
        var name = button.data('name');
        var engName = button.data('eng-name');
        var modal = $(this);

        modal.find('#regionForm').attr('action', action);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="eng_name"]').val(engName);
    });

    $('#directionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#directionForm').attr('action', action)

        var name = button.data('name');
        var engName = button.data('eng-name');

        modal.find('#directionForm').attr('action', action);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="eng_name"]').val(engName);
    })

    $('#highWayModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var action = button.data('action')
        var modal = $(this)
        modal.find('#highWayForm').attr('action', action)

        var name = button.data('name');
        var engName = button.data('eng-name');

        modal.find('#highWayForm').attr('action', action);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="eng_name"]').val(engName);
    })

    $('#summernote').summernote();
    $('#summernote2').summernote();

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
