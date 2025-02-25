// let viewLess = document.getElementById("viewLess");
// viewLess.style.display = "none";
// document.getElementById("all-courses").addEventListener("click", function () {
//     let viewAll = document.getElementById("viewAll");
//     // let viewLess = document.getElementById("viewLess");

//     if (viewAll.style.display === "none") {
//         viewAll.style.display = "inline";
//         viewLess.style.display = "none";
//     } else {
//         viewAll.style.display = "none";
//         viewLess.style.display = "inline";
//     }
// });

$(document).ready(function () {
    let $toggleCourse = $("#viewAll");

    $toggleCourse.text("View All");

    $toggleCourse.click(function () {
        if ($toggleCourse.text() === "View All") {
            $toggleCourse.text("View Less");
        } else {
            $toggleCourse.text("View All");
        }
    });
});
