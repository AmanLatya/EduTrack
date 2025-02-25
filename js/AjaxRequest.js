$("#StudentSignUpEmail").on("blur", function () {
    var email = $("#StudentSignUpEmail");
    var mailMsg = $("#mailMsg");
    $.ajax({
        url: "Student/addStudent.php",
        method: "POST",
        data: {  // Make sure the parameters are correct
            checkMail: "CheckMail", // Checking the email existence
            stuEmail: email.val()  // Sending email value
        },
        success: function (checkdata) {
            console.log("Row:", checkdata);  // Debug to see if the data is coming correctly
            if (checkdata != 0) {  // If row count is not 0, it means email exists
                mailMsg.text('Email Already Exist!').show();
                email.focus();
                $("#SignUpSubmitBtn").prop("disabled", true);
                return false;
            }
            else{
                $("#SignUpSubmitBtn").prop("disabled", false);
                $('#mailMsg').html("");
            }
        },
        error: function() {
            console.log("Error in AJAX request");
        }
    });
});


$("#SignUpSubmitBtn").click(function () {
    var name = $("#StudentSignUpName");
    var email = $("#StudentSignUpEmail");
    var alternateEmail = $("#AlternateEmail");
    var password = $("#StudentSignUpPassword");
    var confirmPassword = $("#StudentCnfPassword");

    var nameMsg = $("#nameMsg");
    var mailMsg = $("#mailMsg");
    var alterMailMsg = $("#alterMailMsg");
    var passMsg = $("#passMsg");
    var cnfPassMsg = $("#cnfPassMsg");

    // Validate email format
    // var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

    // Function to hide error messages when input is filled
    function hideErrorOnInput(inputField, errorMsg) {
        inputField.on("input", function () {
            if (inputField.val().trim() !== "") {
                errorMsg.hide();
            }
        });
    }

    // Apply function to all input fields
    hideErrorOnInput(name, nameMsg);
    hideErrorOnInput(email, mailMsg);
    hideErrorOnInput(alternateEmail, alterMailMsg);
    hideErrorOnInput(password, passMsg);
    hideErrorOnInput(confirmPassword, cnfPassMsg);

    // Validate all fields
    if (!name.val().trim()) {
        nameMsg.text('Please Enter Name!').show();
        name.focus();
        return false;
    } else if (!email.val().trim()) {
        mailMsg.text('Please Enter Email!').show();
        email.focus();
        return false;
    } else if (!emailPattern.test(alternateEmail.val())) {
        alterMailMsg.text('Please Enter Alternate Email!').show();
        alternateEmail.focus();
        return false;
    } else if (!password.val()) {
        passMsg.text('Password Can\'t be empty!').show();
        password.focus();
        return false;
    } else if (!confirmPassword.val()) {
        cnfPassMsg.text('Confirm Password Can\'t be empty!').show();
        confirmPassword.focus();
        return false;
    } else if (!emailPattern.test(email.val())) {
        mailMsg.text('Please Enter a Valid Email!').show();
        email.focus();
        return false;
    }

    // Check Email match
    if (email.val() === alternateEmail.val()) {
        alterMailMsg.text('Email must be different!').show();
        alternateEmail.focus();
        return false;
    }

    // Validate password length
    if (password.val().length < 6) {
        passMsg.text('Password length must be at least 6 characters').show();
        password.focus();
        return false;
    }

    // Check if passwords match
    if (password.val() !== confirmPassword.val()) {
        cnfPassMsg.text('Passwords do not match!').show();
        confirmPassword.focus();
        return false;
    } else {
        // Send AJAX request
        $.ajax({
            url: 'Student/addStudent.php',
            method: 'POST',
            data: {
                stuSignUp: "SignUp",
                stuName: name.val(),
                stuEmail: email.val(),
                AltEmail: alternateEmail.val(),
                stuPass: password.val()
            },
            // success: function(response) {
            //     console.log("Server Response:", response);
            // }
        });
    }

    // Disable button to prevent multiple clicks
    $("#SignUpSubmitBtn").prop("disabled", true);
    $("#successMsg").text("Registration Successful");
    $('#nameMsg').html("");
    $('#mailMsg').html("");
    $('#alterMailMsg').html("");
    $('#passMsg').html("");
    $('#cnfPassMsg').html("");
    $("#SignUpForm").trigger("reset");
});
