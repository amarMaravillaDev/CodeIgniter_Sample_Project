$(document).ready(function() {
    let employeeTable = new DataTable('#employeeTable');
    
    $(".deleteEmployee").on('click', function(event) {
        event.preventDefault();

        let confirmDialog = confirm("Are You Sure You Want to Delete this Record?");

        if(confirmDialog) {
            let employeeID =  $(this).val();

            $.ajax({
                type: "DELETE",
                url: "employee/delete/" + employeeID,
                success: function (response) {
                    alert("Employee Record Deleted Successfully.");

                    window.location.reload();
                }
            });
        }
    });
});