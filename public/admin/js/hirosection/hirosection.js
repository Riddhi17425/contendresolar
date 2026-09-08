$(document).ready(function () {
    console.log("HiroSection JS loaded");

    // Initialize DataTable
    var table = $('#hirosectionTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.APP_URLS.getHiroSectiondata,
            type: "GET",
            dataSrc: function (json) {
                console.log("Datatables Response:", json);
                return json.data;
            }
        },
        order: [[0, 'desc']],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            {
                data: 'page_name',
                name: 'page_name',
                
            },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    // Handle Delete Hiro Section
    $(document).on('click', '.delete_hiro', function () {
        let id = $(this).data('id');
        let url = window.APP_URLS.deletehirosection.replace(':id', id);

        if (confirm('Are you sure you want to delete this Hiro Section?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: 'DELETE',
                    _token: window.APP_URLS.csrfToken
                },
                success: function (response) {
                    if (response.result) {
                        showMessage('success', response.message);
                        table.clear().draw();        // clear table
                        table.ajax.reload();         // refetch data

                    } else {
                        table.clear().draw();        // clear table
                        table.ajax.reload();
                        showMessage('warning', response.message);
                    }
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        }
    });

    // Show message
    function showMessage(type, message) {
        let alertBox = $("#message-pop-up");
        alertBox.removeClass('alert-success alert-warning').addClass('alert-' + type).show();
        $("#success-message").html(message);
        setTimeout(() => {
            alertBox.hide();
        }, 3000);
    }
});
