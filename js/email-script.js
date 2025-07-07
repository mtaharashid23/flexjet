jQuery.validator.addMethod("checkEmail", function(e, a) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase())
}, " Email is invalid."), jQuery.validator.addMethod("phoneNumber", function(e, a) {
    return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(e)
}, "should contain only number."), $(document).on("submit", "form", function(e) {
    if ($(this).hasClass("no-submit")) return e.preventDefault(), !1
});
$(".contact_form").validate({
    rules: {
        first_name: { required: true },
        last_name: { required: true },
        email: { required: true, email: true },
        phone: { required: true, number: true },
        country: { required: true },
        zip: { required: true },
        fly_private: { required: true },
        program_interest: { required: true },
        question: { required: true }
    },
    submitHandler: function(form) {
        var formData = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "email.php?action=contact",
            data: formData,
            success: function(response) {
                if (response.trim() === 'success') {
                    $('.contact_form').trigger("reset");
                    $("#contact_formResult").removeClass().addClass("alert alert-success").html("Thank you! Your message has been successfully sent").fadeIn().delay(2000).fadeOut();
                } else {
                    $("#contact_formResult").removeClass().addClass("alert alert-danger").html("Something went wrong. Please try again.").fadeIn().delay(2000).fadeOut();
                }
            }
        });

        return false;
    }
});

$("#flightForm").validate({
    rules: {
        firstName: { required: true },
        lastName: { required: true },
        email: { required: true, email: true },
        phone: { required: true },
        flyOften: { required: true },
        currentSolution: { required: true },
        referral: { required: true }
    },
    submitHandler: function (form) {
        // Collect all flight segments
        const flights = [];
        $('#flightsContainer .flight-bar').each(function () {
            const from = $(this).find('input[placeholder="From"]').val();
            const to = $(this).find('input[placeholder="To"]').val();
            const departDate = $(this).find('input[type="date"]').eq(0).val();
            const returnDate = $(this).find('input[type="date"]').eq(1).val() || '';
            const passengers = $(this).find('.passenger-selector span').text();
            flights.push({ from, to, departDate, returnDate, passengers });
        });

        // Collect form data
        const formData = {
            title: $('[name="title"]').val(),
            firstName: $('[name="firstName"]').val(),
            lastName: $('[name="lastName"]').val(),
            email: $('[name="email"]').val(),
            phone: $('[name="phone"]').val(),
            requests: $('[name="requests"]').val(),
            flyOften: $('[name="flyOften"]').val(),
            currentSolution: $('[name="currentSolution"]').val(),
            referral: $('[name="referral"]').val(),
            marketing: $('[name="marketing"]').is(':checked') ? 'Yes' : 'No',
            flights: JSON.stringify(flights)
        };

        $.ajax({
            type: "POST",
            url: "email.php?action=flight",
            data: formData,
            success: function (response) {
                if (response.trim() === "success") {
                    $('#flightForm').trigger("reset");
                    $('#flightsContainer').html('').append(createFlightRow(true));
                    $("#flightFormResult").removeClass().addClass("alert alert-success").html("Thank you! Your request has been submitted.").fadeIn().delay(2000).fadeOut();
                } else {
                    $("#flightFormResult").removeClass().addClass("alert alert-danger").html("An error occurred. Please try again.").fadeIn().delay(2000).fadeOut();
                }
            }
        });

        return false;
    }
});

$(".signup_form").validate({
    rules: {
        email: {
            checkEmail: !0
        }
    },
    submitHandler: function(e) {
        var email = $(e).find("[name='email']").val();
        return $.ajax({
            type: "POST",
            url: "email.php?action=connected",
            data: {
                email: email
            },
            success: function(a) {
                if (a == 'success') {
                    $('.signup_form').trigger("reset");
                    $("#signup_formResult").addClass("alert alert-success").html("Thank you! Your message has been successfully sent");
                    $("#signup_formResult").fadeIn();
                    $("#signup_formResult").delay(1500).fadeOut();
                }                
            }
        }), !1
    }
});