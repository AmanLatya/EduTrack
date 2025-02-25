
document.addEventListener("DOMContentLoaded", function () {
    const viewAllBtn = document.getElementById("ViewAllCourses");

    viewAllBtn.addEventListener("click", function () {
        setTimeout(() => {
            if (viewAllBtn.getAttribute("aria-expanded") === "true") {
                viewAllBtn.textContent = "View Less";
            } else {
                viewAllBtn.textContent = "View All";
            }
        }, 200);
    });
});
