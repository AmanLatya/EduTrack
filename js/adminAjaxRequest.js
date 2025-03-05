// ---------------------------------Start Admin Login Code--------------------------------
$('#AdminLoginBtn').click(function () {
    // Get email and password values from the form
    let AdminLoginEmail = $('#AdminLoginEmail').val();
    let AdminPassword = $('#AdminPassword').val();

    let AdminLoginFailedMsg = $('#AdminLoginFailedMsg');
    let AdminLoginSuccessMsg = $('#AdminLoginSuccessMsg');

    $.ajax({
        url: 'Admin/GetAdminLogin.php',
        method: "POST",
        data: {
            checkAdminLogin: "checkAdminLogin",
            AdminLoginEmail: AdminLoginEmail,
            AdminPassword: AdminPassword,
        },

        success: function (response) {
            console.log("row", response);
            if (response == 1) {
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
                        window.location.href = "./Admin"; // Change URL if needed
                        // window.location.href = "/EduTrack/Dashboards/AdminDashBoard.php"; // Change URL if needed
                    });
                }, 1200); // 2 seconds
            }
            else {
                AdminLoginFailedMsg.text("Invalid Email or Password").fadeIn();
            }
        }
    })

    // // Predefined stored email and password for comparison
    // let storedEmail = "aman101024@gmail.com";
    // let storedPass = "20feb2024";

    // // Select the success and failure message elements
    // let AdminLoginSuccessMsg = $('#AdminLoginSuccessMsg');
    // let AdminLoginFailedMsg = $('#AdminLoginFailedMsg');

    // // Log the values for debugging
    // console.log("Admin Login Email:", AdminLoginEmail);
    // console.log("Admin Password:", AdminPassword);
    // console.log("Stored Email:", storedEmail);
    // console.log("Stored Password:", storedPass);

    // // Check if the entered credentials match the stored ones
    // if (AdminLoginEmail === storedEmail && AdminPassword === storedPass) {
    //     // Show success message
    //     AdminLoginSuccessMsg.text("Login Success").fadeIn();

    //     // Append loading screen to body
    //     $("body").append(`
    //         <div id="loading-screen" class="loading-overlay">
    //             <div class="spinner-border text-primary" role="status">
    //                 <span class="visually-hidden">Loading...</span>
    //             </div>
    //             <p>Redirecting...</p>
    //         </div>
    //     `);

    //     // Wait for 2 seconds before redirecting
    //     setTimeout(function () {
    //         // Hide the loading screen and redirect to the dashboard
    //         $("#loading-screen").fadeOut("slow", function () {
    //             window.location.href = "/EduTrack/Dashboards/AdminDashBoard.php"; // Change URL if needed
    //         });
    //     }, 2000); // 2 seconds
    // } else {
    //     // Show failed login message
    //     AdminLoginFailedMsg.text("Login Failed ❌").fadeIn();
    // }



});
;


// ---------------------------------Start Admin Login Code--------------------------------


// -----------------x---------------------x-------------------x---------------------x----------------------x---------------------


// ---------------------------------Start Add Course Code--------------------------------

// $('#add-course').click(function () {
//     let courseName = $('#courseName');
//     let courseDescription = $('#courseDescription');
//     let author = $('#author');
//     let courseDuration = $('#courseDuration');
//     let originalPrice = $('#originalPrice');
//     let sellingprice = $('#sellingprice');
//     let courseImage = $('#courseImage');


//     let courseNameMsg = $('#courseNameMsg');
//     let courseDescMsg = $('#courseDescMsg');
//     let courseAuthorMsg = $('#courseAuthorMsg');
//     let courseDurationMsg = $('#courseDurationMsg');
//     let courseOriginalPriceMsg = $('#courseOriginalPriceMsg');
//     let courseSellingPriceMsg = $('#courseSellingPriceMsg');
//     let courseImageMsg = $('#courseImageMsg');

//     // Function to hide error messages when input is filled
//     function hideErrorOnInput(inputField, errorMsg) {
//         inputField.on("input", function () {
//             if (inputField.val().trim() !== "") {
//                 errorMsg.hide();
//             }
//         });
//     }

//     // Apply function to all input fields
//     hideErrorOnInput(courseName, courseNameMsg);
//     hideErrorOnInput(courseDescription, courseDescMsg);
//     hideErrorOnInput(author, courseAuthorMsg);
//     hideErrorOnInput(courseDuration, courseDurationMsg);
//     hideErrorOnInput(originalPrice, courseOriginalPriceMsg);
//     hideErrorOnInput(sellingprice, courseSellingPriceMsg);
//     hideErrorOnInput(courseImage, courseImageMsg);


//     // Validate all fields
//     if (!courseName.val().trim()) {
//         courseNameMsg.text('Please Enter Name!').show();
//         courseName.focus();
//         return false;
//     } else if (!courseDescription.val().trim()) {
//         courseDescMsg.text('Please Enter Email!').show();
//         courseDescription.focus();
//         return false;
//     } else if (!author.val().trim()) {
//         courseAuthorMsg.text('Please Enter Gaurdian Email!').show();
//         author.focus();
//         return false;
//     } else if (!courseDuration.val().trim()) {
//         courseDurationMsg.text('Password Can\'t be empty!').show();
//         courseDuration.focus();
//         return false;
//     } else if (!originalPrice.val().trim()) {
//         courseOriginalPriceMsg.text('Confirm Password Can\'t be empty!').show();
//         originalPrice.focus();
//         return false;
//     } else if (!sellingprice.val().trim()) {
//         courseSellingPriceMsg.text('Confirm Password Can\'t be empty!').show();
//         sellingprice.focus();
//         return false;
//     } else if (!courseImage.val().trim()) {
//         courseImageMsg.text('Confirm Password Can\'t be empty!').show();
//         courseImage.focus();
//         return false;
//     }

//     else{
//         $.ajax({
//             url: 'PostData/addCourse.php',
//             method: 'POST',
//             data:{
//                 addCourse: "addCourse",
//                 courseName: courseName.val(),
//                 courseDescription: courseDescription.val(),
//                 author: author.val(),
//                 courseDuration: courseDuration.val(),
//                 originalPrice: originalPrice.val(),
//                 sellingprice: sellingprice.val(),
//                 courseImage: courseImage.val(),
//             },
//             success :function(response){
//                 console.log("response" ,response);
//             }
//         })
//     }

// })

// ---------------------------------End Add Course Code--------------------------------