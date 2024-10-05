$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/save.php",
        success: function (dataResult) {
            if (dataResult.statusCode == 200) {
                $('#addEmployeeModal').modal('hide');
                alert('Data added successfully!');
                location.reload();
            } else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert('Request failed');
        }
    });
});

$(document).on('click', '.update', function (e) {
    var id = $(this).attr("data-id");
    var name = $(this).attr("data-name");
    var email = $(this).attr("data-email");
    var gender = $(this).attr("data-gender");
    var birthday = $(this).attr("data-birthday");
    var phone = $(this).attr("data-phone");
    var aphone = $(this).attr("data-aphone");
    var taluka = $(this).attr("data-taluka");
    var district = $(this).attr("data-district");
    var state = $(this).attr("data-state");
    var aadhaar = $(this).attr("data-aadhaar");
    var address = $(this).attr("data-address");

    $('#id_u').val(id);
    $('#name_u').val(name);
    $('#email_u').val(email);
    $('#gender_u').val(gender);
    $('#birthday_u').val(birthday);
    $('#phone_u').val(phone);
    $('#aphone_u').val(aphone);
    $('#taluka_u').val(taluka);
    $('#district_u').val(district);
    $('#state_u').val(state);
    $('#aadhaar_u').val(aadhaar);
    $('#address_u').val(address);

});

$(document).on('click', '#update', function (e) {
    debugger;
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/save.php",
        success: function (dataResult) {
            if (dataResult.statusCode == 200) {
                $('#editEmployeeModal').modal('hide');
                alert('Data updated successfully!');
                location.reload();
            } else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert('Request failed');
        }
    });
});

$(document).on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $('#id_d').val(id);
});

$(document).on("click", "#delete", function () {
    $.ajax({
        url: "backend/save.php",
        type: "POST",
        cache: false,
        data: {
            type: 3,
            id: $("#id_d").val()
        },
        success: function (dataResult) {
            $('#deleteEmployeeModal').modal('hide');
            $("#" + dataResult).remove();
        },
        error: function (xhr, textStatus, errorThrown) {
            alert('Request failed');
        }
    });
});

$(document).on("click", "#delete_multiple", function () {
    var user = [];
    $(".user_checkbox:checked").each(function () {
        user.push($(this).data('user-id'));
    });
    if (user.length <= 0) {
        alert("Please select records.");
    } else {
        WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if (checked == true) {
            var selected_values = user.join(",");
            console.log(selected_values);
            $.ajax({
                type: "POST",
                url: "backend/save.php",
                cache: false,
                data: {
                    type: 4,
                    id: selected_values
                },
                success: function (response) {
                    var ids = response.split(",");
                    for (var i = 0; i < ids.length; i++) {
                        $("#" + ids[i]).remove();
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert('Request failed');
                }
            });
        }
    }
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
