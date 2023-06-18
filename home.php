<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css_file/home.css">
    <link rel="stylesheet" href="css_file/basic.css">
</head>

<body class="magicpattern">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 blk">
                <div class="menu-section">
                    <div class="menu-content">
                        <img src="image/img.jpg" alt="Profile Image" class="profile-image">
                        <a href="home.php" class="menu-link">Home</a>
                        <a href="profile.php" class="menu-link">Profile</a>
                        <a href="add_report.php" class="menu-link">Add Report</a>
                        <a href="all_report.php" class="menu-link">All Reports</a>
                        <a href="add_emp.php" class="menu-link">Add Employee</a>
                        <button class="logout-button">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col-md-10">

                <div class="right-section">
                    <!-- ******* Slide Bar ********** -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item  active">
                                <img src="image/news.jpg" class="d-block imgResize" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Breaking News</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="image/news.jpg"" class=" d-block imgResize" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Breaking News</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="image/img.jpg" class="d-block imgResize" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Breaking News</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev but" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next but" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        </button>
                    </div>

                    <!-- ******* Slide Bar ends ********** -->

                    <div class="my-5 bg-warning">
                        <h2>Employee Details</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Manager</td>
                                    <td>john.doe@example.com</td>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>Developer</td>
                                    <td>jane.smith@example.com</td>
                                    <td>9876543210</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>

                    <!-- ****** emp list ********* -->
                    <div class="my-5 bg-warning">
                        <h2>Employee list</h2>
                        <ul class="employee-list">
                            <li>
                                <div class="employee-photo">
                                    <img src="image/img.jpg" alt="Employee 1">
                                </div>
                                <div class="employee-details">
                                    <div class="employee-name">John Doe</div>
                                    <div class="employee-email">john.doe@example.com</div>
                                    <div class="employee-position">Manager</div>
                                </div>
                            </li>
                            <li>
                                <div class="employee-photo">
                                    <img src="image/img.jpg" alt="Employee 2">
                                </div>
                                <div class="employee-details">
                                    <div class="employee-name">Jane Smith</div>
                                    <div class="employee-email">jane.smith@example.com</div>
                                    <div class="employee-position">Developer</div>
                                </div>
                            </li>
                            <!-- Add more employees as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- ******* Slide Bar ********** -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->



    <!-- ******* Slide Bar ********** -->


</body>

</html>