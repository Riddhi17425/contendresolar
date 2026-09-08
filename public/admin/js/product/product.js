$(document).ready(function () {
    console.log("Product JS loaded");

    // Initialize DataTable
    var table = $('#productTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.APP_URLS.getProductdata,
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
                data: 'url',
                name: 'url',
                render: function (data, type, row) {
                    return $('<div>').html(data).text(); // Strip HTML tags
                }
            },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    // Handle Delete product
    $(document).on('click', '.delete_product', function () {
        let id = $(this).data('id');
        let url = window.APP_URLS.deleteproduct.replace(':id', id);

        if (confirm('Are you sure you want to delete this product?')) {
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

document.addEventListener('DOMContentLoaded', function () {
    // Generic update function
    function updateSelectedDisplay(container) {
        const checkboxes = container.querySelectorAll('input[type="checkbox"]');
        const display = container.querySelector('.selected-sizes-display span');
        const selected = Array.from(checkboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.value);

        if (selected.length > 0) {
            display.textContent = selected.join(', ');
            display.className = "fw-bold text-primary";
        } else {
            display.textContent = "None";
            display.className = "fw-bold text-muted";
        }
    }

    // Initialize for all groups
    document.querySelectorAll('.size-selection-container').forEach(container => {
        const checkboxes = container.querySelectorAll('input[type="checkbox"]');
        
        // Update when changed
        checkboxes.forEach(cb => {
            cb.addEventListener('change', () => updateSelectedDisplay(container));
        });

        // Initial update
        updateSelectedDisplay(container);
    });

    // Form validation
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function (e) {
            let valid = true;

            form.querySelectorAll('.size-selection-container').forEach(container => {
                const checked = container.querySelectorAll('input[type="checkbox"]:checked');
                
            });

            if (!valid) {
                e.preventDefault();
                // alert("Please select at least one option in all required groups.");
            }
        });
    });
});