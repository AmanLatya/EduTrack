<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Header Gradient Background */
        .header-bg {
            background: linear-gradient(90deg, #6b46c1, #805ad5);
        }
        /* Make the progress button responsive */
        .progress-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 12px;
            font-weight: bold;
            background-color: #6b46c1;
            color: white;
            border-radius: 8px;
        }
        .calendar .class-day {
            background-color: #63b3ed; /* Highlight class days in blue */
            color: white;
        }
        .calendar .day {
            padding: 5px;
            text-align: center;
        }
        /* Ensure the chart container is responsive */
        .chart-container {
            position: relative;
            height: 300px;
        }
    </style>
</head>
<body class="bg-purple-100">
<div class="flex flex-col md:flex-row">
    <!-- Sidebar -->
    <div class="w-full md:w-1/5 bg-white h-auto md:h-screen p-5">
        <div class="flex items-center mb-10">
            <span class="text-xl font-bold text-black-600"><i class="fas fa-graduation-cap"></i> EduTrack</span>
        </div>
        <ul>
            <li class="mb-4">
                <a class="flex items-center text-purple-600" href="#">
                    <i class="fas fa-home mr-3"></i>
                    Home
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-user mr-3"></i>
                    Profile
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-book mr-3"></i>
                    Enrolled Courses
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-tasks mr-3"></i>
                    Assignment
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-question-circle mr-3"></i>
                    Quiz
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Class Schedule
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-cog mr-3"></i>
                    Setting
                </a>
            </li>
            <li>
                <a class="flex items-center text-gray-600" href="#">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Log out
                </a>
            </li>
        </ul>
    </div>
    <!-- Main Content -->
    <div class="w-full md:w-4/5 p-5 md:p-10">
        <!-- Header -->
        <div class="header-bg p-5 rounded-lg mb-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-white">Hello, Robert Fox</h1>
                    <p class="text-purple-200">Welcome back to your dashboard</p>
                </div>
                <div class="flex items-center mt-4 md:mt-0">
                    <input class="p-2 border rounded-lg mr-4" placeholder="Search your course" type="text"/>
                    <i class="fas fa-bell text-purple-200 mr-4"></i>
                    <div class="flex items-center">
                        <img alt="images/Userimag.png" class="rounded-full mr-2" height="40" src="images/Userimag.png" width="40"/>
                        <div>
                            <p class="font-bold text-white">Robert Fox</p>
                            <p class="text-sm text-purple-200">Student ID: 0013</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="flex items-center mb-3">
                    <i class="fas fa-book text-purple-600 text-2xl mr-3"></i>
                    <div>
                        <p class="text-gray-600">Enrolled Courses</p>
                        <p class="text-xl font-bold">12</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="flex items-center mb-3">
                    <i class="fas fa-chalkboard-teacher text-purple-600 text-2xl mr-3"></i>
                    <div>
                        <p class="text-gray-600">Total Class</p>
                        <p class="text-xl font-bold">50</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="flex items-center mb-3">
                    <i class="fas fa-tasks text-purple-600 text-2xl mr-3"></i>
                    <div>
                        <p class="text-gray-600">Assignment</p>
                        <p class="text-xl font-bold">25</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="flex items-center mb-3">
                    <i class="fas fa-question-circle text-purple-600 text-2xl mr-3"></i>
                    <div>
                        <p class="text-gray-600">Quiz</p>
                        <p class="text-xl font-bold">10</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Courses -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
            <div class="col-span-1 lg:col-span-2 bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-5">My Courses</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="flex items-center bg-purple-100 p-5 rounded-lg">
                        <img alt="Graphic Design Course" class="mr-4" height="60" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6BJMREeNSoCi8IQR67XZJliShIpqeUtaJbQ&s" width="60"/>
                        <div>
                            <p class="font-bold">Graphic Design</p>
                            <p class="text-gray-600">Guided by Dr. Ramesh Gupta</p>
                            <button class="bg-purple-600 text-white px-3 py-1 rounded-lg mt-2">Continue</button>
                        </div>
                    </div>
                    <div class="flex items-center bg-purple-100 p-5 rounded-lg">
                        <img alt="Web Development Course" class="mr-4" height="60" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/is_web_development_good_career.jpg" width="60"/>
                        <div>
                            <p class="font-bold">Web Development</p>
                            <p class="text-gray-600">Guided by Dr. Ankit Sharma</p>
                            <button class="bg-purple-600 text-white px-3 py-1 rounded-lg mt-2">Continue</button>
                        </div>
                    </div>
                    <div class="flex items-center bg-purple-100 p-5 rounded-lg">
                        <img alt="Machine Learning Course" class="mr-4" height="60" src="https://mlconf.com/wp-content/uploads/2023/11/ai-ml.png" width="60"/>
                        <div>
                            <p class="font-bold">Machine Learning</p>
                            <p class="text-gray-600">Guided by Prof. Pooja Jain</p>
                            <button class="bg-purple-600 text-white px-3 py-1 rounded-lg mt-2">Continue</button>
                        </div>
                    </div>
                    <div class="flex items-center bg-purple-100 p-5 rounded-lg">
                        <img alt="Data Science Course" class="mr-4" height="60" src="https://www.naukri.com/campus/career-guidance/wp-content/uploads/2023/11/what-is-data-science.jpg" width="60"/>
                        <div>
                            <p class="font-bold">Data Science</p>
                            <p class="text-gray-600">Guided by Dr. Vinod Rai</p>
                            <button class="bg-purple-600 text-white px-3 py-1 rounded-lg mt-2">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-5">Class Schedule</h2>
                <div class="calendar">
                    <p class="text-gray-600 mb-3">January 2024</p>
                    <div class="grid grid-cols-7 gap-2 text-gray-600">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                        <div class="col-span-7 border-t mt-2"></div>
                        <div class="day">1</div>
                        <div class="day class-day">2</div> <!-- Class Day -->
                        <div class="day">3</div>
                        <div class="day">4</div>
                        <div class="day class-day">5</div> <!-- Class Day -->
                        <div class="day">6</div>
                        <div class="day">7</div>
                        <div class="day">8</div>
                        <div class="day class-day">9</div> <!-- Class Day -->
                        <div class="day">10</div>
                        <div class="day">11</div>
                        <div class="day class-day">12</div> <!-- Class Day -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Graph and Notifications -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-5">Progress Graph</h2>
                <div class="chart-container">
                    <canvas id="progress-graph"></canvas>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-5">Recent Notifications</h2>
                <ul class="text-gray-600">
                    <li>Course "Web Development" has been updated</li>
                    <li>Your assignment is due in 3 days</li>
                    <li>Quiz on "JavaScript" scheduled for tomorrow</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('progress-graph').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Graphic Design', 'Web Development', 'Machine Learning', 'Data Science', 'Cloud Computing'],
            datasets: [{
                label: 'Completion (%)',
                data: [70, 85, 60, 90, 75],
                backgroundColor: 'rgba(107, 70, 193, 0.5)',
                borderColor: 'rgba(107, 70, 193, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true }
    });
</script>
</body>
</html>