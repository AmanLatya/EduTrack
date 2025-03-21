<!-- Html Head Links -->
<?php

include('./layout/htmlHeadLinks.php');
include('./layout/header.php');

if(isset($_SESSION['is_stuLogin'])){
    echo 1;
}
?>

<!-- End Nav Bar -->

<div class="container-fluid">
    <!-- Header -->
    <div class="header p-3 d-flex justify-content-between align-items-center">
        <div class="text-muted">
            <a class="text-primary" href="#">Dashboard</a> /
            <a class="text-primary" href="#">Courses</a> / Web Development Course
        </div>
        <div class="d-flex align-items-center">
            <i class="fas fa-bell text-muted mr-3"></i>
            <div class="d-flex align-items-center">
                <i class="fas fa-graduation-cap text-dark" style="font-size: 24px;"></i>
                <span class="text-dark ml-2">EduTrack</span>
            </div>
        </div>
    </div>
    <!-- Course Content -->
    <div class="p-4">
        <div class="card shadow">
            <div class="banner">
                <img alt="Web Development Course Banner" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/is_web_development_good_career.jpg" />
                <div class="banner-overlay">
                    <h2 class="text-white">Web Development Course</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex border-bottom pb-3">
                    <a class="tab-link active-tab mr-4" onclick="showTab('description')">Description</a>
                    <a class="tab-link text-muted mr-4" onclick="showTab('course-content')">Course Content</a>
                    <a class="tab-link text-muted mr-4" onclick="showTab('teacher')">Teacher</a>
                    <a class="tab-link text-muted mr-4" onclick="showTab('reviews')">Reviews</a>
                    <a class="tab-link text-muted" onclick="showTab('purchase-course')">Purchase Course</a>
                </div>
                <div class="tab-content" id="description">
                    <h2 class="font-weight-bold mt-4">Course Description</h2>
                    <p class="text-muted">
                        This Web Development Course is designed to take you from a beginner to a professional web developer. You will learn how to build modern, responsive websites and web applications using the latest technologies and best practices.
                    </p>
                    <h2 class="font-weight-bold mt-4">What you will learn</h2>
                    <ul class="list-unstyled text-muted">
                        <li>Understand the basics of HTML, CSS, and JavaScript.</li>
                        <li>Build responsive websites using modern CSS frameworks.</li>
                        <li>Develop dynamic web applications using JavaScript frameworks.</li>
                        <li>Work with backend technologies like Node.js and Express.</li>
                        <li>Understand database management with MongoDB.</li>
                    </ul>
                </div>
                <div class="tab-content d-none" id="course-content">
                    <h2 class="font-weight-bold mt-4">Course Content</h2>
                    <ul class="list-unstyled text-muted">
                        <li>Introduction to Web Development</li>
                        <li>HTML Basics</li>
                        <li>CSS Basics</li>
                        <li>JavaScript Basics</li>
                        <li>Advanced HTML and CSS</li>
                        <li>Responsive Design with Tailwind CSS</li>
                        <li>JavaScript ES6 and Beyond</li>
                        <li>Introduction to React</li>
                        <li>Building Single Page Applications with React</li>
                        <li>State Management with Redux</li>
                        <li>Introduction to Node.js</li>
                        <li>Building RESTful APIs with Express</li>
                        <li>Database Management with MongoDB</li>
                        <li>Authentication and Authorization</li>
                        <li>Deployment and Hosting</li>
                    </ul>
                </div>
                <div class="tab-content d-none" id="teacher">
                    <h2 class="font-weight-bold mt-4">Teacher</h2>
                    <p class="text-muted">
                        Your instructor for this course is John Doe, a seasoned web developer with over 10 years of experience in the industry. John has worked with numerous clients and companies, building high-quality web applications and websites.
                    </p>
                </div>
                <div class="tab-content d-none" id="reviews">
                    <h2 class="font-weight-bold mt-4">Reviews</h2>
                    <p class="text-muted">
                        "This course is amazing! I learned so much and now feel confident in my web development skills." - Jane Smith
                    </p>
                    <p class="text-muted">
                        "The instructor is very knowledgeable and explains concepts clearly. Highly recommend this course!" - Mark Johnson
                    </p>
                </div>
                <div class="tab-content" id="purchase-course">
                    <h2 class="font-weight-bold mt-4">Purchase Course</h2>
                    <div class="bg-light p-4 rounded">
                        <p class="text-muted">
                            <span class="price">$99.99</span>
                            <span class="original-price">$199.99</span>
                            <span class="discount">(50% off)</span>
                        </p>
                        <p class="text-muted">
                            Get lifetime access to this course, including all future updates.
                        </p>
                        <button class="btn btn-primary btn-lg" id="buyCourse">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Footer Courses -->
<?php include('./layout/footer.php') ?>
<!-- End Footer Courses -->
<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>