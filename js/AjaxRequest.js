$("#StudentSignUpEmail").on("blur", function () {
    var email = $("#StudentSignUpEmail");
    var mailMsg = $("#mailMsg");
    $.ajax({
        url: "Student/GetStudentSignUp.php",
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
            else {
                $("#SignUpSubmitBtn").prop("disabled", false);
                $('#mailMsg').html("");
            }
        },
        error: function () {
            console.log("Error in AJAX request");
        }
    });
});

// ---------------------Start Student SignUp Code---------------------------------
$("#SignUpSubmitBtn").click(function () {
    var name = $("#StudentSignUpName");
    var email = $("#StudentSignUpEmail");
    var gaurdianEmail = $("#GaurdianEmail");
    var password = $("#StudentSignUpPassword");
    var confirmPassword = $("#StudentCnfPassword");

    var nameMsg = $("#nameMsg");
    var mailMsg = $("#mailMsg");
    var gaurdianMailMsg = $("#gaurdianMailMsg");
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
    hideErrorOnInput(gaurdianEmail, gaurdianMailMsg);
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
    } else if (!emailPattern.test(email.val())) {
        mailMsg.text('Please Enter a Valid Email!').show();
        email.focus();
        return false;
    }
    else if (!gaurdianEmail.val().trim()) {
        gaurdianMailMsg.text('Please Enter Gaurdian Email!').show();
        gaurdianEmail.focus();
        return false;
    }
    else if (!emailPattern.test(gaurdianEmail.val())) {
        gaurdianMailMsg.text('Please Enter Valid Email!').show();
        gaurdianEmail.focus();
        return false;
    } else if (!password.val()) {
        passMsg.text('Password Can\'t be empty!').show();
        password.focus();
        return false;
    } else if (!confirmPassword.val()) {
        cnfPassMsg.text('Confirm Password Can\'t be empty!').show();
        confirmPassword.focus();
        return false;
    }

    // Check Email match
    else if (email.val() === gaurdianEmail.val()) {
        gaurdianMailMsg.text('Email must be different!').show();
        gaurdianEmail.focus();
        return false;
    }

    // Validate password length
    else if (password.val().length < 6) {
        passMsg.text('Password length must be at least 6 characters').show();
        password.focus();
        return false;
    }

    // Check if passwords match
    else if (password.val() !== confirmPassword.val()) {
        cnfPassMsg.text('Passwords do not match!').show();
        confirmPassword.focus();
        return false;
    } else {
        // Send AJAX request
        $.ajax({
            url: 'Student/GetStudentSignUp.php',
            method: 'POST',
            data: {
                stuSignUp: "SignUp",
                stuName: name.val(),
                stuEmail: email.val(),
                AltEmail: gaurdianEmail.val(),
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
    $('#gaurdianMailMsg').html("");
    $('#passMsg').html("");
    $('#cnfPassMsg').html("");
    $("#SignUpForm").trigger("reset");
});


// ---------------------------------End Student SignUp Code--------------------------------

// ----------x------------------------x--------------------------x--------------------------x-------------------------x--------------------

// ---------------------------------Start Student Login Code--------------------------------


$("#StudentLoginBtn").click(function () {
    let stuLoginEmail = $('#StudentLoginEmail').val();
    let stuLoginPass = $('#StudentLoginPassword').val();

    let StudentLoginFailedMsg = $('#StudentLoginFailedMsg');
    let StudentLoginSuccessMsg = $('#StudentLoginSuccessMsg');

    $.ajax({
        url: "Student/GetStudentLogin.php",
        method: "POST",
        data: {
            checkLogin: "checkLogin",
            stuLoginEmail: stuLoginEmail,
            stuLoginPass: stuLoginPass
        },
        success: function (response) {
            console.log("Row", response);

            if (response == 1) {
                // Show success message
                $("#StudentLoginSuccessMsg").text("Login Success").fadeIn();

                // Show a loading screen for 2 seconds
                $("body").append(`
                    <div id="loading-screen" class="loading-overlay">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                        <p>Redirecting...</p>
                    </div>
                `);

                setTimeout(function () {
                    // Remove loading screen and navigate to dashboard
                    $("#loading-screen").fadeOut("slow", function () {
                        window.location.href = "/EduTrack/Dashboards/StudentDashBoard.php"; // Change URL as needed
                    });
                }, 550);
            } else {
                $("#StudentLoginFailedMsg").text("Login Failed").fadeIn();
            }
        }

    })
})


// ---------------------------------End Student Login Code--------------------------------


// ------x----------------x--------------------x--------------------x-------------------x------------------


// ---------------------------------Start Admin Login Code--------------------------------
$('#AdminLoginBtn').click(function () {
    // Get email and password values from the form
    let AdminLoginEmail = $('#AdminLoginEmail').val();
    let AdminPassword = $('#AdminPassword').val();

    // Predefined stored email and password for comparison
    let storedEmail = "aman101024@gmail.com";
    let storedPass = "20feb2024";

    // Select the success and failure message elements
    let AdminLoginSuccessMsg = $('#AdminLoginSuccessMsg');
    let AdminLoginFailedMsg = $('#AdminLoginFailedMsg');

    // Log the values for debugging
    console.log("Admin Login Email:", AdminLoginEmail);
    console.log("Admin Password:", AdminPassword);
    console.log("Stored Email:", storedEmail);
    console.log("Stored Password:", storedPass);

    // Check if the entered credentials match the stored ones
    if (AdminLoginEmail === storedEmail && AdminPassword === storedPass) {
        // Show success message
        AdminLoginSuccessMsg.text("Login Success").fadeIn();

        // Append loading screen to body
        $("body").append(`
            <div id="loading-screen" class="loading-overlay">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p>Redirecting...</p>
            </div>
        `);

        // Wait for 2 seconds before redirecting
        setTimeout(function () {
            // Hide the loading screen and redirect to the dashboard
            $("#loading-screen").fadeOut("slow", function () {
                window.location.href = "/EduTrack/Dashboards/AdminDashBoard.php"; // Change URL if needed
            });
        }, 2000); // 2 seconds
    } else {
        // Show failed login message
        AdminLoginFailedMsg.text("Login Failed ❌").fadeIn();
    }
});
;


// ---------------------------------Start Admin Login Code--------------------------------
