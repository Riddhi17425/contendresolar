$(document).ready(function () {
    console.log("Board Member JS loaded");

    // Initialize DataTable
    var table = $('#boardmemberTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.APP_URLS.getBoardmemberdata,
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
                data: 'designation',
                name: 'designation',
                render: function (data, type, row) {
                    return $('<div>').html(data).text(); // Strip HTML tags
                }
            },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    // Handle Delete boardmember
    $(document).on('click', '.delete_boardmember', function () {
        let id = $(this).data('id');
        let url = window.APP_URLS.deleteboardmember.replace(':id', id);

        if (confirm('Are you sure you want to delete this board member?')) {
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
