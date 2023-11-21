
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});



function getWebsiteUrl() {
    return location.protocol + "//" + location.host;
}



// ===================== Alert and confirm Start =====================
function showAlert(type, msg) {
    var alert = `<div class="alert alert-${type} border-0 bg-${type} fade show p-2">
        <div class="text-white px-2">   ${msg}</div>`;
    return alert;
}
// ===================== Alert and confirm End =====================



function setAlertData(alertmsg, alertbox) {
    localStorage.setItem("alertMessage", alertmsg);
    localStorage.setItem("alertBoxId", alertbox);
    localStorage.setItem("alertCount", "0");
}

window.onload = (event) => {
    let alertMessage = localStorage.getItem("alertMessage");
    let alertBoxId = localStorage.getItem("alertBoxId");
    let alertCount = localStorage.getItem("alertCount");

    if (alertMessage != null && alertBoxId != null && alertCount != null) {
        if (alertCount == 0) {
            if (alertMessage != false || alertMessage != "false") {
                round_alert('success', alertMessage)
            }

            if (alertBoxId != false || alertBoxId != "false") {
                let alert_msg = showAlert("success", alertMessage);
                $("#" + alertBoxId).html(alert_msg);
            }

            localStorage.setItem("alertCount", "1");
        } else {
            localStorage.removeItem("alertMessage");
            localStorage.removeItem("alertBoxId");
            localStorage.removeItem("alertCount");
        }
    }
};


function show_modal(id) {
    $("#" + id).modal("show");
}
function hide_modal(id) {
    $("#" + id).modal("hide");
}


function uploadData1(formid, route, alertBox, btnBox, event) {
    event.preventDefault();

    var form = document.getElementById(formid);
    var formData = new FormData(form); // get form data



    var btn_box_html = $("#" + btnBox).html(); // get button box html
    $("#" + btnBox).html(`<span class="spinner-border spinner-border-sm"></span>`); // set button box html in processing state

    $("#" + alertBox).html(""); // remove html of alert box
    $("#" + formid + " [class*='is-invalid']").removeClass("is-invalid"); // remove invalid class from all form fields
    $.ajax({
        type: "post",
        url: route,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {

            console.log(response)

            $("#" + btnBox).html(btn_box_html); // reset button box html
            if (response["status"] == false) {

                // throwable errors 
                if (response['errors_type'] != '' && response['errors_type'] != undefined) {
                    let th_error = response['errors']['errorInfo']
                    let alert_msg = showAlert("danger",  th_error[2]);
                    $("#" + alertBox).html(alert_msg);
                    danger_noti(th_error[2])
                } else {
                    let alert_msg = showAlert("danger",  response["message"]);
                    $("#" + alertBox).html(alert_msg);
                    danger_noti(response["message"]);
                    let errors_key = Object.keys(response["errors"]);
                    for (var i = 0; i < errors_key.length; i++) {
                        let errors_msg = response["errors"][errors_key[i]];
                        let formField = $(
                            "#" + formid + " [name='" + errors_key[i] + "']"
                        );
                        formField.addClass("is-invalid");
                        let form_feedback = $(
                            "#" +
                            formid +
                            " .form-feedback[data-name='" +
                            errors_key[i] +
                            "']"
                        );
                        form_feedback.html(errors_msg[0]);
                    }
                }

            } else {
                setAlertData(response["message"], alertBox);

                $("#" + formid + " [class*='is-invalid']").removeClass(
                    "is-invalid"
                );
                form.reset();
                window.location.reload();
            }
        },
    });
}
function uploadData2(formid, route, alertBox, btnBox, event) {
    event.preventDefault();


    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    var form = document.getElementById(formid);
    var formData = new FormData(form); // get form data



    var btn_box_html = $("#" + btnBox).html(); // get button box html
    $("#" + btnBox).html(`<span class="spinner-border spinner-border-sm"></span>`); // set button box html in processing state

    $("#" + alertBox).html(""); // remove html of alert box
    $("#" + formid + " [class*='is-invalid']").removeClass("is-invalid"); // remove invalid class from all form fields
    $.ajax({
        type: "post",
        url: route,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {

            console.log(response)

            $("#" + btnBox).html(btn_box_html); // reset button box html
            if (response["status"] == false) {

                // throwable errors 
                if (response['errors_type'] != '' && response['errors_type'] != undefined) {
                    let th_error = response['errors']['errorInfo']
                    let alert_msg = showAlert("danger",  th_error[2]);
                    $("#" + alertBox).html(alert_msg);
                    danger_noti(th_error[2])
                } else {
                    let alert_msg = showAlert("danger",   response["message"]);
                    $("#" + alertBox).html(alert_msg);
                    danger_noti(response["message"]);
                    let errors_key = Object.keys(response["errors"]);
                    for (var i = 0; i < errors_key.length; i++) {
                        let errors_msg = response["errors"][errors_key[i]];
                        let formField = $(
                            "#" + formid + " [name='" + errors_key[i] + "']"
                        );
                        formField.addClass("is-invalid");
                        let form_feedback = $(
                            "#" +
                            formid +
                            " .form-feedback[data-name='" +
                            errors_key[i] +
                            "']"
                        );
                        form_feedback.html(errors_msg[0]);
                    }
                }

            } else {
                setAlertData(response["message"], alertBox);

                $("#" + formid + " [class*='is-invalid']").removeClass(
                    "is-invalid"
                );
                form.reset();
                window.location.reload();
            }
        },
    });
}

// user login started
// user login started
// user login started


function userLogin(formid, route, alertBox, btn, event) {
    event.preventDefault();

    var form = document.getElementById(formid);
    var formData = new FormData(form); // get form data

    var btn_box_html = $("#" + btn).html(); // get button box html
    $("#" + btn).html(`<span
    class="spinner-border spinner-border-sm"></span>
     `); // set button box html in processing state

    $("#" + alertBox).html(""); // remove html of alert box
    $("#" + formid + " [class*='is-invalid']").removeClass("is-invalid"); // remove invalid class from all form fields
    $.ajax({
        type: "post",
        url: route,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {

            $("#" + btn).html(btn_box_html); // reset button box html
            if (response["status"] == false) {

                let alert_msg = showAlert("danger", response["message"]);
                $("#" + alertBox).html(alert_msg);

                let errors_key = Object.keys(response["errors"]);
                for (var i = 0; i < errors_key.length; i++) {
                    let errors_msg = response["errors"][errors_key[i]];
                    let formField = $(
                        "#" + formid + " [name='" + errors_key[i] + "']"
                    );
                    formField.addClass("is-invalid");
                    let form_feedback = $(
                        "#" +
                        formid +
                        " .form-feedback[data-name='" +
                        errors_key[i] +
                        "']"
                    );
                    form_feedback.html(errors_msg[0]);
                }
            } else {

                show_modal('otp-modal')
                hide_modal('login-modal')


                $("#" + alertBox).html(
                    showAlert("success", response["message"])
                );
                $("#" + formid + " [class*='is-invalid']").removeClass(
                    "is-invalid"
                );
                form.reset();

                if (response['redirect'] != '0') {
                    window.location.href = response['redirect']
                }
            }
        },
    });
}


function sendPassResetOtp(formid, route, alertBox, btn, event) {
    event.preventDefault();

    var form = document.getElementById(formid);
    var formData = new FormData(form); // get form data

    var btn_box_html = $("#" + btn).html(); // get button box html
    $("#" + btn).html(`<span
    class="spinner-border spinner-border-sm"></span>
     `); // set button box html in processing state

    $("#" + alertBox).html(""); // remove html of alert box
    $("#" + formid + " [class*='is-invalid']").removeClass("is-invalid"); // remove invalid class from all form fields
    $.ajax({
        type: "post",
        url: route,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {

            $("#" + btn).html(btn_box_html); // reset button box html
            if (response["status"] === true) {
                $('#send-reset-password-form-box').addClass('hide')
                $('#otp-password-form-box').removeClass('hide')

                $("#" + alertBox).html(
                    showAlert("success", response["message"])
                );

                form.reset();
            } else {
                let alert_msg = showAlert("danger", response["message"]);
                $("#" + alertBox).html(alert_msg);

            }
        },
    });
}


function VerifyPassResetOtp(formid, route, alertBox, btn, event) {
    event.preventDefault();

    var form = document.getElementById(formid);
    var formData = new FormData(form); // get form data

    var btn_box_html = $("#" + btn).html(); // get button box html
    $("#" + btn).html(`<span
    class="spinner-border spinner-border-sm"></span>
     `); // set button box html in processing state

    $("#" + alertBox).html(""); // remove html of alert box
    $("#" + formid + " [class*='is-invalid']").removeClass("is-invalid"); // remove invalid class from all form fields
    $.ajax({
        type: "post",
        url: route,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {

            $("#" + btn).html(btn_box_html); // reset button box html
            if (response["status"] === true) {
                $('#otp-password-form-box').addClass('hide')
                $('#new-password-form-box').removeClass('hide')

                $("#" + alertBox).html(
                    showAlert("success", response["message"])
                );

                form.reset();
            } else {
                let alert_msg = showAlert("danger", response["message"]);
                $("#" + alertBox).html(alert_msg);

            }
        },
    });
}


function resendVerificationEmail() {
    $('#resend-form-box').removeClass('hide')
    $('#login-form-box').addClass('hide')

    document.getElementById('login-form').reset();
    document.getElementById('resend-form').reset();
}

function showLoginForm() {
    $('#resend-form-box').addClass('hide')
    $('#login-form-box').removeClass('hide')

    document.getElementById('login-form').reset();
    document.getElementById('resend-form').reset();
}



function setTabToLocalStorage(href, local_storage_variable) {
    localStorage.setItem(local_storage_variable, href);
}

// user login Ended
// user login Ended
// user login Ended